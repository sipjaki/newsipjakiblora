<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

use App\Models\agendapelatihan;
use App\Models\jenjang;
use App\Models\jenjangpendidikan;
use App\Models\kategoripelatihan;
use App\Models\pembinaan;
use App\Models\pesertapelatihan;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class PesertapelatihanController extends Controller
{

// MENU BACKEND DAFTAR SELURUH PESERTA PELATIHAN

public function bepesertapelatihanindex(Request $request)
{
    $perPage = $request->input('perPage', 5);
    $search = $request->input('search');

    // Tambahkan withCount agar setiap agenda membawa jumlah peserta
    $query = agendapelatihan::withCount('pesertapelatihan');

    if ($search) {
        $query->where('namakegiatan', 'LIKE', "%{$search}%")
            ->orWhereHas('kategoripelatihan', function ($q) use ($search) {
                $q->where('kategoripelatihan', 'LIKE', "%{$search}%");
            })
            ->orWhereHas('asosiasimasjaki', function ($q) use ($search) {
                $q->where('namaasosiasi', 'LIKE', "%{$search}%");
            })
            ->orWhereHas('user', function ($q) use ($search) {
                $q->where('name', 'LIKE', "%{$search}%");
            });
    }

    $data = $query->orderBy('created_at', 'desc')->paginate($perPage);

    if ($request->ajax()) {
        return response()->json([
            'html' => view('backend.05_agenda.02_agendapelatihan.partials.table', compact('data'))->render()
        ]);
    }

    return view('backend.05_agenda.02_pesertapelatihan.index', [
        'title' => 'Daftar Peserta Pelatihan',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search
    ]);
}

    public function bepesertapelatihan(Request $request)
    {
            $perPage = $request->input('perPage', 5);
            $search = $request->input('search');

            $query = pesertapelatihan::query();

            if ($search) {
                $query->where('nik', 'LIKE', "%{$search}%")
                    ->orWhere('jeniskelamin', 'LIKE', "%{$search}%")
                    ->orWhere('tanggallahir', 'LIKE', "%{$search}%")
                    ->orWhere('notelepon', 'LIKE', "%{$search}%")
                    ->orWhere('instansi', 'LIKE', "%{$search}%")
                    ->orWhere('sertifikat', 'LIKE', "%{$search}%")
                    ->orWhere('verifikasi', 'LIKE', "%{$search}%")
                    ->orWhere('namalengkap', 'LIKE', "%{$search}%")
        // -------------------------------------------------------------------------------
                    ->orWhereHas('agendapelatihan', function ($q) use ($search) {
                        $q->where('agendapelatihan', 'LIKE', "%{$search}%");
                    })
                    // ->orWhereHas('user', function ($q) use ($search) {
                    //     $q->where('name', 'LIKE', "%{$search}%");
                    // })
                    ;

            }

            $data = $query->paginate($perPage);

            if ($request->ajax()) {
                return response()->json([
                    'html' => view('backend.05_agenda.02_agendapelatihan.partials.table', compact('data'))->render()
                ]);
            }

            return view('backend.05_agenda.02_pesertapelatihan.index', [
                'title' => 'Daftar Peserta Pelatihan',
                'data' => $data,
                'perPage' => $perPage,
                'search' => $search
            ]);
    }

    // TKK DPUPR BLORA SHOW

    public function bepesertapelatihanshow($name)
    {
        // Cari data peserta berdasarkan nama user
        $datapeserta = pesertapelatihan::whereHas('user', function ($query) use ($name) {
            $query->where('name', $name);
        })->first();

        // Ambil data user yang sedang login
        $user = Auth::user();

        return view('backend.05_agenda.02_pesertapelatihan.show', [
            'title' => 'Data Peserta Pelatihan',
            'data' => $datapeserta,
        ]);
    }


        public function bepesertapelatihandelete($id)
        {
        // Cari item berdasarkan judul
            $entry = pesertapelatihan::where('id', $id)->first();

            if ($entry) {
            // Jika ada file header yang terdaftar, hapus dari storage
            // if (Storage::disk('public')->exists($entry->header)) {
                //     Storage::disk('public')->delete($entry->header);
            // }

            // Hapus entri dari database
            $entry->delete();

            // Redirect atau memberi respons sesuai kebutuhan
            return redirect('/bepesertapelatihan')->with('delete', 'Data Berhasil Di Hapus !');

            }

        return redirect()->back()->with('error', 'Item not found');
        }


        public function bepesertapelatihansertifikat(Request $request, $id)
        {
            $perPage = $request->input('perPage', 50);
            $search = $request->input('search');

            // Pastikan agenda pelatihan dengan ID ini ada
            $agendapelatihan = agendapelatihan::findOrFail($id);

            // Ambil user login saat ini
            $user = Auth::user();

            // Ambil peserta yang hanya terkait dengan agenda pelatihan ini dan yang sudah diverifikasi
            $query = pesertapelatihan::where('agendapelatihan_id', $id)
                        ->where('verifikasi', true) // Filter verifikasi = true
                        ->select([
                            'id',
                            'namalengkap',
                            'jeniskelamin',
                            'instansi',
                            'jenjangpendidikan_id',
                            'nik',
                            'tanggallahir',
                            'notelepon',
                            'sertifikat',
                            'verifikasi'
                        ]);

            // Filter pencarian (jika ada)
            if ($search) {
                $query->where(function ($q) use ($search) {
                    $q->where('jeniskelamin', 'LIKE', "%{$search}%")
                      ->orWhere('instansi', 'LIKE', "%{$search}%")
                      ->orWhere('namalengkap', 'LIKE', "%{$search}%");
                });
            }

            $datapesertapelatihan = $query->orderBy('created_at', 'desc')->paginate($perPage);

            // Hitung jumlah peserta pada agenda pelatihan ini

            // Untuk request Ajax (misal filter dinamis via JS)
            if ($request->ajax()) {
                return response()->json([
                    'html' => view('backend.05_agenda.01_agendapelatihan.partials.table', compact('datapesertapelatihan'))->render()
                ]);
            }

            $jumlahPeserta = pesertapelatihan::where('agendapelatihan_id', $id)->count();

            return view('backend.05_agenda.02_pesertapelatihan.01_peserta.peserta', [
                'title' => 'Daftar Peserta Agenda Pelatihan',
                'data' => $agendapelatihan,
                'datapeserta' => $datapesertapelatihan,
                'jumlahpeserta' => $jumlahPeserta,
                'perPage' => $perPage,
                'search' => $search,
                'user' => $user
            ]);
        }


        public function bepesertauploadsertifikat($id)
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    $datapesertapelatihan = pesertapelatihan::where('id', $id)->firstOrFail();
    $jenjangpendidikan = jenjangpendidikan::all();

    $user = Auth::user();

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.05_agenda.02_pesertapelatihan.01_peserta.upload', [
        'data' => $datapesertapelatihan,
        'user' => $user,
        'jenjangpendidikan' => $jenjangpendidikan,
        'title' => 'Upload Sertifikat Pelatihan'
    ]);
}


public function bepesertauploadsertifikatupload(Request $request, $id)
{
    // Validasi input
    $validatedData = $request->validate([
        'namalengkap' => 'required|string|max:255',
        'nik' => 'required|string|max:16',
        'jeniskelamin' => 'required|string',
        'tanggallahir' => 'required|date',
        'notelepon' => 'required|string|max:255',
        'instansi' => 'required|string|max:255',
        'jenjangpendidikan_id' => 'required|string',
        'sertifikat' => 'required|mimes:pdf|max:10240',
    ], [
        'namalengkap.required' => 'Nama Lengkap wajib diisi!',
        'nik.required' => 'NIK wajib diisi!',
        'jeniskelamin.required' => 'Jenis Kelamin wajib dipilih!',
        'tanggallahir.required' => 'Tanggal Lahir wajib diisi!',
        'notelepon.required' => 'Nomor Telepon wajib diisi!',
        'instansi.required' => 'Instansi wajib diisi!',
        'jenjangpendidikan_id.required' => 'Jenjang Pendidikan wajib dipilih!',
        'sertifikat.required' => 'Sertifikat Belum Di Upload!',
    ]);

    $datapesertapelatihan = pesertapelatihan::findOrFail($id);

    if ($request->hasFile('sertifikat')) {
        $file = $request->file('sertifikat');
        $namaFile = time() . '_' . $file->getClientOriginalName();
        $tujuanPath = public_path('04_pembinaan/03_sertifikatpelatihan');

        if (!file_exists($tujuanPath)) {
            mkdir($tujuanPath, 0777, true);
        }

        $file->move($tujuanPath, $namaFile);
        $validatedData['sertifikat'] = '04_pembinaan/03_sertifikatpelatihan/' . $namaFile;
    }

    $datapesertapelatihan->update([
        'namalengkap' => $validatedData['namalengkap'],
        'nik' => $validatedData['nik'],
        'jeniskelamin' => $validatedData['jeniskelamin'],
        'tanggallahir' => $validatedData['tanggallahir'],
        'notelepon' => $validatedData['notelepon'],
        'instansi' => $validatedData['instansi'],
        'jenjangpendidikan_id' => $validatedData['jenjangpendidikan_id'],
        'sertifikat' => $validatedData['sertifikat'] ?? $datapesertapelatihan->sertifikat,
    ]);

    session()->flash('update', 'Sertifikat Berhasil Di Terbitkan !');

    // Arahkan ke halaman daftar peserta dalam agenda pelatihan
    return redirect()->route('bepesertauploadsertifikat.show', ['id' => $datapesertapelatihan->agendapelatihan_id]);

}




// ====================

public function beakseslsppenerbit(Request $request)
{
    $perPage = $request->input('perPage', 5);
    $search = $request->input('search');

    $userId = Auth::id(); // Ambil ID user yang sedang login

    // Tambahkan withCount('pesertapelatihan') untuk menghitung jumlah peserta
    $query = agendapelatihan::withCount('pesertapelatihan')
                ->whereHas('user', function ($q) use ($userId) {
                    $q->where('id', $userId);
                });

    if ($search) {
        $query->where(function ($q) use ($search) {
            $q->where('namakegiatan', 'LIKE', "%{$search}%")
              ->orWhereHas('kategoripelatihan', function ($q) use ($search) {
                  $q->where('kategoripelatihan', 'LIKE', "%{$search}%");
              })
              ->orWhereHas('asosiasimasjaki', function ($q) use ($search) {
                  $q->where('namaasosiasi', 'LIKE', "%{$search}%");
              })
              ->orWhereHas('user', function ($q) use ($search) {
                  $q->where('name', 'LIKE', "%{$search}%");
              });
        });
    }

    $data = $query->orderBy('created_at', 'desc')->paginate($perPage);

    if ($request->ajax()) {
        return response()->json([
            'html' => view('backend.05_agenda.02_pesertapelatihan.02_hakakseslsp.01_agendapelatihan.partials.table', compact('data'))->render()
        ]);
    }

    return view('backend.05_agenda.02_pesertapelatihan.02_hakakseslsp.01_agendapelatihan.index', [
        'title' => 'Daftar Peserta Pelatihan',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search
    ]);
}


// HAK AKSES DAFTAR PESERTA PELATIHAN SESUAI DENGAN AGENDA PELATIHAN YANG TERSEDIA

public function daftarpesertapelatihan($id)
{
    $dataagendapelatihan = agendapelatihan::findOrFail($id); // Cari 1 data sesuai ID
    $datajenjangpendidikan = jenjangpendidikan::orderBy('jenjangpendidikan', 'asc')->get();
    $user = Auth::user();

    return view('frontend.04_pembinaan.01_agendapembinaan.01_daftar.index', [
        'agendapelatihannamakegiatan' => $dataagendapelatihan->namakegiatan, // Ini dikirim ke form
        'agendapelatihan_id' => $dataagendapelatihan->id, // Ini dikirim ke form
        'user' => $user,
        'jenjangpendidikan' => $datajenjangpendidikan,
        'title' => 'Form Daftar Peserta Pelatihan'
    ]);
}


public function daftarpesertapelatihancreatenew(Request $request)
{
    // Validasi input
    $validated = $request->validate([
        'namalengkap' => 'required|string|max:255',
        'nik' => 'required|regex:/^\d{16}$/|size:16',
        'tanggallahir' => 'required|date',
        'notelepon' => 'required|string|max:15',
        'jenjangpendidikan_id' => 'required|string',
        'jeniskelamin' => 'required|string',
        'instansi' => 'required|string|max:255',
        'sertifikat' => 'nullable|mimes:pdf|max:10240',
    ], [
        // Pesan kesalahan custom
            'namalengkap.required' => 'Nama Lengkap harus diisi.',
            'nik.required' => 'NIK harus terdiri dari 16 digit.',
            'nik.regex' => 'NIK harus terdiri dari 16 digit angka.',
            'nik.size' => 'NIK harus terdiri dari tepat 16 digit.',
            'tanggallahir.required' => 'Tanggal Lahir harus diisi.',
            'notelepon.required' => 'Nomor Telepon harus diisi.',
            'jenjangpendidikan_id.required' => 'Jenjang Pendidikan harus dipilih.',
            'jeniskelamin.required' => 'Jenis Kelamin harus dipilih.',
            'instansi.required' => 'Instansi/Universitas/Lembaga/Perseorangan harus diisi.',
            'sertifikat.mimes' => 'File sertifikat harus dalam format PDF.',
            'sertifikat.max' => 'File sertifikat maksimal 10 MB.',
    ]);

    // Menyimpan file sertifikat jika ada
    if ($request->hasFile('sertifikat')) {
        $file = $request->file('sertifikat');
        $namaFile = time() . '_' . $file->getClientOriginalName();
        $tujuanPath = public_path('04_pembinaan/03_sertifikatpelatihan');

        // Membuat folder tujuan jika belum ada
        if (!file_exists($tujuanPath)) {
            mkdir($tujuanPath, 0777, true);
        }

        // Memindahkan file ke folder tujuan
        $file->move($tujuanPath, $namaFile);

        // Menyimpan path file sertifikat
        $sertifikatPath = '04_pembinaan/03_sertifikatpelatihan/' . $namaFile;
    }

    // Menyimpan data ke tabel PesertaPelatihan
    pesertapelatihan::create([
        'agendapelatihan_id' => $request->agendapelatihan_id,
        'namalengkap' => $validated['namalengkap'],
        'nik' => $validated['nik'],
        'tanggallahir' => $validated['tanggallahir'],
        'notelepon' => $validated['notelepon'],
        'jenjangpendidikan_id' => $validated['jenjangpendidikan_id'],
        'jeniskelamin' => $validated['jeniskelamin'],
        'instansi' => $validated['instansi'],
        'sertifikat' => $sertifikatPath ?? null,
    ]);

    // Flash message untuk memberi tahu pengguna bahwa data berhasil disimpan
    session()->flash('daftarpelatihan', 'Formulir Berhasil di Kirim ! Silahkan untuk menunggu verifikasi DPUPR.');

    // Redirect ke route yang sesuai setelah menyimpan data
    return redirect('/daftarpesertapelatihan');
}

}


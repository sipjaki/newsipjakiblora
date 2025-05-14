<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

use App\Models\agendapelatihan;
use App\Models\jampelajaran;
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

// PesertapelatihanController.php
public function bepesertapelatihansertifikat(Request $request, $id)
{
    $perPage = $request->input('perPage', 50);
    $search = $request->input('search');

    $agendapelatihan = agendapelatihan::findOrFail($id);
    $user = Auth::user();

    $query = pesertapelatihan::where('agendapelatihan_id', $id)
        ->where('verifikasi', 'lolos')
        ->select([
            'id', 'namalengkap', 'jeniskelamin', 'instansi', 'jenjangpendidikan_id',
            'nik', 'tanggallahir', 'notelepon', 'sertifikat', 'verifikasi',
            'verifikasikehadiran', 'terbitkansertifikat'
        ]);

    if ($search) {
        $query->where(function ($q) use ($search) {
            $q->where('jeniskelamin', 'LIKE', "%{$search}%")
              ->orWhere('instansi', 'LIKE', "%{$search}%")
              ->orWhere('namalengkap', 'LIKE', "%{$search}%");
        });
    }

    $datapesertapelatihan = $query->orderBy('created_at', 'desc')->paginate($perPage);

    if ($request->ajax()) {
        return response()->json([
            'html' => view('backend.05_agenda.01_agendapelatihan.partials.table', compact('datapesertapelatihan'))->render()
        ]);
    }

    $jumlahPeserta = pesertapelatihan::where('agendapelatihan_id', $id)->count();

    return view('backend.05_agenda.02_pesertapelatihan.01_peserta.peserta', [
        'title' => 'Daftar Peserta Agenda Pelatihan',
        'data' => $agendapelatihan,
        'agendaId' => $agendapelatihan->id,
        'namakegiatan' => $agendapelatihan->namakegiatan,
        'datapeserta' => $datapesertapelatihan,
        'jumlahpeserta' => $jumlahPeserta,
        'perPage' => $perPage,
        'search' => $search,
        'user' => $user
    ]);
}


public function bepesertauploadsertifikat($id)
{
    // Ambil data pesertapelatihan beserta relasi agendapelatihan dan jampelajaran
    $datapesertapelatihan = pesertapelatihan::with('agendapelatihan.jampelajaran')->findOrFail($id);

    // Ambil semua jenjang pendidikan
    $jenjangpendidikan = jenjangpendidikan::all();
    $user = Auth::user();

    // Ambil ID agendapelatihan terkait dengan pesertapelatihan
    $agendapelatihanId = optional($datapesertapelatihan->agendapelatihan)->id;

    // Ambil semua jampelajaran yang terkait dengan agendapelatihan_id
    $datapelajaran = jampelajaran::where('agendapelatihan_id', $agendapelatihanId)->get();

    // Kirim data ke view
    return view('backend.05_agenda.02_pesertapelatihan.01_peserta.uploadbaru', [
        'data' => $datapesertapelatihan,
        'user' => $user,
        'datapelajaran' => $datapelajaran, // Kirim data jampelajaran ke view
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


// public function bepelatihanjampelajaran($id)
// {
//     $dataagendapelatihan = agendapelatihan::findOrFail($id); // Cari 1 data sesuai ID
//     $user = Auth::user();

//     return view('backend.05_agenda.02_pesertapelatihan.03_materisertifikat.index', [
//         'agendapelatihan' => $dataagendapelatihan->namakegiatan, // Ini dikirim ke form
//         'agendapelatihan_id' => $dataagendapelatihan->id, // Ini dikirim ke form
//         'user' => $user,
//         'title' => 'Keterangan Materi Pelatihan'
//     ]);
// }

public function bepelatihanjampelajaran($id)
{
        $dataagendapelatihan = agendapelatihan::where('id', $id)->first();
        // Ambil data user saat ini
        $user = Auth::user();

        if (!$dataagendapelatihan) {
            // Tangani jika kegiatan tidak ditemukan
            return redirect()->back()->with('error', 'Kegiatan tidak ditemukan.');
        }

        // Menggunakan paginate() untuk pagination
        $subdata = jampelajaran::where('agendapelatihan_id', $dataagendapelatihan->id)->paginate(50);

    // Ambil data user saat ini
    $user = Auth::user();
    return view('backend.05_agenda.02_pesertapelatihan.03_materisertifikat.index', [
        'title' => 'Keterangan Materi Untuk Sertifikat',
        'data' => $dataagendapelatihan,
        'subdata' => $subdata,
        'user' => $user,
        'agendapelatihan_id' => $dataagendapelatihan->id,
    ]);
}



public function bepelatihanjampelajarandelete($id)
{
    $entry = jampelajaran::find($id); // Lebih singkat pakai find()

    if ($entry) {
        $agendapelatihanId = $entry->agendapelatihan_id;

        // Hapus file jika ada (opsional)
        // if (Storage::disk('public')->exists($entry->header)) {
        //     Storage::disk('public')->delete($entry->header);
        // }

        $entry->delete();

        session()->flash('delete', 'Data Berhasil Dihapus!');
        return redirect()->route('bepelatihanjampelajaran', ['id' => $agendapelatihanId]);
    }

    session()->flash('error', 'Item tidak ditemukan');
    return redirect()->back();
}



public function bepelatihanjampelajarancreate($id)
{
    $dataagendapelatihan = agendapelatihan::findOrFail($id); // Cari 1 data sesuai ID
    $user = Auth::user();

    return view('backend.05_agenda.02_pesertapelatihan.04_jampelajaran.jampelajaran', [
        'agendapelatihan' => $dataagendapelatihan->namakegiatan, // Ini dikirim ke form
        'agendapelatihan_id' => $dataagendapelatihan->id, // Ini dikirim ke form
        'user' => $user,
        'title' => 'Create Materi Pelajaran Agenda Pelatihan'
    ]);
}


public function bepelatihanjampelajarancreatenew(Request $request)
{
    // Validasi input
    $validated = $request->validate([
        'agendapelatihan_id' => 'required|string',
        'materi' => 'required|string|max:255',
        'narasumber' => 'required|string|max:255',
        'jampelajaran' => 'required|integer|min:1|max:12',
    ], [
        'agendapelatihan_id.required' => 'ID Agenda Pelatihan wajib diisi.',
        'agendapelatihan_id.exists' => 'ID Agenda tidak ditemukan.',
        'materi.required' => 'Materi harus diisi.',
        'narasumber.required' => 'Narasumber harus diisi.',
        'jampelajaran.required' => 'Jam Pelajaran harus dipilih.',
    ]);

    // Simpan data ke model yang sesuai (misalnya: jampelajaran)
    $jampelajaran = jampelajaran::create([
        'agendapelatihan_id' => $validated['agendapelatihan_id'],
        'materi' => $validated['materi'],
        'narasumber' => $validated['narasumber'],
        'jampelajaran' => $validated['jampelajaran'],
    ]);

    // Flash message
    session()->flash('create', 'Data Materi berhasil disimpan.');

    // Redirect ke halaman sesuai dengan ID agenda pelatihan
    return redirect('/bepelatihanjampelajaran/' . $validated['agendapelatihan_id']);
}





public function bepesertauploadsertifikatandroid($id)
{
    // Ambil data pesertapelatihan beserta relasi agendapelatihan dan jampelajaran
    $datapesertapelatihan = pesertapelatihan::with('agendapelatihan.jampelajaran')->findOrFail($id);

    // Ambil semua jenjang pendidikan
    $jenjangpendidikan = jenjangpendidikan::all();
    $user = Auth::user();

    // Ambil ID agendapelatihan terkait dengan pesertapelatihan
    $agendapelatihanId = optional($datapesertapelatihan->agendapelatihan)->id;

    // Ambil semua jampelajaran yang terkait dengan agendapelatihan_id
    $datapelajaran = jampelajaran::where('agendapelatihan_id', $agendapelatihanId)->get();

    // Kirim data ke view
    return view('frontend.00_android.Z_menudepan.03_sertifikat.terbitpelatihan', [
        'data' => $datapesertapelatihan,
        'user' => $user,
        'datapelajaran' => $datapelajaran, // Kirim data jampelajaran ke view
        'jenjangpendidikan' => $jenjangpendidikan,
        'title' => 'Silahkan Download'
    ]);
}


}



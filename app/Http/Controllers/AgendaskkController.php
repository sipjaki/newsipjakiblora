<?php

namespace App\Http\Controllers;

use App\Models\agendaskk;
use App\Models\pesertapelatihan;
use App\Models\materipelatihanskk;
use App\Models\agendapelatihan;
use App\Models\allskktenagakerjablora;
use App\Models\contohsurat;
use App\Models\jabatankerja;
use App\Models\jenjangpendidikan;
use App\Models\namasekolah;
use App\Models\tahunlulus;
use App\Models\tahunpilihan;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AgendaskkController extends Controller
{
    //
    public function index(Request $request)
    {
        $perPage = $request->input('perPage', 10);
        $search = $request->input('search');

        $query = agendaskk::query();

        if ($search) {
            $query->where('namakegiatan', 'LIKE', "%{$search}%")
                  ->orWhere('penyelenggara', 'LIKE', "%{$search}%")
                  ->orWhere('lokasi', 'LIKE', "%{$search}%")
                  ->orWhere('keterangan', 'LIKE', "%{$search}%");
                //   ->orWhereHas('kategoripelatihan', function ($q) use ($search) {
                //       $q->where('kategoripelatihan', 'LIKE', "%{$search}%");
                //   }
                // );

        }

        $data = $query->paginate($perPage);

        if ($request->ajax()) {
            return response()->json([
                'html' => view('frontend.04_pembinaan.02_agendaskk.partials.table', compact('data'))->render()
            ]);
        }

        $user = Auth::user();

        return view('frontend.04_pembinaan.02_agendaskk.01_daftaragendaskk', [
            'title' => 'Agenda SKK Tenaga Konstruksi Kab Blora',
            'data' => $data,
            'perPage' => $perPage,
            'search' => $search,
            'user' => $user
        ]);
    }


    public function daftaragendaskk($namakegiatan)
    {
        $dataagendaskk = agendaskk::where('namakegiatan', $namakegiatan)->first();


        if (!$dataagendaskk) {
            // Tangani jika kegiatan tidak ditemukan
            return redirect()->back()->with('error', 'Kegiatan tidak ditemukan.');
        }

        // Menggunakan paginate() untuk pagination
        $subdata = materipelatihanskk::where('agendaskk_id', $dataagendaskk->id)->paginate(50);

    // Ambil data user saat ini
    $user = Auth::user();

    return view('frontend.04_pembinaan.02_agendaskk.02_agendaskkshow', [
        'title' => 'Agenda Sertifikasi Tenaga Kerja Konstruksi',
        'data' => $dataagendaskk,
        'datamateripelatihanskk' => $subdata,  // Jika Anda ingin mengirimkan data sub kontraktor juga
        'user' => $user,
        // 'start' => $start,
    ]);
    }


// DAFTAR PESERTA SKK TENAGA KERJA KONSTRUKSI

public function daftarpesertaskk(Request $request)
{
    $perPage = $request->input('perPage', 10);
    $search = $request->input('search');

    $query = agendaskk::query();

    if ($search) {
        $query->where('namakegiatan', 'LIKE', "%{$search}%")
              ->orWhere('keterangan', 'LIKE', "%{$search}%");
            //   ->orWhereHas('kategoripelatihan', function ($q) use ($search) {
            //       $q->where('kategoripelatihan', 'LIKE', "%{$search}%");
            //   }
            // );

    }

    $data = $query->paginate($perPage);

    if ($request->ajax()) {
        return response()->json([
            'html' => view('frontend.04_pembinaan.02_agendaskk.partials.table', compact('data'))->render()
        ]);
    }

    $user = Auth::user();

    return view('frontend.04_pembinaan.02_agendaskk.03_daftaragendaskk', [
        'title' => 'Daftar Peserta SKK Tenaga Kerja Konstruksi',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search,
        'user' => $user
    ]);
}

public function daftarpesertaskkshow(Request $request, $namakegiatan)
{
    $perPage = $request->input('perPage', 50);
    $search = $request->input('search');

    $query = allskktenagakerjablora::query();

    if ($search) {
        $query->where('jabatankerja', 'LIKE', "%{$search}%")
              ->orWhere('namalengkap', 'LIKE', "%{$search}%")
              ->orWhere('jeniskelamin', 'LIKE', "%{$search}%")
              ->orWhere('namaasosiasi', 'LIKE', "%{$search}%")
              ->orWhereHas('user', function ($q) use ($search) {
                  $q->where('user', 'LIKE', "%{$search}%");
              });
    }

    $datapesertapelatihan = $query->paginate($perPage);

    if ($request->ajax()) {
        return response()->json([
            'html' => view('frontend.04_pembinaan.02_agendaskk.partials.table', compact('data'))->render()
        ]);
    }

    $agendaskk = agendaskk::where('namakegiatan', $namakegiatan)->first();

    // Jika asosiasi tidak ditemukan, tampilkan 404
    if (!$agendaskk) {
        return abort(404, 'Asosiasi tidak ditemukan');
    }

    $user = Auth::user();

        $datapesertaskk = allskktenagakerjablora::where('agendaskk_id', $agendaskk->id)
                    ->select(['id', 'user_id', 'jeniskelamin', 'namaasosiasi', 'tahunpilihan_id', 'nik'])
                    ->paginate(25);

    $dataagendaskk = agendaskk::where('namakegiatan', $namakegiatan)->first();
    // $datauser = user::all();

    // Ambil data user saat ini
    $user = Auth::user();


    return view('frontend.04_pembinaan.02_agendaskk.04_daftarpesertaskkshow', [
        'title' => 'Daftar Peserta Sertifikasi Tenaga Kerja Konstruksi',
        'data' => $dataagendaskk,
        'datapeserta' => $datapesertaskk,
        'perPage' => $perPage,
        'search' => $search,
        'user' => $user,
        // 'datapeserta' => $datauser
    ]);
}


// ======================================================= MENU BACKEND AGENDA SKK =================================================


public function beagendaskk(Request $request)
{
        $perPage = $request->input('perPage', 5);
        $search = $request->input('search');

        $query = agendaskk::query();

        if ($search) {
            $query->where('namakegiatan', 'LIKE', "%{$search}%")
                ->orWhere('penyelenggara', 'LIKE', "%{$search}%")
                ->orWhere('penutupan', 'LIKE', "%{$search}%")
                ->orWhere('waktupelaksanaan', 'LIKE', "%{$search}%")
                ->orWhere('jumlahpeserta', 'LIKE', "%{$search}%")
                ->orWhere('lokasi', 'LIKE', "%{$search}%")
                ->orWhere('keterangan', 'LIKE', "%{$search}%")
                ->orWhere('isiagenda', 'LIKE', "%{$search}%")
                ->orWhere('foto', 'LIKE', "%{$search}%")
                ->orWhere('materi', 'LIKE', "%{$search}%");
    // -------------------------------------------------------------------------------
                // ->orWhereHas('kategoripelatihan', function ($q) use ($search) {
                //     $q->where('kategoripelatihan', 'LIKE', "%{$search}%");
                // });
        }

        $data = $query->paginate($perPage);

        if ($request->ajax()) {
            return response()->json([
                'html' => view('backend.05_agenda.03_agendaskk.partials.table', compact('data'))->render()
            ]);
        }

        return view('backend.05_agenda.03_agendaskk.index', [
            'title' => 'Agenda Pelatihan',
            'data' => $data,
            'perPage' => $perPage,
            'search' => $search
        ]);
}

// TKK DPUPR BLORA SHOW

public function beagendaskkshow($namakegiatan)
{
        $dataagendaskk = agendaskk::where('namakegiatan', $namakegiatan)->first();
    // Ambil data user saat ini
        $user = Auth::user();

    return view('backend.05_agenda.03_agendaskk.show', [
        'title' => 'Data Details Agenda SKK ',
        'data' => $dataagendaskk,
    ]);
}


public function beagendaskkpeserta(Request $request, $namakegiatan)
{
    $perPage = $request->input('perPage', 50);
    $search = $request->input('search');

    $query = allskktenagakerjablora::query();

    if ($search) {
        $query->where('jabatankerja', 'LIKE', "%{$search}%")
              ->orWhere('tempatlahir', 'LIKE', "%{$search}%")
              ->orWhere('ttl', 'LIKE', "%{$search}%")
            //   ===============================================
              ->orWhereHas('user', function ($q) use ($search) {
                  $q->where('user', 'LIKE', "%{$search}%");
              });

    }

    $datapesertapelatihan = $query->paginate($perPage);

    if ($request->ajax()) {
        return response()->json([
            'html' => view('backend.05_agenda.01_agendapelatihan.partials.table', compact('data'))->render()
        ]);
    }

    $agendapelatihan = agendapelatihan::where('namakegiatan', $namakegiatan)->first();

    // Jika asosiasi tidak ditemukan, tampilkan 404
    if (!$agendapelatihan) {
        return abort(404, 'Asosiasi tidak ditemukan');
    }

    $user = Auth::user();

        $datapesertapelatihan = pesertapelatihan::where('agendapelatihan_id', $agendapelatihan->id)
                    ->select(['id', 'user_id', 'jeniskelamin', 'instansi', 'jenjangpendidikan_id', 'nik', 'tanggallahir', 'notelepon', 'sertifikat', 'verifikasi' ])
                    ->paginate(25);

    $dataagendapelatihan = agendapelatihan::where('namakegiatan', $namakegiatan)->first();
    // $datauser = user::all();

    // Ambil data user saat ini
    $user = Auth::user();


    return view('backend.05_agenda.01_agendapelatihan.showpeserta', [
        'title' => 'Daftar Peserta Agenda',
        'data' => $dataagendapelatihan,
        'datapeserta' => $datapesertapelatihan,
        'perPage' => $perPage,
        'search' => $search,
        'user' => $user,
        // 'datapeserta' => $datauser
    ]);
}


    public function beagendaskkdeletepeserta($id)
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
        return redirect('/beagendapelatihan')->with('delete', 'Data Berhasil Di Hapus !');

        }

    return redirect()->back()->with('error', 'Item not found');
    }

    public function beagendaskkdelete($namakegiatan)
    {
    // Cari item berdasarkan judul
        $entry = agendapelatihan::where('namakegiatan', $namakegiatan)->first();

        if ($entry) {
        // Jika ada file header yang terdaftar, hapus dari storage
        // if (Storage::disk('public')->exists($entry->header)) {
            //     Storage::disk('public')->delete($entry->header);
        // }

        // Hapus entri dari database
        $entry->delete();

        // Redirect atau memberi respons sesuai kebutuhan
        return redirect('/beagendapelatihan')->with('delete', 'Data Berhasil Di Hapus !');

        }

    return redirect()->back()->with('error', 'Item not found');
    }



    public function daftarpesertasertifikasiskknew($id)
{
    $dataagendaskk = agendaskk::findOrFail($id);
    $datajenjangpendidikan = jenjangpendidikan::orderBy('jenjangpendidikan', 'asc')->get();
    $datajabatankerja = jabatankerja::orderBy('jabatankerja', 'asc')->get();
    $datasekolah = namasekolah::orderBy('namasekolah', 'asc')->get();
    $datatahunbimtek = tahunpilihan::orderBy('tahunpilihan', 'asc')->get();
    $datacontohsurat = contohsurat::orderBy('tahunpilihan', 'asc')->get();
    $user = Auth::user();

    return view('frontend.04_pembinaan.02_agendaskk.01_daftar.index', [
        'agendaskknamakegiatan' => $dataagendaskk->namakegiatan,
        'agendaskk_id' => $dataagendaskk->id,
        'namalengkap' => $user->name,
        'user_id' => $user->id,
        'user' => $user,
        'jenjangpendidikan' => $datajenjangpendidikan,
        'jabatankerja' => $datajabatankerja,
        'sekolah' => $datasekolah,
        'tahunbimtek' => $datatahunbimtek,
        'datacontohsurat' => $datacontohsurat,
        'title' => 'Form Daftar Peserta Sertifikasi Tenaga Kerja Konstruksi'
    ]);
}



public function daftarpesertasertifikasiskkcreatenew(Request $request)
{
    // Validasi input
    $validated = $request->validate([
        'jenjangpendidikan_id' => 'required|string',
        'jabatankerja_id' => 'required|string',
        'namasekolah_id' => 'required|string',
        'tahunpilihan_id' => 'required|string',
        'nik' => 'required|regex:/^\d{16}$/|size:16',
        'tempatlahir' => 'required|string|max:255',
        'ttl' => 'required|date',
        'jeniskelamin' => 'required|string',
        'alamat' => 'required|string|max:255',
        'notelepon' => 'required|string|max:15',
        'email' => 'required|email|max:255',
        'tahunlulus' => 'required|integer|min:1900|max:' . date('Y'),

        // Upload dokumen
        'uploadktp' => 'required|mimes:pdf,jpg,jpeg,png|max:2048',
        'uploadfoto' => 'required|mimes:jpg,jpeg,png|max:2048',
        'uploadijazah' => 'required|mimes:pdf,jpg,jpeg,png|max:2048',
        'uploadpengalaman' => 'required|mimes:pdf,jpg,jpeg,png|max:2048',
        'uploadnpwp' => 'required|mimes:pdf,jpg,jpeg,png|max:2048',
        'uploaddaftarriwayathidup' => 'required|mimes:pdf,jpg,jpeg,png|max:2048',

        'namaasosiasi' => 'nullable|string|max:255',
        'punyaskk' => 'required|in:Ya,Tidak',
        'punyasiki' => 'required|in:Ya,Tidak',
        'siappatuh' => 'required|in:Ya,Tidak',
    ], [
        'jenjangpendidikan_id.required' => 'Jenjang Pendidikan wajib dipilih!',
        'jabatankerja_id.required' => 'Jabatan Kerja wajib dipilih!',
        'namasekolah_id.required' => 'Universitas/Sekolah/Instansi wajib dipilih!',
        'tahunpilihan_id.required' => 'Tahun Pilihan wajib dipilih!',
        'nik.required' => 'NIK harus diisi.',
        'nik.regex' => 'NIK harus terdiri dari 16 digit angka.',
        'nik.size' => 'NIK harus tepat 16 digit.',
        'ttl.required' => 'Tanggal lahir harus diisi.',
        'tempatlahir.required' => 'Tempat lahir harus diisi.',
        'alamat.required' => 'Alamat harus diisi.',
        'notelepon.required' => 'Nomor telepon harus diisi.',
        'email.required' => 'Email harus diisi.',
        'email.email' => 'Email tidak valid.',
        'tahunlulus.required' => 'Tahun lulus harus diisi.',
        // 'namaasosiasi.required' => 'Nama Asosiasi Wajib diisi.',
        'punyaskk.required' => 'Pilih apakah memiliki SKK.',
        'punyasiki.required' => 'Pilih apakah memiliki SIKI.',
        'siappatuh.required' => 'Pilih kesiapan mematuhi kode etik.',
        'uploadktp.required' => 'Wajib Upload KTP.',
        'uploadktp.mimes' => 'File KTP harus PDF atau gambar.',
        'uploadktp.max' => 'Ukuran file KTP maksimal 2 MB.',
        'uploadfoto.required' => 'Wajib Upload Pas Foto.',
        'uploadfoto.mimes' => 'File KTP harus PDF atau gambar.',
        'uploadfoto.max' => 'Ukuran file KTP maksimal 2 MB.',
        'uploadijazah.required' => 'Wajib Upload Ijazah.',
        'uploadijazah.mimes' => 'File KTP harus PDF atau gambar.',
        'uploadijazah.max' => 'Ukuran file KTP maksimal 2 MB.',
        'uploadpengalaman.required' => 'Wajib Upload Pengalaman.',
        'uploadpengalaman.mimes' => 'File KTP harus PDF atau gambar.',
        'uploadpengalaman.max' => 'Ukuran file KTP maksimal 2 MB.',
        'uploadnpwp.required' => 'Wajib Upload NPWP.',
        'uploadnpwp.mimes' => 'File KTP harus PDF atau gambar.',
        'uploadnpwp.max' => 'Ukuran file KTP maksimal 2 MB.',
        'uploaddaftarriwayathidup.required' => 'Wajib Upload Daftar Riwayat Hidup.',
        'uploaddaftarriwayathidup.mimes' => 'File KTP harus PDF atau gambar.',
        'uploaddaftarriwayathidup.max' => 'Ukuran file KTP maksimal 2 MB.',
    ]);

    // Path upload untuk masing-masing file
    $uploadPaths = [
        'uploadktp' => '04_pembinaan/03_sertifikasi/01_uploadktp',
        'uploadfoto' => '04_pembinaan/03_sertifikasi/02_uploadfoto',
        'uploadijazah' => '04_pembinaan/03_sertifikasi/03_uploadijazah',
        'uploadpengalaman' => '04_pembinaan/03_sertifikasi/04_uploadpengalaman',
        'uploadnpwp' => '04_pembinaan/03_sertifikasi/05_uploadnpwp',
        'uploaddaftarriwayathidup' => '04_pembinaan/03_sertifikasi/06_uploadriwayathidup',
    ];

    $uploadedFiles = [];

    foreach ($uploadPaths as $field => $path) {
        if ($request->hasFile($field)) {
            $file = $request->file($field);
            $namaFile = time() . '_' . $file->getClientOriginalName();
            $tujuanPath = public_path($path);

            if (!file_exists($tujuanPath)) {
                mkdir($tujuanPath, 0777, true);
            }

            $file->move($tujuanPath, $namaFile);
            $uploadedFiles[$field] = $path . '/' . $namaFile;
        }
    }

    // Simpan ke database
    allskktenagakerjablora::create([
        'agendaskk_id' => $request->agendaskk_id,
        'user_id' => auth()->id(),
        'jenjangpendidikan_id' => $validated['jenjangpendidikan_id'],
        'jabatankerja_id' => $validated['jabatankerja_id'],
        'namasekolah_id' => $validated['namasekolah_id'],
        'tahunpilihan_id' => $validated['tahunpilihan_id'],
        'nik' => $validated['nik'],
        'tempatlahir' => $validated['tempatlahir'],
        'ttl' => $validated['ttl'],
        'jeniskelamin' => $validated['jeniskelamin'],
        'alamat' => $validated['alamat'],
        'notelepon' => $validated['notelepon'],
        'email' => $validated['email'],
        'tahunlulus' => $validated['tahunlulus'],

        'uploadktp' => $uploadedFiles['uploadktp'] ?? null,
        'uploadfoto' => $uploadedFiles['uploadfoto'] ?? null,
        'uploadijazah' => $uploadedFiles['uploadijazah'] ?? null,
        'uploadpengalaman' => $uploadedFiles['uploadpengalaman'] ?? null,
        'uploadnpwp' => $uploadedFiles['uploadnpwp'] ?? null,
        'uploaddaftarriwayathidup' => $uploadedFiles['uploaddaftarriwayathidup'] ?? null,

        'namaasosiasi' => $validated['namaasosiasi'] ?? null,
        'punyaskk' => $validated['punyaskk'],
        'punyasiki' => $validated['punyasiki'],
        'siappatuh' => $validated['siappatuh'],
    ]);

    session()->flash('daftarskk', 'Formulir Berhasil dikirim! Silakan cek Dashboard Anda.');
    return redirect('/dashboard');
}

}

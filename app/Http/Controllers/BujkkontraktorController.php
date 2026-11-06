<?php

namespace App\Http\Controllers;

use App\Models\asosiasimasjaki;
use App\Models\Asosiasimasjaki as ModelsAsosiasimasjaki;
use App\Models\bujkkonsultan;
use App\Models\bujkkonsultansub;
use App\Models\bujkkontraktor;
use App\Models\bujkkontraktorsub;
// use App\Models\asosiasimasjaki;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class BujkkontraktorController extends Controller
{
    //

    public function index()
    {
        $user = Auth::user();

        return view('frontend.03_masjaki_jakon.01_bujkkontraktor.index', [
            'title' => 'BUJK Konstruksi & Konsultasi Konstruksi',
            'user' => $user, // Mengirimkan data paginasi ke view
        ]);
    }

    public function asosiasimasjaki()
    {
        $user = auth()->user(); // atau sesuaikan dapetin $user dari mana

        $data = asosiasimasjaki::where('id', '!=', 99)
            ->withCount(['bujkkontraktor', 'bujkkonsultan'])
            ->get()
            ->map(function ($item) {
                return [
                    'nama_asosiasi' => $item->namaasosiasi,
                    'jumlah_penggunaan1' => $item->bujkkontraktor_count,
                    'jumlah_penggunaan2' => $item->bujkkonsultan_count,
                ];
            });

        return view('frontend.03_masjaki_jakon.05_asosiasimasjaki.index', [
            'title' => 'Asosiasi Konstruksi dan Konsultasi Konstruksi',
            'user' => $user,
            'data' => $data,
        ]);
    }




    // MENU BACKEND JASA KONSTRUKSI
    // ------------------------------------------------------------------------------------------------
            public function beasosiasi(Request $request)
        {
            $perPage = $request->input('perPage', 10);
            $search = $request->input('search');

            $query = asosiasimasjaki::query();

            if ($search) {
                $query->where('namaasosiasi', 'LIKE', "%{$search}%");

            }

            $data = $query->orderBy('created_at', 'desc')->paginate($perPage);

            if ($request->ajax()) {
                return response()->json([
                    'html' => view('backend.04_datajakon.03_asosiasimasjaki.partials.table', compact('data'))->render()
                ]);
            }

            return view('backend.04_datajakon.03_asosiasimasjaki.index', [
                'title' => 'Asosiasi Mas Jaki Blora',
                'data' => $data,
                'perPage' => $perPage,
                'search' => $search
            ]);
        }

        public function beasosiasicreate(Request $request)
        {
            $user = auth()->user(); // atau sesuaikan dapetin $user dari mana
            $data = asosiasimasjaki::all();

            return view('backend.04_datajakon.03_asosiasimasjaki.create', [
                'title' => 'Asosiasi Mas Jaki Blora',
                'data' => $data,
                'user' => $user,
                // 'search' => $search
            ]);
        }


        public function beasosiasicreatenew(Request $request)
{
    // Validasi input form
    $validated = $request->validate([
        'namaasosiasi' => 'required|string|max:255',
        'alamat' => 'nullable|string|max:255',
        'notelepon' => 'nullable|string',
        'pic' => 'nullable|string|max:255',
        'jumlahanggota' => 'nullable|integer|min:1',
    ], [
        'namaasosiasi.required' => 'Nama asosiasi tidak boleh kosong.',
        'namaasosiasi.string' => 'Nama asosiasi harus berupa teks.',
        'namaasosiasi.max' => 'Nama asosiasi tidak boleh lebih dari 255 karakter.',

        'alamat.required' => 'Alamat tidak boleh kosong.',
        'alamat.string' => 'Alamat harus berupa teks.',
        'alamat.max' => 'Alamat tidak boleh lebih dari 255 karakter.',

        'notelepon.required' => 'Nomor telepon tidak boleh kosong.',
        'notelepon.string' => 'Nomor telepon harus berupa teks.',
        'notelepon.regex' => 'Nomor telepon harus berisi angka dan panjang 7-15 digit.',

        'pic.required' => 'PIC tidak boleh kosong.',
        'pic.string' => 'PIC harus berupa teks.',
        'pic.max' => 'PIC tidak boleh lebih dari 255 karakter.',

        'jumlahanggota.required' => 'Jumlah anggota tidak boleh kosong.',
        'jumlahanggota.integer' => 'Jumlah anggota harus berupa angka.',
        'jumlahanggota.min' => 'Jumlah anggota minimal 1.',
    ]);

    // Menyimpan data ke dalam database asosiasimasjaki setelah divalidasi
    asosiasimasjaki::create([
        'namaasosiasi' => $validated['namaasosiasi'] ?? null,
        'alamat' => $validated['alamat'] ?? null,
        'notelepon' => $validated['notelepon'] ?? null,
        'pic' => $validated['pic'] ?? null,
        'jumlahanggota' => $validated['jumlahanggota'] ?? null,
    ]);

    session()->flash('create', 'Data Berhasil Dibuat!');

    return redirect('/beasosiasi');
}


        // BACKEND ASOSIASI SHOW

        public function beasosiasishow($namaasosiasi)
        {
            $datasosiasi = asosiasimasjaki::where('namaasosiasi', $namaasosiasi)->first();
        // Ambil data user saat ini
            $user = Auth::user();

        return view('backend.04_datajakon.01_bujkkonstruksi.show', [
            'title' => 'Data Asosiasi Mas Jaki',
            'data' => $datasosiasi,
        ]);
        }

        public function beasosiasiupdate($id)
        {
            $datasosiasi = asosiasimasjaki::where('id', $id)->first();
        // Ambil data user saat ini
            $user = Auth::user();

        return view('backend.04_datajakon.03_asosiasimasjaki.update', [
            'title' => 'Update Data Asosiasi Mas Jaki',
            'data' => $datasosiasi,
        ]);
        }


        public function beasosiasidelete($namaasosiasi)
            {
            // Cari item berdasarkan judul
            $entry = asosiasimasjaki::where('namaasosiasi', $namaasosiasi)->first();

            if ($entry) {
            // Jika ada file header yang terdaftar, hapus dari storage
            // if (Storage::disk('public')->exists($entry->header)) {
                //     Storage::disk('public')->delete($entry->header);
            // }

            // Hapus entri dari database
            $entry->delete();

            // Redirect atau memberi respons sesuai kebutuhan
            return redirect('/beasosiasi')->with('delete', 'Data Berhasil Di Hapus !');

            }

            return redirect()->back()->with('error', 'Item not found');
            }



// HALAMAN FRONTEND MENU BUJK KONTRAKTOR
    public function bujkkontraktor(Request $request)
{
    $perPage = $request->input('perPage', 15);
    $search = $request->input('search');

    $query = bujkkontraktor::query();

    if ($search) {
        $query->where('namalengkap', 'LIKE', "%{$search}%")
              ->orWhere('alamat', 'LIKE', "%{$search}%")
              ->orWhere('email', 'LIKE', "%{$search}%")
            //   ->orWhere('no_telepon', 'LIKE', "%{$search}%")
              ;
    }

    $data = $query->paginate($perPage);

    if ($request->ajax()) {
        return response()->json([
            'html' => view('frontend.03_masjaki_jakon.01_bujkkontraktor.partials.table', compact('data'))->render()
        ]);
    }


    return view('frontend.03_masjaki_jakon.01_bujkkontraktor.bujkkontraktor', [
        'title' => 'BUJK | Konstruksi',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search
    ]);
}

    public function bujkkontraktorshow($namalengkap)
    {
        $databujkkontraktor = bujkkontraktor::where('namalengkap', $namalengkap)->first();

        if (!$databujkkontraktor) {
            // Tangani jika kegiatan tidak ditemukan
            return redirect()->back()->with('error', 'Kegiatan tidak ditemukan.');
        }

        // Menggunakan paginate() untuk pagination
        $subdata = bujkkontraktorsub::where('bujkkontraktor_id', $databujkkontraktor->id)->paginate(50);

          // Menghitung nomor urut mulai
            $start = ($subdata->currentPage() - 1) * $subdata->perPage() + 1;


    // Ambil data user saat ini
    $user = Auth::user();

    return view('frontend.03_masjaki_jakon.01_bujkkontraktor.bujkkontraktorshow', [
        'title' => 'Data Bujk Konstruksi',
        'data' => $databujkkontraktor,
        'subData' => $subdata,  // Jika Anda ingin mengirimkan data sub kontraktor juga
        'user' => $user,
        'start' => $start,
    ]);
}


public function asosiasikonstruksishow($namaasosiasi)
{
    // Cari asosiasi berdasarkan namaasosiasi
    $asosiasi = asosiasimasjaki::where('namaasosiasi', $namaasosiasi)->first();

    // Jika asosiasi tidak ditemukan, tampilkan 404
    if (!$asosiasi) {
        return abort(404, 'Asosiasi tidak ditemukan');
    }

    $user = Auth::user();
        // Ambil semua data dari tabel bujkkontraktor berdasarkan asosiasi_id
        $databujkkontraktor = bujkkontraktor::where('asosiasimasjaki_id', $asosiasi->id)->get(['id', 'namalengkap', 'no_telepon']);
        // $databujkkontraktorpaginate = bu::where('asosiasimasjaki_id', $asosiasi->id)->paginate(15);


        // Return ke view dengan format yang diminta
        return view('frontend.03_masjaki_jakon.05_asosiasimasjaki.showasosiasikontraktor', [
            'title' => 'Asosiasi Konstruksi dan Konsultasi Konstruksi',
            'user' => $user,
            'data' => $databujkkontraktor,
       ]);
    }


public function asosiasikonsultanshow($namaasosiasi)
{
    // Cari asosiasi berdasarkan namaasosiasi
    $asosiasi = asosiasimasjaki::where('namaasosiasi', $namaasosiasi)->first();

    // Jika asosiasi tidak ditemukan, tampilkan 404
    if (!$asosiasi) {
        return abort(404, 'Asosiasi tidak ditemukan');
    }

    $user = Auth::user();
        // Ambil semua data dari tabel bujkkontraktor berdasarkan asosiasi_id
        $databujkkonsultan = bujkkonsultan::where('asosiasimasjaki_id', $asosiasi->id)->get(['id', 'namalengkap', 'no_telepon']);
        // $databujkkontraktorpaginate = bu::where('asosiasimasjaki_id', $asosiasi->id)->paginate(15);


        // Return ke view dengan format yang diminta
        return view('frontend.03_masjaki_jakon.05_asosiasimasjaki.showasosiasikonsultan', [
            'title' => 'Asosiasi Konstruksi dan Konsultasi Konstruksi',
            'user' => $user,
            'data' => $databujkkonsultan,
       ]);
    }

// ------------------------------------------------------------------------------------------
// MENU BACKEND BUJK KONSTRUKSI DAN KONSULTASI

public function bebujkjakon()
{

    $user = Auth::user();

    return view('backend.04_datajakon.index', [
        'title' => 'Data BUJK Konstruksi dan Konsultasi Konstruksi ',
        // 'data' => $data, // Mengirimkan data paginasi ke view
        'user' => $user, // Mengirimkan data paginasi ke view
    ]);
}



// MENU 1 BUJK KONSTRUKSI

// public function bebujkkonstruksi()
// {
//     $data = bujkkontraktor::paginate(15); // Menggunakan paginate() untuk pagination
//     $user = Auth::user();

//     return view('backend.04_datajakon.01_bujkkonstruksi.index', [
//         'title' => 'Data BUJK Konstruksi',
//         'data' => $data, // Mengirimkan data paginasi ke view
//         'user' => $user, // Mengirimkan data paginasi ke view

//     ]);
// }



// MENU CREATE BUJK KONTRAKTOR ===============================================================================
public function bebujkkonstruksicreate()
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    // $jakonjabatanfungsional = profiljakonpersonil::where('id', $id)->firstOrFail();
    $user = Auth::user();
    $asosiasimasjaki = asosiasimasjaki::all();  // Ambil semua pengguna

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.04_datajakon.01_bujkkonstruksi.create', [
        // 'data' => $jakonjabatanfungsional,
        'user' => $user,
        'asosiasimasjaki' => $asosiasimasjaki,
        'title' => 'Tambah BUJK Kontruksi'
    ]);
}

// -------------------- CREATE MENU JABATAN FUNGSIONAL   ----------------------
public function bebujkkonstruksicreatenew(Request $request)
{
    // Validasi input form
    $validatedData = $request->validate([
        'asosiasimasjaki_id' => 'nullable|integer',
        'namalengkap' => 'nullable|string|max:255',
        'alamat' => 'nullable|string',
        'no_telepon' => 'nullable|string|max:255',
        'email' => 'nullable|email',
        'nomorindukberusaha' => 'nullable|string|max:255',
        'pju' => 'nullable|string|max:255',
        'no_akte' => 'nullable|string|max:255',
        'tanggal' => 'nullable|date',
        'nama_notaris' => 'nullable|string|max:255',
        'no_pengesahan' => 'nullable|string|max:255',
        'uploadberkas' => 'nullable|mimes:pdf|max:15360',
    ], [
        // 'asosiasimasjaki_id.required' => 'Asosiasi harus dipilih!',
        // 'namalengkap.required' => 'Nama Lengkap wajib diisi!',
        // 'alamat.required' => 'Alamat wajib diisi!',
        // 'no_telepon.required' => 'Nomor Telepon wajib diisi!',
        // 'email.required' => 'Email wajib diisi!',
        // 'nomorindukberusaha.required' => 'Nomor Induk Berusaha wajib diisi!',
        // 'pju.required' => 'PJU wajib diisi!',
        // 'no_akte.required' => 'No Akte wajib diisi!',
        // 'tanggal.required' => 'Tanggal wajib diisi!',
        // 'nama_notaris.required' => 'Nama Notaris wajib diisi!',
        // 'no_pengesahan.required' => 'No Pengesahan wajib diisi!',
        // 'uploadberkas.required' => 'Berkas wajib diunggah!',
        // 'uploadberkas.mimes' => 'Berkas harus berupa file PDF!',
    ]);

    // Ambil ID default dari sub kontraktor (pastikan tidak null di DB!)
    $bujkkontraktorsub_id = bujkkonsultansub::first()->id;

    // Ambil ID user yang sedang login
    $user_id = Auth::user()->id;

    if ($request->hasFile('uploadberkas')) {
        $file = $request->file('uploadberkas');
        $namaFile = time() . '_' . $file->getClientOriginalName();
        $tujuanPath = public_path('03_datajakon/02_sertifikasi');

        // Pastikan foldernya ada
        if (!file_exists($tujuanPath)) {
            mkdir($tujuanPath, 0777, true);
        }

        $file->move($tujuanPath, $namaFile);

        // Simpan nama file ke database
        $validatedData['uploadberkas'] = '03_datajakon/02_sertifikasi/' . $namaFile;
    }

    // Simpan ke DB
    bujkkontraktor::create([
        'user_id' => $user_id, // Menyimpan user_id berdasarkan login
        'bujkkontraktorsub_id' => $bujkkontraktorsub_id,
        'asosiasimasjaki_id' => $validatedData['asosiasimasjaki_id'] ?? null ,
        'namalengkap' => $validatedData['namalengkap'] ?? null ,
        'alamat' => $validatedData['alamat'] ?? null ,
        'no_telepon' => $validatedData['no_telepon'] ?? null ,
        'email' => $validatedData['email'] ?? null ,
        'nomorindukberusaha' => $validatedData['nomorindukberusaha'] ?? null ,
        'pju' => $validatedData['pju'] ?? null ,
        'no_akte' => $validatedData['no_akte'] ?? null ,
        'tanggal' => $validatedData['tanggal'] ?? null ,
        'nama_notaris' => $validatedData['nama_notaris'] ?? null ,
        'no_pengesahan' => $validatedData['no_pengesahan'] ?? null ,
        'uploadberkas' => $validatedData['uploadberkas'] ?? null ,
    ]);

    session()->flash('create', 'Data Berhasil Dibuat!');
    return redirect('/bebujkkonstruksiblora');
}

// BUJKKONTRAKTOR SHOW

public function bebujkkonstruksishow($namalengkap)
{
    $databujkkontraktor = bujkkontraktor::where('namalengkap', $namalengkap)->first();
// Ambil data user saat ini
    $user = Auth::user();

return view('backend.04_datajakon.01_bujkkonstruksi.show', [
    'title' => 'Informasi Badan Usaha Jasa Konstruksi',
    'data' => $databujkkontraktor,
]);
}


// CREATE DATA SUB KLASIFIKASI
public function bebujkkonstruksicreateklasifikasi($namalengkap)
{
    $bujkkontraktor = bujkkontraktor::findOrFail($namalengkap); // Cari 1 data sesuai ID
    $user = Auth::user();
    $asosiasimasjaki = asosiasimasjaki::all();

    return view('backend.04_datajakon.01_bujkkonstruksi.createklasifikasi', [
        'bujkkontraktornamalengkap' => $bujkkontraktor->namalengkap, // Ini dikirim ke form
        'bujkkontraktor_id' => $bujkkontraktor->id, // Ini dikirim ke form
        'user' => $user,
        'asosiasimasjaki' => $asosiasimasjaki,
        'title' => 'Create BUJK Sub Klasifikasi'
    ]);
}

public function bebujkkonstruksicreateklasifikasicreate(Request $request)
{
    // Validasi input
    $validated = $request->validate([
        'nama_pengurus' => 'nullable|string|max:255',
        'sub_klasifikasi_layanan' => 'nullable|string|max:255',
        'kode' => 'nullable|string|max:50',
        'kualifikasi' => 'nullable|string|max:255',
        'penerbit' => 'nullable|string|max:255',
        'nama_psjk' => 'nullable|string|max:255',
        'sub_kualifikasi_bu' => 'nullable|string|max:255',
        'tanggal_terbit' => 'nullable|date',
        'masa_berlaku' => 'nullable|date',
    ], [
        // // Pesan kesalahan custom
        // 'nama_pengurus.required' => 'Nama Pengurus harus diisi.',
        // 'sub_klasifikasi_layanan.required' => 'Sub Klasifikasi Layanan harus diisi.',
        // 'kode.required' => 'Kode Sub Klasifikasi harus diisi.',
        // 'kualifikasi.required' => 'Kualifikasi harus diisi.',
        // 'sub_kualifikasi_bu.required' => 'Sub Bidang harus diisi.',
        // 'penerbit.required' => 'Penerbit harus diisi.',
        // 'nama_psjk.required' => 'Nama PSJK harus diisi.',
        // 'tanggal_terbit.required' => 'Tanggal Terbit harus diisi.',
        // 'masa_berlaku.required' => 'Tanggal Berlaku harus diisi.',
    ]);

    // Menyimpan data ke tabel BujkKontraktorSub
    $bujkkontraktorSub = bujkkontraktorsub::create([
        'bujkkontraktor_id' => $request->bujkkontraktor_id,
        'nama_pengurus' => $validated['nama_pengurus'],
        'sub_klasifikasi_layanan' => $validated['sub_klasifikasi_layanan'],
        'kode' => $validated['kode'],
        'kualifikasi' => $validated['kualifikasi'],
        'sub_kualifikasi_bu' => $validated['sub_kualifikasi_bu'],
        'penerbit' => $validated['penerbit'],
        'nama_psjk' => $validated['nama_psjk'],
        'tanggal_terbit' => $validated['tanggal_terbit'],
        'masa_berlaku' => $validated['masa_berlaku'],
    ]);

// Ambil bujkkontraktor_id yang baru saja disimpan
$bujkkontraktorId = $bujkkontraktorSub->bujkkontraktor_id;

// Ambil data Bujkkontraktor utama
$bujkkontraktor = bujkkontraktor::find($bujkkontraktorId);

// Flash message
session()->flash('create', 'Data Sub Klasifikasi Layanan berhasil dibuat.');

// Redirect ke route dengan parameter namalengkap
return redirect()->route('bebujkkonstruksi.showsubklasifikasi', [
    'namalengkap' => $bujkkontraktor->namalengkap
]);

}


public function bebujkkonstruksiklasifikasi($namalengkap)
{
    $databujk = bujkkontraktor::where('namalengkap', $namalengkap)->first();

    if (!$databujk) {
        return abort(404, 'Data sub-klasifikasi tidak ditemukan');
    }

    // Menggunakan paginate() untuk pagination
    $datasublayanan = bujkkontraktorsub::where('bujkkontraktor_id', $databujk->id)->paginate(50);

    return view('backend.04_datajakon.01_bujkkonstruksi.showklasifikasi', [
        'title' => 'Data Klasifikasi Layanan',
        'subdata' => $datasublayanan,
        'data' => $databujk,
        'user' => Auth::user(),

        // --- TAMBAHKAN 2 BARIS INI ---
        'bujkkontraktor_id' => $databujk->id,
        'bujkkontraktornamalengkap' => $databujk->namalengkap,
        // -----------------------------
    ]);
}

// DATA SHOW SUB KLASIFIKASI LAYANAN
// public function bebujkkonstruksiklasifikasi($namalengkap)
// {
//     $databujk = bujkkontraktor::where('namalengkap', $namalengkap)->first();

//     if (!$databujk) {
//         return abort(404, 'Data sub-klasifikasi tidak ditemukan');
//     }

//         // Menggunakan paginate() untuk pagination
//         $datasublayanan = bujkkontraktorsub::where('bujkkontraktor_id', $databujk->id)->paginate(50);

//     return view('backend.04_datajakon.01_bujkkonstruksi.showklasifikasi', [
//         'title' => 'Data Klasifikasi Layanan',
//         'subdata' => $datasublayanan,
//         'data' => $databujk,
//         'user' => Auth::user()
//     ]);
// }

// BUJK KONTRAKTOR UPDATE DAN CREATE UPDATE ------------------------------------------------------------------------------------

public function bebujkkonstruksiupdate($id)
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    $jakonkonstruksi = bujkkontraktor::where('id', $id)->firstOrFail();
    $asosiasimasjakiList = asosiasimasjaki::all(); // Ambil semua asosiasi

    $user = Auth::user();

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.04_datajakon.01_bujkkonstruksi.update', [
        'data' => $jakonkonstruksi,
        'user' => $user,
        'asosiasimasjakiList' => $asosiasimasjakiList,
        'title' => 'Update BUJK Konstruksi'
    ]);
}


// MENU EROR BELUM DI PERBAIKI -----------------------------------------------
// -------------------- UPDATE DATA MENU BUJK KONTRAKTOR  ----------------------
public function bebujkkonstruksicreateupdate(Request $request, $id)
{
    // Validasi input dengan pesan kustom
    $validatedData = $request->validate([
        // 'bujkkontraktorsub_id' => 'required|string|max:255', // Validasi untuk ID kontraktor
        'asosiasimasjaki_id' => 'nullable|integer', // Validasi untuk ID asosiasi
        'namalengkap' => 'nullable|string|max:255', // Validasi untuk Nama Lengkap
        'alamat' => 'nullable|string', // Validasi untuk Alamat
        'no_telepon' => 'nullable|string|max:255', // Validasi untuk No Telepon
        'email' => 'nullable|email', // Validasi untuk Email
        'nomorindukberusaha' => 'nullable|string|max:255', // Validasi untuk Nomor Induk Berusaha
        'pju' => 'nullable|string|max:255', // Validasi untuk PJU
        'no_akte' => 'nullable|string|max:255', // Validasi untuk No Akte
        'tanggal' => 'nullable|date', // Validasi untuk Tanggal
        'nama_notaris' => 'nullable|string|max:255', // Validasi untuk Nama Notaris
        'no_pengesahan' => 'nullable|string|max:255', // Validasi untuk No Pengesahan
        'uploadberkas' => 'nullable|mimes:pdf|max:15360',
    ], [

        'asosiasimasjaki_id.required' => 'Asosiasi harus dipilih!',
        'namalengkap.required' => 'Nama Lengkap wajib diisi!',
        'alamat.required' => 'Alamat wajib diisi!',
        'no_telepon.required' => 'Nomor Telepon wajib diisi!',
        'email.required' => 'Email wajib diisi!',
        'email.email' => 'Format email tidak valid!',
        'nomorindukberusaha.required' => 'Nomor Induk Berusaha wajib diisi!',
        'pju.required' => 'PJU wajib diisi!',
        'no_akte.required' => 'No Akte wajib diisi!',
        'tanggal.required' => 'Tanggal wajib diisi!',
        'tanggal.date' => 'Format Tanggal tidak valid!',
        'nama_notaris.required' => 'Nama Notaris wajib diisi!',
        'no_pengesahan.required' => 'No Pengesahan wajib diisi!',
        'uploadberkas.required' => 'Berkas wajib diunggah!',
        'uploadberkas.mimes' => 'Berkas harus berupa file PDF!',

    ]);

    // Cari data strukturdinas berdasarkan nilai 'judul'
    $jakonkontraktor = bujkkontraktor::where('id', $id)->firstOrFail();

    // Gunakan $validatedData untuk update, agar lebih jelas dan rapi


    if ($request->hasFile('uploadberkas')) {
        $file = $request->file('uploadberkas');
        $namaFile = time() . '_' . $file->getClientOriginalName();
        $tujuanPath = public_path('03_datajakon/02_sertifikasi');

        // Pastikan foldernya ada
        if (!file_exists($tujuanPath)) {
            mkdir($tujuanPath, 0777, true);
        }

        $file->move($tujuanPath, $namaFile);

        // Simpan nama file ke database
        $validatedData['uploadberkas'] = '03_datajakon/02_sertifikasi/' . $namaFile;
    }
    // Proses update setelah data tervalidasi
    $jakonkontraktor->update([
        'asosiasimasjaki_id' => $validatedData['asosiasimasjaki_id'] ?? $jakonkontraktor->asosiasimasjaki_id, // Jika asosiasimasjaki_id tidak ada, gunakan data sebelumnya
        'namalengkap' => $validatedData['namalengkap'] ?? $jakonkontraktor->namalengkap, // Jika namalengkap tidak ada, gunakan data sebelumnya
        'alamat' => $validatedData['alamat'] ?? $jakonkontraktor->alamat, // Jika alamat tidak ada, gunakan data sebelumnya
        'no_telepon' => $validatedData['no_telepon'] ?? $jakonkontraktor->no_telepon, // Jika no_telepon tidak ada, gunakan data sebelumnya
        'email' => $validatedData['email'] ?? $jakonkontraktor->email, // Jika email tidak ada, gunakan data sebelumnya
        'nomorindukberusaha' => $validatedData['nomorindukberusaha'] ?? $jakonkontraktor->nomorindukberusaha, // Jika nomorindukberusaha tidak ada, gunakan data sebelumnya
        'pju' => $validatedData['pju'] ?? $jakonkontraktor->pju, // Jika pju tidak ada, gunakan data sebelumnya
        'no_akte' => $validatedData['no_akte'] ?? $jakonkontraktor->no_akte, // Jika no_akte tidak ada, gunakan data sebelumnya
        'tanggal' => $validatedData['tanggal'] ?? $jakonkontraktor->tanggal, // Jika tanggal tidak ada, gunakan data sebelumnya
        'nama_notaris' => $validatedData['nama_notaris'] ?? $jakonkontraktor->nama_notaris, // Jika nama_notaris tidak ada, gunakan data sebelumnya
        'no_pengesahan' => $validatedData['no_pengesahan'] ?? $jakonkontraktor->no_pengesahan, // Jika no_pengesahan tidak ada, gunakan data sebelumnya
        'uploadberkas' => $validatedData['uploadberkas'] ?? $jakonkontraktor->uploadberkas, // Jika no_pengesahan tidak ada, gunakan data sebelumnya
    ]);
    // Flash session untuk menampilkan pesan sukses
    session()->flash('update', 'Data Berhasil Diupdate!');

    // Redirect ke halaman yang sesuai
    return redirect('/bebujkkonstruksiblora');
}

public function bebujkkonstruksidelete($id)
{
// Cari item berdasarkan judul
$entry = bujkkontraktor::where('id', $id)->first();

if ($entry) {
// Jika ada file header yang terdaftar, hapus dari storage
// if (Storage::disk('public')->exists($entry->header)) {
    //     Storage::disk('public')->delete($entry->header);
// }

// Hapus entri dari database
$entry->delete();

// Redirect atau memberi respons sesuai kebutuhan
return redirect('/bebujkkonstruksiblora')->with('delete', 'Data Berhasil Di Hapus !');

}

return redirect()->back()->with('error', 'Item not found');
}


public function bebujkkonstruksiklasifikasidelete($id)
{
    $entry = bujkkontraktorsub::where('id', $id)->first();

    if ($entry) {
        // Kalau ada file yang mau dihapus, bisa aktifkan bagian ini
        // if (Storage::disk('public')->exists($entry->header)) {
        //     Storage::disk('public')->delete($entry->header);
        // }

        $entry->delete();

        // Pakai session()->flash supaya konsisten dengan create
        session()->flash('delete', 'Data Berhasil Dihapus!');
        return redirect()->back(); // <-- redirect ke halaman sebelumnya
    }

    // Kalau tidak ketemu, flash error
    session()->flash('error', 'Item tidak ditemukan');
    return redirect()->back();
}



public function beasosiasiupdatecreate(Request $request, $id)
{
    // Validasi input
    $validated = $request->validate([
        'namaasosiasi'   => 'required|string|max:255',
        'alamat'         => 'required|string|max:255',
        'notelepon'      => 'required|string|max:20',
        'pic'            => 'required|string|max:255',
        'jumlahanggota'  => 'required|integer|min:0',
    ], [
        'namaasosiasi.required'   => 'Nama asosiasi wajib diisi.',
        'namaasosiasi.string'     => 'Nama asosiasi harus berupa teks.',
        'namaasosiasi.max'        => 'Nama asosiasi tidak boleh lebih dari 255 karakter.',

        'alamat.required'         => 'Alamat wajib diisi.',
        'alamat.string'           => 'Alamat harus berupa teks.',
        'alamat.max'              => 'Alamat tidak boleh lebih dari 255 karakter.',

        'notelepon.required'      => 'Nomor telepon wajib diisi.',
        'notelepon.string'        => 'Nomor telepon harus berupa teks.',
        'notelepon.max'           => 'Nomor telepon tidak boleh lebih dari 20 karakter.',

        'pic.required'            => 'Nama PIC wajib diisi.',
        'pic.string'              => 'Nama PIC harus berupa teks.',
        'pic.max'                 => 'Nama PIC tidak boleh lebih dari 255 karakter.',

        'jumlahanggota.required' => 'Jumlah anggota wajib diisi.',
        'jumlahanggota.integer'  => 'Jumlah anggota harus berupa angka.',
        'jumlahanggota.min'      => 'Jumlah anggota tidak boleh kurang dari 0.',
    ]);


    // Ambil data asosiasi berdasarkan ID
    $asosiasi = asosiasimasjaki::findOrFail($id);

    // Update data
    $asosiasi->update([
        'namaasosiasi'   => $validated['namaasosiasi'],
        'alamat'         => $validated['alamat'],
        'notelepon'      => $validated['notelepon'],
        'pic'            => $validated['pic'],
        'jumlahanggota'  => $validated['jumlahanggota'],
    ]);

    // Redirect atau response
    session()->flash('update', 'Data Berhasil Di Update!');

    return redirect('/beasosiasi');
}



// public function bebujkkonstruksi(Request $request)
// {
//     $perPage = $request->input('perPage', 10);
//     $search = $request->input('search');

// $query = bujkkontraktor::query();

//     if ($search) {
//         $query->where('namalengkap', 'LIKE', "%{$search}%")
//               ->orWhere('alamat', 'LIKE', "%{$search}%")
//               ->orWhere('no_telepon', 'LIKE', "%{$search}%")
//               ->orWhere('email', 'LIKE', "%{$search}%")
//               ->orWhere('nomorindukberusaha', 'LIKE', "%{$search}%")
//               ->orWhere('pju', 'LIKE', "%{$search}%")
//               ->orWhere('no_akte', 'LIKE', "%{$search}%")
//               ->orWhere('tanggal', 'LIKE', "%{$search}%")
//               ->orWhere('nama_notaris', 'LIKE', "%{$search}%")
//               ->orWhere('no_pengesahan', 'LIKE', "%{$search}%")
//               ->orWhereHas('bujkkontraktorsub', function ($q) use ($search) {
//                 $q->where('nama_pengurus', 'LIKE', "%{$search}%");
//             })
//             ->orWhereHas('asosiasimasjaki', function ($q) use ($search) {
//                 $q->where('namaasosiasi', 'LIKE', "%{$search}%");
//             });
//     }

//     $data = $query->orderBy('created_at', 'desc')->paginate($perPage);

//     if ($request->ajax()) {
//         return response()->json([
//             'html' => view('backend.04_datajakon.01_bujkkonstruksi.partials.table', compact('data'))->render()
//         ]);
//     }

//     return view('backend.04_datajakon.01_bujkkonstruksi.index', [
//         'title' => 'BUJK Konstruksi',
//         'data' => $data,
//         'perPage' => $perPage,
//         'search' => $search
//     ]);
// }

public function bebujkkonstruksi(Request $request)
{
    $perPage = $request->input('perPage', 10);
    $search  = $request->input('search');
    $tahun   = $request->input('tahun');

    $query = bujkkontraktor::query();

    // =========================================================
    // SEARCH
    // =========================================================
    if ($search) {
        $query->where(function ($q) use ($search) {
            $q->where('namalengkap', 'LIKE', "%{$search}%")
              ->orWhere('alamat', 'LIKE', "%{$search}%")
              ->orWhere('no_telepon', 'LIKE', "%{$search}%")
              ->orWhere('email', 'LIKE', "%{$search}%")
              ->orWhere('nomorindukberusaha', 'LIKE', "%{$search}%")
              ->orWhere('pju', 'LIKE', "%{$search}%")
              ->orWhere('no_akte', 'LIKE', "%{$search}%")
              ->orWhere('tanggal', 'LIKE', "%{$search}%")
              ->orWhere('nama_notaris', 'LIKE', "%{$search}%")
              ->orWhere('no_pengesahan', 'LIKE', "%{$search}%")
              ->orWhereHas('bujkkontraktorsub', function ($q2) use ($search) {
                  $q2->where('nama_pengurus', 'LIKE', "%{$search}%");
              })
              ->orWhereHas('asosiasimasjaki', function ($q2) use ($search) {
                  $q2->where('namaasosiasi', 'LIKE', "%{$search}%");
              });
        });
    }

    // =========================================================
    // FILTER TAHUN
    // =========================================================
    if ($tahun) {
        $query->whereYear('created_at', $tahun);
    }

    // =========================================================
    // DATA UTAMA
    // =========================================================
    $data = $query->orderBy('created_at', 'desc')->paginate($perPage);

    // =========================================================
    // HITUNG STATUS SUB PER ITEM (berdasarkan masa_berlaku)
    // ---------------------------------------------------------
    //  Berlaku        : masa_berlaku >= hari ini
    //  Tidak Berlaku  : masa_berlaku <  hari ini (termasuk null)
    //  Suspend        : kualifikasi mengandung "suspend"
    // =========================================================
    $today = \Carbon\Carbon::today();

    // Ambil semua id yang sedang tampil (halaman ini)
    $ids = $data->pluck('id')->toArray();

    // Ambil semua sub sekaligus → hindari N+1 query
    $subsByParent = collect();
    if (!empty($ids)) {
        $subsByParent = DB::table('bujkkontraktorsubs')
            ->whereIn('bujkkontraktor_id', $ids)
            ->get()
            ->groupBy('bujkkontraktor_id');
    }

    // Tempel hasil hitung ke masing-masing item
    $data->getCollection()->transform(function ($item) use ($subsByParent, $today) {

        $subs = $subsByParent->get($item->id, collect());

        $total   = $subs->count();
        $berlaku = 0;
        $tidak   = 0;
        $suspend = 0;

        foreach ($subs as $sub) {
            $kualifikasi = strtolower($sub->kualifikasi ?? '');

            if (str_contains($kualifikasi, 'suspend')) {
                $suspend++;
            } elseif (!empty($sub->masa_berlaku)
                && \Carbon\Carbon::parse($sub->masa_berlaku)->gte($today)) {
                $berlaku++;
            } else {
                $tidak++;
            }
        }

        // Status dominan
        if ($total === 0) {
            $status = 'Belum Ada';
        } elseif ($suspend > 0) {
            $status = 'Suspend';
        } elseif ($berlaku > 0) {
            $status = 'Berlaku';
        } else {
            $status = 'Tidak Berlaku';
        }

        // Tempel properti
        $item->status_sub     = $status;
        $item->status_total   = $total;
        $item->status_berlaku = $berlaku;
        $item->status_tidak   = $tidak;
        $item->status_suspend = $suspend;

        return $item;
    });

    // =========================================================
    // DAFTAR TAHUN UNTUK DROPDOWN
    // =========================================================
    $daftarTahun = bujkkontraktor::selectRaw('YEAR(created_at) as tahun')
        ->whereNotNull('created_at')
        ->groupBy('tahun')
        ->orderBy('tahun', 'desc')
        ->pluck('tahun');

    // =========================================================
    // STATISTIK GLOBAL (untuk badge toolbar)
    // =========================================================
    $globalBerlaku = 0;
    $globalTidak   = 0;
    $globalSuspend = 0;

    if (!empty($ids)) {
        $allSubs = DB::table('bujkkontraktorsubs')
            ->whereIn('bujkkontraktor_id', $ids)
            ->get();

        foreach ($allSubs as $sub) {
            $kualifikasi = strtolower($sub->kualifikasi ?? '');

            if (str_contains($kualifikasi, 'suspend')) {
                $globalSuspend++;
            } elseif (!empty($sub->masa_berlaku)
                && \Carbon\Carbon::parse($sub->masa_berlaku)->gte($today)) {
                $globalBerlaku++;
            } else {
                $globalTidak++;
            }
        }
    }

    $statistik = [
        'berlaku'       => $globalBerlaku,
        'tidak_berlaku' => $globalTidak,
        'suspend'       => $globalSuspend,
    ];

    // =========================================================
    // RESPONSE AJAX
    // =========================================================
    if ($request->ajax()) {
        return response()->json([
            'html'      => view('backend.04_datajakon.01_bujkkonstruksi.partials.table', compact('data'))->render(),
            'statistik' => $statistik,
        ]);
    }

    return view('backend.04_datajakon.01_bujkkonstruksi.index', [
        'title'       => 'BUJK Konstruksi',
        'data'        => $data,
        'perPage'     => $perPage,
        'search'      => $search,
        'tahun'       => $tahun,
        'daftarTahun' => $daftarTahun,
        'statistik'   => $statistik,
    ]);
}

public function bebujkkonstruksiblora(Request $request)
{
    $perPage = $request->input('perPage', 5);
    $search  = $request->input('search');
    $tahun   = $request->input('tahun');

    $query = bujkkontraktor::query();

    // SEARCH
    if ($search) {
        $query->where(function ($q) use ($search) {
            $q->where('namalengkap', 'LIKE', "%{$search}%")
              ->orWhere('alamat', 'LIKE', "%{$search}%")
              ->orWhere('no_telepon', 'LIKE', "%{$search}%")
              ->orWhere('email', 'LIKE', "%{$search}%")
              ->orWhere('nomorindukberusaha', 'LIKE', "%{$search}%")
              ->orWhere('pju', 'LIKE', "%{$search}%")
              ->orWhere('no_akte', 'LIKE', "%{$search}%")
              ->orWhere('tanggal', 'LIKE', "%{$search}%")
              ->orWhere('nama_notaris', 'LIKE', "%{$search}%")
              ->orWhere('no_pengesahan', 'LIKE', "%{$search}%")
              ->orWhereHas('bujkkontraktorsub', function ($q2) use ($search) {
                  $q2->where('nama_pengurus', 'LIKE', "%{$search}%");
              })
              ->orWhereHas('asosiasimasjaki', function ($q2) use ($search) {
                  $q2->where('namaasosiasi', 'LIKE', "%{$search}%");
              });
        });
    }

    // FILTER TAHUN
    if ($tahun) {
        $query->whereYear('created_at', $tahun);
    }

    // DATA UTAMA
    $data = $query->orderBy('created_at', 'desc')->paginate($perPage);

    // HITUNG STATUS SUB
    $today = \Carbon\Carbon::today();
    $ids = $data->pluck('id')->toArray();

    $subsByParent = collect();
    if (!empty($ids)) {
        $subsByParent = DB::table('bujkkontraktorsubs')
            ->whereIn('bujkkontraktor_id', $ids)
            ->get()
            ->groupBy('bujkkontraktor_id');
    }

    $data->getCollection()->transform(function ($item) use ($subsByParent, $today) {
        $subs = $subsByParent->get($item->id, collect());
        $total = $subs->count();
        $berlaku = 0; $tidak = 0; $suspend = 0;

        foreach ($subs as $sub) {
            $kualifikasi = strtolower($sub->kualifikasi ?? '');
            if (str_contains($kualifikasi, 'suspend')) {
                $suspend++;
            } elseif (!empty($sub->masa_berlaku) && \Carbon\Carbon::parse($sub->masa_berlaku)->gte($today)) {
                $berlaku++;
            } else {
                $tidak++;
            }
        }

        $status = 'Belum Ada';
        if ($total > 0) {
            if ($suspend > 0) $status = 'Suspend';
            elseif ($berlaku > 0) $status = 'Berlaku';
            else $status = 'Tidak Berlaku';
        }

        $item->status_sub     = $status;
        $item->status_total   = $total;
        $item->status_berlaku = $berlaku;
        $item->status_tidak   = $tidak;
        $item->status_suspend = $suspend;
        return $item;
    });

    // DAFTAR TAHUN
    $daftarTahun = bujkkontraktor::selectRaw('YEAR(created_at) as tahun')
        ->whereNotNull('created_at')
        ->groupBy('tahun')
        ->orderBy('tahun', 'desc')
        ->pluck('tahun');

    // STATISTIK
    $globalBerlaku = 0; $globalTidak = 0; $globalSuspend = 0;
    if (!empty($ids)) {
        $allSubs = DB::table('bujkkontraktorsubs')->whereIn('bujkkontraktor_id', $ids)->get();
        foreach ($allSubs as $sub) {
            $kualifikasi = strtolower($sub->kualifikasi ?? '');
            if (str_contains($kualifikasi, 'suspend')) {
                $globalSuspend++;
            } elseif (!empty($sub->masa_berlaku) && \Carbon\Carbon::parse($sub->masa_berlaku)->gte($today)) {
                $globalBerlaku++;
            } else {
                $globalTidak++;
            }
        }
    }
    $statistik = [
        'berlaku' => $globalBerlaku, 'tidak_berlaku' => $globalTidak, 'suspend' => $globalSuspend,
    ];

    // RESPONSE AJAX (DIPERBAIKI)
    if ($request->ajax()) {
        return response()->json([
            // Pastikan nama view partial kamu benar
            'html' => view('backend.04_datajakon.01_bujkkonstruksi.partials.table', compact('data'))->render(),
            'statistik' => $statistik,
        ]);
    }

    return view('backend.04_datajakon.01_bujkkonstruksi.bujkkonstruktiblora', [
        'title' => 'BUJK Konstruksi',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search,
        'tahun' => $tahun,
        'daftarTahun' => $daftarTahun,
        'statistik' => $statistik,
    ]);
}

public function updateKlasifikasi(Request $request, $id)
{
    // 1. Validasi Input
    $request->validate([
        'nama_pengurus'           => 'nullable|string|max:255',
        'sub_klasifikasi_layanan' => 'nullable|string|max:255',
        'kode'                    => 'nullable|string|max:255',
        'kualifikasi'             => 'nullable|string|max:255',
        'penerbit'                => 'nullable|string|max:255',
        'tanggal_terbit'          => 'nullable|date',
        'masa_berlaku'            => 'nullable|date',
        'nama_psjk'               => 'nullable|string|max:255',
        'sub_kualifikasi_bu'      => 'nullable|string|max:255',
    ]);

    // 2. Cari data berdasarkan ID
    $sub = bujkkontraktorsub::findOrFail($id);

    // 3. Proses Update
    $sub->update([
        'nama_pengurus'           => $request->nama_pengurus,
        'sub_klasifikasi_layanan' => $request->sub_klasifikasi_layanan,
        'kode'                    => $request->kode,
        'kualifikasi'             => $request->kualifikasi,
        'penerbit'                => $request->penerbit,
        'tanggal_terbit'          => $request->tanggal_terbit,
        'masa_berlaku'            => $request->masa_berlaku,
        'nama_psjk'               => $request->nama_psjk,
        'sub_kualifikasi_bu'      => $request->sub_kualifikasi_bu,
    ]);

    // 4. Redirect dengan flash session 'update'
    return redirect()->back()->with('update', 'Data Berhasil Di Update!');
}


}


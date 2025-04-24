<?php

namespace App\Http\Controllers;

use App\Models\renstra;
use App\Models\sbulampiran1;
use App\Models\sbulampiran2;
use App\Models\sbulampiran3;
use App\Models\standarbiayaumum;
use App\Models\profiljakonidentitasopd;
use App\Models\profiljakoninformasi;
use App\Models\profiljakonkabid;
use App\Models\profiljakonkepaladinas;
use App\Models\profiljakonpersonil;
use App\Models\profiljakonsipjaki;
use App\Models\profiljakonsubkoordinator;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


use App\Models\struktur; // Pastikan namespace model sesuai dengan struktur direktori
use App\Models\strukturdinas;
use App\Models\tupoksi;

class StrukturController extends Controller
{
    public function strukturkedinasan()
    {
        $data= strukturdinas::all(); // Menggunakan paginate() untuk pagination
        $user = Auth::user();

        return view('backend.02_kelembagaan.01_strukturkedinasan.index', [
            'title' => 'Struktur Organisasi DPUPR Kabupaten Blora Provinsi Jawa Tengah',
            'data' => $data, // Mengirimkan data paginasi ke view
            'user' => $user, // Mengirimkan data paginasi ke view
        ]);
    }

                public function updatestruktur($judul)
                {
                    // Cari data undang-undang berdasarkan nilai 'judul'
                    $strukturdinas = strukturdinas::where('judul', $judul)->firstOrFail();
                    $user = Auth::user();

                    // Tampilkan form update dengan data yang ditemukan
                    return view('backend.02_kelembagaan.01_strukturkedinasan.update', [
                        'data' => $strukturdinas,
                        'user' => $user,
                        'title' => 'Update Struktur Organisasi DPUPR Kab Blora'
                    ]);
                }

                // -------------------- UPDATE DATA CREATE UPDATE UNDANG UNDANG JASA KONSTRUKSI ----------------------
                public function updatestrukturcreate(Request $request, $judul)
                {
                    // Validasi input dengan pesan kustom
                    $validatedData = $request->validate([
                        'judul' => 'required|string|max:255',
                        'keterangan' => 'required|string',
                        'peraturan' => 'nullable|file|mimes:pdf|max:5120',
                    ], [
                        'judul.required' => 'Judul Wajib Diisi!',
                        'judul.max' => 'Judul tidak boleh lebih dari 255 karakter.',
                        'keterangan.required' => 'Keterangan wajib diisi. Jangan biarkan kosong!',
                        'peraturan.mimes' => 'File yang diunggah harus berformat PDF.',
                        'peraturan.max' => 'Ukuran file PDF terlalu besar, maksimal 5MB.',
                    ]);

                    // Cari data strukturdinas berdasarkan judul
                    $strukturdinas = strukturdinas::where('judul', $judul)->firstOrFail();

                    // Default file path
                    $filePath = $strukturdinas->peraturan;

                    // Upload file jika ada
                    if ($request->hasFile('peraturan')) {
                        // Hapus file lama jika ada
                        if ($filePath && file_exists(public_path($filePath))) {
                            unlink(public_path($filePath));
                        }

                        // Simpan file baru
                        $file = $request->file('peraturan');
                        $namaFile = time() . '_' . $file->getClientOriginalName();
                        $tujuanPath = '01_kelembagaan/01_dinas';
                        $file->move(public_path($tujuanPath), $namaFile);
                        $filePath = $tujuanPath . '/' . $namaFile;
                    }

                    // Update database
                    $strukturdinas->update([
                        'judul' => $validatedData['judul'],
                        'keterangan' => $validatedData['keterangan'],
                        'peraturan' => $filePath,
                    ]);

                    session()->flash('update', 'Data Berhasil Diupdate!');
                    return redirect('/bestrukturdinas');
                }
    //    ======================================================================

    public function renstra()
    {
        $data= renstra::all(); // Menggunakan paginate() untuk pagination
        $user = Auth::user();

        return view('backend.01_struktur.02_renstra.index', [
            'title' => 'Rencana Strategis Program & Jasa Konstruksi',
            'data' => $data, // Mengirimkan data paginasi ke view
            'user' => $user, // Mengirimkan data paginasi ke view
        ]);
    }

                // -------------------- UPDATE DATA PERATURAN GUBERNUR JASA KONSTRUKSI ----------------------
                public function updaterenstra($judul)
                {
                    // Cari data undang-undang berdasarkan nilai 'judul'
                    $renstra = renstra::where('judul', $judul)->firstOrFail();
                    $user = Auth::user();

                    // Tampilkan form update dengan data yang ditemukan
                    return view('backend.01_struktur.02_renstra.update', [
                        'renstra' => $renstra,
                        'user' => $user,
                        'title' => 'Update Rencana Strategis'
                    ]);
                }

                // -------------------- UPDATE DATA CREATE UPDATE UNDANG UNDANG JASA KONSTRUKSI ----------------------
                        public function createupdaterenstra(Request $request, $judul)
                    {
                        // Validasi input
                        $request->validate([
                            'judul' => 'required|string|max:255',
                            // 'peraturan' => 'required|file', // Validasi file sesuai jenis dan ukuran
                        ]);

                        // Cari data undang-undang berdasarkan nilai 'judul'
                        $renstra = renstra::where('judul', $judul)->firstOrFail();

                        // Simpan file dan ambil path-nya
                        $filePath = null;
                        if ($request->hasFile('peraturan')) {
                            $file = $request->file('peraturan');
                            $filePath = $file->store('struktur/02_renstra', 'public'); // Menyimpan di storage/app/public/undangundang
                        }

                        // Update data undang-undang dengan data dari form
                        $renstra->update([
                            'judul' => $request->input('judul'),
                            'peraturan' => $filePath ? $filePath : $renstra->peraturan, // Gunakan path baru jika ada file
                        ]);


                        session()->flash('update', 'Data Rencana Strategis Berhasil Diupdate !');
                        // Redirect ke halaman yang sesuai
                        return redirect('/renstra');
                               }

// ===============================================

    public function tupoksi()
    {
        $data= tupoksi::all(); // Menggunakan paginate() untuk pagination
        $user = Auth::user();

        return view('backend.01_struktur.03_tupoksi.index', [
            'title' => 'Tupoksi Program & Jasa Konstruksi',
            'data' => $data, // Mengirimkan data paginasi ke view
            'user' => $user, // Mengirimkan data paginasi ke view
        ]);
    }

                    // -------------------- UPDATE DATA PERATURAN GUBERNUR JASA KONSTRUKSI ----------------------
                    public function updatetupoksi($judul)
                    {
                        // Cari data undang-undang berdasarkan nilai 'judul'
                        $tupoksi = tupoksi::where('judul', $judul)->firstOrFail();
                        $user = Auth::user();

                        // Tampilkan form update dengan data yang ditemukan
                        return view('backend.01_struktur.03_tupoksi.update', [
                            'tupoksi' => $tupoksi,
                            'user' => $user,
                            'title' => 'Update Tupoksi Program'
                        ]);
                    }

                    // -------------------- UPDATE DATA CREATE UPDATE UNDANG UNDANG JASA KONSTRUKSI ----------------------
                            public function createupdatetupoksi(Request $request, $judul)
                        {
                            // Validasi input
                            $request->validate([
                                'judul' => 'required|string|max:255',
                                // 'peraturan' => 'required|file', // Validasi file sesuai jenis dan ukuran
                            ]);

                            // Cari data undang-undang berdasarkan nilai 'judul'
                            $tupoksi = tupoksi::where('judul', $judul)->firstOrFail();

                            // Simpan file dan ambil path-nya
                            $filePath = null;
                            if ($request->hasFile('peraturan')) {
                                $file = $request->file('peraturan');
                                $filePath = $file->store('struktur/03_tupoksi', 'public'); // Menyimpan di storage/app/public/undangundang
                            }

                            // Update data undang-undang dengan data dari form
                            $tupoksi->update([
                                'judul' => $request->input('judul'),
                                'peraturan' => $filePath ? $filePath : $tupoksi->peraturan, // Gunakan path baru jika ada file
                            ]);


                            session()->flash('update', 'Data Tupoksi Berhasil Diupdate !');
                            // Redirect ke halaman yang sesuai
                            return redirect('/tupoksi');
                                   }

// ===============================================
// DATABASE SURAT PERATURAN STANDAR BIAYA UMUM PUPR
// ===============================================

public function standarbiayaumum()
{
    $data= standarbiayaumum::paginate(15); // Menggunakan paginate() untuk pagination
    $user = Auth::user();

    return view('backend.03_datajakon.03_standarbiayaumum.index', [
        'title' => 'Standar Biaya Umum',
        'data' => $data, // Mengirimkan data paginasi ke view
        'user' => $user, // Mengirimkan data paginasi ke view
    ]);
}


public function standarbiayaumumshowbyjudul($judul)
{
    $data = standarbiayaumum::where('judul', $judul)->firstOrFail();
    $user = Auth::user();

    return view('backend.03_datajakon.03_standarbiayaumum.show', [
        'data' => $data,
        'user' => $user,
        'title' => 'Details Standar Biaya Umum',
    ]);
}

             // -------------------- UPDATE DATA STANDAR BIAYA UMUM ----------------------
             public function updatestandarbiayaumum($judul)
             {
                 // Cari data undang-undang berdasarkan nilai 'judul'
                 $standarbiayaumum = standarbiayaumum::where('judul', $judul)->firstOrFail();
                 $user = Auth::user();

                 // Tampilkan form update dengan data yang ditemukan
                 return view('backend.03_datajakon.03_standarbiayaumum.update', [
                     'standarbiayaumum' => $standarbiayaumum,
                     'user' => $user,
                     'title' => 'Update Standar Biaya Umum'
                 ]);
             }

             // -------------------- UPDATE DATA CREATE DATA STANDAR BIAYA UMUM ----------------------
                     public function createupdatestandarbiayaumum(Request $request, $judul)
                 {
                     // Validasi input
                     $request->validate([
                         'judul' => 'required|string|max:255',
                         // 'peraturan' => 'required|file', // Validasi file sesuai jenis dan ukuran
                     ]);

                     // Cari data undang-undang berdasarkan nilai 'judul'
                     $standarbiayaumum = standarbiayaumum::where('judul', $judul)->firstOrFail();

                     // Simpan file dan ambil path-nya
                     $filePath = null;
                     if ($request->hasFile('peraturan')) {
                         $file = $request->file('peraturan');
                         $filePath = $file->store('standarbiayaumum', 'public'); // Menyimpan di storage/app/public/undangundang
                     }

                     // Update data undang-undang dengan data dari form
                     $standarbiayaumum->update([
                         'judul' => $request->input('judul'),
                         'peraturan' => $filePath ? $filePath : $standarbiayaumum->peraturan, // Gunakan path baru jika ada file
                     ]);


                     session()->flash('update', 'Data Standar Biaya Berhasil Diupdate !');
                     // Redirect ke halaman yang sesuai
                     return redirect('/standarbiayaumum');
                            }


// ------------ CREATE STANDAR BIAYA UMUM   ----------------

public function createstandarbiayaumum()
{
    $user = Auth::user();

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.03_datajakon.03_standarbiayaumum.create', [
        'title' => 'Create Standar Biaya Umum',
        'user' => $user,
    ]);
}

public function createstorestandarbiayaumum(Request $request)
{
    // Validasi input
    $request->validate([
        'judul' => 'required|string|max:255',
        'peraturan' => 'required|file|mimes:pdf|max:20480', // 20MB max file size
    ]);

    // Simpan file dan ambil path
    $filePath = $request->file('peraturan')->store('standarbiayaumum', 'public');

    // Buat entri baru di database
    standarbiayaumum::create([
        'judul' => $request->input('judul'),
        'peraturan' => $filePath,
    ]);

    session()->flash('create', 'Data Berhasil Di Tambahkan !');
    // Redirect ke halaman yang sesuai
    return redirect('/standarbiayaumum');
}


    // ==================== DELETE SURAT KEPUTUSAN MENTERI

    public function deletestandarbiayaumum(Request $request, $judul)
{
    // Cari entri berdasarkan judul
    $entry = standarbiayaumum::where('judul', $judul)->first();

    if ($entry) {
        // Hapus file terkait jika ada
        if (Storage::disk('public')->exists($entry->peraturan)) {
            Storage::disk('public')->delete($entry->peraturan);
        }

        // Hapus entri dari database
        $entry->delete();

        // Set pesan flash untuk sukses
        session()->flash('delete', 'Data Berhasil Dihapus!');
    } else {
        // Set pesan flash jika data tidak ditemukan
        session()->flash('error', 'Data Tidak Ditemukan!');
    }

    // Redirect ke halaman yang sesuai
    return redirect('/standarbiayaumum');
}


// ===============================================
// DATABASE STANDAR BIAYA UMUM LAMPIRAN 1
// ===============================================

public function sbulampiran1()
{
    $data= sbulampiran1::paginate(15); // Menggunakan paginate() untuk pagination
    $user = Auth::user();

    return view('backend.03_datajakon.03_standarbiayaumum.lampiran1.index', [
        'title' => 'Lampiran 1',
        'data' => $data, // Mengirimkan data paginasi ke view
        'user' => $user, // Mengirimkan data paginasi ke view
    ]);
}


public function sbulampiran1showbyjudul($judul)
{
    $data = sbulampiran1::where('judul', $judul)->firstOrFail();
    $user = Auth::user();

    return view('backend.03_datajakon.03_standarbiayaumum.lampiran1.show', [
        'data' => $data,
        'user' => $user,
        'title' => 'Details Lampiran 1',
    ]);
}

// ===============================================
// DATABASE STANDAR BIAYA UMUM LAMPIRAN 1
// ===============================================

public function sbulampiran2()
{
    $data= sbulampiran2::paginate(15); // Menggunakan paginate() untuk pagination
    $user = Auth::user();

    return view('backend.03_datajakon.03_standarbiayaumum.lampiran2.index', [
        'title' => 'Lampiran 2',
        'data' => $data, // Mengirimkan data paginasi ke view
        'user' => $user, // Mengirimkan data paginasi ke view
    ]);
}


public function sbulampiran2showbyjudul($judul)
{
    $data = sbulampiran2::where('judul', $judul)->firstOrFail();
    $user = Auth::user();

    return view('backend.03_datajakon.03_standarbiayaumum.lampiran2.show', [
        'data' => $data,
        'user' => $user,
        'title' => 'Details Lampiran 2',
    ]);
}

// ===============================================
// DATABASE STANDAR BIAYA UMUM LAMPIRAN 3
// ===============================================

public function sbulampiran3()
{
    $data= sbulampiran3::paginate(15); // Menggunakan paginate() untuk pagination
    $user = Auth::user();

    return view('backend.03_datajakon.03_standarbiayaumum.lampiran3.index', [
        'title' => 'Lampiran 3',
        'data' => $data, // Mengirimkan data paginasi ke view
        'user' => $user, // Mengirimkan data paginasi ke view
    ]);
}


public function sbulampiran3showbyjudul($judul)
{
    $data = sbulampiran3::where('judul', $judul)->firstOrFail();
    $user = Auth::user();

    return view('backend.03_datajakon.03_standarbiayaumum.lampiran3.show', [
        'data' => $data,
        'user' => $user,
        'title' => 'Details Lampiran 3',
    ]);
}

// --------------------------------------- DATA FRONTEND FROPIL -------------------


public function strukturdpuprkabblora()
{
    $data= strukturdinas::all(); // Menggunakan paginate() untuk pagination
    $user = Auth::user();

    return view('frontend.01_masjaki_kelembagaan.01_strukturdpuprblora.index', [
        'title' => 'Struktur Organisasi DPUPR Kabupaten Blora',
        'data' => $data, // Mengirimkan data paginasi ke view
        'user' => $user, // Mengirimkan data paginasi ke view
    ]);
}

// ==============================================================================================================
public function rencanastrategisdpuprkabblora()
{
    $data = renstra::all(); // Menggunakan paginate() untuk pagination
    $dataidentitasopd = profiljakonidentitasopd::all(); // Menggunakan paginate() untuk pagination
    $datakepaladinas = profiljakonkepaladinas::all(); // Menggunakan paginate() untuk pagination
    $datakabid = profiljakonkabid::all(); // Menggunakan paginate() untuk pagination
    $datasubkoordinator = profiljakonsubkoordinator::all(); // Menggunakan paginate() untuk pagination
    $datainformasi = profiljakoninformasi::all(); // Menggunakan paginate() untuk pagination
    $datasipjaki = profiljakonsipjaki::all(); // Menggunakan paginate() untuk pagination
    $datapersonil = profiljakonpersonil::all(); // Menggunakan paginate() untuk pagination

    $user = Auth::user();

    return view('frontend.01_masjaki_kelembagaan.02_profiljakon.index', [
        'title' => 'Profil Jakon DPUPR Kabupaten Blora',
        'data' => $data, // Mengirimkan data paginasi ke view
        'user' => $user, // Mengirimkan data paginasi ke view

        'dataidentitasopd' => $dataidentitasopd, // Mengirimkan data paginasi ke view
        'datakepaladinas' => $datakepaladinas, // Mengirimkan data paginasi ke view
        'datakabid' => $datakabid, // Mengirimkan data paginasi ke view
        'datasubkoordinator' => $datasubkoordinator, // Mengirimkan data paginasi ke view
        'datainformasi' => $datainformasi, // Mengirimkan data paginasi ke view
        'datasipjaki' => $datasipjaki, // Mengirimkan data paginasi ke view
        'datapersonil' => $datapersonil, // Mengirimkan data paginasi ke view

    ]);
}

public function beprofiljakon()
{
    // $data = renstra::all(); // Menggunakan paginate() untuk pagination
    // $dataidentitasopd = profiljakonidentitasopd::all(); // Menggunakan paginate() untuk pagination
    // $datakepaladinas = profiljakonkepaladinas::all(); // Menggunakan paginate() untuk pagination
    // $datakabid = profiljakonkabid::all(); // Menggunakan paginate() untuk pagination
    // $datasubkoordinator = profiljakonsubkoordinator::all(); // Menggunakan paginate() untuk pagination
    // $datainformasi = profiljakoninformasi::all(); // Menggunakan paginate() untuk pagination
    // $datasipjaki = profiljakonsipjaki::all(); // Menggunakan paginate() untuk pagination
    // $datapersonil = profiljakonpersonil::all(); // Menggunakan paginate() untuk pagination

    $user = Auth::user();

    return view('backend.02_kelembagaan.02_profiljakon.index', [
        'title' => 'Profil Jakon DPUPR Kabupaten Blora',
        // 'data' => $data, // Mengirimkan data paginasi ke view
        'user' => $user, // Mengirimkan data paginasi ke view

        // 'dataidentitasopd' => $dataidentitasopd, // Mengirimkan data paginasi ke view
        // 'datakepaladinas' => $datakepaladinas, // Mengirimkan data paginasi ke view
        // 'datakabid' => $datakabid, // Mengirimkan data paginasi ke view
        // 'datasubkoordinator' => $datasubkoordinator, // Mengirimkan data paginasi ke view
        // 'datainformasi' => $datainformasi, // Mengirimkan data paginasi ke view
        // 'datasipjaki' => $datasipjaki, // Mengirimkan data paginasi ke view
        // 'datapersonil' => $datapersonil, // Mengirimkan data paginasi ke view

    ]);
}

public function beinformasiopd()
{
    $data = renstra::all(); // Menggunakan paginate() untuk pagination

    $user = Auth::user();

    return view('backend.02_kelembagaan.02_profiljakon.01_judul.index', [
        'title' => 'Profil Jakon Informasi OPD',
        'data' => $data, // Mengirimkan data paginasi ke view
        'user' => $user, // Mengirimkan data paginasi ke view

    ]);
}

// MENU UPDATE DAN UPDATE CREATE INFORMASI OPD ----------------------------------------------------------------------------

public function beinformasiopdupdate($id)
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    $jakonidentitasopd = renstra::where('id', $id)->firstOrFail();
    $user = Auth::user();

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.02_kelembagaan.02_profiljakon.01_judul.update', [
        'data' => $jakonidentitasopd,
        'user' => $user,
        'title' => 'Update Informasi Keterangan OPD'
    ]);
}

// -------------------- UPDATE DATA CREATE UPDATE UNDANG UNDANG JASA KONSTRUKSI ----------------------
public function beinformasiopdupdatecreate(Request $request, $id)
{
    // Validasi input dengan pesan kustom
    $validatedData = $request->validate([
        'judul' => 'required|string|max:255',
        'keterangan' => 'required|string',
        // 'peraturan' => 'nullable|file|mimes:pdf|max:5120', // Validasi untuk file PDF
    ], [
        'judul.required' => 'Judul Wajib Diisi!',
        'judul.max' => 'Judul tidak boleh lebih dari 255 karakter.',
        'keterangan.required' => 'Keterangan wajib diisi !',
        // 'peraturan.mimes' => 'File yang diunggah harus berformat PDF.',
        // 'peraturan.max' => 'Ukuran file PDF terlalu besar, maksimal 5MB.',
    ]);

    // Cari data strukturdinas berdasarkan nilai 'judul'
    $judulopd = renstra::where('id', $id)->firstOrFail();


    // Gunakan $validatedData untuk update, agar lebih jelas dan rapi
    $judulopd->update([
        'judul' => $validatedData['judul'],  // Menggunakan data yang sudah tervalidasi
        'keterangan' => $validatedData['keterangan'],
        // 'peraturan' => $filePath, // Menyimpan path file yang baru
    ]);

    // Flash session untuk menampilkan pesan sukses
    session()->flash('update', 'Data Berhasil Diupdate!');

    // Redirect ke halaman yang sesuai
    return redirect('/beinformasiopd');
}


public function beinfoopd()
{
    $data = profiljakonidentitasopd::all(); // Menggunakan paginate() untuk pagination

    $user = Auth::user();

    return view('backend.02_kelembagaan.02_profiljakon.02_informasiopd.index', [
        'title' => 'Profil Jakon Informasi Keterangan OPD',
        'data' => $data, // Mengirimkan data paginasi ke view
        'user' => $user, // Mengirimkan data paginasi ke view

    ]);
}

// MENU UPDATE DAN UPDATE CREATE INFORMASI OPD ----------------------------------------------------------------------------

public function beinfoopdupdate($id)
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    $jakoninformasiopd = profiljakonidentitasopd::where('id', $id)->firstOrFail();
    $user = Auth::user();

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.02_kelembagaan.02_profiljakon.02_informasiopd.update', [
        'data' => $jakoninformasiopd,
        'user' => $user,
        'title' => 'Update Informasi Keterangan Organisasi Perangkat Daerah'
    ]);
}

// -------------------- UPDATE DATA INFORMASI OPD ----------------------
public function beinfoopdupdatecreate(Request $request, $id)
{
    // Validasi input dengan pesan kustom
    $validatedData = $request->validate([
        'namaopd' => 'nullable|string|max:255', // Menambahkan validasi yang benar
        'alamatopd' => 'required|string', // Tipe text, tidak perlu batasan max karena bisa lebih panjang
        'rtrw' => 'required|string|max:255',
        'kodepos' => 'required|string|max:255',
        'kelurahan' => 'required|string|max:255',
        'kecamatan' => 'required|string|max:255',
        'kota' => 'required|string|max:255',
        'provinsi' => 'required|string|max:255',
        'negara' => 'required|string|max:255',
        'posisigeografis' => 'nullable|string', // Tipe text, tidak perlu batasan max
        'tipedinas' => 'required|string|max:255',
    ], [
        'namaopd.required' => 'Nama OPD wajib diisi!',
        'alamatopd.required' => 'Alamat OPD wajib diisi!',
        'rtrw.required' => 'RT/RW wajib diisi!',
        'kodepos.required' => 'Kode pos wajib diisi!',
        'kelurahan.required' => 'Kelurahan wajib diisi!',
        'kecamatan.required' => 'Kecamatan wajib diisi!',
        'kota.required' => 'Kota wajib diisi!',
        'provinsi.required' => 'Provinsi wajib diisi!',
        'negara.required' => 'Negara wajib diisi!',
        'posisigeografis.required' => 'Posisi geografis wajib diisi!',
        'tipedinas.required' => 'Tipe dinas wajib diisi!',
        'namaopd.string' => 'Nama OPD harus berupa teks!',
        'alamatopd.string' => 'Alamat OPD harus berupa teks!',
        'posisigeografis.string' => 'Posisi geografis harus berupa teks!',
        'namaopd.max' => 'Nama OPD tidak boleh lebih dari 255 karakter!',
    ]);

    // Cari data strukturdinas berdasarkan nilai 'judul'
    $jakonidentitasss = profiljakonidentitasopd::where('id', $id)->firstOrFail();

    // Gunakan $validatedData untuk update, agar lebih jelas dan rapi
    $jakonidentitasss->update([
        'namaopd' => $validatedData['namaopd'],  // Menggunakan data yang sudah tervalidasi
        'alamatopd' => $validatedData['alamatopd'],  // Menambahkan kolom alamatopd
        'rtrw' => $validatedData['rtrw'],  // Menambahkan kolom rtrw
        'kodepos' => $validatedData['kodepos'],  // Menambahkan kolom kodepos
        'kelurahan' => $validatedData['kelurahan'],  // Menambahkan kolom kelurahan
        'kecamatan' => $validatedData['kecamatan'],  // Menambahkan kolom kecamatan
        'kota' => $validatedData['kota'],  // Menambahkan kolom kota
        'provinsi' => $validatedData['provinsi'],  // Menambahkan kolom provinsi
        'negara' => $validatedData['negara'],  // Menambahkan kolom negara
        'posisigeografis' => $validatedData['posisigeografis'],  // Menambahkan kolom posisigeografis
        'tipedinas' => $validatedData['tipedinas'],  // Menambahkan kolom tipedinas
    ]);

    // Flash session untuk menampilkan pesan sukses
    session()->flash('update', 'Data Berhasil Diupdate!');

    // Redirect ke halaman yang sesuai
    return redirect('/beinfoopd');
}




// ================================================================================================================

public function bekepaladinas()
{
    $data = profiljakonkepaladinas::all(); // Menggunakan paginate() untuk pagination

    $user = Auth::user();

    return view('backend.02_kelembagaan.02_profiljakon.03_kepaladinas.index', [
        'title' => 'Profil Jakon Informasi Kepala Dinas',
        'data' => $data, // Mengirimkan data paginasi ke view
        'user' => $user, // Mengirimkan data paginasi ke view

    ]);
}

// MENU UPDATE DAN UPDATE KEPADA DINAS  ----------------------------------------------------------------------------

public function bekepaladinasupdate($id)
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    $jakonkepaladinas = profiljakonkepaladinas::where('id', $id)->firstOrFail();
    $user = Auth::user();

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.02_kelembagaan.02_profiljakon.03_kepaladinas.update', [
        'data' => $jakonkepaladinas,
        'user' => $user,
        'title' => 'Update Informasi Kepala Dinas'
    ]);
}

// -------------------- UPDATE DATA KEPALA DINAS ----------------------
public function bekepaladinasupdatecreate(Request $request, $id)
{
    // Validasi input dengan pesan kustom
    $validatedData = $request->validate([
        'namalengkap' => 'required|string|max:255', // Validasi untuk Nama Lengkap
        'nip' => 'required|string|max:255', // Validasi untuk NIP
        'ttl' => 'required|date', // Validasi untuk Tempat Tanggal Lahir
        'pangkatgolongan' => 'required|string|max:255', // Validasi untuk Pangkat Golongan
        'jabatan' => 'required|string|max:255', // Validasi untuk Jabatan
        'perangkatdaerah' => 'required|string|max:255', // Validasi untuk Perangkat Daerah
        'pendidikanterakhir' => 'required|string|max:255', // Validasi untuk Pendidikan Terakhir
    ], [
        'namalengkap.required' => 'Nama Lengkap wajib diisi!',
        'nip.required' => 'NIP wajib diisi!',
        'ttl.required' => 'Tempat Tanggal Lahir wajib diisi dan harus berupa format tanggal yang valid!',
        'pangkatgolongan.required' => 'Pangkat Golongan wajib diisi!',
        'jabatan.required' => 'Jabatan wajib diisi!',
        'perangkatdaerah.required' => 'Perangkat Daerah wajib diisi!',
        'pendidikanterakhir.required' => 'Pendidikan Terakhir wajib diisi!',
    ]);

    // Cari data strukturdinas berdasarkan nilai 'judul'
    $jakonkepaladinas = profiljakonkepaladinas::where('id', $id)->firstOrFail();

    // Gunakan $validatedData untuk update, agar lebih jelas dan rapi
    $jakonkepaladinas->update([
        'namalengkap' => $validatedData['namalengkap'],  // Menggunakan data yang sudah tervalidasi
        'nip' => $validatedData['nip'],  // Menggunakan data yang sudah tervalidasi
        'ttl' => $validatedData['ttl'],  // Menggunakan data yang sudah tervalidasi
        'pangkatgolongan' => $validatedData['pangkatgolongan'],  // Menggunakan data yang sudah tervalidasi
        'jabatan' => $validatedData['jabatan'],  // Menggunakan data yang sudah tervalidasi
        'perangkatdaerah' => $validatedData['perangkatdaerah'],  // Menggunakan data yang sudah tervalidasi
        'pendidikanterakhir' => $validatedData['pendidikanterakhir'],  // Menggunakan data yang sudah tervalidasi
    ]);

    // Flash session untuk menampilkan pesan sukses
    session()->flash('update', 'Data Berhasil Diupdate!');

    // Redirect ke halaman yang sesuai
    return redirect('/bekepaladinas');
}


public function bekabidbaru()
{
    $data = profiljakonkabid::all(); // Menggunakan paginate() untuk pagination

    $user = Auth::user();

    return view('backend.02_kelembagaan.02_profiljakon.04_kabid.index', [
        'title' => 'Profil Jakon Informasi Kepala Bidang Bangunan Gedung',
        'data' => $data, // Mengirimkan data paginasi ke view
        'user' => $user, // Mengirimkan data paginasi ke view

    ]);
}

// MENU UPDATE DAN UPDATE KABID BARU   ----------------------------------------------------------------------------

public function bekabidbaruupdate($id)
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    $jakonkabidbaru = profiljakonkabid::where('id', $id)->firstOrFail();
    $user = Auth::user();

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.02_kelembagaan.02_profiljakon.04_kabid.update', [
        'data' => $jakonkabidbaru,
        'user' => $user,
        'title' => 'Update Informasi Kepala Bidang'
    ]);
}

// -------------------- UPDATE DATA KEPALA DINAS ----------------------
public function bekabidbaruupdatecreate(Request $request, $id)
{
    // Validasi input dengan pesan kustom
    $validatedData = $request->validate([
        'namalengkap' => 'required|string|max:255', // Validasi untuk Nama Lengkap
        'nip' => 'required|string|max:255', // Validasi untuk NIP
        'ttl' => 'required|date', // Validasi untuk Tempat Tanggal Lahir
        'pangkatgolongan' => 'required|string|max:255', // Validasi untuk Pangkat Golongan
        'jabatan' => 'required|string|max:255', // Validasi untuk Jabatan
        'perangkatdaerah' => 'required|string|max:255', // Validasi untuk Perangkat Daerah
        'pendidikanterakhir' => 'required|string|max:255', // Validasi untuk Pendidikan Terakhir
    ], [
        'namalengkap.required' => 'Nama Lengkap wajib diisi!',
        'nip.required' => 'NIP wajib diisi!',
        'ttl.required' => 'Tempat Tanggal Lahir wajib diisi dan harus berupa format tanggal yang valid!',
        'pangkatgolongan.required' => 'Pangkat Golongan wajib diisi!',
        'jabatan.required' => 'Jabatan wajib diisi!',
        'perangkatdaerah.required' => 'Perangkat Daerah wajib diisi!',
        'pendidikanterakhir.required' => 'Pendidikan Terakhir wajib diisi!',
    ]);

    // Cari data strukturdinas berdasarkan nilai 'judul'
    $jakonkepaladinas = profiljakonkabid::where('id', $id)->firstOrFail();

    // Gunakan $validatedData untuk update, agar lebih jelas dan rapi
    $jakonkepaladinas->update([
        'namalengkap' => $validatedData['namalengkap'],  // Menggunakan data yang sudah tervalidasi
        'nip' => $validatedData['nip'],  // Menggunakan data yang sudah tervalidasi
        'ttl' => $validatedData['ttl'],  // Menggunakan data yang sudah tervalidasi
        'pangkatgolongan' => $validatedData['pangkatgolongan'],  // Menggunakan data yang sudah tervalidasi
        'jabatan' => $validatedData['jabatan'],  // Menggunakan data yang sudah tervalidasi
        'perangkatdaerah' => $validatedData['perangkatdaerah'],  // Menggunakan data yang sudah tervalidasi
        'pendidikanterakhir' => $validatedData['pendidikanterakhir'],  // Menggunakan data yang sudah tervalidasi
    ]);

    // Flash session untuk menampilkan pesan sukses
    session()->flash('update', 'Data Berhasil Diupdate!');

    // Redirect ke halaman yang sesuai
    return redirect('/bekabid');
}


public function besubbid()
{
    $data = profiljakonsubkoordinator::all(); // Menggunakan paginate() untuk pagination

    $user = Auth::user();

    return view('backend.02_kelembagaan.02_profiljakon.05_subkoordinator.index', [
        'title' => 'Profil Jakon Informasi Sub Koordinator Bidang Bangunan Gedung',
        'data' => $data, // Mengirimkan data paginasi ke view
        'user' => $user, // Mengirimkan data paginasi ke view

    ]);
}

// MENU UPDATE DAN UPDATE SUB KOORDINATOR   ----------------------------------------------------------------------------

public function besubbidupdate($id)
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    $jakonsubbidang = profiljakonsubkoordinator::where('id', $id)->firstOrFail();
    $user = Auth::user();

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.02_kelembagaan.02_profiljakon.05_subkoordinator.update', [
        'data' => $jakonsubbidang,
        'user' => $user,
        'title' => 'Update Informasi Sub Koordinator Bidang Bangunan Gedung'
    ]);
}

// -------------------- UPDATE DATA KEPALA DINAS ----------------------
public function besubbidcreateupdate(Request $request, $id)
{
    // Validasi input dengan pesan kustom
    $validatedData = $request->validate([
        'namalengkap' => 'required|string|max:255', // Validasi untuk Nama Lengkap
        'nip' => 'required|string|max:255', // Validasi untuk NIP
        'ttl' => 'required|date', // Validasi untuk Tempat Tanggal Lahir
        'pangkatgolongan' => 'required|string|max:255', // Validasi untuk Pangkat Golongan
        'jabatan' => 'required|string|max:255', // Validasi untuk Jabatan
        'perangkatdaerah' => 'required|string|max:255', // Validasi untuk Perangkat Daerah
        'pendidikanterakhir' => 'required|string|max:255', // Validasi untuk Pendidikan Terakhir
    ], [
        'namalengkap.required' => 'Nama Lengkap wajib diisi!',
        'nip.required' => 'NIP wajib diisi!',
        'ttl.required' => 'Tempat Tanggal Lahir wajib diisi dan harus berupa format tanggal yang valid!',
        'pangkatgolongan.required' => 'Pangkat Golongan wajib diisi!',
        'jabatan.required' => 'Jabatan wajib diisi!',
        'perangkatdaerah.required' => 'Perangkat Daerah wajib diisi!',
        'pendidikanterakhir.required' => 'Pendidikan Terakhir wajib diisi!',
    ]);

    // Cari data strukturdinas berdasarkan nilai 'judul'
    $jakonsubbkoordinator = profiljakonsubkoordinator::where('id', $id)->firstOrFail();

    // Gunakan $validatedData untuk update, agar lebih jelas dan rapi
    $jakonsubbkoordinator->update([
        'namalengkap' => $validatedData['namalengkap'],  // Menggunakan data yang sudah tervalidasi
        'nip' => $validatedData['nip'],  // Menggunakan data yang sudah tervalidasi
        'ttl' => $validatedData['ttl'],  // Menggunakan data yang sudah tervalidasi
        'pangkatgolongan' => $validatedData['pangkatgolongan'],  // Menggunakan data yang sudah tervalidasi
        'jabatan' => $validatedData['jabatan'],  // Menggunakan data yang sudah tervalidasi
        'perangkatdaerah' => $validatedData['perangkatdaerah'],  // Menggunakan data yang sudah tervalidasi
        'pendidikanterakhir' => $validatedData['pendidikanterakhir'],  // Menggunakan data yang sudah tervalidasi
    ]);

    // Flash session untuk menampilkan pesan sukses
    session()->flash('update', 'Data Berhasil Diupdate!');

    // Redirect ke halaman yang sesuai
    return redirect('/besubbid');
}


public function beinformasi()
{
    $data = profiljakoninformasi::all(); // Menggunakan paginate() untuk pagination

    $user = Auth::user();

    return view('backend.02_kelembagaan.02_profiljakon.06_keteranganopd.index', [
        'title' => 'Profil Jakon Keterangan Organisasi Perangkat Daerah',
        'data' => $data, // Mengirimkan data paginasi ke view
        'user' => $user, // Mengirimkan data paginasi ke view

    ]);
}


// MENU UPDATE DAN UPDATE KETERANGAN OPD   ----------------------------------------------------------------------------

public function beinformasiupdate($id)
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    $jakoninformasi = profiljakoninformasi::where('id', $id)->firstOrFail();
    $user = Auth::user();

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.02_kelembagaan.02_profiljakon.06_keteranganopd.update', [
        'data' => $jakoninformasi,
        'user' => $user,
        'title' => 'Update Informasi Keterangan Profil Jakon'
    ]);
}

// -------------------- UPDATE DATA KETERANGAN OPD ----------------------
public function beinformasicreateupdate(Request $request, $id)
{
    // Validasi input dengan pesan kustom
    $validatedData = $request->validate([
        'informasiopd' => 'required|string', // Validasi untuk Nama Lengkap
        'notelepon' => 'required|string|max:255', // Validasi untuk NIP
        'instagram' => 'required|string|max:255', // Validasi untuk Tempat Tanggal Lahir
        'tiktok' => 'required|string|max:255', // Validasi untuk Pangkat Golongan
        'email' => 'required|string|max:255', // Validasi untuk Jabatan
    ], [
        'informasiopd.required' => 'Nama OPD wajib diisi!',
        'notelepon.required' => 'No telepon wajib diisi!',
        'instagram.required' => 'Instagram Wajib Diisi',
        'tiktok.required' => 'Tiktok wajib diisi!',
        'email.required' => 'Email wajib diisi!',
    ]);

    // Cari data strukturdinas berdasarkan nilai 'judul'
    $jakoninformasi = profiljakoninformasi::where('id', $id)->firstOrFail();

    // Gunakan $validatedData untuk update, agar lebih jelas dan rapi
    $jakoninformasi->update([
        'informasiopd' => $validatedData['informasiopd'],  // Menggunakan data yang sudah tervalidasi
        'notelepon' => $validatedData['notelepon'],  // Menggunakan data yang sudah tervalidasi
        'instagram' => $validatedData['instagram'],  // Menggunakan data yang sudah tervalidasi
        'tiktok' => $validatedData['tiktok'],  // Menggunakan data yang sudah tervalidasi
        'email' => $validatedData['email'],  // Menggunakan data yang sudah tervalidasi
    ]);

    // Flash session untuk menampilkan pesan sukses
    session()->flash('update', 'Data Berhasil Diupdate!');

    // Redirect ke halaman yang sesuai
    return redirect('/beinformasi');
}


public function besipjaki()
{
    $data = profiljakonsipjaki::all(); // Menggunakan paginate() untuk pagination

    $user = Auth::user();

    return view('backend.02_kelembagaan.02_profiljakon.07_personilsipjaki.index', [
        'title' => 'Profil Jakon Personil Operator Sipjaki',
        'data' => $data, // Mengirimkan data paginasi ke view
        'user' => $user, // Mengirimkan data paginasi ke view

    ]);
}

// MENU UPDATE DAN UPDATE MENU OPERATOR SIPJAKI   ----------------------------------------------------------------------------

public function besipjakiupdate($id)
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    $jakonoperatossipjaki = profiljakonsipjaki::where('id', $id)->firstOrFail();
    $user = Auth::user();

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.02_kelembagaan.02_profiljakon.07_personilsipjaki.update', [
        'data' => $jakonoperatossipjaki,
        'user' => $user,
        'title' => 'Update Operator Sipjaki'
    ]);
}

// -------------------- UPDATE DATA MENU OPERATOR SIPJAKI  ----------------------
public function besipjakicreateupdate(Request $request, $id)
{
    // Validasi input dengan pesan kustom
    $validatedData = $request->validate([
        'nomor' => 'required|string|max:255', // Validasi untuk Nama Lengkap
        'operator1' => 'required|string|max:255', // Validasi untuk NIP
        'operator2' => 'required|string|max:255', // Validasi untuk NIP
        'operator3' => 'required|string|max:255', // Validasi untuk NIP
        'operator4' => 'required|string|max:255', // Validasi untuk NIP
    ], [
        'nomor.required' => 'Nomor wajib diisi!',
        'operator1.required' => 'Operator wajib diisi!',
        'operator2.required' => 'Operator wajib diisi!',
        'operator3.required' => 'Operator wajib diisi!',
        'operator4.required' => 'Operator wajib diisi!',

    ]);

    // Cari data strukturdinas berdasarkan nilai 'judul'
    $jakonoperatossipjaki = profiljakonsipjaki::where('id', $id)->firstOrFail();

    // Gunakan $validatedData untuk update, agar lebih jelas dan rapi
    $jakonoperatossipjaki->update([
        'nomor' => $validatedData['nomor'],  // Menggunakan data yang sudah tervalidasi
        'operator1' => $validatedData['operator1'],  // Menggunakan data yang sudah tervalidasi
        'operator2' => $validatedData['operator2'],  // Menggunakan data yang sudah tervalidasi
        'operator3' => $validatedData['operator3'],  // Menggunakan data yang sudah tervalidasi
        'operator4' => $validatedData['operator4'],  // Menggunakan data yang sudah tervalidasi
    ]);

    // Flash session untuk menampilkan pesan sukses
    session()->flash('update', 'Data Berhasil Diupdate!');

    // Redirect ke halaman yang sesuai
    return redirect('/besipjaki');
}


public function bejabatan()
{
    $data = profiljakonpersonil::all(); // Menggunakan paginate() untuk pagination

    $user = Auth::user();

    return view('backend.02_kelembagaan.02_profiljakon.08_jabatanfungsional.index', [
        'title' => 'Profil Jakon Jabatan Fungsioanal Jasa Konstruksi',
        'data' => $data, // Mengirimkan data paginasi ke view
        'user' => $user, // Mengirimkan data paginasi ke view

    ]);
}

// MENU UPDATE DAN UPDATE MENU JABATAN FUNGSIONAL    ----------------------------------------------------------------------------

public function bejabatanupdate($id)
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    $jakonjabatanfungsional = profiljakonpersonil::where('id', $id)->firstOrFail();
    $user = Auth::user();

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.02_kelembagaan.02_profiljakon.08_jabatanfungsional.update', [
        'data' => $jakonjabatanfungsional,
        'user' => $user,
        'title' => 'Update Jabatan Fungsional Jasa Konstruksi'
    ]);
}

// -------------------- UPDATE DATA MENU JABATAN FUNGSIONAL  ----------------------
public function bejabatancreateupdate(Request $request, $id)
{
    // Validasi input dengan pesan kustom
    $validatedData = $request->validate([
        'jabatan' => 'required|string|max:255', // Validasi untuk Nama Lengkap
        'namalengkap' => 'required|string|max:255', // Validasi untuk NIP
    ], [
        'jabatan.required' => 'Jabatan wajib diisi!',
        'namalengkap.required' => 'Nama Lengkap wajib diisi!',
    ]);

    // Cari data strukturdinas berdasarkan nilai 'judul'
    $jakonpersonil = profiljakonpersonil::where('id', $id)->firstOrFail();

    // Gunakan $validatedData untuk update, agar lebih jelas dan rapi
    $jakonpersonil->update([
        'jabatan' => $validatedData['jabatan'],  // Menggunakan data yang sudah tervalidasi
        'namalengkap' => $validatedData['namalengkap'],  // Menggunakan data yang sudah tervalidasi
    ]);

    // Flash session untuk menampilkan pesan sukses
    session()->flash('update', 'Data Berhasil Diupdate!');

    // Redirect ke halaman yang sesuai
    return redirect('/bejabatan');
}


// MENU CREATE JABATAN FUNGSIONAL     ----------------------------------------------------------------------------

public function bejabatancreate()
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    // $jakonjabatanfungsional = profiljakonpersonil::where('id', $id)->firstOrFail();
    $user = Auth::user();

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.02_kelembagaan.02_profiljakon.08_jabatanfungsional.create', [
        // 'data' => $jakonjabatanfungsional,
        'user' => $user,
        'title' => 'Create Jabatan Fungsional Jasa Konstruksi'
    ]);
}

// -------------------- CREATE MENU JABATAN FUNGSIONAL   ----------------------
public function bejabatancreatenew(Request $request)
{
    // Validasi input dengan pesan kustom
    $validatedData = $request->validate([
        'jabatan' => 'required|string|max:255', // Validasi untuk Jabatan
        'namalengkap' => 'required|string|max:255', // Validasi untuk Nama Lengkap
    ], [
        'jabatan.required' => 'Jabatan wajib diisi!',
        'namalengkap.required' => 'Nama Lengkap wajib diisi!',
    ]);

    // Membuat data baru di profiljakonpersonil
    profiljakonpersonil::create([
        'jabatan' => $validatedData['jabatan'],  // Menggunakan data yang sudah tervalidasi
        'namalengkap' => $validatedData['namalengkap'],  // Menggunakan data yang sudah tervalidasi
    ]);

    // Flash session untuk menampilkan pesan sukses
    session()->flash('create', 'Data Berhasil Dibuat!');

    // Redirect ke halaman yang sesuai
    return redirect('/bejabatan');
}


public function bejabatandelete($namalengkap)
{
    // Cari item berdasarkan judul
    $entry = profiljakonpersonil::where('namalengkap', $namalengkap)->first();

    if ($entry) {
        // Jika ada file header yang terdaftar, hapus dari storage
        // if (Storage::disk('public')->exists($entry->header)) {
            //     Storage::disk('public')->delete($entry->header);
        // }

        // Hapus entri dari database
        $entry->delete();

        // Redirect atau memberi respons sesuai kebutuhan
        return redirect('/bejabatan')->with('delete', 'Data Berhasil Di Hapus !');

    }

    return redirect()->back()->with('error', 'Item not found');
}

public function betupoksi()
{
    $data = tupoksi::all(); // Menggunakan paginate() untuk pagination

    $user = Auth::user();

    return view('backend.02_kelembagaan.03_tupoksi.index', [
        'title' => 'Tupoksi Program dan Jasa Konstruksi ',
        'data' => $data, // Mengirimkan data paginasi ke view
        'user' => $user, // Mengirimkan data paginasi ke view

    ]);
}

// MENU UPDATE DAN UPDATE MENU TUPOKSI    ----------------------------------------------------------------------------

public function betupoksiupdate($id)
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    $tupoksi = tupoksi::where('id', $id)->firstOrFail();
    $user = Auth::user();

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.02_kelembagaan.03_tupoksi.update', [
        'data' => $tupoksi,
        'user' => $user,
        'title' => 'Update Tupoksi Jakon Kabupaten Blora'
    ]);
}

// -------------------- UPDATE DATA MENU JABATAN FUNGSIONAL  ----------------------
public function betupoksicreateupdate(Request $request, $id)
{
    // Validasi input dengan pesan kustom
    $validatedData = $request->validate([
        'judul' => 'required|string|max:255', // Validasi untuk Nama Lengkap
        'keterangan' => 'required|string|max:255', // Validasi untuk NIP
    ], [
        'judul.required' => 'Judul wajib diisi!',
        'keterangan.required' => 'Keterangan wajib diisi!',
    ]);

    // Cari data strukturdinas berdasarkan nilai 'judul'
    $tupoksi = tupoksi::where('id', $id)->firstOrFail();

    // Gunakan $validatedData untuk update, agar lebih jelas dan rapi
    $tupoksi->update([
        'judul' => $validatedData['judul'],  // Menggunakan data yang sudah tervalidasi
        'keterangan' => $validatedData['keterangan'],  // Menggunakan data yang sudah tervalidasi
    ]);

    // Flash session untuk menampilkan pesan sukses
    session()->flash('update', 'Data Berhasil Diupdate!');

    // Redirect ke halaman yang sesuai
    return redirect('/betupoksi');
}




// MENU BACKEND PROFIL JAKON MAS JAKI


// ==============================================================================================================
public function tupoksifekbb()
{
    $data= tupoksi::all(); // Menggunakan paginate() untuk pagination
    $user = Auth::user();


    return view('frontend.01_masjaki_kelembagaan.03_tupoksi.index', [
        'title' => 'Tupoksi Jakon DPUPR Kabupaten Blora',
        'data' => $data, // Mengirimkan data paginasi ke view
        'user' => $user, // Mengirimkan data paginasi ke view
    ]);
}



}

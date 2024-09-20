<?php

namespace App\Http\Controllers;

use App\Models\agendastatus;
use App\Models\berita;
use App\Models\beritaagenda;
use App\Models\kegiatanjaskon;
use App\Models\laporankegiatan;
use App\Models\pengawasanlokasi;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth; // Pastikan Anda mengimpor facade ini




class BeritaController extends Controller
{
    //

    
// =====================================================================================
            
public function databerita()
{
    $data= berita::paginate(8); // Menggunakan paginate() untuk pagination
    
    $user = Auth::user();

    return view('backend.02_berita.01_berita.index', [
        'title' => 'Berita Jasa Konstruksi Pemerintah Kabupaten Bandung Barat',
        'data' => $data, // Mengirimkan data paginasi ke view
        'user' => $user, // Mengirimkan data paginasi ke view
    ]);
}


public function databeritashowbyjudul($judul)
{
    $data = berita::where('judul', $judul)->firstOrFail();
    
    $user = Auth::user();

    return view('backend.02_berita.01_berita.show', [
        'data' => $data,
        'user' => $user,
        'title' => 'Details Berita Jasa Konstruksi',
    ]);
}

                // -------------------- UPDATE DATA PERATURAN GUBERNUR JASA KONSTRUKSI ----------------------
                public function updatedataberita($judul)
                {
                    // Cari data undang-undang berdasarkan nilai 'judul'
                    $berita = berita::where('judul', $judul)->firstOrFail();
                    $datauser = user::all();
                    
                    $user = Auth::user();

                    // Tampilkan form update dengan data yang ditemukan
                    return view('backend.02_berita.01_berita.update', [
                        'berita' => $berita,
                        'datauser' => $datauser,
                        'user' => $user,
                        'title' => 'Update Data Berita Jasa Konstruksi'
                    ]);
                }
                
                public function createupdatedataberita(Request $request, $judul)
                {
                    // Validasi input
                    $request->validate([
                        'judul' => 'required|string|max:255',
                        // 'user_id' => 'required|exists:users,id', // Pastikan tabel dan kolom ini benar
                        'keterangan' => 'required|string',
                        'tanggal' => 'required|date',
                        'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar
                    ]);
                
                    // Cari data berita berdasarkan nilai 'judul'
                    $berita = Berita::where('judul', $judul)->firstOrFail();
                    
                    // Simpan file dan ambil path-nya
                    $filePath = $berita->gambar; // Set default ke gambar lama
                    
                    if ($request->hasFile('gambar')) {
                        $file = $request->file('gambar');
                        $filePath = $file->store('berita/databerita', 'public'); // Menyimpan di storage/app/public/berita/databerita
                    }
                
                    // Update data berita dengan data dari form
                    $berita->update([
                        'judul' => $request->input('judul'),
                        // 'user_id' => $request->input('user_id'),
                        'keterangan' => $request->input('keterangan'),
                        'tanggal' => $request->input('tanggal'),
                        'gambar' => $filePath, // Gunakan path baru jika ada file
                    ]);
                
                    session()->flash('update', 'Data Berita Berhasil Diupdate!');
                    
                    // Redirect ke halaman yang sesuai
                    return redirect('/databerita'); // Pastikan ini sesuai dengan nama route Anda
                }
                
                               
                               
// ------------ CREATE NEW DATA BERITA ----------------

public function createnewdataberita()
{
    // Ambil data pengguna yang sedang login
    $currentUser = Auth::user();
    
    $user = Auth::user();

    // Tampilkan form create dengan data pengguna yang login
    return view('backend.02_berita.01_berita.create', [
        'title' => 'Create Berita Jasa Konstruksi',
        'currentUser' => $currentUser,
        'user' => $user,
    ]);
}
public function createnewstoredataberita(Request $request)
{
    // Validasi input
    $request->validate([
        'judul' => 'required|string|max:255',
        'user_id' => 'required|exists:users,id', // Validasi user_id memastikan ID pengguna ada di tabel users
        'tanggal' => 'required|date', // Validasi tanggal
        'keterangan' => 'required|string', // Validasi keterangan
        'gambar' => 'nullable|file|mimes:jpeg,png,jpg|max:20480', // 20MB max file size dan format yang diizinkan
    ]);

    // Simpan file dan ambil path jika ada
    $filePath = null;
    if ($request->hasFile('gambar')) {
        $file = $request->file('gambar');
        $filePath = $file->store('berita/databerita', 'public'); // Menyimpan file di storage/app/public/berita/databerita
    }

    // Buat entri baru di database
    berita::create([
        'judul' => $request->input('judul'),
        'user_id' => $request->input('user_id'), // Menyimpan user_id dari input
        'tanggal' => $request->input('tanggal'),
        'keterangan' => $request->input('keterangan'),
        'gambar' => $filePath, // Gunakan path file jika ada
    ]);

    session()->flash('create', 'Data Berhasil Ditambahkan!');
    // Redirect ke halaman yang sesuai
    return redirect('/databerita');
}




    // ==================== DELETE SURAT KEPUTUSAN MENTERI 

    public function deletedataberita(Request $request, $judul)
{
    // Cari entri berdasarkan judul
    $entry = berita::where('judul', $judul)->first();

    if ($entry) {
        // Hapus file terkait jika ada
        if (Storage::disk('public')->exists($entry->gambar)) {
            Storage::disk('public')->delete($entry->gambar);
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
    return redirect('/databerita');
}


// ===========================================================
// DATA BERITA AGENDA JASA KONSTRUKSI 

// =====================================================================================
            
public function beritaagenda()
{
    $data = beritaagenda::paginate(7); // Menggunakan paginate() untuk pagination
    $datauser = user::all(); // Menggunakan paginate() untuk pagination
    $datapengawasalokasi = pengawasanlokasi::all(); // Menggunakan paginate() untuk pagination
    $dataagendastatus = agendastatus::all(); // Menggunakan paginate() untuk pagination

    
    $user = Auth::user();

    return view('backend.02_berita.02_agendasertifikasi.index', [
        'title' => 'Agenda Sertifikasi Pemerintah Kabupaten Bandung Barat',
        'data' => $data, // Mengirimkan data paginasi ke view
        'datauser' => $datauser, // Mengirimkan data paginasi ke view
        'datapengawasanlokasi' => $datapengawasalokasi, // Mengirimkan data paginasi ke view
        'dataagendastatus' => $dataagendastatus, // Mengirimkan data paginasi ke view
        'user' => $user, // Mengirimkan data paginasi ke view
    ]);
}


public function beritaagendashowbyjudul($nama_agenda)
{
    $data = beritaagenda::where('nama_agenda', $nama_agenda)->firstOrFail();

    $user = Auth::user();

    return view('backend.02_berita.02_agendasertifikasi.show', [
        'data' => $data,
        'user' => $user,
        'title' => 'Details Agenda Sertifikasi',
    ]);
}


    // ==================== DELETE BERITA AGENDA ============================ 
    public function deleteberitaagenda($id)
    {
        // Cari entri berdasarkan status
        $entry = beritaagenda::where('id', $id)->first();
    
        if ($entry) {
            // Hapus entri dari database
            $entry->delete();
    
            // Set pesan flash untuk sukses
            session()->flash('delete', 'Data Berhasil Dihapus!');
        } else {
            // Set pesan flash jika data tidak ditemukan
            session()->flash('error', 'Data Tidak Ditemukan!');
        }
    
        // Redirect ke halaman yang sesuai
        return redirect('/beritaagenda');
    }


                // -------------------- UPDATE BERITA AGENDA JASA KONSTRUKSI ----------------------
                public function updateberitaagenda($nama_agenda)
                {
                    // Cari data undang-undang berdasarkan nilai 'judul'
                    $berita = beritaagenda::where('nama_agenda', $nama_agenda)->firstOrFail();
                    $datapengawasalokasi = pengawasanlokasi::all();
                    $dataagendastatus = agendastatus::all();
                    // $datauser = user::all();
                
                    $user = Auth::user();
       
                    // Tampilkan form update dengan data yang ditemukan
                    return view('backend.02_berita.02_agendasertifikasi.update', [
                        'beritaagenda' => $berita,
                        'datapengawasanlokasi' => $datapengawasalokasi,
                        'dataagendastatus' => $dataagendastatus,
                        'user' => $user,
                        // 'datauser' => $datauser,
                        'title' => 'Update Agenda Sertifikasi '
                    ]);
                }
                
                public function createupdateberitaagenda(Request $request, $nama_agenda)
                {
                    // Validasi input
                    $request->validate([
                        'nama_agenda' => 'required|string|max:255',
                        'keterangan' => 'required|string|max:255',
                        'kuota' => 'required|integer',
                        'tanggal_mulai' => 'required|date',
                        'tanggal_selesai' => 'required|date',
                        'statusprogram' => 'required|string|max:255',
                        'pengawasanlokasi_id' => 'required|string|max:255',
                        
                    ]);

                    // Cari data administrator berdasarkan nama
                    $beritaagenda = beritaagenda::where('nama_agenda', $nama_agenda)->firstOrFail();

              
                    // Update data administrator dengan data dari form
                    $beritaagenda->update([
                        'nama_agenda' => $request->input('nama_agenda'),
                        'keterangan' => $request->input('keterangan'),
                        'kuota' => $request->input('kuota'),
                        'tanggal_mulai' => $request->input('tanggal_mulai'),
                        'tanggal_selesai' => $request->input('tanggal_selesai'),
                        'statusprogram' => $request->input('statusprogram'),
                        'pengawasanlokasi_id' => $request->input('pengawasanlokasi_id'),
                        
                    ]);

                    // Flash pesan session
                    session()->flash('update', 'Data Berita Agenda Berhasil Diupdate!');

                    // Redirect ke halaman yang sesuai
                    return redirect('/beritaagenda');
                }
                    

                
                               
                               
// ------------ CREATE NEW DATA BERITA ----------------

public function createnewberitaagenda()
{

    $datapengawasanlokasi = pengawasanlokasi::all();
    
    $user = Auth::user();

    // Tampilkan form create dengan data pengguna yang login
    return view('backend.02_berita.02_agendasertifikasi.create', [
        'title' => 'Create Berita Agenda Sertifikasi',
        'datapengawasanlokasi' => $datapengawasanlokasi,
        'user' => $user,
 
    ]);
}
public function createnewstoreberitaagenda(Request $request)
{
    // Validasi input
    $request->validate([
        'nama_agenda' => 'required|string|max:255',
        'keterangan' => 'required|string|max:255',
        'kuota' => 'required|integer',
        'tanggal_mulai' => 'required|date',
        'tanggal_selesai' => 'required|date',
        'statusprogram' => 'required|string|max:255',
        'pengawasanlokasi_id' => 'required|string|max:255',
    ]);
   // Buat entri baru di database
    beritaagenda::create([
        'nama_agenda' => $request->input('nama_agenda'),
        'keterangan' => $request->input('keterangan'),
        'kuota' => $request->input('kuota'),
        'tanggal_mulai' => $request->input('tanggal_mulai'),
        'tanggal_selesai' => $request->input('tanggal_selesai'),
        'statusprogram' => $request->input('statusprogram'),
        'pengawasanlokasi_id' => $request->input('pengawasanlokasi_id'),
    ]);

    session()->flash('create', 'Data Berhasil Ditambahkan!');
    // Redirect ke halaman yang sesuai
    return redirect('/beritaagenda');
}


// ===========================================================
// DATA DOKUMENTASI PELATIHAN  

// =====================================================================================
            
public function dokumentasipelatihan()
{
    $data = kegiatanjaskon::paginate(5); // Menggunakan paginate() untuk pagination
    $datalaporankegiatan = laporankegiatan::all(); // Menggunakan paginate() untuk pagination
    
    $user = Auth::user();

    return view('backend.02_berita.03_dokumentasipelatihan.index', [
        'title' => 'Dokumentasi Kegiatan Sertifikasi Para Pekerja',
        'data' => $data, // Mengirimkan data paginasi ke view
        'user' => $user, // Mengirimkan data paginasi ke view
        'datalaporankegiatan' => $datalaporankegiatan, // Mengirimkan data paginasi ke view
    ]);
}


public function dokumentasipelatihanshowbyjudul($judul_kegiatan)
{
    $data = kegiatanjaskon::where('judul_kegiatan', $judul_kegiatan)->firstOrFail();
    $datalaporankegiatan = laporankegiatan::all(); // Menggunakan paginate() untuk pagination
    
    $user = Auth::user();

    return view('backend.02_berita.03_dokumentasipelatihan.show', [
        'data' => $data,
        'datalaporankegiatan' => $datalaporankegiatan,
        'user' => $user,
        'title' => 'Details Agenda Sertifikasi',
    ]);
}

                // -------------------- UPDATE DOKUMENTASI SERTIFIKASI JASA KONSTRUKSI ----------------------
                public function updatedokumentasipelatihan($judul_kegiatan)
                {
                    // Cari data undang-undang berdasarkan nilai 'judul'
                    $kegiatanjaskon= kegiatanjaskon::where('judul_kegiatan', $judul_kegiatan)->firstOrFail();
                    $datapengawasanlokasi = pengawasanlokasi::all();
                    $datauser = user::all();
                    // $datauser = user::all();
                    
                        $user = Auth::user();

                    // Tampilkan form update dengan data yang ditemukan
                    return view('backend.02_berita.03_dokumentasipelatihan.update', [
                        'kegiatanjaskon' => $kegiatanjaskon,
                        'datapengawasanlokasi' => $datapengawasanlokasi,
                        'datauser' => $datauser,
                        'user' => $user,
                        'title' => 'Update Dokumentasi Sertifikasi '
                    ]);
                }
                
                public function createupdatedokumentasipelatihan(Request $request, $judul_kegiatan)
                {
                    // Validasi input
                    $request->validate([
                        // 'user_id' => 'required|string|max:255',
                        'pengawasanlokasi_id' => 'required|string|max:255',
                        'judul_kegiatan' => 'required|string|max:255',
                        'alamat_kegiatan' => 'required|string|max:255',
                        'tanggal' => 'required|date',
                    ]);

                    // Cari data administrator berdasarkan nama
                    $kegiatanjaskon = kegiatanjaskon::where('judul_kegiatan', $judul_kegiatan)->firstOrFail();

              
                    // Update data administrator dengan data dari form
                    $kegiatanjaskon->update([
                        // 'user_id' => $request->input('user_id'),
                        'pengawasanlokasi_id' => $request->input('pengawasanlokasi_id'),
                        'judul_kegiatan' => $request->input('judul_kegiatan'),
                        'alamat_kegiatan' => $request->input('alamat_kegiatan'),
                        'tanggal' => $request->input('tanggal'),                 
                    ]);

                    // Flash pesan session
                    session()->flash('update', 'Data Dokumentasi Berhasil Diupdate!');

                    // Redirect ke halaman yang sesuai
                    return redirect('/dokumentasipelatihan');
                }   

// ------------ CREATE NEW DATA BERITA ----------------

public function createdokumentasipelatihan()
{

    $kegiatanjaskon = kegiatanjaskon::all();
    $datapengawasanlokasi = pengawasanlokasi::all();
    
    $user = Auth::user();

    // Tampilkan form create dengan data pengguna yang login
    return view('backend.02_berita.03_dokumentasipelatihan.create', [
        'title' => 'Create Dokumentasi Pelatihan',
        'datakegiatanjaskon' => $kegiatanjaskon,
        'datapengawasanlokasi' => $datapengawasanlokasi,
        'user' => $user,
    ]);
}
public function createstoredokumentasipelatihan(Request $request)
{
    // Validasi input
    $request->validate([
        'pengawasanlokasi_id' => 'required|string|max:255',
        'user_id' => 'required|string|max:255',
        'judul_kegiatan' => 'required|string|max:255',
        'alamat_kegiatan' => 'required|string|max:255',
        'tanggal' => 'required|date',
        'berita1' => 'required|string|max:255',
        'berita2' => 'required|string|max:255',
        'berita3' => 'required|string|max:255',
        'berita4' => 'required|string|max:255',
        'berita5' => 'required|string|max:255',
        'berita6' => 'required|string|max:255',
        'berita7' => 'required|string|max:255',
        'berita8' => 'required|string|max:255',
        'berita9' => 'required|string|max:255',
        'berita10' => 'required|string|max:255',
        'berita11' => 'required|string|max:255',
        'berita12' => 'required|string|max:255',
        'berita13' => 'required|string|max:255',
        'berita14' => 'required|string|max:255',
        'berita15' => 'required|string|max:255',
        'berita16' => 'required|string|max:255',
        'berita17' => 'required|string|max:255',
        'berita18' => 'required|string|max:255',
        'berita19' => 'required|string|max:255',
        'berita20' => 'required|string|max:255',
        'berita21' => 'required|string|max:255',
        'berita22' => 'required|string|max:255',
        'berita23' => 'required|string|max:255',
        'berita24' => 'required|string|max:255',
        'berita25' => 'required|string|max:255',
        'berita26' => 'required|string|max:255',
        'berita27' => 'required|string|max:255',
        'berita28' => 'required|string|max:255',
        'berita29' => 'required|string|max:255',
        'berita30' => 'required|string|max:255',
        'berita31' => 'required|string|max:255',
        'berita32' => 'required|string|max:255',
        'berita33' => 'required|string|max:255',
        'berita34' => 'required|string|max:255',
        'berita35' => 'required|string|max:255',
        'berita36' => 'required|string|max:255',
        'berita37' => 'required|string|max:255',
        'berita38' => 'required|string|max:255',
        'berita39' => 'required|string|max:255',
        'berita40' => 'required|string|max:255',
        'berita41' => 'required|string|max:255',
        'berita42' => 'required|string|max:255',
        'berita43' => 'required|string|max:255',
        'berita44' => 'required|string|max:255',
        'berita45' => 'required|string|max:255',
        'berita46' => 'required|string|max:255',
        'berita47' => 'required|string|max:255',
        'berita48' => 'required|string|max:255',
    ]);

        
        // Inisialisasi array untuk menyimpan path file
$beritaPaths = [];

// Loop untuk menyimpan file dari berita1 hingga berita48
for ($i = 1; $i <= 48; $i++) {
    if ($request->hasFile("berita{$i}")) {
        $beritaPaths["berita{$i}"] = $request->file("berita{$i}")->store("dokumentasipelatihan/berita{$i}", 'public');
    }
}

// Buat entri baru di database
kegiatanjaskon::create([
    'pengawasanlokasi_id' => $request->input('pengawasanlokasi_id'),
    'user_id' => $request->input('user_id'),
    'judul_kegiatan' => $request->input('judul_kegiatan'),
    'alamat_kegiatan' => $request->input('alamat_kegiatan'),
    'tanggal' => $request->input('tanggal'),
    // Gabungkan array path ke dalam data
] + $beritaPaths);


    session()->flash('create', 'Data Berhasil Ditambahkan!');
    // Redirect ke halaman yang sesuai
    return redirect('/dokumentasipelatihan');
}

public function deletedokumentasipelatihan(Request $request, $id)
{
    // Cari entri berdasarkan judul
    $entry = kegiatanjaskon::where('id', $id)->first();

    if ($entry) {
        // Hapus file terkait jika ada
        for ($i = 1; $i <= 48; $i++) {
            $filePath = $entry->{"berita{$i}"};
            if ($filePath && Storage::disk('public')->exists($filePath)) {
                Storage::disk('public')->delete($filePath);
            }
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
    return redirect('/dokumentasipelatihan');
}



}
// required|exists:users,id


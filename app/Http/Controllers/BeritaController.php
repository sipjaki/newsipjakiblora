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
    $data= berita::paginate(7); // Menggunakan paginate() untuk pagination
    
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
        'berita1' => 'nullable|file|mimes:jpg,jpeg,png|max:20480',
        'berita2' => 'nullable|file|mimes:jpg,jpeg,png|max:20480',
        'berita3' => 'nullable|file|mimes:jpg,jpeg,png|max:20480',
        'berita4' => 'nullable|file|mimes:jpg,jpeg,png|max:20480',
        'berita5' => 'nullable|file|mimes:jpg,jpeg,png|max:20480',
        'berita6' => 'nullable|file|mimes:jpg,jpeg,png|max:20480',
        'berita7' => 'nullable|file|mimes:jpg,jpeg,png|max:20480',
        'berita8' => 'nullable|file|mimes:jpg,jpeg,png|max:20480',
        'berita9' => 'nullable|file|mimes:jpg,jpeg,png|max:20480',
        'berita10' => 'nullable|file|mimes:jpg,jpeg,png|max:20480',
        'berita11' => 'nullable|file|mimes:jpg,jpeg,png|max:20480',
        'berita12' => 'nullable|file|mimes:jpg,jpeg,png|max:20480',
        'berita13' => 'nullable|file|mimes:jpg,jpeg,png|max:20480',
        'berita14' => 'nullable|file|mimes:jpg,jpeg,png|max:20480',
        'berita15' => 'nullable|file|mimes:jpg,jpeg,png|max:20480',
        'berita16' => 'nullable|file|mimes:jpg,jpeg,png|max:20480',
        'berita17' => 'nullable|file|mimes:jpg,jpeg,png|max:20480',
        'berita18' => 'nullable|file|mimes:jpg,jpeg,png|max:20480',
        'berita19' => 'nullable|file|mimes:jpg,jpeg,png|max:20480',
        'berita20' => 'nullable|file|mimes:jpg,jpeg,png|max:20480',
        'laporanfoto1' => 'nullable|file|mimes:jpg,jpeg,png|max:20480',
        'laporanfoto2' => 'nullable|file|mimes:jpg,jpeg,png|max:20480',
        'laporanfoto3' => 'nullable|file|mimes:jpg,jpeg,png|max:20480',
        'laporanfoto4' => 'nullable|file|mimes:jpg,jpeg,png|max:20480',
        'laporanfoto5' => 'nullable|file|mimes:jpg,jpeg,png|max:20480',
        'laporanfoto6' => 'nullable|file|mimes:jpg,jpeg,png|max:20480',
        'laporanfoto7' => 'nullable|file|mimes:jpg,jpeg,png|max:20480',
        'laporanfoto8' => 'nullable|file|mimes:jpg,jpeg,png|max:20480',
        'laporanfoto9' => 'nullable|file|mimes:jpg,jpeg,png|max:20480',
        'laporanfoto10' => 'nullable|file|mimes:jpg,jpeg,png|max:20480',
        'laporanfoto11' => 'nullable|file|mimes:jpg,jpeg,png|max:20480',
        'laporanfoto12' => 'nullable|file|mimes:jpg,jpeg,png|max:20480',
        'laporanfoto13' => 'nullable|file|mimes:jpg,jpeg,png|max:20480',
        'laporanfoto14' => 'nullable|file|mimes:jpg,jpeg,png|max:20480',
        'laporanfoto15' => 'nullable|file|mimes:jpg,jpeg,png|max:20480',
        'laporanfoto16' => 'nullable|file|mimes:jpg,jpeg,png|max:20480',
        'laporanfoto17' => 'nullable|file|mimes:jpg,jpeg,png|max:20480',
        'laporanfoto18' => 'nullable|file|mimes:jpg,jpeg,png|max:20480',
        'laporanfoto19' => 'nullable|file|mimes:jpg,jpeg,png|max:20480',
        'laporanfoto20' => 'nullable|file|mimes:jpg,jpeg,png|max:20480',
        'laporanfoto21' => 'nullable|file|mimes:jpg,jpeg,png|max:20480',
        'laporanfoto22' => 'nullable|file|mimes:jpg,jpeg,png|max:20480',
        'laporanfoto23' => 'nullable|file|mimes:jpg,jpeg,png|max:20480',
        'laporanfoto24' => 'nullable|file|mimes:jpg,jpeg,png|max:20480',
        'laporanfoto25' => 'nullable|file|mimes:jpg,jpeg,png|max:20480',
        'laporanfoto26' => 'nullable|file|mimes:jpg,jpeg,png|max:20480',
        'laporanfoto27' => 'nullable|file|mimes:jpg,jpeg,png|max:20480',
        'laporanfoto28' => 'nullable|file|mimes:jpg,jpeg,png|max:20480',

    ]);
 
        
        // Inisialisasi array untuk menyimpan path file

// Loop untuk menyimpan file dari berita1 hingga berita48   $beritaPaths = [];

    // Menyimpan file jika ada
        // $beritaPaths['berita1'] = $request->hasFile('berita1') 
        // ? $request->file('berita1')->store('dokumentasipelatihan/berita1', 'public') 
        // : null;

        // $beritaPaths['berita2'] = $request->hasFile('berita2') 
        // ? $request->file('berita2')->store('dokumentasipelatihan/berita2', 'public') 
        // : null;


        $beritaPaths = [];

        // Mengambil file berita
        for ($i = 1; $i <= 20; $i++) {
            $key = 'berita' . $i;
            $beritaPaths[$key] = $request->hasFile($key) 
                ? $request->file($key)->store('dokumentasipelatihan/' . $key, 'public') 
                : null;
        }
        
        // $laporanFotoPaths = [];
        
        // // Mengambil file laporan foto
        // for ($i = 1; $i <= 28; $i++) {
        //     $key = 'laporanfoto' . $i;
        //     $laporanFotoPaths[$key] = $request->hasFile($key) 
        //         ? $request->file($key)->store('dokumentasipelatihan/' . $key, 'public') 
        //         : null;
        // }
    

// Simpan masing-masing berita secara manual
        // if ($request->hasFile('berita1')) {
        //     $beritaPaths['berita1'] = $request->file('berita1')->store('dokumentasipelatihan/berita1', 'public');
        // } else {
        //     $beritaPaths['berita1'] = null;
        // }

    // $filePath = $request->file('peraturan')->store('peraturan/11_keputusan', 'public');


    // if ($request->hasFile('berita2')) {
    //     $beritaPaths['berita2'] = $request->file('berita2')->store('dokumentasipelatihan/berita2', 'public');
    // } else {
    //     $beritaPaths['berita2'] = null;
    // }

    // // Lanjutkan untuk berita3 hingga berita48
    // if ($request->hasFile('berita3')) {
    //     $beritaPaths['berita3'] = $request->file('berita3')->store('dokumentasipelatihan/berita3', 'public');
    // } else {
    //     $beritaPaths['berita3'] = null;
    // }
    // // Lanjutkan untuk berita3 hingga berita48
    // if ($request->hasFile('berita4')) {
    //     $beritaPaths['berita4'] = $request->file('berita4')->store('dokumentasipelatihan/berita4', 'public');
    // } else {
    //     $beritaPaths['berita4'] = null;
    // }
    
    // if ($request->hasFile('berita5')) {
    //     $beritaPaths['berita5'] = $request->file('berita5')->store('dokumentasipelatihan/berita5', 'public');
    // } else {
    //     $beritaPaths['berita5'] = null;
    // }
    
    // if ($request->hasFile('berita6')) {
    //     $beritaPaths['berita6'] = $request->file('berita6')->store('dokumentasipelatihan/berita6', 'public');
    // } else {
    //     $beritaPaths['berita6'] = null;
    // }
    
    // if ($request->hasFile('berita7')) {
    //     $beritaPaths['berita7'] = $request->file('berita7')->store('dokumentasipelatihan/berita7', 'public');
    // } else {
    //     $beritaPaths['berita7'] = null;
    // }
    
    // if ($request->hasFile('berita8')) {
    //     $beritaPaths['berita8'] = $request->file('berita8')->store('dokumentasipelatihan/berita8', 'public');
    // } else {
    //     $beritaPaths['berita8'] = null;
    // }
    
    // if ($request->hasFile('berita9')) {
    //     $beritaPaths['berita9'] = $request->file('berita9')->store('dokumentasipelatihan/berita9', 'public');
    // } else {
    //     $beritaPaths['berita9'] = null;
    // }
    
    // if ($request->hasFile('berita10')) {
    //     $beritaPaths['berita10'] = $request->file('berita10')->store('dokumentasipelatihan/berita10', 'public');
    // } else {
    //     $beritaPaths['berita10'] = null;
    // }
    
    // if ($request->hasFile('berita11')) {
    //     $beritaPaths['berita11'] = $request->file('berita11')->store('dokumentasipelatihan/berita11', 'public');
    // } else {
    //     $beritaPaths['berita11'] = null;
    // }
    
    // if ($request->hasFile('berita12')) {
    //     $beritaPaths['berita12'] = $request->file('berita12')->store('dokumentasipelatihan/berita12', 'public');
    // } else {
    //     $beritaPaths['berita12'] = null;
    // }
    
    // if ($request->hasFile('berita13')) {
    //     $beritaPaths['berita13'] = $request->file('berita13')->store('dokumentasipelatihan/berita13', 'public');
    // } else {
    //     $beritaPaths['berita13'] = null;
    // }
    
    // if ($request->hasFile('berita14')) {
    //     $beritaPaths['berita14'] = $request->file('berita14')->store('dokumentasipelatihan/berita14', 'public');
    // } else {
    //     $beritaPaths['berita14'] = null;
    // }
    
    // if ($request->hasFile('berita15')) {
    //     $beritaPaths['berita15'] = $request->file('berita15')->store('dokumentasipelatihan/berita15', 'public');
    // } else {
    //     $beritaPaths['berita15'] = null;
    // }
    
    // if ($request->hasFile('berita16')) {
    //     $beritaPaths['berita16'] = $request->file('berita15')->store('dokumentasipelatihan/berita16', 'public');
    // } else {
    //     $beritaPaths['berita16'] = null;
    // }
    
    // if ($request->hasFile('berita17')) {
    //     $beritaPaths['berita17'] = $request->file('berita17')->store('dokumentasipelatihan/berita17', 'public');
    // } else {
    //     $beritaPaths['berita17'] = null;
    // }

    // if ($request->hasFile('berita18')) {
    //     $beritaPaths['berita18'] = $request->file('berita18')->store('dokumentasipelatihan/berita18', 'public');
    // } else {
    //     $beritaPaths['berita18'] = null;
    // }

    // if ($request->hasFile('berita19')) {
    //     $beritaPaths['berita19'] = $request->file('berita19')->store('dokumentasipelatihan/berita19', 'public');
    // } else {
    //     $beritaPaths['berita19'] = null;
    // }

    // if ($request->hasFile('berita20')) {
    //     $beritaPaths['berita20'] = $request->file('berita20')->store('dokumentasipelatihan/berita20', 'public');
    // } else {
    //     $beritaPaths['berita20'] = null;
    // }

    // if ($request->hasFile('berita21')) {
    //     $beritaPaths['berita21'] = $request->file('berita21')->store('dokumentasipelatihan/berita21', 'public');
    // } else {
    //     $beritaPaths['berita21'] = null;
    // }

    // if ($request->hasFile('berita22')) {
    //     $beritaPaths['berita22'] = $request->file('berita22')->store('dokumentasipelatihan/berita22', 'public');
    // } else {
    //     $beritaPaths['berita22'] = null;
    // }

    // if ($request->hasFile('berita23')) {
    //     $beritaPaths['berita23'] = $request->file('berita23')->store('dokumentasipelatihan/berita23', 'public');
    // } else {
    //     $beritaPaths['berita23'] = null;
    // }

    // if ($request->hasFile('berita24')) {
    //     $beritaPaths['berita24'] = $request->file('berita24')->store('dokumentasipelatihan/berita24', 'public');
    // } else {
    //     $beritaPaths['berita24'] = null;
    // }

    // if ($request->hasFile('berita25')) {
    //     $beritaPaths['berita25'] = $request->file('berita25')->store('dokumentasipelatihan/berita25', 'public');
    // } else {
    //     $beritaPaths['berita25'] = null;
    // }

    // if ($request->hasFile('berita26')) {
    //     $beritaPaths['berita26'] = $request->file('berita26')->store('dokumentasipelatihan/berita26', 'public');
    // } else {
    //     $beritaPaths['berita26'] = null;
    // }

    // if ($request->hasFile('berita27')) {
    //     $beritaPaths['berita27'] = $request->file('berita27')->store('dokumentasipelatihan/berita27', 'public');
    // } else {
    //     $beritaPaths['berita27'] = null;
    // }

    // if ($request->hasFile('berita28')) {
    //     $beritaPaths['berita28'] = $request->file('berita28')->store('dokumentasipelatihan/berita28', 'public');
    // } else {
    //     $beritaPaths['berita28'] = null;
    // }

    // if ($request->hasFile('berita29')) {
    //     $beritaPaths['berita29'] = $request->file('berita29')->store('dokumentasipelatihan/berita29', 'public');
    // } else {
    //     $beritaPaths['berita29'] = null;
    // }

    // if ($request->hasFile('berita30')) {
    //     $beritaPaths['berita30'] = $request->file('berita30')->store('dokumentasipelatihan/berita30', 'public');
    // } else {
    //     $beritaPaths['berita30'] = null;
    // }

    // if ($request->hasFile('berita31')) {
    //     $beritaPaths['berita31'] = $request->file('berita31')->store('dokumentasipelatihan/berita31', 'public');
    // } else {
    //     $beritaPaths['berita31'] = null;
    // }

    // if ($request->hasFile('berita32')) {
    //     $beritaPaths['berita32'] = $request->file('berita32')->store('dokumentasipelatihan/berita32', 'public');
    // } else {
    //     $beritaPaths['berita32'] = null;
    // }

    // if ($request->hasFile('berita33')) {
    //     $beritaPaths['berita33'] = $request->file('berita33')->store('dokumentasipelatihan/berita33', 'public');
    // } else {
    //     $beritaPaths['berita33'] = null;
    // }

    // if ($request->hasFile('berita34')) {
    //     $beritaPaths['berita34'] = $request->file('berita34')->store('dokumentasipelatihan/berita34', 'public');
    // } else {
    //     $beritaPaths['berita34'] = null;
    // }

    // if ($request->hasFile('berita35')) {
    //     $beritaPaths['berita35'] = $request->file('berita35')->store('dokumentasipelatihan/berita35', 'public');
    // } else {
    //     $beritaPaths['berita35'] = null;
    // }

    // if ($request->hasFile('berita36')) {
    //     $beritaPaths['berita36'] = $request->file('berita36')->store('dokumentasipelatihan/berita36', 'public');
    // } else {
    //     $beritaPaths['berita36'] = null;
    // }

    // if ($request->hasFile('berita37')) {
    //     $beritaPaths['berita37'] = $request->file('berita37')->store('dokumentasipelatihan/berita37', 'public');
    // } else {
    //     $beritaPaths['berita37'] = null;
    // }

    // if ($request->hasFile('berita38')) {
    //     $beritaPaths['berita38'] = $request->file('berita38')->store('dokumentasipelatihan/berita38', 'public');
    // } else {
    //     $beritaPaths['berita38'] = null;
    // }

    // if ($request->hasFile('berita39')) {
    //     $beritaPaths['berita39'] = $request->file('berita39')->store('dokumentasipelatihan/berita39', 'public');
    // } else {
    //     $beritaPaths['berita39'] = null;
    // }

    // if ($request->hasFile('berita40')) {
    //     $beritaPaths['berita40'] = $request->file('berita40')->store('dokumentasipelatihan/berita40', 'public');
    // } else {
    //     $beritaPaths['berita40'] = null;
    // }

    // if ($request->hasFile('berita41')) {
    //     $beritaPaths['berita41'] = $request->file('berita41')->store('dokumentasipelatihan/berita41', 'public');
    // } else {
    //     $beritaPaths['berita41'] = null;
    // }

    // if ($request->hasFile('berita42')) {
    //     $beritaPaths['berita42'] = $request->file('berita42')->store('dokumentasipelatihan/berita42', 'public');
    // } else {
    //     $beritaPaths['berita42'] = null;
    // }

    // if ($request->hasFile('berita43')) {
    //     $beritaPaths['berita43'] = $request->file('berita43')->store('dokumentasipelatihan/berita43', 'public');
    // } else {
    //     $beritaPaths['berita43'] = null;
    // }

    // if ($request->hasFile('berita44')) {
    //     $beritaPaths['berita44'] = $request->file('berita44')->store('dokumentasipelatihan/berita44', 'public');
    // } else {
    //     $beritaPaths['berita44'] = null;
    // }

    // if ($request->hasFile('berita45')) {
    //     $beritaPaths['berita45'] = $request->file('berita45')->store('dokumentasipelatihan/berita45', 'public');
    // } else {
    //     $beritaPaths['berita45'] = null;
    // }

    // if ($request->hasFile('berita46')) {
    //     $beritaPaths['berita46'] = $request->file('berita46')->store('dokumentasipelatihan/berita46', 'public');
    // } else {
    //     $beritaPaths['berita46'] = null;
    // }

    // if ($request->hasFile('berita47')) {
    //     $beritaPaths['berita47'] = $request->file('berita47')->store('dokumentasipelatihan/berita47', 'public');
    // } else {
    //     $beritaPaths['berita47'] = null;
    // }

    // if ($request->hasFile('berita48')) {
    //     $beritaPaths['berita48'] = $request->file('berita48')->store('dokumentasipelatihan/berita48', 'public');
    // } else {
    //     $beritaPaths['berita48'] = null;
    // }

    
    // Gabungkan kedua array path
    $dataToCreate = array_merge($beritaPaths,);
    
    kegiatanjaskon::create(array_merge([
        'pengawasanlokasi_id' => $request->input('pengawasanlokasi_id'),
        'user_id' => $request->input('user_id'),
        'judul_kegiatan' => $request->input('judul_kegiatan'),
        'alamat_kegiatan' => $request->input('alamat_kegiatan'),
        'tanggal' => $request->input('tanggal'),
    ], $dataToCreate));
    
// Buat entri baru di database
// kegiatanjaskon::create([
//     'pengawasanlokasi_id' => $request->input('pengawasanlokasi_id'),
//     'user_id' => $request->input('user_id'),
//     'judul_kegiatan' => $request->input('judul_kegiatan'),
//     'alamat_kegiatan' => $request->input('alamat_kegiatan'),
//     'tanggal' => $request->input('tanggal'),
//     'berita1' => $request->input('berita1'),
//     'berita2' => $request->input('berita2'),
//     'berita3' => $request->input('berita3'),
//     'berita4' => $request->input('berita4'),
//     'berita5' => $request->input('berita5'),
//     'berita6' => $request->input('berita6'),
//     'berita7' => $request->input('berita7'),
//     'berita8' => $request->input('berita8'),
//     'berita9' => $request->input('berita9'),
//     'berita10' => $request->input('berita10'),
//     'berita11' => $request->input('berita11'),
//     'berita12' => $request->input('berita12'),
//     'berita13' => $request->input('berita13'),
//     'berita14' => $request->input('berita14'),
//     'berita15' => $request->input('berita15'),
//     'berita16' => $request->input('berita16'),
//     'berita17' => $request->input('berita17'),
//     'berita18' => $request->input('berita18'),
//     'berita19' => $request->input('berita19'),
//     'berita20' => $request->input('berita20'),
//     'berita21' => $request->input('berita21'),
//     'berita22' => $request->input('berita22'),
//     'berita23' => $request->input('berita23'),
//     'berita24' => $request->input('berita24'),
//     'berita25' => $request->input('berita25'),
//     'berita26' => $request->input('berita26'),
//     'berita27' => $request->input('berita27'),
//     'berita28' => $request->input('berita28'),
//     'berita29' => $request->input('berita29'),
//     'berita30' => $request->input('berita30'),
//     'berita31' => $request->input('berita31'),
//     'berita32' => $request->input('berita32'),
//     'berita33' => $request->input('berita33'),
//     'berita34' => $request->input('berita34'),
//     'berita35' => $request->input('berita35'),
//     'berita36' => $request->input('berita36'),
//     'berita37' => $request->input('berita37'),
//     'berita38' => $request->input('berita38'),
//     'berita39' => $request->input('berita39'),
//     'berita40' => $request->input('berita40'),
//     'berita41' => $request->input('berita41'),
//     'berita42' => $request->input('berita42'),
//     'berita43' => $request->input('berita43'),
//     'berita44' => $request->input('berita44'),
//     'berita45' => $request->input('berita45'),
//     'berita46' => $request->input('berita46'),
//     'berita47' => $request->input('berita47'),
//     'berita48' => $request->input('berita48'),
//     // Gabungkan array path ke dalam data
// ]);


    session()->flash('create', 'Data Berhasil Ditambahkan!');
    // Redirect ke halaman yang sesuai
    return redirect('/dokumentasipelatihan');
}

// ==========================================================
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



// ============================ ACARA PELATIHAN =========================================================
            
                        public function acarapelatihan()
                        {
                            $datalaporankegiatan = laporankegiatan::all(); // Menggunakan paginate() untuk pagination
                            $datakegiatanjaskon = kegiatanjaskon::paginate(10); // Menggunakan paginate() untuk pagination
                            $user = Auth::user();
                            
                            return view('backend.02_berita.04_acarapelatihan.index', [
                                'title' => 'Acara Pelatihan Sertifikasi',
                                'data' => $datakegiatanjaskon, // Mengirimkan data paginasi ke view
                                'datalaporankegiatan' => $datalaporankegiatan, // Mengirimkan data paginasi ke view
                                'user' => $user, // Mengirimkan data paginasi ke view
                            ]);
                        }
                        
                        public function acarapelatihanshowbyjudul($judul_kegiatan)
                            {
                                // Mencari kegiatan berdasarkan judul
                                $kegiatanjaskon = kegiatanjaskon::where('judul_kegiatan', $judul_kegiatan)->first();

                                if (!$kegiatanjaskon) {
                                    // Tangani jika kegiatan tidak ditemukan
                                    return redirect()->back()->with('error', 'Kegiatan tidak ditemukan.');
                                }

                                // Menggunakan paginate() untuk pagination
                                $datalaporankegiatan = laporankegiatan::where('kegiatanjaskon_id', $kegiatanjaskon->id)->paginate(10);

                                $user = Auth::user();

                                return view('backend.02_berita.04_acarapelatihan.show', [
                                    'data' => $datalaporankegiatan,
                                    'datakegiatanjaskon' => $kegiatanjaskon,
                                    'user' => $user,
                                    'title' => 'Details Acara Pelatihan Sertifikasi',
                                ]);
                            }

                                                // =====================================================================================
                                    
                                        // -------------------- UPDATE DATA PERATURAN GUBERNUR JASA KONSTRUKSI ----------------------
                                        public function updateacarapelatihan($judul_kegiatan)
                                        {
                                            // Cari data undang-undang berdasarkan nilai 'judul'
                                            $laporankegiatan = laporankegiatan::where('judul_kegiatan', $judul_kegiatan)->firstOrFail();
                                            $user = Auth::user();
                        
                                            // Tampilkan form update dengan data yang ditemukan
                                            return view('backend.14_peraturan.11_keputusan.update', [
                                                'laporankegiatan' => $laporankegiatan,
                                                'user' => $user,
                                                'title' => 'Update Laporan Kegiatan'
                                            ]);
                                        }
                                        
                                        // -------------------- UPDATE DATA CREATE UPDATE UNDANG UNDANG JASA KONSTRUKSI ----------------------
                                                public function createupdateacarapelatihan(Request $request, $judul_kegiatan)
                                            {
                                                // Validasi input
                                                $request->validate([
                                                    'judul' => 'required|string|max:255',
                                                    // 'peraturan' => 'required|file', // Validasi file sesuai jenis dan ukuran
                                                ]);
                                    
                                                // Cari data undang-undang berdasarkan nilai 'judul'
                                                $laporankegiatan = laporankegiatan::where('judul_kegiatan', $judul_kegiatan)->firstOrFail();
                                                
                                                // Simpan file dan ambil path-nya
                                                $filePath = null;
                                                if ($request->hasFile('peraturan')) {
                                                    $file = $request->file('peraturan');
                                                    $filePath = $file->store('peraturan/11_keputusan', 'public'); // Menyimpan di storage/app/public/undangundang
                                                }
                                    
                                                // Update data undang-undang dengan data dari form
                                                $laporankegiatan->update([
                                                    'judul' => $request->input('judul'),
                                                    'peraturan' => $filePath ? $filePath : $laporankegiatan->peraturan, // Gunakan path baru jika ada file
                                                ]);
                                    
                                                
                                                session()->flash('update', 'Data Surat Keputusan Berhasil Diupdate !');
                                                // Redirect ke halaman yang sesuai
                                                return redirect('/acarapelatihan');
                                                       }
                        
                               
                                                       
                        // ------------ CREATE DATA SURAT KEPUTUSAN  ----------------
                        
                        public function createacarapelatihan()
                        {
                            $user = Auth::user();
                        
                            // Tampilkan form update dengan data yang ditemukan
                            return view('backend.14_peraturan.11_keputusan.create', [
                                'title' => 'Create Surat Keputusan',
                                'user' => $user,
                            ]);
                        }
                        
                        public function createstoreacarapelatihan(Request $request)
                        {
                            // Validasi input
                            $request->validate([
                                'judul' => 'required|string|max:255',
                                'peraturan' => 'required|file|mimes:pdf|max:20480', // 20MB max file size
                            ]);
                        
                            // Simpan file dan ambil path
                            $filePath = $request->file('peraturan')->store('peraturan/11_keputusan', 'public');
                        
                            // Buat entri baru di database
                            laporankegiatan::create([
                                'judul' => $request->input('judul'),
                                'peraturan' => $filePath,
                            ]);
                        
                            session()->flash('create', 'Data Berhasil Di Tambahkan !');
                            // Redirect ke halaman yang sesuai
                            return redirect('/keputusan');
                        }
                        
                        
                        
                            // ==================== DELETE SURAT KEPUTUSAN MENTERI 
                        
                            public function deletekeputusan(Request $request, $judul_kegiatan)
                        {
                            // Cari entri berdasarkan judul
                            $entry = laporankegiatan::where('judul_kegiatan', $judul_kegiatan)->first();
                        
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
                            return redirect('/acarapelatihan');
                        }
                        
                        
                        
                        
                        


}
// required|exists:users,id


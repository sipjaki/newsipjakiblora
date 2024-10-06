<?php

namespace App\Http\Controllers;

use App\Models\keterampilanpekerja;
use App\Models\Penanggungjawabteknis;
use App\Models\pengawasanlokasi;
use App\Models\tahunpilihan;
use App\Models\timpembina;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\File; // Pastikan ini ada
use Illuminate\Support\Facades\Storage; // Jika Anda menggunakan Storage juga

use Illuminate\Support\Facades\Auth; 

// use Carbon\Carbon;
use Carbon\Carbon; 

use App\Models\Tukangterampil; // Pastikan namespace model sesuai dengan struktur direktori

class SkktenagakerjaController extends Controller
{
   
    public function index()
    {
        // Mengambil data dengan pagination
        $data = Tukangterampil::paginate(15);
        $totalData = Tukangterampil::count();
        $user = Auth::user();

        // Mengambil semua data untuk mendapatkan kecamatan unik
        $allKecamatan = Tukangterampil::all();
        
        // Menggunakan koleksi untuk mendapatkan nilai unik
        $datakecamatan = $allKecamatan->pluck('kecamatan')->unique();
    
        // Mengirimkan data ke view
        return view('backend.04_skk.01_skk.index', [
            'title' => 'SKK Tenaga Kerja',
            'data' => $data,
            'data_kecamatan' => $datakecamatan, // Mengirimkan data kecamatan unik ke view
            'totaldata' => $totalData, // Mengirimkan data kecamatan unik ke view
            'user' => $user, // Mengirimkan data kecamatan unik ke view
        ]);
    }
    
    
    public function showByName($nama)
    {
        $item = Tukangterampil::where('nama', $nama)->firstOrFail();
        $user = Auth::user();

        return view('backend.04_skk.01_skk.show', [
            'data' => $item,
            'user' => $user,
            'title' => 'Detail SKK Tenaga Kerja',
        ]);
    }
    
    public function showkegiatanshowByName($nama)
    {
        $item = Tukangterampil::where('nama', $nama)->firstOrFail();
        $user = Auth::user();

        return view('backend.04_skk.01_skk.showkegiatan', [
            'data' => $item,
            'user' => $user,
            'title' => 'View Sertifikasi Pelatihan',
        ]);
    }
    
// ==================================== UPDATE DATA TENAGA KERJA JASA KONSTRUKSI ========================================        // 
    
                // -------------------- UPDATE DATA TENAGA KERJA JASA KONSTRUKSI  ----------------------
                public function updatetenagakerja($nama)
                {
                    // Cari data undang-undang berdasarkan nilai 'judul'
                    $datatukangterampil = Tukangterampil::where('nama', $nama)->firstOrFail();
                    $datapengawasanlokasi = pengawasanlokasi::all();
                    $datatahunpilihan = tahunpilihan::all();
                    $dataketerampilan = keterampilanpekerja::all();
                    $user = Auth::user();

                    // Tampilkan form update dengan data yang ditemukan
                    return view('backend.04_skk.01_skk.update', [
                        'datatukangterampil' => $datatukangterampil,
                        'datapengawasanlokasi' => $datapengawasanlokasi,
                        'datatahunpilihan' => $datatahunpilihan,
                        'dataketerampilan' => $dataketerampilan,
                        'user' => $user,
                    
                        'title' => 'Update Data Pekerja'
                    ]);
                }
                
                // -------------------- CREATE UPDATE TENAGA KERJA JASA KONSTRUKSI ----------------------
                public function createupdatetenagakerja(Request $request, $nama)
                {
                    // Validasi input
                    $request->validate([
                        'nama' => 'required|string|max:255',
                        'pengawasanlokasi_id' => 'required|string|max:255',
                        'keterampilanpekerja_id' => 'required|string|max:255',
                        'tahunpilihan_id' => 'required|string|max:255',
                        'desa' => 'required|string|max:255',
                        'alamat' => 'required|string|max:255',
                        'tanggal_lahir' => 'required|date',
                        'nik' => 'required|string|max:255',
                        'kualifikasi' => 'required|string|max:255',
                        'registrasi' => 'required|string|max:255',
                        'foto' => 'nullable|file|mimes:jpg,jpeg,png|max:20480',
                    ]);
                
                    // Cari data tukang terampil berdasarkan nama
                    $datatukangterampil = Tukangterampil::where('nama', $nama)->firstOrFail();
                
                    // Path folder penyimpanan
                    $storagePath = storage_path('app/public/skktenagakerja/profil');
                
                    // Cek dan buat folder jika tidak ada
                    if (!File::exists($storagePath)) {
                        File::makeDirectory($storagePath, 0755, true);
                    }
                
                    // Simpan file foto dan ambil path-nya
                    $filePath = $datatukangterampil->foto; // Default ke foto yang ada jika tidak ada file baru
                    if ($request->hasFile('foto')) {
                        $file = $request->file('foto');
                        $filePath = $file->store('skktenagakerja/profil', 'public');
                    }
                
                    // Update data tukang terampil dengan data dari form
                    $datatukangterampil->update([
                        'nama' => $request->input('nama'),
                        'pengawasanlokasi_id' => $request->input('pengawasanlokasi_id'),
                        'keterampilanpekerja_id' => $request->input('keterampilanpekerja_id'),
                        'tahunpilihan_id' => $request->input('tahunpilihan_id'),
                        'desa' => $request->input('desa'),
                        'alamat' => $request->input('alamat'),
                        'tanggal_lahir' => $request->input('tanggal_lahir'),
                        'nik' => $request->input('nik'),
                        'kualifikasi' => $request->input('kualifikasi'),
                        'registrasi' => $request->input('registrasi'),
                        'foto' => $filePath, // Menggunakan variabel filePath yang benar
                    ]);
                
                    // Flash pesan session
                    session()->flash('update', 'Data Tenaga Kerja Berhasil Diupdate!');
                
                    // Redirect ke halaman yang sesuai
                    return redirect('/beskktenagakerja');
                }



// ===================================================== CREATE TENAGA KERJA JASA KONSTRUKSI  ====================================================
    // ==========================================================
    // CREATE TENAGA KERJA JASA KONSTRUKSI 
    
    public function createtenagakerja()
    {
        $user = Auth::user();
        $data = Tukangterampil::all();
        $datapengawasanlokasi = pengawasanlokasi::all();
        $datatahunpilihan = tahunpilihan::all();
        $dataketerampilan = keterampilanpekerja::all();


        // Tampilkan form update dengan data yang ditemukan
        return view('backend.04_skk.01_skk.create', [
            'title' => 'Create Tenaga Kerja',
            'user' => $user,
            'tukangterampil' => $data,
            'datapengawasanlokasi' => $datapengawasanlokasi,
            'datatahunpilihan' => $datatahunpilihan,
            'dataketerampilan' => $dataketerampilan,

                            
        ]);
    }

    // Menyimpan data asosiasi pengusaha
    public function createstoretenagakerja(Request $request)
    {
        // Validate input
        $request->validate([
            'nama' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'pengawasanlokasi_id' => 'required|integer',
            'keterampilanpekerja_id' => 'required|integer',
            'tahunpilihan_id' => 'required|integer',
            'desa' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'nik' => 'required|string|max:255',
            'kualifikasi' => 'required|string|max:255',
            'registrasi' => 'required|string|max:255',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:20480',
            'kta_gatensi' => 'required|image|mimes:jpeg,png,jpg,gif|max:20480',
            'skk_pekerja' => 'required|image|mimes:jpeg,png,jpg,gif|max:20480',
            'foto_kegiatanpekerja1' => 'required|image|mimes:jpeg,png,jpg,gif|max:20480',
            'foto_kegiatanpekerja2' => 'required|image|mimes:jpeg,png,jpg,gif|max:20480',
        ]);

        // Handle file uploads
        $foto_path = $request->file('foto')->store('skktenagakerja/arsip/pas');
        $kta_gatensi_path = $request->file('kta_gatensi')->store('skktenagakerja/arsip/kta_gatensi');
        $skk_pekerja_path = $request->file('skk_pekerja')->store('skktenagakerja/arsip/skk_pekerja');
        $foto_kegiatanpekerja1_path = $request->file('foto_kegiatanpekerja1')->store('skktenagakerja/arsip/fotokegiatan1');
        $foto_kegiatanpekerja2_path = $request->file('foto_kegiatanpekerja2')->store('skktenagakerja/arsip/fotokegiatan2');

        // Create a new entry in the database
        Tukangterampil::create([
            'nama' => $request->input('nama'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'pengawasanlokasi_id' => $request->input('pengawasanlokasi_id'),
            'keterampilanpekerja_id' => $request->input('keterampilanpekerja_id'),
            'tahunpilihan_id' => $request->input('tahunpilihan_id'),
            'desa' => $request->input('desa'),
            'alamat' => $request->input('alamat'),
            'nik' => $request->input('nik'),
            'kualifikasi' => $request->input('kualifikasi'),
            'registrasi' => $request->input('registrasi'),
            'foto' => $foto_path,
            'kta_gatensi' => $kta_gatensi_path,
            'skk_pekerja' => $skk_pekerja_path,
            'foto_kegiatanpekerja1' => $foto_kegiatanpekerja1_path,
            'foto_kegiatanpekerja2' => $foto_kegiatanpekerja2_path,
        ]);

        session()->flash('create', 'Data Berhasil Ditambahkan!');
        
        // Redirect to the desired route
        return redirect('/beskktenagakerja'); // Adjust this to your desired route
    }



// ===================================================== DELETE TENAGA KERJA ====================================================

                public function deletetenagakerja($nama)
                {
                    // Cari entri berdasarkan name
                    $entry = Tukangterampil::where('nama', $nama)->first();
                
                    if ($entry) {
                        // Hapus file terkait jika ada
                        if ($entry->foto) {
                            Storage::disk('public')->delete($entry->foto);
                        }
                
                        // Hapus entri dari database
                        Tukangterampil::destroy($entry->id);
                
                        // Set pesan flash untuk sukses
                        session()->flash('delete', 'Data Berhasil Dihapus!');
                
                        // Redirect ke halaman yang sesuai
                        return redirect('/beskktenagakerja');
                    } else {
                        // Set pesan flash jika data tidak ditemukan
                        session()->flash('error', 'Data Tidak Ditemukan!');
                
                        // Redirect ke halaman yang sesuai
                        return redirect('/beskktenagakerja');
                    }
                }                
                
// ============================================================================================

public function feskktenagakerja()
    {
        $datapengawasanlokasi = pengawasanlokasi::all();
        $dataketerampilan = keterampilanpekerja::all();
        $datatahunpilihan = tahunpilihan::all();

        $data= Tukangterampil::paginate(15); // Menggunakan paginate() untuk pagination
        $totalData = Tukangterampil::count();

          // Mengambil semua data untuk mendapatkan kecamatan unik
          $allKecamatan = Tukangterampil::all();
        
          // Menggunakan koleksi untuk mendapatkan nilai unik
          $datakecamatan = $allKecamatan->pluck('kecamatan')->unique();
          $user = Auth::user();

        return view('frontend.04_tenagakerja.01_skaskt', [
            'title' => 'Data Tenaga Kerja',
            'data' => $data,
            'data_kecamatan' => $datakecamatan, // Mengirimkan data paginasi ke view
            'totaldata' => $totalData, // Mengirimkan data paginasi ke view
            'user' => $user, // Mengirimkan data paginasi ke view

            'datapengawasanlokasi' => $datapengawasanlokasi,
            'datatahunpilihan' => $datatahunpilihan,
            'dataketerampilan' => $dataketerampilan,

        ]);
    }

public function listkecamatan()
    {
        $datapengawasanlokasi = pengawasanlokasi::all();
        $dataketerampilan = keterampilanpekerja::all();
        $datatahunpilihan = tahunpilihan::all();
       
        $data= Tukangterampil::paginate(15); // Menggunakan paginate() untuk pagination
        $totalData = Tukangterampil::count();

          // Mengambil semua data untuk mendapatkan kecamatan unik
          $allKecamatan = Tukangterampil::all();
        
          // Menggunakan koleksi untuk mendapatkan nilai unik
          $datakecamatan = $allKecamatan->pluck('kecamatan')->unique();
          $user = Auth::user();

        return view('frontend.04_tenagakerja.01_skasktshowkecamatan', [
            'title' => 'Kecamatan | Data Tenaga Kerja',
            'data' => $data,
            'data_kecamatan' => $datakecamatan, // Mengirimkan data paginasi ke view
            'totaldata' => $totalData, // Mengirimkan data paginasi ke view
            'user' => $user, // Mengirimkan data paginasi ke view

            
            'datapengawasanlokasi' => $datapengawasanlokasi,
            'datatahunpilihan' => $datatahunpilihan,
            'dataketerampilan' => $dataketerampilan,

        ]);
    }

    public function feskktenagakerjashowByName($nama)
    {
        $datapengawasanlokasi = pengawasanlokasi::all();
        $dataketerampilan = keterampilanpekerja::all();
        $datatahunpilihan = tahunpilihan::all();

        $item = Tukangterampil::where('nama', $nama)->firstOrFail();
        $user = Auth::user();

        return view('frontend.04_tenagakerja.01_skasktshow', [
            'data' => $item,
            'user' => $user,
            'title' => 'Detail SKK Tenaga Kerja',
            
            'datapengawasanlokasi' => $datapengawasanlokasi,
            'datatahunpilihan' => $datatahunpilihan,
            'dataketerampilan' => $dataketerampilan,

        ]);
    }

    public function feskktenagakerjadokumentasishowByName($nama)
    {
        $datapengawasanlokasi = pengawasanlokasi::all();
        $dataketerampilan = keterampilanpekerja::all();
        $datatahunpilihan = tahunpilihan::all();

        $item = Tukangterampil::where('nama', $nama)->firstOrFail();
        $user = Auth::user();

        return view('frontend.04_tenagakerja.01_skasktshowdetails', [
            'data' => $item,
            'user' => $user,
            'title' => 'Dokumentasi Pelatihan Sertifikasi',
            
            'datapengawasanlokasi' => $datapengawasanlokasi,
            'datatahunpilihan' => $datatahunpilihan,
            'dataketerampilan' => $dataketerampilan,

        ]);
    }

    public function feskktenagakerjakecamatanshowBykecamatan(Request $request)
    {
        // Mengambil semua lokasi pengawasan
        $datapengawasanlokasi = pengawasanlokasi::all();
        $dataketerampilan = keterampilanpekerja::all();
        $datatahunpilihan = tahunpilihan::all();
    
        // Menghitung total data tukang terampil
        $totalData = Tukangterampil::count();
    
        // Mengambil parameter 'id' dari query string
        $selectedKecamatanId = $request->query('id'); // Mengganti nama variabel agar lebih jelas
    
        // Memfilter data berdasarkan 'pengawasanlokasi_id' jika parameter ada
        if ($selectedKecamatanId) {
            $data = Tukangterampil::where('pengawasanlokasi_id', $selectedKecamatanId)->paginate(15);
        } else {
            // Ambil semua data jika tidak ada parameter
            $data = Tukangterampil::paginate(15);
        }
    
        // Mengambil nilai unik dari 'pengawasanlokasi_id' untuk dropdown
        $data_kecamatan = pengawasanlokasi::select('id', 'kota')->distinct()->pluck('kota', 'id');
    
        // Mengambil semua lokasi untuk ditampilkan di view
        $lokasi = PengawasanLokasi::all(); // Pastikan model PengawasanLokasi sesuai
    
        // Mengirim data ke view
        return view('frontend.04_tenagakerja.01_skasktshowkecamatan', [
            'title' => 'Kecamatan | SKK Tenaga Kerja',
            'data' => $data,
            'data_kecamatan' => $data_kecamatan,
            'totaldata' => $totalData,
            'lokasi' => $lokasi,
            'selectedKecamatanId' => $selectedKecamatanId, // Mengirim ID yang terpilih ke view
            'datatahunpilihan' => $datatahunpilihan,
            'dataketerampilan' => $dataketerampilan,
            'datapengawasanlokasi' => $datapengawasanlokasi,
        ]);
    }
    

    
public function listdesa()
    {
       
        $datapengawasanlokasi = pengawasanlokasi::all();
        $datatahunpilihan = tahunpilihan::all();
        $dataketerampilan = keterampilanpekerja::all();
       
        $data= Tukangterampil::paginate(15); // Menggunakan paginate() untuk pagination
        $totalData = Tukangterampil::count();

          // Mengambil semua data untuk mendapatkan kecamatan unik
          $allKecamatan = Tukangterampil::all();
        
          // Menggunakan koleksi untuk mendapatkan nilai unik
          $datadesa = $allKecamatan->pluck('desa')->unique();


        return view('frontend.04_tenagakerja.01_skasktalldatadesa', [
            'title' => 'Desa | Data Tenaga Kerja',
            'data' => $data,
            'dataDesa' => $datadesa, // Mengirimkan data paginasi ke view
            'totaldata' => $totalData, // Mengirimkan data paginasi ke view

                 
            'datapengawasanlokasi' => $datapengawasanlokasi,
            'datatahunpilihan' => $datatahunpilihan,
            'dataketerampilan' => $dataketerampilan,

        ]);
    }
  
  
    public function feskktenagakerjadesashowBydesa(Request $request)
    {
        // Mengambil semua data desa untuk dropdown
        $dataDesa = Tukangterampil::select('desa')->distinct()->pluck('desa');
    
        // Mengambil parameter 'id' dari query string
        $selectedDesaId = $request->query('id');
    
        // Memfilter data berdasarkan 'desa' jika parameter ada
        if ($selectedDesaId) {
            $data = Tukangterampil::where('desa', $selectedDesaId)->paginate(15);
        } else {
            // Ambil semua data jika tidak ada parameter
            $data = Tukangterampil::paginate(15);
        }
    
        // Menghitung total data tukang terampil
        $totalData = Tukangterampil::count();
    
        // Mengambil semua lokasi untuk ditampilkan di view
        $lokasi = PengawasanLokasi::all();
    
        // Mengirim data ke view
        return view('frontend.04_tenagakerja.01_skasktalldatadesa', [
            'title' => 'Desa | SKK Tenaga Kerja',
            'data' => $data,
            'dataDesa' => $dataDesa, // Data desa untuk dropdown
            'totaldata' => $totalData,
            'lokasi' => $lokasi,
            'selectedDesaId' => $selectedDesaId,
        ]);
    }
      
    public function listketerampilan(Request $request)
    {
        // Ambil semua data pengawasan lokasi dan tahun pilihan
        $datapengawasanlokasi = PengawasanLokasi::all();
        $datatahunpilihan = TahunPilihan::all();
        
        // Ambil semua data keterampilan
        $dataketerampilan = KeterampilanPekerja::all();
    
        // Cek apakah ada pilihan keterampilan dari request
        $selectedKeterampilanId = $request->query('id');
    
        // Ambil data Tukang Terampil berdasarkan keterampilan_id jika ada
        if ($selectedKeterampilanId) {
            $data = Tukangterampil::where('keterampilanpekerja_id', $selectedKeterampilanId)->paginate(15);
        } else {
            // Jika tidak ada pilihan, ambil semua data
            $data = Tukangterampil::paginate(15);
        }
    
        // Hitung total data Tukang Terampil
        $totalData = Tukangterampil::count();
    
        // Kirim data ke view
        return view('frontend.04_tenagakerja.01_skasktalldataketerampilan', [
            'title' => 'Keterampilan | Data Tenaga Kerja',
            'data' => $data,
            'data_keterampilan' => $dataketerampilan, // Mengirimkan data keterampilan ke view
            'totaldata' => $totalData,
            'user' => Auth::user(),
            'datapengawasanlokasi' => $datapengawasanlokasi,
            'datatahunpilihan' => $datatahunpilihan,
        ]);
    }
    
    
    public function feskktenagakerjaketerampilanshowByketerampilan(Request $request)
    {
        // Hitung total data Tukang Terampil
        $totalData = Tukangterampil::count();
    
        // Ambil parameter 'id' dari query string untuk keterampilan
        $selectedKeterampilanId = $request->query('id');
        
        // Memfilter data berdasarkan keterampilan_id jika 'id' ada
        if ($selectedKeterampilanId) {
            $data = Tukangterampil::where('keterampilanpekerja_id', $selectedKeterampilanId)->paginate(15);
        } else {
            // Ambil semua data jika tidak ada parameter
            $data = Tukangterampil::paginate(15);
        }
    
        // Mengambil nilai unik dari atribut 'keterampilanpekerja_id'
        $data_keterampilan = KeterampilanPekerja::select('id', 'keterampilan')->distinct()->get();
    
        // Mengirim data ke view
        return view('frontend.04_tenagakerja.01_skasktalldataketerampilan', [
            'title' => 'Keterampilan | SKK Tenaga Kerja',
            'data' => $data, // Mengirimkan data yang difilter atau semua data
            'data_keterampilan' => $data_keterampilan, // Mengirimkan data keterampilan ke view
            'totaldata' => $totalData, // Mengirimkan total data
        ]);
    }
    
    
    public function listregister(Request $request)
    {
        // Ambil semua data pengawasan lokasi dan tahun pilihan
        $datapengawasanlokasi = PengawasanLokasi::all();
        $datatahunpilihan = TahunPilihan::all();
        
        // Ambil semua data keterampilan
        $dataketerampilan = KeterampilanPekerja::all();
    
        // Cek apakah ada pilihan keterampilan dari request
        $selectedTahunbimtekId = $request->query('id');
    
        // Ambil data Tukang Terampil berdasarkan keterampilan_id jika ada
        if ($selectedTahunbimtekId) {
            $data = Tukangterampil::where('tahunpilihan_id', $selectedTahunbimtekId)->paginate(15);
        } else {
            // Jika tidak ada pilihan, ambil semua data
            $data = Tukangterampil::paginate(15);
        }
    
        // Hitung total data Tukang Terampil
        $totalData = Tukangterampil::count();
    
        // Kirim data ke view
        return view('frontend.04_tenagakerja.01_skasktalldataregister', [
            'title' => 'Tahun Bimtek | Data Tenaga Kerja',
            'data' => $data,
            'data_keterampilan' => $dataketerampilan, // Mengirimkan data keterampilan ke view
            'totaldata' => $totalData,
            'user' => Auth::user(),
            'datapengawasanlokasi' => $datapengawasanlokasi,
            'datatahunpilihan' => $datatahunpilihan,
        ]);
    }

        public function feskktenagakerjabimtekshowBybimtek(Request $request)
        {

        // Mengambil semua lokasi pengawasan
        $datapengawasanlokasi = pengawasanlokasi::all();
        $dataketerampilan = keterampilanpekerja::all();
        $datatahunpilihan = tahunpilihan::all();
    
        // Menghitung total data tukang terampil
        $totalData = Tukangterampil::count();
    
        // Mengambil parameter 'id' dari query string
        $selectedTahunbimtekId = $request->query('id'); // Mengganti nama variabel agar lebih jelas
    
        // Memfilter data berdasarkan 'pengawasanlokasi_id' jika parameter ada
        if ($selectedTahunbimtekId) {
            $data = Tukangterampil::where('tahunpilihan_id', $selectedTahunbimtekId)->paginate(15);
        } else {
            // Ambil semua data jika tidak ada parameter
            $data = Tukangterampil::paginate(15);
        }
    
        // Mengambil nilai unik dari 'pengawasanlokasi_id' untuk dropdown
        $data_tahunpilihan = tahunpilihan::select('id', 'tahun')->distinct()->pluck('tahun', 'id');
    
        // Mengambil semua lokasi untuk ditampilkan di view
        $lokasi = PengawasanLokasi::all(); // Pastikan model PengawasanLokasi sesuai
    
        // Mengirim data ke view
        return view('frontend.04_tenagakerja.01_skasktalldataregister', [
            'title' => 'Kecamatan | SKK Tenaga Kerja',
            'data' => $data,
            'data_tahunpilihan' => $data_tahunpilihan,
            'totaldata' => $totalData,
            'lokasi' => $lokasi,
            'selectedKecamatanId' => $selectedTahunbimtekId, // Mengirim ID yang terpilih ke view
            'datatahunpilihan' => $datatahunpilihan,
            'dataketerampilan' => $dataketerampilan,
            'datapengawasanlokasi' => $datapengawasanlokasi,
        ]);
        }


        // ---------------------------------------------------------------------------------------------------------
        // RUTE BERDASRKAN DATA STATISTIKA DALAM BIDANG PEKERJA
        // ---------------------------------------------------------------------------------------------------------
        public function liststatistika()
        {
            // Ambil data Tukangterampil beserta relasinya
            $data = Tukangterampil::with(['keterampilanpekerja', 'pengawasanlokasi', 'tahunpilihan'])->get();
        
            // Pastikan data tidak kosong
            if ($data->isEmpty()) {
                return redirect()->back()->with('error', 'Data tidak ditemukan.');
            }
        
            // Hitung total pekerja
            $totalCount = $data->count();
        
            // Data untuk chart keterampilan
            $data_keterampilan = $data->groupBy('keterampilanpekerja_id')->map(function ($group) use ($totalCount) {
                return [
                    'name' => $group->first()->keterampilanpekerja->keterampilan,
                    'y' => ($group->count() / $totalCount) * 100,
                ];
            })->values()->toArray();
        
            // Data untuk chart kecamatan
            $data_kecamatan = $data->groupBy('pengawasanlokasi_id')->map(function ($group) {
                return [
                    'name' => $group->first()->pengawasanlokasi->kota,
                    'y' => $group->count(),
                ];
            })->values()->toArray();
        
            // Data untuk chart desa
            $data_desa = $data->groupBy('desa')->map(function ($group) {
                return [
                    'label' => $group->first()->desa,
                    'y' => $group->count(),
                ];
            })->values()->toArray();
        
            // Data untuk chart tahun bimtek
            $data_tahun_bimtek = $data->groupBy('tahunpilihan_id')->map(function ($group) use ($totalCount) {
                return [
                    'name' => $group->first()->tahunpilihan->tahun,
                    'y' => ($group->count() / $totalCount) * 100,
                ];
            })->values()->toArray();
        
            return view('frontend.04_tenagakerja.statistika.index', [
                'title' => 'Statistika | Data Tenaga Kerja',
                'data_keterampilan' => $data_keterampilan,
                'data_kecamatan' => $data_kecamatan,
                'data_desa' => $data_desa,
                'data_tahun_bimtek' => $data_tahun_bimtek,
                'judulstatistika' => 'Distribusi Berdasarkan Keterampilan',
                'judulkecamatan' => 'Distribusi Berdasarkan Kecamatan',
                'juduldesa' => 'Distribusi Berdasarkan Desa',
                'judultahunbimtek' => 'Distribusi Berdasarkan Registrasi Para Pekerja Tukang Terampil',
                'total_data' => $totalCount,
            ]);
        }
          

        // ========================================================================================================
        // ========================================================================================================
        // ========================================================================================================
                
        public function chartketerampilan()
        {
     // DATA CHART KETERAMPILAN PERSENTASE 
     $data = Tukangterampil::with(['keterampilanpekerja', 'pengawasanlokasi', 'tahunpilihan'])->get();
        
     // Pastikan data tidak kosong
     if ($data->isEmpty()) {
         return redirect()->back()->with('error', 'Data tidak ditemukan.');
     }
 
     // Hitung total pekerja
     $totalCount = $data->count();

            // Data untuk chart keterampilan
            $data_keterampilan = $data->groupBy('keterampilanpekerja_id')->map(function ($group) use ($totalCount) {
                return [
                    'name' => $group->first()->keterampilanpekerja->keterampilan,
                    'y' => ($group->count() / $totalCount) * 100,
                ];
            })->values()->toArray();
        
             
            // ----------------------------------------------------------------------------------------

            $data= Tukangterampil::all(); // Menggunakan paginate() untuk pagination
            $totalData = Tukangterampil::count();

            return view('frontend.04_tenagakerja.statistika.chartketerampilan', [
                'title' => 'Keterampilan | Data Tenaga Kerja',
                'data' => $data,
                'data_keterampilan' => $data_keterampilan,
                // 'data_keterampilan' => $data_keterampilan,
                'judulstatistika' => 'Distribusi Data Berdasarkan Keterampilan', 
                'total_data' => $totalData, 

                // 'data_tahun_bimtek' => $datatahunbimtek, // Mengirimkan data paginasi ke view
            ]);
        }
    
        
        public function chartkecamatan()
        {
            // Ambil data Tukangterampil beserta relasinya
            $data = Tukangterampil::with(['keterampilanpekerja', 'pengawasanlokasi', 'tahunpilihan'])->get();
            
            // Pastikan data tidak kosong
            if ($data->isEmpty()) {
                return redirect()->back()->with('error', 'Data tidak ditemukan.');
            }
        
            // Hitung total pekerja
            $totalCount = $data->count();
        
            // Format data untuk grafik kecamatan
            $data_for_chart_kecamatan = $data->groupBy('pengawasanlokasi_id')->map(function ($group) {
                return [
                    'name' => $group->first()->pengawasanlokasi->kota,
                    'y' => $group->count(),
                ];
            })->values()->toArray();
        
            // Hitung total data
            $totalData = $data->count();
        
            return view('frontend.04_tenagakerja.statistika.chartkecamatan', [
                'title' => 'Kecamatan | Data Tenaga Kerja',
                'data' => $data,
                'data_for_chart_kecamatan' => json_encode($data_for_chart_kecamatan), // Kirim data dalam format JSON
                'judulkecamatan' => 'Distribusi Kecamatan', // Judul grafik
                'total_data' => $totalData, 
            ]);
        }
        

          
        public function chartdesa()
{
    // Ambil data Tukangterampil beserta relasinya
    $data = Tukangterampil::with(['keterampilanpekerja', 'pengawasanlokasi', 'tahunpilihan'])->get();
    
    // Pastikan data tidak kosong
    if ($data->isEmpty()) {
        return redirect()->back()->with('error', 'Data tidak ditemukan.');
    }

    // Hitung total pekerja
    $totalCount = $data->count();

    // Format data untuk grafik berdasarkan desa
    $data_for_chart_desa = $data->groupBy('desa')->map(function ($group) {
        return [
            'name' => $group->first()->desa, // Ganti dari kota ke nama desa
            'y' => $group->count(),
        ];
    })->values()->toArray();

    // Hitung total data
    $totalData = $data->count();

    return view('frontend.04_tenagakerja.statistika.chartdesa', [ // Pastikan view ini sesuai
        'title' => 'Desa | Data Tenaga Kerja',
        'data' => $data,
        'data_for_chart_desa' => json_encode($data_for_chart_desa), // Kirim data dalam format JSON
        'juduldesa' => 'Distribusi Desa', // Judul grafik
        'total_data' => $totalData, 
    ]);
}

        
        public function chartregister()
        {
    
        // ----------------------------------------------------------------------------------------
        $data = Tukangterampil::with(['keterampilanpekerja', 'pengawasanlokasi', 'tahunpilihan'])->get();
            
        // Pastikan data tidak kosong
        if ($data->isEmpty()) {
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }
    
        // Hitung total pekerja
        $totalCount = $data->count();
    
        // Format data untuk grafik kecamatan
        $data_for_chart_bimtek = $data->groupBy('tahunpilihan_id')->map(function ($group) {
            return [
                'name' => $group->first()->tahunpilihan->tahun,
                'y' => $group->count(),
            ];
        })->values()->toArray();
    
        // Hitung total data
        $totalData = $data->count();
    
        return view('frontend.04_tenagakerja.statistika.chartregister', [
            'title' => 'Kecamatan | Data Tenaga Kerja',
            'data' => $data,
            'data_for_chart_bimtek' => json_encode($data_for_chart_bimtek), // Kirim data dalam format JSON
            'judultahunbimtek' => 'Distribusi Data Berdasarkan Tahun Bimbingan Teknis', // Judul grafik
            'total_data' => $totalData, 
        ]);
    
        }

        
        public function penanggungjawabteknis()
        {
           $datapenanggungjawabteknis = penanggungjawabteknis::paginate(15);
           $datapengawasanlokasi = pengawasanlokasi::all();

            // Mengirimkan data ke view
            return view('frontend.04_tenagakerja.penanggungjawabteknis.index', [
                'title' => 'Penanggung Jawab Teknis',
                'data' => $datapenanggungjawabteknis,
                'datapengawasanlokasi' => $datapengawasanlokasi,
            ]);
        }
        
        public function timpembinajasakonstruksi()
        {
           $datatimpembina = timpembina::paginate(5);
            // Mengirimkan data ke view
            return view('frontend.04_tenagakerja.timpembina.index', [
                'title' => 'Tim Pembina Jasa Konstruksi',
                'data' => $datatimpembina,
            ]);
        }
        

// ===============================================================================================================

public function datapjt()
{
    // Mengambil data dengan pagination
   $datapjt = Penanggungjawabteknis::paginate(15);
   $datapengawasanlokasi = pengawasanlokasi::all();
    // Mengirimkan data ke view

    $user = Auth::user();
    return view('backend.04_skk.02_pjt.index', [
        'title' => 'Penanggung Jawab Teknis',
        'datapengawasanlokasi' => $datapengawasanlokasi,
        'data' => $datapjt,
        'user' => $user,
        
    ]);
}


public function datapjtshowByName($nama_lengkap)
{
    $item = penanggungjawabteknis::where('nama_lengkap', $nama_lengkap)->firstOrFail();
    $user = Auth::user();
    
    $datapengawasanlokasi = pengawasanlokasi::all();

    return view('backend.04_skk.02_pjt.show', [
        'data' => $item,
        'user' => $user,
        'datapengawasanlokasi' => $datapengawasanlokasi,
        'title' => 'Detail Penanggung Jawab Teknis',
    ]);
}

// ==================================== UPDATE DATA PJT JASA KONSTRUKSI ========================================        // 

            // -------------------- UPDATE DATA PJT  JASA KONSTRUKSI  ----------------------
            public function updatedatapjt($nama_lengkap)
            {
                // Cari data undang-undang berdasarkan nilai 'judul'
                $datapenanggungjawabteknis = penanggungjawabteknis::where('nama_lengkap', $nama_lengkap)->firstOrFail();
                $datapengawasanlokasi = pengawasanlokasi::all();
                
                $user = Auth::user();
    
                // Tampilkan form update dengan data yang ditemukan
                return view('backend.04_skk.02_pjt.update', [
                    'data' => $datapenanggungjawabteknis,
                    'datapengawasanlokasi' => $datapengawasanlokasi,
                    'user' => $user,
                    'title' => 'Update Data Penanggung Jawab Teknis'
                ]);
            }
            
            // -------------------- CREATE UPDATE TENAGA KERJA JASA KONSTRUKSI ----------------------
            public function createupdatedatapjtnew(Request $request, $id)
            {
                // Validate the incoming request data
                $request->validate([
                    'nama_lengkap' => 'required|string|max:255',
                    'pengawasanlokasi_id' => 'required|integer', // Ensure it exists in the related table
                    'nopjt' => 'required|string|max:255',
                    'sfesifikasi' => 'required|string|max:255',
                    'tanggal_terbit' => 'required|date',
                    'masa_berlaku' => 'required|date',
                    'foto_pjt' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Max file size 2MB
                ]);
        
                // Find the record by nama_lengkap or use another identifier
                $data = penanggungjawabteknis::where('id', $id)->firstOrFail();
        
                // Handle file upload if a new file is provided
                if ($request->hasFile('foto_pjt')) {
                    // Delete old file if exists
                    if ($data->foto_pjt) {
                        Storage::delete($data->foto_pjt);
                    }
        
                    // Store new file
                    $filePath = $request->file('foto_pjt')->store('penanggungjawabteknis'); // Adjust path as needed
                    // $data->foto_pjt = $path;
                }
        
                $data->update([
                    'nama_lengkap' => $request->input('nama_lengkap'),
                    'pengawasanlokasi_id' => $request->input('pengawasanlokasi_id'),
                    'nopjt' => $request->input('nopjt'),
                    'sfesifikasi' => $request->input('sfesifikasi'),
                    'tanggal_terbit' => $request->input('tanggal_terbit'),
                    'masa_berlaku' => $request->input('masa_berlaku'),
                    'foto_pjt' => $filePath, // Menggunakan variabel filePath yang benar
                ]);
            
                // Flash pesan session
                session()->flash('update', 'Data Tenaga Kerja Berhasil Diupdate!');
            
                // Redirect ke halaman yang sesuai
                return redirect('/datapjt');
            }

        

// ===================================================== DELETE TENAGA KERJA ====================================================

            public function deletedatapjt($nama_lengkap)
            {
                // Cari entri berdasarkan name
                $entry = penanggungjawabteknis::where('nama_lengkap', $nama_lengkap)->first();
            
                if ($entry) {
                    // Hapus file terkait jika ada
                    if ($entry->foto) {
                        Storage::disk('public')->delete($entry->foto_pjt);
                    }
            
                    // Hapus entri dari database
                    penanggungjawabteknis::destroy($entry->id);
            
                    // Set pesan flash untuk sukses
                    session()->flash('delete', 'Data Berhasil Dihapus!');
            
                    // Redirect ke halaman yang sesuai
                    return redirect('/datapjt');
                } else {
                    // Set pesan flash jika data tidak ditemukan
                    session()->flash('error', 'Data Tidak Ditemukan!');
            
                    // Redirect ke halaman yang sesuai
                    return redirect('/datapjt');
                }
            }                
            
// ============================================================================================


// ============================================ DATA TIMPEMBINA JASA KONSTRUKSI ===================================================================

public function timpembina()
{
    // Mengambil data dengan pagination
   $data = timpembina::paginate(10);   
    $user = Auth::user();

    return view('backend.04_skk.03_timpembina.index', [
        'title' => 'Tim Pembina Jasa Konstruksi',
        'user' => $user,
        'data' => $data,
        
    ]);
}


// public function timpembinashowByName($nama_lengkap)
// {
//     $item = timpembina::where('nama_lengkap', $nama_lengkap)->firstOrFail();
//     $user = Auth::user();
    
//     return view('backend.04_skk.02_pjt.show', [
//         'data' => $item,
//         'user' => $user,
//         'title' => 'Detail Tim Pembina Jasa Konstruksi',
//     ]);
// }

// ==================================== UPDATE DATA TIM PEMBINA JASA KONSTRUKSI  ========================================        // 

            // -------------------- UPDATE DATA TIM PEMBINA JASA KONSTRUKSI  ----------------------
            public function updatedatatimpembina($nama_lengkap)
            {
                // Cari data undang-undang berdasarkan nilai 'judul'
                $datatimpembina = timpembina::where('nama_lengkap', $nama_lengkap)->firstOrFail();
                // $datapengawasanlokasi = pengawasanlokasi::all();
                
                $user = Auth::user();
    
                // Tampilkan form update dengan data yang ditemukan
                return view('backend.04_skk.03_timpembina.update', [
                    'data' => $datatimpembina,
                    // 'datapengawasanlokasi' => $datapengawasanlokasi,
                    'user' => $user,
                    'title' => 'Update Data Tim Pembina Jasa Konstruksi'
                ]);
            }
            
            // -------------------- CREATE UPDATE TENAGA KERJA JASA KONSTRUKSI ----------------------
            public function createupdatetimpembina(Request $request, $nama_lengkap)
            {
                // Validate the incoming request data
                $request->validate([
                    'jabatandalamkedinasan' => 'required|string|max:255',
                    'nama_lengkap' => 'required|string|max:255',
                    'email' => 'required|string|max:255',
                    'telepon' => 'required|string|max:255',
                    'fototimpembina' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Max file size 2MB
                ]);
        
                // Find the record by nama_lengkap or use another identifier
                $data = timpembina::where('nama_lengkap', $nama_lengkap)->firstOrFail();
        
                // Handle file upload if a new file is provided
                if ($request->hasFile('fototimpembina')) {
                    // Delete old file if exists
                    if ($data->fototimpembina) {
                        Storage::delete($data->fototimpembina);
                    }
        
                    // Store new file
                    $filePath = $request->file('fototimpembina')->store('timpembina'); // Adjust path as needed
                    // $data->foto_pjt = $path;
                }
        
                $data->update([
                    'jabatandalamkedinasan' => $request->input('jabatandalamkedinasan'),
                    'nama_lengkap' => $request->input('nama_lengkap'),
                    'email' => $request->input('email'),
                    'telepon' => $request->input('telepon'),
                    'fototimpembina' => $filePath, // Menggunakan variabel filePath yang benar
                ]);
            
                // Flash pesan session
                session()->flash('update', 'Data Tim Pembina Jasa Konstruksi Berhasil Diupdate!');
            
                // Redirect ke halaman yang sesuai
                return redirect('/timpembina');
            }


// ===================================================== DELETE TIM PEMBINA JASA KONSTRUKSI KBB ====================================================

public function deletedatatimpembina($nama_lengkap)
{
    // Cari entri berdasarkan name
    $entry = timpembina::where('nama_lengkap', $nama_lengkap)->first();

    if ($entry) {
        // Hapus file terkait jika ada
        if ($entry->fototimpembina) {
            Storage::disk('public')->delete($entry->fototimpembina);
        }

        // Hapus entri dari database
        timpembina::destroy($entry->id);

        // Set pesan flash untuk sukses
        session()->flash('delete', 'Data Berhasil Dihapus!');

        // Redirect ke halaman yang sesuai
        return redirect('/timpembina');
    } else {
        // Set pesan flash jika data tidak ditemukan
        session()->flash('error', 'Data Tidak Ditemukan!');

        // Redirect ke halaman yang sesuai
        return redirect('/timpembina');
    }
}                



}



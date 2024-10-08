<?php

namespace App\Http\Controllers;

use App\Models\uijk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File; // Pastikan ini ada
use Illuminate\Support\Facades\Storage; // Jika Anda menggunakan Storage juga

use Illuminate\Support\Facades\Auth; 


class UijkController extends Controller
{
    //
    public function index()
    {
        $data_uijk = uijk::paginate(10); // Menggunakan paginate() untuk pagination

        return view('frontend.08_iujk.uijk', [
            'title' => 'SBU / UIJK Pemerintah Kabupaten Bandung Barat',
            'data' => $data_uijk, // Mengirimkan data paginasi ke view
        ]);
    }
    
    public function feuijkshowByName($nama_perusahaan)
    {
        $data = uijk::where('nama_perusahaan', $nama_perusahaan)->firstOrFail();
        
        return view('frontend.08_iujk.uijkshow', [
            'data' => $data,
            'title' => 'Details Data UIJK',
        ]);
    }

    public function uijkpt()
    {
        // Mengambil data dengan kategori_perusahaan 'PT' dan menggunakan paginate()
        $data = uijk::where('kategori_perusahaan', 'PT')->paginate(15);
    
        return view('frontend.08_iujk.uijkpt', [
            'title' => 'Perseroan Terbatas', // Mengoreksi nama judul
            'data' => $data, // Mengirimkan data paginasi ke view
        ]);
    }

    public function uijkcv()
    {
        // Mengambil data dengan kategori_perusahaan 'PT' dan menggunakan paginate()
        $data = uijk::where('kategori_perusahaan', 'CV')->paginate(15);
    
        return view('frontend.08_iujk.uijkcv', [
            'title' => 'Commanditaire Vennootschap', // Mengoreksi nama judul
            'data' => $data, // Mengirimkan data paginasi ke view
        ]);
    }
    

// RUTE UNTUK FILTER DATA KATEGORI PERUSAHAAN
// =====================================================================================================
    public function kategoriperusahaan()
{
    $data = uijk::paginate(10);

    $data_uijk = uijk::select('kategori_perusahaan')->distinct()->get(); // Mengambil data tanpa duplikat
    $totalData = uijk::count(); // Menghitung total data

    return view('frontend.08_iujk.uijkkategoriperusahaan', [
        'title' => 'Kategori Perusahaan | IUJK Pemerintah Kabupaten Bandung Barat',
        'data_uijk' => $data_uijk, // Mengirimkan data paginasi ke view
        'data' => $data, // Mengirimkan data paginasi ke view
        'totaldata' => $totalData, // Mengirimkan total data ke view
    ]);
}

    
public function kategoriperusahaanfebyname(Request $request)
{
    // Mengambil parameter 'judul' dari query string
    $selectedKategori = $request->query('judul'); // Nama variabel agar lebih jelas

    // Mengambil data kategori perusahaan unik
    $data_uijk = uijk::select('kategori_perusahaan')->distinct()->get(); // Ambil semua kategori unik

    // Memfilter data berdasarkan kategori jika parameter ada
    if ($selectedKategori) {
        $data = uijk::where('kategori_perusahaan', $selectedKategori)->paginate(10);
    } else {
        // Ambil semua data jika tidak ada parameter
        $data = uijk::paginate(10);
    }

    // Menghitung total data kategori
    $totalData = $data_uijk->count(); // Total data unik

    // Mengirim data ke view
    return view('frontend.08_iujk.uijkkategoriperusahaan', [
        'title' => 'Kategori Perusahaan | IUJK Pemerintah Kabupaten Bandung Barat',
        'data_uijk' => $data_uijk, // Mengirimkan data kategori unik ke view
        'data' => $data, // Mengirimkan data paginasi ke view
        'totaldata' => $totalData, // Mengirimkan total data ke view
        'selectedKategori' => $selectedKategori, // Mengirim kategori yang terpilih ke view
    ]);
}
    

// RUTE UNTUK FILTER DATA BIDANG USAHA PERUSAHAAN
// =====================================================================================================
    public function bidangusaha()
{
    $data = uijk::paginate(10);

    $data_uijk = uijk::select('klasifikasi_bidang_usaha')->distinct()->get(); // Mengambil data tanpa duplikat
    $totalData = uijk::count(); // Menghitung total data

    return view('frontend.08_iujk.uijkbidangusaha', [
        'title' => 'Bidang Usaha | IUJK Pemerintah Kabupaten Bandung Barat',
        'data_uijk' => $data_uijk, // Mengirimkan data paginasi ke view
        'data' => $data, // Mengirimkan data paginasi ke view
        'totaldata' => $totalData, // Mengirimkan total data ke view
    ]);
}

    
public function bidangusahafebyname(Request $request)
{
    // Mengambil parameter 'judul' dari query string
    $selectedKategori = $request->query('judul'); // Nama variabel agar lebih jelas

    // Mengambil data kategori perusahaan unik
    $data_uijk = uijk::select('klasifikasi_bidang_usaha')->distinct()->get(); // Ambil semua kategori unik

    // Memfilter data berdasarkan kategori jika parameter ada
    if ($selectedKategori) {
        $data = uijk::where('klasifikasi_bidang_usaha', $selectedKategori)->paginate(10);
    } else {
        // Ambil semua data jika tidak ada parameter
        $data = uijk::paginate(10);
    }

    // Menghitung total data kategori
    $totalData = $data_uijk->count(); // Total data unik

    // Mengirim data ke view
    return view('frontend.08_iujk.uijkbidangusaha', [
        'title' => 'Bidang Usaha | IUJK Pemerintah Kabupaten Bandung Barat',
        'data_uijk' => $data_uijk, // Mengirimkan data kategori unik ke view
        'data' => $data, // Mengirimkan data paginasi ke view
        'totaldata' => $totalData, // Mengirimkan total data ke view
        'selectedKategori' => $selectedKategori, // Mengirim kategori yang terpilih ke view
    ]);
}

// RUTE UNTUK FILTER DATA TAHUN REGISTRASI
// =====================================================================================================
    public function tahunregistrasi()
{
    $data = uijk::paginate(10);

    $data_uijk = uijk::select('keterangan')->distinct()->get(); // Mengambil data tanpa duplikat
    $totalData = uijk::count(); // Menghitung total data

    return view('frontend.08_iujk.uijktahunregistrasi', [
        'title' => 'Tahun Registrasi | IUJK Pemerintah Kabupaten Bandung Barat',
        'data_uijk' => $data_uijk, // Mengirimkan data paginasi ke view
        'data' => $data, // Mengirimkan data paginasi ke view
        'totaldata' => $totalData, // Mengirimkan total data ke view
    ]);
}

    
public function tahunregistrasifebyname(Request $request)
{
    // Mengambil parameter 'judul' dari query string
    $selectedKategori = $request->query('judul'); // Nama variabel agar lebih jelas

    // Mengambil data kategori perusahaan unik
    $data_uijk = uijk::select('keterangan')->distinct()->get(); // Ambil semua kategori unik

    // Memfilter data berdasarkan kategori jika parameter ada
    if ($selectedKategori) {
        $data = uijk::where('keterangan', $selectedKategori)->paginate(10);
    } else {
        // Ambil semua data jika tidak ada parameter
        $data = uijk::paginate(10);
    }

    // Menghitung total data kategori
    $totalData = $data_uijk->count(); // Total data unik

    // Mengirim data ke view
    return view('frontend.08_iujk.uijktahunregistrasi', [
        'title' => 'Tahun Registrasi | IUJK Pemerintah Kabupaten Bandung Barat',
        'data_uijk' => $data_uijk, // Mengirimkan data kategori unik ke view
        'data' => $data, // Mengirimkan data paginasi ke view
        'totaldata' => $totalData, // Mengirimkan total data ke view
        'selectedKategori' => $selectedKategori, // Mengirim kategori yang terpilih ke view
    ]);
}



public function iujkstatistika()
{
    // Ambil semua data dari tabel uijk
    $data = uijk::all();

    // Pastikan data tidak kosong
    if ($data->isEmpty()) {
        return redirect()->back()->with('error', 'Data tidak ditemukan.');
    }

    // Hitung total pekerja
    $totalCount = $data->count();

    // Data untuk chart keterampilan
    $data_kategoriperusahaan = $data->groupBy('kategori_perusahaan')->map(function ($group) use ($totalCount) {
        return [
            'name' => $group->first()->kategori_perusahaan,
            'y' => ($group->count() / $totalCount) * 100,
        ];
    })->values()->toArray();

    // Data untuk chart bidang usaha
    $data_bidangusaha = $data->groupBy('klasifikasi_bidang_usaha')->map(function ($group) {
        return [
            'name' => $group->first()->klasifikasi_bidang_usaha,
            'y' => $group->count(),
        ];
    })->values()->toArray();

    // Data untuk chart keterangan
    $data_keterangan = $data->groupBy('keterangan')->map(function ($group) {
        return [
            'label' => $group->first()->keterangan,
            'y' => $group->count(),
        ];
    })->values()->toArray();

    return view('frontend.08_iujk.statistika.index', [
        'title' => 'Statistika | Ijin Usaha Jasa Konstruksi',
        'data_kategoriperusahaan' => $data_kategoriperusahaan,
        'data_bidangusaha' => $data_bidangusaha,
        'data_keterangan' => $data_keterangan,
        'judulstatistika' => 'Data Berdasarkan Kategori Perusahaan',
        'judulkecamatan' => 'Data Berdasarkan Bidang Keahlian Perusahaan',
        'juduldesa' => 'Distribusi Registrasi Perusahaan',
        'total_data' => $totalCount,
    ]);
}



public function dataiujk()
{
    // Mengambil data dengan pagination
   $data = uijk::paginate(15);   
    $user = Auth::user();

    return view('backend.08_iujk.index', [
        'title' => 'Ijin Usaha Jasa Konstruksi',
        'user' => $user,
        'data' => $data,
        
    ]);
}


public function dataiujkshowByName($nama_perusahaan)
{
    $item = uijk::where('nama_perusahaan', $nama_perusahaan)->firstOrFail();
    $user = Auth::user();
    
    return view('backend.08_iujk.show', [
        'data' => $item,
        'user' => $user,
        'title' => 'Detail Ijin Usaha Jasa Konstruksi',
    ]);
}



            // -------------------- UPDATE DATA IUJK JASA KONSTRUKSI  ----------------------
            public function updatedatadataiujk($nama_perusahaan)
            {
                // Cari data undang-undang berdasarkan nilai 'judul'
                $dataijinusaha = uijk::where('nama_perusahaan', $nama_perusahaan)->firstOrFail();
                // $datapengawasanlokasi = pengawasanlokasi::all();
                
                $user = Auth::user();
    
                // Tampilkan form update dengan data yang ditemukan
                return view('backend.08_iujk.update', [
                    'data' => $dataijinusaha,
                    // 'datapengawasanlokasi' => $datapengawasanlokasi,
                    'user' => $user,
                    'title' => 'Update Data Ijin Usaha Jasa Konstruksi'
                ]);
            }
            
            // -------------------- CREATE UPDATE TENAGA KERJA JASA KONSTRUKSI ----------------------
            public function createupdatedataiujk(Request $request, $nama_perusahaan)
            {
                // Validate the incoming request data
                $request->validate([
                    'nama_perusahaan' => 'required|string|max:255',
                    'kategori_perusahaan' => 'required|string|max:255',
                    'klasifikasi_bidang_usaha' => 'required|string|max:255',
                    'sub_klasifikasi_bidang_usaha' => 'required|string|max:255',
                    'keterangan' => 'required|string|max:255',
                ]);
        
                // Find the record by nama_lengkap or use another identifier
                $data = uijk::where('nama_perusahaan', $nama_perusahaan)->firstOrFail();
        
                $data->update([
                    'nama_perusahaan' => $request->input('nama_perusahaan'),
                    'kategori_perusahaan' => $request->input('kategori_perusahaan'),
                    'klasifikasi_bidang_usaha' => $request->input('klasifikasi_bidang_usaha'),
                    'sub_klasifikasi_bidang_usaha' => $request->input('sub_klasifikasi_bidang_usaha'),
                    'keterangan' => $request->input('keterangan'),
                ]);
            
                // Flash pesan session
                session()->flash('update', 'Data Ijin Usaha Jasa Konstruksi Berhasil Diupdate!');
            
                // Redirect ke halaman yang sesuai
                return redirect('/dataiujk');
            }

            // =================================================

            
            public function deletedatadataiujk($nama_perusahaan)
            {
                // Cari entri berdasarkan nama
                $entry = uijk::where('nama_perusahaan', $nama_perusahaan)->first();
            
                // Jika entri ditemukan, hapus
                if ($entry) {
                    $entry->delete();
                    session()->flash('delete', 'Data berhasil dihapus!');
                } else {
                    // Set pesan flash jika data tidak ditemukan
                    session()->flash('error', 'Data Tidak Ditemukan!');
                }
            
                // Redirect ke halaman yang sesuai
                return redirect('/dataiujk');
            }

            //  CREATE IJIN USAHA JASA KONSTRUKSI ============================================================================================
public function createdataiujk()
{
    $dataiujk = uijk::all();
    // $datapengawasanlokasi = pengawasanlokasi::all();
    
    $user = Auth::user();

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.08_iujk.create', [
        'data' => $dataiujk,
        // 'datapengawasanlokasi' => $datapengawasanlokasi,
        'user' => $user,
        'title' => 'Create Ijin Usaha Jasa Konstruksi'
    ]);

}

// Menyimpan data asosiasi pengusaha

public function createstoredataiujk(Request $request)
{
    // Validate input
    $request->validate([
        'nama_perusahaan' => 'required|string|max:255',
        'kategori_perusahaan' => 'required|string|max:255',
        'klasifikasi_bidang_usaha' => 'required|string|max:255',
        'sub_klasifikasi_bidang_usaha' => 'required|string|max:255',
        'keterangan' => 'required|string|max:255',
    ]);

    // Handle file uploads
    // $foto_pjt_path = $request->file('fototimpembina')->store('timpembina', 'public');

    // Create a new entry in the database
    uijk::create([
        'nama_perusahaan' => $request->input('nama_perusahaan'),
        'kategori_perusahaan' => $request->input('kategori_perusahaan'),
        'klasifikasi_bidang_usaha' => $request->input('klasifikasi_bidang_usaha'),
        'sub_klasifikasi_bidang_usaha' => $request->input('sub_klasifikasi_bidang_usaha'),
        'keterangan' => $request->input('keterangan'),

    ]);

    session()->flash('create', 'Data Berhasil Ditambahkan!');
    
    // Redirect to the desired route
    return redirect('/dataiujk'); // Adjust this to your desired route
}


            

        }


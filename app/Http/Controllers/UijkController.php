<?php

namespace App\Http\Controllers;

use App\Models\uijk;
use Illuminate\Http\Request;

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



}



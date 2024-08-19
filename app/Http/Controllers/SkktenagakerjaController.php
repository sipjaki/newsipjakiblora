<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\skktenagakerja; // Pastikan namespace model sesuai dengan struktur direktori

class SkktenagakerjaController extends Controller
{
   
    public function index()
    {
        // Mengambil data dengan pagination
        $data = skktenagakerja::paginate(15);
    
        // Mengambil semua data untuk mendapatkan kecamatan unik
        $allKecamatan = skktenagakerja::all();
        
        // Menggunakan koleksi untuk mendapatkan nilai unik
        $datakecamatan = $allKecamatan->pluck('kecamatan')->unique();
    
        // Mengirimkan data ke view
        return view('backend.04_skk.01_skk.index', [
            'title' => 'SKK Tenaga Kerja',
            'data' => $data,
            'data_kecamatan' => $datakecamatan, // Mengirimkan data kecamatan unik ke view
        ]);
    }
    
    
    public function showByName($nama)
    {
        $item = Skktenagakerja::where('nama', $nama)->firstOrFail();

        return view('backend.04_skk.01_skk.show', [
            'data' => $item,
            'title' => 'Detail SKK Tenaga Kerja',
        ]);
    }

public function feskktenagakerja()
    {
        $data= skktenagakerja::paginate(15); // Menggunakan paginate() untuk pagination

          // Mengambil semua data untuk mendapatkan kecamatan unik
          $allKecamatan = skktenagakerja::all();
        
          // Menggunakan koleksi untuk mendapatkan nilai unik
          $datakecamatan = $allKecamatan->pluck('kecamatan')->unique();

        return view('frontend.04_tenagakerja.01_skaskt', [
            'title' => 'Data Tenaga Kerja',
            'data' => $data,
            'data_kecamatan' => $datakecamatan, // Mengirimkan data paginasi ke view
        ]);
    }

public function listkecamatan()
    {
        $data= skktenagakerja::paginate(15); // Menggunakan paginate() untuk pagination

          // Mengambil semua data untuk mendapatkan kecamatan unik
          $allKecamatan = skktenagakerja::all();
        
          // Menggunakan koleksi untuk mendapatkan nilai unik
          $datakecamatan = $allKecamatan->pluck('kecamatan')->unique();

        return view('frontend.04_tenagakerja.01_skasktshowkecamatan', [
            'title' => 'Data Tenaga Kerja',
            'data' => $data,
            'data_kecamatan' => $datakecamatan, // Mengirimkan data paginasi ke view
        ]);
    }

    public function feskktenagakerjashowByName($nama)
    {
        $item = Skktenagakerja::where('nama', $nama)->firstOrFail();

        return view('frontend.04_tenagakerja.01_skasktshow', [
            'data' => $item,
            'title' => 'Detail SKK Tenaga Kerja',
        ]);
    }

    public function feskktenagakerjakecamatanshowBykecamatan(Request $request)
    {
        // Mengambil parameter 'judul' dari query string
        $judul = $request->query('judul');
        
        // Memfilter data berdasarkan kecamatan jika 'judul' ada
        if ($judul) {
            $data = skktenagakerja::where('kecamatan', $judul)->paginate(15);
        } else {
            // Ambil semua data jika tidak ada parameter
            $data = skktenagakerja::paginate(15);
        }

        // Mengambil nilai unik dari atribut 'kecamatan'
        $data_kecamatan = skktenagakerja::select('kecamatan')
            ->distinct()
            ->pluck('kecamatan');

        // Mengirim data ke view
        return view('frontend.04_tenagakerja.01_skasktshowkecamatan', [
            'title' => 'Kecamatan | SKK Tenaga Kerja',
            'data' => $data, // Mengirimkan data yang difilter atau semua data
            'data_kecamatan' => $data_kecamatan, // Mengirimkan data kecamatan unik ke view
        ]);
    }

public function listdesa()
    {
        $data= skktenagakerja::paginate(15); // Menggunakan paginate() untuk pagination

          // Mengambil semua data untuk mendapatkan kecamatan unik
          $allKecamatan = skktenagakerja::all();
        
          // Menggunakan koleksi untuk mendapatkan nilai unik
          $datadesa = $allKecamatan->pluck('desa')->unique();

        return view('frontend.04_tenagakerja.01_skasktalldatadesa', [
            'title' => 'Data Tenaga Kerja',
            'data' => $data,
            'data_desa' => $datadesa, // Mengirimkan data paginasi ke view
        ]);
    }

    public function feskktenagakerjadesashowBydesa(Request $request)
    {
        // Mengambil parameter 'judul' dari query string
        $judul = $request->query('judul');
        
        // Memfilter data berdasarkan kecamatan jika 'judul' ada
        if ($judul) {
            $data = skktenagakerja::where('desa', $judul)->paginate(15);
        } else {
            // Ambil semua data jika tidak ada parameter
            $data = skktenagakerja::paginate(15);
        }

        // Mengambil nilai unik dari atribut 'kecamatan'
        $data_desa= skktenagakerja::select('desa')
            ->distinct()
            ->pluck('desa');

        // Mengirim data ke view
        return view('frontend.04_tenagakerja.01_skasktalldatadesashow', [
            'title' => 'Desa | SKK Tenaga Kerja',
            'data' => $data, // Mengirimkan data yang difilter atau semua data
            'data_desa' => $data_desa, // Mengirimkan data kecamatan unik ke view
        ]);
    }


    
}



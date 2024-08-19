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
    
        // Mengambil nilai unik dari atribut 'kecamatan' dari data yang dipaginasi
        $data_kecamatan = skktenagakerja::pluck('kecamatan')->unique();
    
        return view('backend.04_skk.01_skk.index', [
            'title' => 'SKK Tenaga Kerja',
            'data' => $data, // Mengirimkan data paginasi ke view
            'data_kecamatan' => $data_kecamatan, // Mengirimkan data kecamatan unik ke view
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

        return view('frontend.04_tenagakerja.01_skaskt', [
            'title' => 'Data Tenaga Kerja',
            'data' => $data, // Mengirimkan data paginasi ke view
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
}

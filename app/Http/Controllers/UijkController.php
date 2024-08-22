<?php

namespace App\Http\Controllers;

use App\Models\uijk;
use Illuminate\Http\Request;

class UijkController extends Controller
{
    //
    public function index()
    {
        $data_uijk = uijk::paginate(15); // Menggunakan paginate() untuk pagination

        return view('frontend.08_UIJK.uijk', [
            'title' => 'SBU / UIJK',
            'data' => $data_uijk, // Mengirimkan data paginasi ke view
        ]);
    }
    
    public function feuijkshowByName($nama_perusahaan)
    {
        $data = uijk::where('nama_perusahaan', $nama_perusahaan)->firstOrFail();
        
        return view('frontend.08_UIJK.uijkshow', [
            'data' => $data,
            'title' => 'Details Data UIJK',
        ]);
    }

    public function uijkpt()
    {
        // Mengambil data dengan kategori_perusahaan 'PT' dan menggunakan paginate()
        $data = uijk::where('kategori_perusahaan', 'PT')->paginate(15);
    
        return view('frontend.08_UIJK.uijkpt', [
            'title' => 'Perseroan Terbatas', // Mengoreksi nama judul
            'data' => $data, // Mengirimkan data paginasi ke view
        ]);
    }

    public function uijkcv()
    {
        // Mengambil data dengan kategori_perusahaan 'PT' dan menggunakan paginate()
        $data = uijk::where('kategori_perusahaan', 'CV')->paginate(15);
    
        return view('frontend.08_UIJK.uijkcv', [
            'title' => 'Commanditaire Vennootschap', // Mengoreksi nama judul
            'data' => $data, // Mengirimkan data paginasi ke view
        ]);
    }
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\berita; // Pastikan namespace model sesuai dengan struktur direktori
use App\Models\kegiatanjaskon;
use App\Models\layanankami;
use App\Models\skktenagakerja; // Pastikan namespace model sesuai dengan struktur direktori

class FedashboardController extends Controller
{
    public function index()
    {
        $data= berita::all(); //
        $data_layanankami= layanankami::all(); //
        $data_kegiatanjaskon= kegiatanjaskon::all(); //

        return view('frontend.00_full.index', [
            'title' => 'Sipjaki Pemerintah Kabupaten Bandung Barat',
            'data' => $data, // Mengirimkan data paginasi ke view
            'data_layanankami' => $data_layanankami, // Mengirimkan data paginasi ke view
            'data_kegiatanjaskon' => $data_kegiatanjaskon, // Mengirimkan data paginasi ke view
        ]);
    }

    
    public function portalberitashowByJudul($judul)
    {
        $data_berita = berita::all(); //
        $data = berita::where('judul', $judul)->firstOrFail();
        
        return view('frontend.02_berita.portalberita.index', [
            'data' => $data,
            'data_berita' => $data_berita,
            'title' => 'Portal Berita Sipjaki KBB',
            
            
        ]);
    }

    public function navbarberita()
    {
        $data= berita::all(); //
        
        return view('frontend.02_berita.portalberita.navbarberita', [
            'title' => 'Berita KBB',
            'data' => $data, // Mengirimkan data paginasi ke view
        ]);
    }



    

}

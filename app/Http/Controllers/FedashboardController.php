<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\berita; // Pastikan namespace model sesuai dengan struktur direktori
use App\Models\kegiatanjaskon;
use App\Models\laporankegiatan;
use App\Models\layanankami;
use App\Models\skktenagakerja; // Pastikan namespace model sesuai dengan struktur direktori

class FedashboardController extends Controller
{
    public function index()
    {
        $data = berita::all(); //
        $data_layanankami = layanankami::all(); //
        $data_kegiatanjaskon = kegiatanjaskon::all(); //

        return view('frontend.00_full.index', [
            'title' => 'Sipjaki Pemerintah Kabupaten Bandung Barat',
            'data' => $data, // Mengirimkan data paginasi ke view
            'data_layanankami' => $data_layanankami, // Mengirimkan data paginasi ke view
            'data_jaskon' => $data_kegiatanjaskon, // Mengirimkan data paginasi ke view
        ]);
    }

    
    public function portalberitashowByJudul($judul)
    {
        $data_berita = berita::all(); //
        $data_layanankami = layanankami::all(); //
        $data = berita::where('judul', $judul)->firstOrFail();
        
        return view('frontend.02_berita.portalberita.showindex', [
            'data' => $data,
            'data_berita' => $data_berita,
            'data_layanankami' => $data_layanankami,
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

 
    public function kegiatansertifikasi()
    {
        $data = berita::all(); //
        $data_layanankami = layanankami::all(); //
        $data_kegiatanjaskon = kegiatanjaskon::all(); //

        return view('frontend.02_berita.03_sertifikasi.index', [
            'title' => 'Kegiatan Sertifikasi oleh Pemerintah Kabupaten Bandung Barat',
            'data' => $data, // Mengirimkan data paginasi ke view
            'data_layanankami' => $data_layanankami, // Mengirimkan data paginasi ke view
            'data_jaskon' => $data_kegiatanjaskon, // Mengirimkan data paginasi ke view
        ]);
    }

    
    public function kegiatansertifikasishowByJudul($judul_kegiatan)
    {
        $data_berita = berita::first(); //
        $data_layanankami = layanankami::all(); //
        $data_laporankegiatan = laporankegiatan::all(); //
        $data_kegiatanjaskon = kegiatanjaskon::where('judul_kegiatan', $judul_kegiatan)->firstOrFail();
        
        return view('frontend.02_berita.03_sertifikasi.show', [
            'data_kegiatanjaskon' => $data_kegiatanjaskon,
            'data_berita' => $data_berita,
            'data_layanankami' => $data_layanankami,
            'data_laporankegiatan' => $data_laporankegiatan,
                'title' => 'Kegiatan Sertifikasi',
        ]);
    }
    
    public function detailskegiatanshowByJudul($jabatan)
    {
        $data_berita = berita::first(); //
        $data_layanankami = layanankami::all(); //
        $data_laporankegiatanall = laporankegiatan::all(); //
        $data_laporankegiatan =laporankegiatan::where('jabatan', $jabatan)->firstOrFail(); //
        // $data_kegiatanjaskon = kegiatanjaskon::where('judul_kegiatan', $judul_kegiatan)->firstOrFail();
        
        return view('frontend.02_berita.03_sertifikasi.showdetails', [
            // 'data_kegiatanjaskon' => $data_kegiatanjaskon,
            'data_berita' => $data_berita,
            'data_layanankami' => $data_layanankami,
            'data_laporankegiatan' => $data_laporankegiatan,
            'data_laporankegiatanall' => $data_laporankegiatanall,
                'title' => 'Kegiatan Sertifikasi Para Pekerja',
        ]);
    }


    


    

}

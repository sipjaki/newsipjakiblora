<?php

namespace App\Http\Controllers;

use App\Models\keputusanmenteri;
use Illuminate\Http\Request;


use App\Models\peraturan; // Pastikan namespace model sesuai dengan struktur direktori
 // Pastikan namespace model sesuai dengan struktur direktori
use App\Models\perpemerintah;
use App\Models\perpresiden;
use App\Models\permenteri;

class PeraturanController extends Controller
{
    public function undangundang()
    {
        $data= peraturan::all(); // Menggunakan paginate() untuk pagination

        return view('backend.14_peraturan.01_undangundang.index', [
            'title' => 'Undang - Undang Jasa Konstruksi',
            'data' => $data, // Mengirimkan data paginasi ke view
        ]);
    }

    public function pemerintah()
    {
        $data= perpemerintah::all(); // Menggunakan paginate() untuk pagination

        return view('backend.14_peraturan.02_pemerintah.index', [
            'title' => 'Peraturan Pemerintah',
            'data' => $data, // Mengirimkan data paginasi ke view
        ]);
    }

    public function presiden()
    {
        $data= perpresiden::all(); // Menggunakan paginate() untuk pagination

        return view('backend.14_peraturan.03_presiden.index', [
            'title' => 'Peraturan Pemerintah',
            'data' => $data, // Mengirimkan data paginasi ke view
        ]);
    }

    public function menteri()
    {
        $data= permenteri::paginate(15); // Menggunakan paginate() untuk pagination

        return view('backend.14_peraturan.04_menteri.index', [
            'title' => 'Peraturan Menteri PUPR',
            'data' => $data, // Mengirimkan data paginasi ke view
        ]);
    }

            
            public function menterishowByJudul($judul)
            {
                $data = permenteri::where('judul', $judul)->firstOrFail();

                return view('backend.14_peraturan.04_menteri.show', [
                    'data' => $data,
                    'title' => 'Details Data Peraturan Menteri',
                ]);
            }

 
    public function skmenteri()
            {
                $data= keputusanmenteri::paginate(15); // Menggunakan paginate() untuk pagination
        
                return view('backend.14_peraturan.05_skmenteri.index', [
                    'title' => 'Surat Keputusan Menteri',
                    'data' => $data, // Mengirimkan data paginasi ke view
                ]);
            }

            
            public function skmenterishowByJudul($judul)
            {
                $data = keputusanmenteri::where('judul', $judul)->firstOrFail();

                return view('backend.14_peraturan.05_skmenteri.show', [
                    'data' => $data,
                    'title' => 'Details Data SK Peraturan Menteri',
                ]);
            }
        
    // public function showByName($nama)
    // {
    //     $item = Skktenagakerja::where('nama', $nama)->firstOrFail();

    //     return view('backend.04_skk.01_skk.show', [
    //         'data' => $item,
    //         'title' => 'Detail SKK Tenaga Kerja',
    //     ]);
    // }
}

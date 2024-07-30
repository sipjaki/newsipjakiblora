<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\peraturan; // Pastikan namespace model sesuai dengan struktur direktori

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

   
    // public function showByName($nama)
    // {
    //     $item = Skktenagakerja::where('nama', $nama)->firstOrFail();

    //     return view('backend.04_skk.01_skk.show', [
    //         'data' => $item,
    //         'title' => 'Detail SKK Tenaga Kerja',
    //     ]);
    // }
}

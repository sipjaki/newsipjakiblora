<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\struktur; // Pastikan namespace model sesuai dengan struktur direktori

class StrukturController extends Controller
{
    public function index()
    {
        // $data= struktur::all(); // Menggunakan paginate() untuk pagination

        return view('backend.01_struktur.01_kedinasan.index', [
            'title' => 'Struktur Kedinasan PUPR KBB',
            // 'data' => $data, // Mengirimkan data paginasi ke view
        ]);
    }

    public function renstra()
    {
        // $data= struktur::all(); // Menggunakan paginate() untuk pagination

        return view('backend.01_struktur.02_renstra.index', [
            'title' => 'Rencana Strategis Program & Jasa Konstruksi',
            // 'data' => $data, // Mengirimkan data paginasi ke view
        ]);
    }
    
    public function tupoksi()
    {
        // $data= struktur::all(); // Menggunakan paginate() untuk pagination

        return view('backend.01_struktur.03_tupoksi.index', [
            'title' => 'Tupoksi Program & Jasa Konstruksi',
            // 'data' => $data, // Mengirimkan data paginasi ke view
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

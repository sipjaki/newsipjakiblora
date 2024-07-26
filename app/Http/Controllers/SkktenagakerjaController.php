<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\skktenagakerja; // Pastikan namespace model sesuai dengan struktur direktori

class SkktenagakerjaController extends Controller
{
    public function index()
    {
        $data= skktenagakerja::paginate(15); // Menggunakan paginate() untuk pagination

        return view('backend.04_skk.01_skk.index', [
            'title' => 'SKK Tenaga Kerja',
            'data' => $data, // Mengirimkan data paginasi ke view
        ]);
    }
}

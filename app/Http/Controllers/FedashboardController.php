<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\skktenagakerja; // Pastikan namespace model sesuai dengan struktur direktori

class FedashboardController extends Controller
{
    public function index()
    {
        // $data= skktenagakerja::paginate(15); // Menggunakan paginate() untuk pagination

        return view('frontend.00_full.index', [
            'title' => 'Sipjaki Pemerintah Kabupaten Bandung Barat',
            // 'data' => $data, // Mengirimkan data paginasi ke view
        ]);
    }

}

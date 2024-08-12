<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\berita; // Pastikan namespace model sesuai dengan struktur direktori
use App\Models\layanankami;
use App\Models\skktenagakerja; // Pastikan namespace model sesuai dengan struktur direktori

class FedashboardController extends Controller
{
    public function index()
    {
        $data= berita::all(); //
        $data_layanankami= layanankami::all(); //

        return view('frontend.00_full.index', [
            'title' => 'Sipjaki Pemerintah Kabupaten Bandung Barat',
            'data' => $data, // Mengirimkan data paginasi ke view
            'data_layanankami' => $data_layanankami, // Mengirimkan data paginasi ke view
        ]);
    }

}

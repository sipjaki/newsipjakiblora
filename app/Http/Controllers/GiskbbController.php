<?php

namespace App\Http\Controllers;

use App\Models\giskbb;
use Illuminate\Http\Request;

class GiskbbController extends Controller
{
    
    public function index()
    {
        // Mengambil data dengan pagination
        $data = giskbb::all();

        // Mengirimkan data ke view
        return view('frontend.04_tenagakerja.giskkbb.index', [
            'title' => 'GIS Kabupaten Bandung Barat ',
            'data' => $data,
        ]);
    }
    
}

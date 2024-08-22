<?php

namespace App\Http\Controllers;

use App\Models\pelatihan;
use Illuminate\Http\Request;

class PelatihanController extends Controller
{
    //
    public function index()
    {
        // Mengambil semua data dari model pelatihan
        $pelatihanData = pelatihan::all();
    
        // Memformat data menjadi array dengan format yang sesuai
        $data = $pelatihanData->map(function($item) {
            return [
                'tahun' => $item->tahun,
                'kasus' => $item->kasus
            ];
        });
    
        $data_2 = $pelatihanData->map(function($item) {
            return [
                'tahun' => $item->tahun,
                'kasus' => $item->kasus
            ];
        });
    
        // Mengirim data ke view
        return view('frontend.10_pelatihan.03_kecelakaan.index', [
            'data' => $data,
            'data_2' => $data_2,
            'title' => 'Kasus Data Kecelakaan Kerja',
        ]);
    }
    
}

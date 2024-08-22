<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatajakonController extends Controller
{
    //

    public function asosiasi()
    {
        
        return view('frontend.03_datajakon.01_asosiasi', [
            'title' => 'Asosiasi Pengusaha ',
           
        ]);
    }

    public function standarbiayaumum()
    {
        
        return view('frontend.03_datajakon.02_standarbiayaumum', [
            'title' => 'Standar Biaya Umum ',
           
        ]);
    }

    public function paketpekerjaan()
    {
        
        return view('frontend.03_datajakon.03_paketpekerjaan', [
            'title' => 'Paket Pekerjaan Kabupaten Bandung Barat',
           
        ]);
    }
    
    public function pengawasan()
    {
        
        return view('frontend.03_datajakon.04_pengawasan', [
            'title' => 'Pengawasan Konstruksi Kabupaten Bandung Barat',
           
        ]);
    }

    
}

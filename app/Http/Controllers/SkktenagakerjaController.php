<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\skktenagakerja;

class SkktenagakerjaController extends Controller
{
    //

    public function index()
    {
        //
        return view('backend.04_skk.01_skk.index',[
            'title' => 'SKK Tenaga Kerja !',

            $data = skktenagakerja::paginate(15),
            
            'data' => $data,
            
            // 'title_halaman' => 'Halaman Fundraising',
            // 'data_daftarjadimitra'  => Jadimitra::all(),
        ]); 
    }


}

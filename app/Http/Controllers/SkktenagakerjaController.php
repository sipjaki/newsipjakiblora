<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Skktenagakerja;

class SkktenagakerjaController extends Controller
{
    //

    public function index()
    {
        //
        return view('backend.04_skk.01_skk.index',[
            'title' => 'SKK Tenaga Kerja',

            'data'    => Skktenagakerja::all(),

        ]); 
    }


}

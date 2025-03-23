<?php

namespace App\Http\Controllers;

use App\Models\kritikdansaran;

use Illuminate\Support\Facades\Auth;



class KritikdansaranController extends Controller
{

    public function index()
    {

        // $data = kritikdansaran::all();
        $user = Auth::user();

        return view('frontend.00_full.01_kritikdansaran.index', [
            'title' => 'Form Kritik & Saran Mas Jaki Blora',
            'user' => $user,
            // 'data' => $data,
        ]);


    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\hspkonstruksiumum;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;


class HspkonstruksiumumController extends Controller
{
    //
    public function index()
    {
        // $data = hspkonstruksiumum::paginate(10);
        $user = Auth::user();

        return view('frontend.07_ahsp.03_hspkonstruksiumum.hspkonstruksiumum', [
            'title' => 'HSP Konstruksi Umum',
            'user' => $user, // Mengirimkan data paginasi ke view
            // 'data' => $data, // Mengirimkan data paginasi ke view
        ]);
    }

}

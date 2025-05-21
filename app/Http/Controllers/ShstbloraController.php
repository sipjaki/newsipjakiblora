<?php

namespace App\Http\Controllers;

use App\Models\shstblora;

use Illuminate\Support\Facades\Auth;

class ShstbloraController extends Controller
{
    //
    public function index()
    {
        $data = shstblora::paginate(10);
        $user = Auth::user();

        return view('frontend.07_ahsp.04_shst.shstindex', [
            'title' => 'SHST Tahun 2025 Kabupaten Blora',
            'user' => $user, // Mengirimkan data paginasi ke view
            'data' => $data, // Mengirimkan data paginasi ke view
        ]);
    }

    // VERSI ANDROID
    public function resshstblora()
    {
        $data = shstblora::all();
        $user = Auth::user();

        return view('frontend.00_android.02_satuanhargadasar.01_shstblora.index', [
            'title' => 'Standar Harga Satuan Tertinggi Tahun 2025 Kabupaten Blora',
            'user' => $user, // Mengirimkan data paginasi ke view
            'data' => $data, // Mengirimkan data paginasi ke view
        ]);
    }

// MENU BACKEND SHST KABUPATEN BLORA
public function beshstkabblora()
{
    $user = Auth::user();
    $data = shstblora::all();

    return view('backend.08_shstkabblora.index', [
        'title' => 'Daftar Satuan Harga Dasar Tertinggi Kabupaten Blora',
        'data' => $data
    ]);
}


}

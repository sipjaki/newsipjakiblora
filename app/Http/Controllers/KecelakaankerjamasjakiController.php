<?php

namespace App\Http\Controllers;

use App\Models\kecelakaankerjamasjaki;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;

class KecelakaankerjamasjakiController extends Controller
{
    //

    public function index()
    {
        $data = kecelakaankerjamasjaki::paginate(10);
        $user = Auth::user();

        return view('frontend.05_pengawasan.02_kecelakaankerja.02_kecelakaankerja', [
            'title' => 'Angka Kecelakaan Kerja',
            'user' => $user, // Mengirimkan data paginasi ke view
            'data' => $data, // Mengirimkan data paginasi ke view
        ]);
    }

    // public function kecelakaankerjalist()
    // {
    //     $data = kecelakaankerjamasjaki::paginate(10);
    //     $user = Auth::user();

    //     return view('frontend.05_pengawasan.02_kecelakaankerja.02_kecelakaankerjalist', [
    //         'title' => 'Angka Kecelakaan Kerja',
    //         'user' => $user, // Mengirimkan data paginasi ke view
    //         'data' => $data, // Mengirimkan data paginasi ke view
    //     ]);
    // }

    public function kecelakaankerjalist(Request $request)
{
    $perPage = $request->input('perPage', 10);
    $search = $request->input('search');

    $query = kecelakaankerjamasjaki::query();

    if ($search) {
        $query->where('namapaketpekerjaan', 'LIKE', "%{$search}%")
              ->orWhere('tahun', 'LIKE', "%{$search}%")
              ->orWhere('namaperusahaan', 'LIKE', "%{$search}%")
              ->orWhere('namatenagakerja', 'LIKE', "%{$search}%")
              ->orWhere('lokasikecelakaan', 'LIKE', "%{$search}%")
              ->orWhere('keterangan', 'LIKE', "%{$search}%");
    }

    $data = $query->paginate($perPage);

    if ($request->ajax()) {
        return response()->json([
            'html' => view('frontend.05_pengawasan.02_kecelakaankerja.partials.table', compact('data'))->render()
        ]);
    }

    return view('frontend.05_pengawasan.02_kecelakaankerja.02_kecelakaankerjalist', [
        'title' => 'Daftar Kecelakaan Kerja',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search
    ]);
}

    public function kecelakaankerjashow($namapaketpekerjaan)
    {
        $datakecelakaankerja = kecelakaankerjamasjaki::where('namapaketpekerjaan', $namapaketpekerjaan)->first();
        $user = Auth::user();

    return view('frontend.05_pengawasan.02_kecelakaankerja.02_kecelakaankerjashow', [
        'title' => 'Angka Kecelakaan Kerja',
        'data' => $datakecelakaankerja,
        'user' => $user,

    ]);
    }


}

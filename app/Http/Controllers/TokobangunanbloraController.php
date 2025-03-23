<?php

namespace App\Http\Controllers;

use App\Models\kecamatanblora;
use App\Models\tokobangunanblora;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class TokobangunanbloraController extends Controller
{
    // //
    // public function index()
    // {
    //     $data = kecamatanblora::paginate(20);
    //     $datasub = tokobangunanblora::paginate(15);
    //     $user = Auth::user();

    //     return view('frontend.06_rantaipasok.03_tokobangunanblora.new.tokobangunan', [
    //         'title' => 'Toko Bangunan Kabupaten Blora',
    //         'user' => $user, // Mengirimkan data paginasi ke view
    //         'data' => $data, // Mengirimkan data paginasi ke view
    //         'datasub' => $datasub, // Mengirimkan data paginasi ke view
    //     ]);
    // }


    public function index(Request $request)
    {
        $perPage = $request->input('perPage', 10);
        $search = $request->input('search');

        $query = tokobangunanblora::query();

        $query->where('namatokobangunan', 'LIKE', "%{$search}%")
                      ->orWhere('pemilik', 'LIKE', "%{$search}%")
                      ->orWhere('alamat', 'LIKE', "%{$search}%")
                      ->orWhere('notelepon', 'LIKE', "%{$search}%")
                      ->orWhere('email', 'LIKE', "%{$search}%")
                      ->orWhere('jenisprodukbangunan', 'LIKE', "%{$search}%")
                      ->orWhere('fototokobangunan', 'LIKE', "%{$search}%")
                      ->orWhere('keterangan', 'LIKE', "%{$search}%")
                      ->orWhereHas('kecamatanblora', function ($q) use ($search) {
                          $q->where('kecamatanblora', 'LIKE', "%{$search}%"); // 'jabatankerja' = nama kolom di tabel jabatankerja
                      });

    $data = $query->paginate($perPage);

    if ($request->ajax()) {
        return response()->json([
            'html' => view('frontend.06_rantaipasok.03_tokobangunanblora.new.partials.table', compact('data'))->render()
        ]);
    }

    $datasub = tokobangunanblora::paginate(15);
    return view('frontend.06_rantaipasok.03_tokobangunanblora.new.tokobangunan', [
        'title' => 'Toko Bangunan Kab Blora',
        'data' => $data,
        'datasub' => $datasub,
        'perPage' => $perPage,
        'search' => $search
    ]);

}


    public function tokobangunanblorashow($kecamatanblora)
    {
        $datakecamatanblora = kecamatanblora::where('kecamatanblora', $kecamatanblora)->first();

        if (!$datakecamatanblora) {
            // Tangani jika kegiatan tidak ditemukan
            return redirect()->back()->with('error', 'Kegiatan tidak ditemukan.');
        }

        // Menggunakan paginate() untuk pagination
        $subdata = tokobangunanblora::where('kecamatanblora_id', $datakecamatanblora->id)->paginate(10);

          // Menghitung nomor urut mulai
            $start = ($subdata->currentPage() - 1) * $subdata->perPage() + 1;


    // Ambil data user saat ini
    $user = Auth::user();

    return view('frontend.06_rantaipasok.03_tokobangunanblora.tokobangunanblorashow', [
        'title' => 'Toko Bangunan Cakupan Per Kecamatan',
        'data' => $datakecamatanblora,
        'subData' => $subdata,  // Jika Anda ingin mengirimkan data sub kontraktor juga
        'user' => $user,
        'start' => $start,
    ]);
    }

    public function tokobangunanbloralistdetails($namatokobangunan)
    {
        $datatokobangunan = tokobangunanblora::where('namatokobangunan', $namatokobangunan)->first();

        if (!$datatokobangunan) {
            // Tangani jika kegiatan tidak ditemukan
            return redirect()->back()->with('error', 'Kegiatan tidak ditemukan.');
        }

        // Menggunakan paginate() untuk pagination
        $subdata = kecamatanblora::where('tokobangunanblora_id', $datatokobangunan->id)->paginate(10);

          // Menghitung nomor urut mulai
            $start = ($subdata->currentPage() - 1) * $subdata->perPage() + 1;


    // Ambil data user saat ini
    $user = Auth::user();

    return view('frontend.06_rantaipasok.03_tokobangunanblora.new.tokobangunanshow', [
        'title' => 'Data Toko Bangunan',
        'data' => $datatokobangunan,
        'subData' => $subdata,  // Jika Anda ingin mengirimkan data sub kontraktor juga
        'user' => $user,
        'start' => $start,
    ]);
    }

}

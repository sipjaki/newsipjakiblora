<?php

namespace App\Http\Controllers;

use App\Models\rantaipasokblora;
use App\Models\peralatankonstruksi;
use App\Models\alatberat;
use App\Models\kecamatanblora;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class RantaipasokbloraController extends Controller
{
    //

    // public function index()
    // {
    //     $data = rantaipasokblora::paginate(10);
    //     // $datasub = bujkkonsultansub::paginate(15);
    //     $user = Auth::user();

    //     return view('frontend.06_rantaipasok.01_materialbangunan.materialbangunan', [
    //         'title' => 'Rantai Pasok Material Bahan Bangunan',
    //         'user' => $user, // Mengirimkan data paginasi ke view
    //         'data' => $data, // Mengirimkan data paginasi ke view
    //         // 'datasub' => $datasub, // Mengirimkan data paginasi ke view
    //     ]);
    // }

    public function index(Request $request)
    {
        $perPage = $request->input('perPage', 10);
        $search = $request->input('search');

        $query = rantaipasokblora::query();

        if ($search) {
            $query->where('distributor', 'LIKE', "%{$search}%")
                  ->orWhere('alamat', 'LIKE', "%{$search}%")
                //   ->orWhere('email', 'LIKE', "%{$search}%")
                  ->orWhere('notelepon', 'LIKE', "%{$search}%")
                  ->orWhere('materialproduk', 'LIKE', "%{$search}%");
        }

        $data = $query->paginate($perPage);

        if ($request->ajax()) {
            return response()->json([
                'html' => view('frontend.06_rantaipasok.01_materialbangunan.partials.table', compact('data'))->render()
            ]);
        }

        return view('frontend.06_rantaipasok.01_materialbangunan.materialbangunan', [
            'title' => 'Rantai Pasok Material Bahan Bangunan',
            'data' => $data,
            'perPage' => $perPage,
            'search' => $search
        ]);
    }


    public function rantaipasokblorashow($distributor)
    {
        $datarantaipasokblora = rantaipasokblora::where('distributor', $distributor)->first();

        // if (!$databujkkonsultan) {
        //     // Tangani jika kegiatan tidak ditemukan
        //     return redirect()->back()->with('error', 'Kegiatan tidak ditemukan.');
        // }

        // // Menggunakan paginate() untuk pagination
        // $subdata = bujkkonsultansub::where('bujkkonsultan_id', $databujkkonsultan->id)->paginate(10);

          // Menghitung nomor urut mulai
            // $start = ($subdata->currentPage() - 1) * $subdata->perPage() + 1;


    // Ambil data user saat ini
    $user = Auth::user();

    return view('frontend.06_rantaipasok.01_materialbangunan.materialbangunanshow', [
        'title' => 'Rantai Pasok Material Bahan Bangunan',
        'data' => $datarantaipasokblora,
        // 'subData' => $subdata,  // Jika Anda ingin mengirimkan data sub kontraktor juga
        'user' => $user,
        // 'start' => $start,
    ]);
    }


    // DAFTAR RANTAI PASOK MAATERIAL KONSTRUKSI

    // public function peralatankonstruksi()
    // {
    //     $data = peralatankonstruksi::paginate(10);
    //     $datasub = alatberat::paginate(15);
    //     $user = Auth::user();

    //     return view('frontend.06_ranstaipasok.02_peralatankonstruksi.peralatankonstruksi', [
    //         'title' => 'Peralatan Konstruksi Wilayah Kab Blora',
    //         'user' => $user, // Mengirimkan data paginasi ke view
    //         'data' => $data, // Mengirimkan data paginasi ke view
    //         'datasub' => $datasub, // Mengirimkan data paginasi ke view
    //     ]);
    // }

    public function peralatankonstruksi(Request $request)
    {
        $perPage = $request->input('perPage', 10);
        $search = $request->input('search');

        $query = peralatankonstruksi::query();

        if ($search) {
            $query->where('namabadanusaha', 'LIKE', "%{$search}%")
                  ->orWhere('nib', 'LIKE', "%{$search}%")
                //   ->orWhere('email', 'LIKE', "%{$search}%")
                  ->orWhere('notelepon', 'LIKE', "%{$search}%")
                //   ->orWhere('materialproduk', 'LIKE', "%{$search}%")
                  ->orWhereHas('kecamatanblora', function ($q) use ($search) {
                    $q->where('kecamatanblora', 'LIKE', "%{$search}%"); // 'jabatankerja' = nama kolom di tabel jabatankerja
                })
                  ->orWhereHas('alatberat', function ($q) use ($search) {
                    $q->where('alatberat', 'LIKE', "%{$search}%"); // 'jabatankerja' = nama kolom di tabel jabatankerja
                });
        }

        $data = $query->paginate($perPage);

        if ($request->ajax()) {
            return response()->json([
                'html' => view('frontend.06_ranstaipasok.02_peralatankonstruksi.partials.table', compact('data'))->render()
            ]);
        }

        return view('frontend.06_rantaipasok.02_peralatankonstruksi.peralatankonstruksi', [
            'title' => 'Rantai Pasok Peralatan Konstruksi Bangunan Gedung',
            'data' => $data,
            'perPage' => $perPage,
            'search' => $search
        ]);
    }


    public function peralatankonstruksishow($namabadanusaha)
    {
        $dataperalatankonstruksi = peralatankonstruksi::where('namabadanusaha', $namabadanusaha)->first();

        if (!$dataperalatankonstruksi) {
            // Tangani jika kegiatan tidak ditemukan
            return redirect()->back()->with('error', 'Kegiatan tidak ditemukan.');
        }

        // Menggunakan paginate() untuk pagination
        $subdata = alatberat::where('peralatankonstruksi_id', $dataperalatankonstruksi->id)->paginate(10);

          // Menghitung nomor urut mulai
            $start = ($subdata->currentPage() - 1) * $subdata->perPage() + 1;


    // Ambil data user saat ini
    $user = Auth::user();

    return view('frontend.06_rantaipasok.02_peralatankonstruksi.peralatankonstruksishow', [
        'title' => 'Data Peralatan Konstruksi',
        'data' => $dataperalatankonstruksi,
        'subData' => $subdata,  // Jika Anda ingin mengirimkan data sub kontraktor juga
        'user' => $user,
        'start' => $start,
    ]);
    }

}

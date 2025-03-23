<?php

namespace App\Http\Controllers;

use App\Models\pengawasanbujk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


use Illuminate\Support\Facades\Auth;

class PengawasanbujkController extends Controller
{
    //


    // public function index()
    // {
    //     $user = Auth::user();
    //     $data = pengawasanbujk::paginate(10);

    //     return view('frontend.05_pengawasan.01_bujk.01_bujk', [
    //         'title' => 'Pengawasan BUJK',
    //         'user' => $user, // Mengirimkan data paginasi ke view
    //         'data' => $data, // Mengirimkan data paginasi ke view
    //     ]);
    // }

    public function index(Request $request)
{
    $perPage = $request->input('perPage', 10);
    $search = $request->input('search');

    $query = pengawasanbujk::query();

    if ($search) {
        $query->where('kodeproyek', 'LIKE', "%{$search}%")
              ->orWhere('kodeproyek', 'LIKE', "%{$search}%")
              ->orWhere('namaperusahaan', 'LIKE', "%{$search}%")
              ->orWhere('statusmodal', 'LIKE', "%{$search}%")
              ->orWhere('nib', 'LIKE', "%{$search}%")
              ->orWhere('jenisperusahaan', 'LIKE', "%{$search}%");
    }

    $data = $query->paginate($perPage);

    if ($request->ajax()) {
        return response()->json([
            'html' => view('frontend.05_pengawasan.01_bujk.partials.table', compact('data'))->render()
        ]);
    }

    return view('frontend.05_pengawasan.01_bujk.01_bujk', [
        'title' => 'PENGAWASAN BUJK',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search
    ]);
}

    public function bujkpengwasanshowmasjaki($namaperusahaan)
    {
        $datashow = pengawasanbujk::where('namaperusahaan', $namaperusahaan)->first();

        // $subdata = prosespaketkonsultasi::all();
        // if (!$databujkkontraktor) {
        //     // Tangani jika kegiatan tidak ditemukan
        //     return redirect()->back()->with('error', 'Kegiatan tidak ditemukan.');
        // }

        // Menggunakan paginate() untuk pagination
        // $subdata = bujkkontraktorsub::where('bujkkontraktor_id', $databujkkontraktor->id)->paginate(10);

          // Menghitung nomor urut mulai
            // $start = ($subdata->currentPage() - 1) * $subdata->perPage() + 1;


    // Ambil data user saat ini
    $user = Auth::user();

    return view('frontend.05_pengawasan.01_bujk.01_bujkshow', [
        'title' => 'PENGAWASAN BUJK ',
        'data' => $datashow,
        'user' => $user,

    ]);
    }

}

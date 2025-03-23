<?php

namespace App\Http\Controllers;

use App\Models\agendaskk;
use App\Models\allskktenagakerjablora;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AgendaskkController extends Controller
{
    //
    public function index(Request $request)
    {
        $perPage = $request->input('perPage', 10);
        $search = $request->input('search');

        $query = agendaskk::query();

        if ($search) {
            $query->where('namakegiatan', 'LIKE', "%{$search}%")
                  ->orWhere('penyelenggara', 'LIKE', "%{$search}%")
                  ->orWhere('lokasi', 'LIKE', "%{$search}%")
                  ->orWhere('keterangan', 'LIKE', "%{$search}%");
                //   ->orWhereHas('kategoripelatihan', function ($q) use ($search) {
                //       $q->where('kategoripelatihan', 'LIKE', "%{$search}%");
                //   }
                // );

        }

        $data = $query->paginate($perPage);

        if ($request->ajax()) {
            return response()->json([
                'html' => view('frontend.04_pembinaan.02_agendaskk.partials.table', compact('data'))->render()
            ]);
        }

        $user = Auth::user();

        return view('frontend.04_pembinaan.02_agendaskk.01_daftaragendaskk', [
            'title' => 'Agenda SKK Tenaga Konstruksi Kab Blora',
            'data' => $data,
            'perPage' => $perPage,
            'search' => $search,
            'user' => $user
        ]);
    }


    public function daftaragendaskk($namakegiatan)
    {
        $dataagendaskk = agendaskk::where('namakegiatan', $namakegiatan)->first();

    // Ambil data user saat ini
    $user = Auth::user();

    return view('frontend.04_pembinaan.02_agendaskk.02_agendaskkshow', [
        'title' => 'Agenda Sertifikasi Tenaga Kerja Konstruksi',
        'data' => $dataagendaskk,
        // 'subData' => $subdata,  // Jika Anda ingin mengirimkan data sub kontraktor juga
        'user' => $user,
        // 'start' => $start,
    ]);
    }


// DAFTAR PESERTA SKK TENAGA KERJA KONSTRUKSI

public function daftarpesertaskk(Request $request)
{
    $perPage = $request->input('perPage', 10);
    $search = $request->input('search');

    $query = agendaskk::query();

    if ($search) {
        $query->where('namakegiatan', 'LIKE', "%{$search}%")
              ->orWhere('keterangan', 'LIKE', "%{$search}%");
            //   ->orWhereHas('kategoripelatihan', function ($q) use ($search) {
            //       $q->where('kategoripelatihan', 'LIKE', "%{$search}%");
            //   }
            // );

    }

    $data = $query->paginate($perPage);

    if ($request->ajax()) {
        return response()->json([
            'html' => view('frontend.04_pembinaan.02_agendaskk.partials.table', compact('data'))->render()
        ]);
    }

    $user = Auth::user();

    return view('frontend.04_pembinaan.02_agendaskk.03_daftaragendaskk', [
        'title' => 'Daftar Agenda SKK Tenaga Kerja Konstruksi',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search,
        'user' => $user
    ]);
}

public function daftarpesertaskkshow(Request $request, $namakegiatan)
{
    $perPage = $request->input('perPage', 50);
    $search = $request->input('search');

    $query = allskktenagakerjablora::query();

    if ($search) {
        $query->where('jabatankerja', 'LIKE', "%{$search}%")
              ->orWhere('namalengkap', 'LIKE', "%{$search}%")
              ->orWhere('jeniskelamin', 'LIKE', "%{$search}%")
              ->orWhere('namaasosiasi', 'LIKE', "%{$search}%")
              ->orWhereHas('user', function ($q) use ($search) {
                  $q->where('user', 'LIKE', "%{$search}%");
              });
    }

    $datapesertapelatihan = $query->paginate($perPage);

    if ($request->ajax()) {
        return response()->json([
            'html' => view('frontend.04_pembinaan.02_agendaskk.partials.table', compact('data'))->render()
        ]);
    }

    $agendaskk = agendaskk::where('namakegiatan', $namakegiatan)->first();

    // Jika asosiasi tidak ditemukan, tampilkan 404
    if (!$agendaskk) {
        return abort(404, 'Asosiasi tidak ditemukan');
    }

    $user = Auth::user();

        $datapesertaskk = allskktenagakerjablora::where('agendaskk_id', $agendaskk->id)
                    ->select(['id', 'user_id', 'jeniskelamin', 'namaasosiasi', 'tahunpilihan_id', 'nik'])
                    ->paginate(25);

    $dataagendaskk = agendaskk::where('namakegiatan', $namakegiatan)->first();
    // $datauser = user::all();

    // Ambil data user saat ini
    $user = Auth::user();


    return view('frontend.04_pembinaan.02_agendaskk.04_daftarpesertaskkshow', [
        'title' => 'Daftar Peserta Sertifikasi Tenaga Kerja Konstruksi',
        'data' => $dataagendaskk,
        'datapeserta' => $datapesertaskk,
        'perPage' => $perPage,
        'search' => $search,
        'user' => $user,
        // 'datapeserta' => $datauser
    ]);
}



}

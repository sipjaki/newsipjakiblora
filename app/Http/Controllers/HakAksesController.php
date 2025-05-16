<?php

namespace App\Http\Controllers;

use App\Models\agendaskk;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

class HakAksesController extends Controller
{

public function agendaskkpeserta(Request $request)
{
    $perPage = $request->input('perPage', 10);
    $search = $request->input('search');
    $userId = Auth::id();

    $query = agendaskk::withCount('allskktenagakerjablora')
                // Hanya tampilkan agenda yang memiliki peserta dengan user_id akun login
                ->whereHas('allskktenagakerjablora', function ($q) use ($userId) {
                    $q->where('user_id', $userId);
                })
                ->orderBy('created_at', 'desc');

    // Pencarian
    if ($search) {
        $query->where(function ($q) use ($search) {
            $q->where('namakegiatan', 'LIKE', "%{$search}%")
              ->orWhere('penutupan', 'LIKE', "%{$search}%")
              ->orWhere('waktupelaksanaan', 'LIKE', "%{$search}%")
              ->orWhere('foto', 'LIKE', "%{$search}%");
        })
        ->orWhereHas('user', function ($q) use ($search) {
            $q->where('name', 'LIKE', "%{$search}%");
        })
        ->orWhereHas('asosiasimasjaki', function ($q) use ($search) {
            $q->where('namaasosiasi', 'LIKE', "%{$search}%");
        });
    }

    $data = $query->paginate($perPage);

    if ($request->ajax()) {
        return response()->json([
            'html' => view('backend.15_hakakses.01_pekerja.01_agendaskk.daftarkegiatan', compact('data'))->render()
        ]);
    }

    return view('backend.15_hakakses.01_pekerja.01_agendaskk.daftarkegiatan', [
        'title' => 'Daftar Kegiatan SKK Saudara',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search
    ]);
}

public function agendaskkpesertaberkas(Request $request)
{
    $perPage = $request->input('perPage', 10);
    $search = $request->input('search');
    $userId = Auth::id();

    $query = agendaskk::withCount('allskktenagakerjablora')
                // Hanya tampilkan agenda yang memiliki peserta dengan user_id akun login
                ->whereHas('allskktenagakerjablora', function ($q) use ($userId) {
                    $q->where('user_id', $userId);
                })
                ->orderBy('created_at', 'desc');

    // Pencarian
    if ($search) {
        $query->where(function ($q) use ($search) {
            $q->where('namakegiatan', 'LIKE', "%{$search}%");
            //   ->orWhere('penutupan', 'LIKE', "%{$search}%")
            //   ->orWhere('waktupelaksanaan', 'LIKE', "%{$search}%")
            //   ->orWhere('foto', 'LIKE', "%{$search}%");
        });
        // ->orWhereHas('user', function ($q) use ($search) {
        //     $q->where('name', 'LIKE', "%{$search}%");
        // })
        // ->orWhereHas('asosiasimasjaki', function ($q) use ($search) {
        //     $q->where('namaasosiasi', 'LIKE', "%{$search}%");
        // });
    }

    $data = $query->paginate($perPage);

    if ($request->ajax()) {
        return response()->json([
            'html' => view('backend.15_hakakses.01_pekerja.02_berkas', compact('data'))->render()
        ]);
    }

    return view('backend.15_hakakses.01_pekerja.02_berkas.index', [
        'title' => 'Berkas Pendaftaran Saudara',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search
    ]);
}


}


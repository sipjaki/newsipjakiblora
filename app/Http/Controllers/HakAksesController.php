<?php

namespace App\Http\Controllers;

use App\Models\agendaskk;
use App\Models\allskktenagakerjablora;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


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

    $query = agendaskk::with([
                    'allskktenagakerjablora.user' // <-- tambahkan relasi user
                ])
                ->withCount('allskktenagakerjablora')
                ->whereHas('allskktenagakerjablora', function ($q) use ($userId) {
                    $q->where('user_id', $userId);
                })
                ->orderBy('created_at', 'desc');

    if ($search) {
        $query->where(function ($q) use ($search) {
            $q->where('namakegiatan', 'LIKE', "%{$search}%");
        });
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


public function downsertifikatskk(Request $request)
{
    $perPage = $request->input('perPage', 10);
    $search = $request->input('search');
    $userId = Auth::id();

    // Ambil data allskktenagakerjablora milik user login yang punya sertifikat
    $query = allskktenagakerjablora::with(['user'])
        ->where('user_id', $userId)
        ->whereNotNull('sertifikat')
        ->where('sertifikat', '!=', '');

    // Jika ada pencarian berdasarkan nama user (opsional)
    if ($search) {
        $query->whereHas('user', function ($q) use ($search) {
            $q->where('name', 'LIKE', "%{$search}%");
        });
    }

    // Ambil data lengkap + hitung jumlah kegiatan (agendaskk_id)
    $items = $query->paginate($perPage);

    // Hitung total kegiatan berdasarkan jumlah agendaskk_id (untuk ditampilkan di view kalau perlu)
    $totalKegiatan = $query->count('agendaskk_id');

    return view('backend.15_hakakses.01_pekerja.01_agendaskk.sertifikatskk', [
        'title' => 'Sertifikat SKK',
        'data' => $items,
        'totalKegiatan' => $totalKegiatan,
        'perPage' => $perPage,
        'search' => $search,
    ]);
}


    public function hakaksespekerjaskkdaftar(Request $request)
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
                'html' => view('backend.15_hakakses.01_pekerja.03_daftarskk.partials.table', compact('data'))->render()
            ]);
        }

        $user = Auth::user();

        return view('backend.15_hakakses.01_pekerja.03_daftarskk.index', [
            'title' => 'Agenda SKK Tenaga Konstruksi Kab Blora, Silahkan Daftar !',
            'data' => $data,
            'perPage' => $perPage,
            'search' => $search,
            'user' => $user
        ]);
    }

}


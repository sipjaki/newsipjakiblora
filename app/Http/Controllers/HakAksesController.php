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

    // Ambil ID user yang sedang login
    $userId = Auth::id();

    // Query awal: ambil data agenda milik user login + jumlah peserta
    $query = agendaskk::withCount('allskktenagakerjablora')
                ->where('user_id', $userId) // Hanya data milik user login
                ->orderBy('created_at', 'desc');

    // Jika ada pencarian
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

    // Paginate hasil query
    $data = $query->paginate($perPage);

    // Jika request via AJAX (misalnya untuk filter atau search)
    if ($request->ajax()) {
        return response()->json([
            'html' => view('backend.15_hakakses.01_pekerja.01_agendaskk.daftarkegiatan', compact('data'))->render()
        ]);
    }

    // Tampilkan view default
    return view('backend.15_hakakses.01_pekerja.01_agendaskk.daftarkegiatan', [
        'title' => 'Daftar Kegiatan SKK Saudara',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search
    ]);
}


}


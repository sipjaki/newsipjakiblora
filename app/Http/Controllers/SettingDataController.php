<?php

namespace App\Http\Controllers;

use App\Models\rantaipasokblora;
use App\Models\peralatankonstruksi;
use App\Models\alatberat;
use App\Models\namasekolah;
use App\Models\tandatangan;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class SettingDataController extends Controller
{

public function settingssekolah(Request $request)
{
    $perPage = $request->input('perPage', 25);
    $search = $request->input('search');

    $query = namasekolah::query();

    if ($search) {
        $query->where('namasekolah', 'LIKE', "%{$search}%");
    }

    // Urutkan berdasarkan abjad A-Z
    $query->orderBy('namasekolah', 'asc');

    $data = $query->paginate($perPage);

    if ($request->ajax()) {
        return response()->json([
            'html' => view('backend.16_settingsdata.01_sekolah.partials.table', compact('data'))->render()
        ]);
    }

    return view('backend.16_settingsdata.01_sekolah.index', [
        'title' => 'Daftar Universitas/Sekolah',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search
    ]);
}

    public function settingssekolahcreate()
    {
            $user = Auth::user();

        return view('backend.16_settingsdata.01_sekolah.create', [
            'title' => 'Create Universitas/Sekolah',
            // 'data' => $dataagendapelatihan,
            'user' => $user,
        ]);
    }

  public function settingssekolahcreatenew(Request $request)
{
    $request->validate([
        'namasekolah' => 'required|string|max:255',
    ], [
        'namasekolah.required' => 'Nama sekolah tidak boleh kosong.',
        'namasekolah.string'   => 'Nama sekolah harus berupa teks.',
        'namasekolah.max'      => 'Nama sekolah tidak boleh lebih dari 255 karakter.',
        'namasekolah.unique'   => 'Nama sekolah ini sudah terdaftar.',
    ]);

    namasekolah::create([
        'namasekolah' => $request->namasekolah,
    ]);

    session()->flash('create', 'Data berhasil dibuat!');
    return redirect('/settingssekolah');
}


// SETTING TANDA TANGAN
public function settingstandatangan(Request $request)
{
    $perPage = $request->input('perPage', 25);
    $search = $request->input('search');

    $query = tandatangan::query();

    if ($search) {
        $query->where(function($q) use ($search) {
            $q->where('namalengkap', 'LIKE', "%{$search}%")
              ->orWhere('tandatangan', 'LIKE', "%{$search}%");
        });
    }

    // Urutkan berdasarkan abjad A-Z
    $query->orderBy('namalengkap', 'asc');

    $data = $query->paginate($perPage);

    if ($request->ajax()) {
        return response()->json([
            'html' => view('backend.16_settingsdata.02_tandatangan.partials.table', compact('data'))->render()
        ]);
    }

    return view('backend.16_settingsdata.02_tandatangan.index', [
        'title' => 'Daftar Tanda Tangan Bidang Bangunan Gedung',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search
    ]);
}


 public function settingstandatangancreate()
    {
            $user = Auth::user();

        return view('backend.16_settingsdata.02_tandatangan.create', [
            'title' => 'Create Tanda Tangan',
            // 'data' => $dataagendapelatihan,
            'user' => $user,
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\rantaipasokblora;
use App\Models\peralatankonstruksi;
use App\Models\alatberat;
use App\Models\namasekolah;
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

}

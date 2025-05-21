<?php

namespace App\Http\Controllers;

use App\Models\shstblora;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShstbloraController extends Controller
{
    //
    public function index()
    {
        $data = shstblora::paginate(10);
        $user = Auth::user();

        return view('frontend.07_ahsp.04_shst.shstindex', [
            'title' => 'SHST Tahun 2025 Kabupaten Blora',
            'user' => $user, // Mengirimkan data paginasi ke view
            'data' => $data, // Mengirimkan data paginasi ke view
        ]);
    }

    // VERSI ANDROID
    public function resshstblora()
    {
        $data = shstblora::all();
        $user = Auth::user();

        return view('frontend.00_android.02_satuanhargadasar.01_shstblora.index', [
            'title' => 'Standar Harga Satuan Tertinggi Tahun 2025 Kabupaten Blora',
            'user' => $user, // Mengirimkan data paginasi ke view
            'data' => $data, // Mengirimkan data paginasi ke view
        ]);
    }

// MENU BACKEND SHST KABUPATEN BLORA
public function beshstkabblora()
{
    $user = Auth::user();
    $data = shstblora::all();

    return view('backend.08_shstkabblora.index', [
        'title' => 'Daftar Satuan Harga Dasar Tertinggi Kabupaten Blora',
        'data' => $data
    ]);
}

public function beshstkabbloraupdate($id)
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    $datashstkabblora = shstblora::where('id', $id)->firstOrFail();

    $user = Auth::user();

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.08_shstkabblora.update', [
        'data' => $datashstkabblora,
        'user' => $user,
        'title' => 'Update SHST Kabupaten Blora'
    ]);
}


public function beshstkabbloraupdatenew(Request $request, $id)
{
    $request->validate([
        'bangunankantortidaksederhana'   => 'required|numeric',
        'bangunankantorsederhana'        => 'required|numeric',
        'rumahnegaratipea'               => 'required|numeric',
        'rumahnegaratipeb'               => 'required|numeric',
        'rumahnegaratipecde'             => 'required|numeric',
        'pagarrumahdepan'                => 'required|numeric',
        'pagarrumahbelakang'             => 'required|numeric',
        'pagarrumahsamping'              => 'required|numeric',
        'pagarrumahnegaradepan'          => 'required|numeric',
        'pagarrumahnegarabelakang'       => 'required|numeric',
        'pagarrumahnegarasamping'        => 'required|numeric',
    ], [
        'required' => 'Kolom :attribute wajib diisi.',
        'numeric' => 'Kolom :attribute harus berupa angka.',
    ], [
        'bangunankantortidaksederhana'   => 'Bangunan Kantor Tidak Sederhana',
        'bangunankantorsederhana'        => 'Bangunan Kantor Sederhana',
        'rumahnegaratipea'               => 'Rumah Negara Tipe A',
        'rumahnegaratipeb'               => 'Rumah Negara Tipe B',
        'rumahnegaratipecde'             => 'Rumah Negara Tipe C/D/E',
        'pagarrumahdepan'                => 'Pagar Rumah Depan',
        'pagarrumahbelakang'             => 'Pagar Rumah Belakang',
        'pagarrumahsamping'              => 'Pagar Rumah Samping',
        'pagarrumahnegaradepan'          => 'Pagar Rumah Negara Depan',
        'pagarrumahnegarabelakang'       => 'Pagar Rumah Negara Belakang',
        'pagarrumahnegarasamping'        => 'Pagar Rumah Negara Samping',
    ]);

    $proyek = shstblora::findOrFail($id);

    $proyek->update($request->only([
        'bangunankantortidaksederhana',
        'bangunankantorsederhana',
        'rumahnegaratipea',
        'rumahnegaratipeb',
        'rumahnegaratipecde',
        'pagarrumahdepan',
        'pagarrumahbelakang',
        'pagarrumahsamping',
        'pagarrumahnegaradepan',
        'pagarrumahnegarabelakang',
        'pagarrumahnegarasamping',
    ]));


  // Redirect atau response sukses
    session()->flash('update', 'Data SHST Berhasil Diperbarui!');
    return redirect('/beshstkabblora');
}


}

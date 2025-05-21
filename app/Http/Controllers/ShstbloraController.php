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
        'bangunankantortidaksederhana.required'   => 'Bangunan Kantor Tidak Sederhana Wajib Diisi !!',
        'bangunankantorsederhana.required'        => 'Bangunan Kantor Sederhana Wajib Diisi !!',
        'rumahnegaratipea.required'               => 'Rumah Negara Tipe A Wajib Diisi !!',
        'rumahnegaratipeb.required'               => 'Rumah Negara Tipe B Wajib Diisi !!',
        'rumahnegaratipecde.required'             => 'Rumah Negara Tipe C/D/E Wajib Diisi !!',
        'pagarrumahdepan.required'                => 'Pagar Rumah Depan Wajib Diisi !!',
        'pagarrumahbelakang.required'             => 'Pagar Rumah Belakang Wajib Diisi !!',
        'pagarrumahsamping.required'              => 'Pagar Rumah Samping Wajib Diisi !!',
        'pagarrumahnegaradepan.required'          => 'Pagar Rumah Negara Depan Wajib Diisi !!',
        'pagarrumahnegarabelakang.required'       => 'Pagar Rumah Negara Belakang Wajib Diisi !!',
        'pagarrumahnegarasamping.required'        => 'Pagar Rumah Negara Samping Wajib Diisi !!',
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

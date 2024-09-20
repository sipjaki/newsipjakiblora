<?php

namespace App\Http\Controllers;

use App\Models\giskbb;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth; 





class GiskbbController extends Controller
{
    
    public function index()
    {
        // Mengambil data dengan pagination
        $data = giskbb::all();
        $user = Auth::user();


        // Mengirimkan data ke view
        return view('frontend.04_tenagakerja.giskkbb.index', [
            'title' => 'GIS Kabupaten Bandung Barat ',
            'data' => $data,
            'user' => $user,
        ]);
    }

    public function namakecamatanshowBykecamatan($nama_kecamatan)
{
    // Ambil data dari database
    $data_details = giskbb::where('nama_kecamatan', $nama_kecamatan)->firstOrFail();

    // Hitung total laki-laki dan perempuan
    $total_laki_laki = $data_details->laki_laki;
    $total_perempuan = $data_details->perempuan;
    $total = $total_laki_laki + $total_perempuan;

    // Hitung persentase
    $persentase_laki_laki = $total > 0 ? ($total_laki_laki / $total) * 100 : 0;
    $persentase_perempuan = $total > 0 ? ($total_perempuan / $total) * 100 : 0;

    return view('frontend.04_tenagakerja.giskkbb.show', [
        'title' => 'GIS Kecamatan | Kabupaten Bandung Barat',
        'data_namakecamatan' => $data_details,
        'persentase_laki_laki' => $persentase_laki_laki,
        'persentase_perempuan' => $persentase_perempuan,
    ]);
}




    
    
}

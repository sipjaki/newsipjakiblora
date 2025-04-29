<?php

namespace App\Http\Controllers;

use App\Models\pesertapelatihan;
use Illuminate\Http\Request;

class VerifikasiController extends Controller
{
    //

    public function verifikasipesertapelatihan($id)
    {
        // Temukan data peserta pelatihan berdasarkan ID
        $item = pesertapelatihan::findOrFail($id);

        // Toggle status verifikasi (false <-> true)
        $item->verifikasi = !$item->verifikasi;
        $item->save();

        // Ambil 'namakegiatan' atau nilai yang relevan dari model
        $namakegiatan = $item->namakegiatan; // Pastikan ini sesuai dengan kolom yang benar

        // Flash message untuk menunjukkan status update berhasil
        session()->flash('verifikasipesertapelatihan', 'Selamat Peserta Lolos Seleksi !');

        // Redirect ke halaman yang sesuai setelah update dengan URL dan parameter namakegiatan
        return redirect('/beagendapelatihan');
    }

}

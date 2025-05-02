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

        // Toggle status verifikasi
        $item->verifikasi = !$item->verifikasi;
        $item->save();

        // Ambil ID agenda pelatihan (pastikan nama kolom benar)
        $agendaId = $item->agendapelatihan_id;

        // Flash message
        session()->flash('verifikasipesertapelatihan', 'Selamat Peserta Lolos Seleksi!');

        // Redirect ke halaman peserta sesuai agenda
        return redirect("/beagendapelatihanpeserta/show/{$agendaId}");
    }

    public function verifikasikehadiran($id)
    {
        // Temukan data peserta pelatihan berdasarkan ID
        $item = pesertapelatihan::findOrFail($id);

        // Toggle status verifikasikehadiran
        $item->verifikasikehadiran = true;
        $item->save();

        // Ambil ID agenda pelatihan
        $agendaId = $item->agendapelatihan_id;

        // Flash message
        session()->flash('verifikasikehadiran', 'Peserta telah diverifikasi hadir.');

        // Redirect ke halaman peserta
        return redirect("/bepesertapelatihansertifikat/show/{$agendaId}");
    }


}

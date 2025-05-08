<?php

namespace App\Http\Controllers;

use App\Models\allskktenagakerjablora;
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
    $item = pesertapelatihan::findOrFail($id);

    // Pastikan verifikasikehadiran yang diperbarui
    $item->verifikasikehadiran = true;
    $item->save();

    $agendaId = $item->agendapelatihan_id;
    session()->flash('verifikasikehadiran', 'Peserta telah diverifikasi hadir.');

    return redirect("/bepesertapelatihansertifikat/show/{$agendaId}");
}




//pelatihan skk sertifikasi

public function verifikasipesertasertifikasinew($id)
{
    // Temukan data peserta pelatihan berdasarkan ID
    $item = allskktenagakerjablora::findOrFail($id);

    // Toggle status verifikasi
    $item->verifikasipu = !$item->verifikasipu;
    $item->save();

    // Ambil ID agenda pelatihan (pastikan nama kolom benar)
    $agendaId = $item->agendaskk_id;

    // Flash message untuk notifikasi
    session()->flash('verifikasipesertapelatihan', 'Peserta Lolos Seleksi Administrasi!');

    // Redirect ke halaman peserta sesuai agenda
    return redirect("/beagendaskkpeserta/show/{$agendaId}");
}



public function verifikasiktp(Request $request, $id)
{
    $peserta = allskktenagakerjablora::findOrFail($id);
    $peserta->verifikasiktp = $request->input('verifikasiktp');
    $peserta->save();

    return back()->with('success', 'Validasi KTP berhasil disimpan.');
}

public function verifikasikehadiranlsp($id)
{
    $peserta = allskktenagakerjablora::findOrFail($id);

    // Ambil agenda ID dari field relasinya
    $agendaId = $peserta->agendaskk_id;

    // Update status kehadiran/verifikasi LSP
    $peserta->verifikasilps = true;
    $peserta->save();

    // Flash message ke session
    session()->flash('update', 'Peserta berhasil diverifikasi LSP!');

    // Redirect ke halaman peserta sesuai agenda
    return redirect("/beagendaskkpeserta/show/{$agendaId}");
}


}

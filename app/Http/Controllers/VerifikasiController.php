<?php

namespace App\Http\Controllers;

use App\Models\allskktenagakerjablora;
use App\Models\pesertapelatihan;
use Illuminate\Http\Request;

class VerifikasiController extends Controller
{
    //
    public function verifikasipesertapelatihan(Request $request, $id)
    {
        // Validasi input verifikasi
        $request->validate([
            'verifikasi' => 'required|in:lolos,gugur',
        ]);

        // Temukan peserta berdasarkan ID
        $item = pesertapelatihan::findOrFail($id);

        // Simpan nilai verifikasi
        $item->verifikasi = $request->input('verifikasi');
        $item->save();

        // Ambil ID agenda
        $agendaId = $item->agendapelatihan_id;

        // Flash message
        $pesan = $item->verifikasi === 'lolos'
            ? 'Selamat Peserta Lolos Seleksi!'
            : 'Peserta dinyatakan Gugur.';
        session()->flash('verifikasipesertapelatihan', $pesan);

        // Redirect
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

    // Ambil agenda ID dari relasi
    $agendaId = $peserta->agendaskk_id;

    // Update status verifikasi LSP
    $peserta->verifikasilps = true;
    $peserta->save();

    // Flash message ke session
    session()->flash('update', 'Peserta berhasil diverifikasi LSP!');

    // Redirect ke halaman peserta per agenda
    return redirect("/beskkdatapesertajumlah/show/{$agendaId}");
}

public function verifikasikehadiranlsphadir($id)
{
    // Mencari peserta berdasarkan ID
    $peserta = allskktenagakerjablora::findOrFail($id);

    // Ambil agenda ID dari relasi
    $agendaId = $peserta->agendaskk_id;

    // Memperbarui status verifikasi hadir sertifikasi
    $peserta->verifikasihadirsertifikasi = true;
    $peserta->save();

    // Flash message ke session
    session()->flash('update', 'Peserta berhasil diverifikasi hadir pelaksanaan !');

    // Redirect ke halaman peserta per agenda
    return redirect("/beskkdatapesertajumlah/show/{$agendaId}");
}

public function terbitkanSertifikat($id)
{
    $item = pesertapelatihan::findOrFail($id);

    $item->terbitkansertifikat = true;
    $item->save();

    $agendaId = $item->agendapelatihan_id;
    session()->flash('create', 'Sertifikat berhasil diterbitkan.');

    return redirect("/bepesertapelatihansertifikat/show/{$agendaId}");
}


}

<?php

namespace App\Http\Controllers;
use App\Models\agendapelatihan;
use App\Models\agendaskk;
use Illuminate\Http\Request;

use App\Models\berita; // Pastikan namespace model sesuai dengan struktur direktori
use App\Models\beritaagenda;
use App\Models\beritajakon;
use App\Models\himbauandinas;
use App\Models\kegiatanjaskon;
use App\Models\laporankegiatan;
use App\Models\layanankami;
use App\Models\pengawasanlokasi;
use App\Models\artikeljakonmasjaki;
use App\Models\headerberanda;
use App\Models\qapertanyaan;
use App\Models\qasebagai;
use App\Models\qa;
use App\Models\sertifikasiagenda;
use App\Models\skktenagakerja; // Pastikan namespace model sesuai dengan struktur direktori

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

// use Illuminate\Http\Request;

class Ver2Controller extends Controller
{
    //

   public function index()
{
    $data = beritajakon::orderBy('created_at', 'desc')->get();
    $dataartikel = artikeljakonmasjaki::orderBy('created_at', 'desc')->get();
    $dataheaderberanda = headerberanda::orderBy('created_at', 'desc')->get();
    
    // =====================================================================
    // LOGIKA MENGGABUNGKAN AGENDA PELATIHAN DAN AGENDA SKK
    // =====================================================================
    
    // 1. Ambil data agenda pelatihan
    $pelatihan = agendapelatihan::all()->map(function($item) {
        $item->tipe_agenda = 'Pelatihan'; // Tambah label
        return $item;
    });

    // 2. Ambil data agenda SKK
    $skk = agendaskk::all()->map(function($item) {
        $item->tipe_agenda = 'Sertifikasi'; // Tambah label
        return $item;
    });

    // 3. Gabungkan keduanya dan urutkan berdasarkan created_at terbaru
    $agendaGabungan = $pelatihan->concat($skk)->sortByDesc('created_at')->values();
    
    // =====================================================================

    $user = Auth::user();

    return view('ver2.fe.01_halamanawal.halamanawal', [
        'title' => 'SIPJAKI Kabupaten Blora | Sistem Informasi Pembina Jasa Konstruksi',
        'data' => $data,
        'dataartikel' => $dataartikel,
        'dataheaderberanda' => $dataheaderberanda,
        'user' => $user,
        'agendaGabungan' => $agendaGabungan, // <-- Kirim data gabungan ini ke view
        // 'dataagendapelatihan' => $dataagendapelatihan, // Bisa dihapus jika sudah tidak dipakai
        // 'agendaskk' => $agendaskk, // Bisa dihapus jika sudah tidak dipakai
    ]);
}

}

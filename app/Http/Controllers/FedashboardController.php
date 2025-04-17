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

class FedashboardController extends Controller
{
    public function index()
    {
        $data = beritajakon::orderBy('created_at', 'desc')->get(); //
        $dataartikel = artikeljakonmasjaki::orderBy('created_at', 'desc')->get(); //
        $dataheaderberanda = headerberanda::orderBy('created_at', 'desc')->get(); //
        $dataagendapelatihan = agendapelatihan::orderBy('created_at', 'desc')->get(); //
        $agendaskk = agendaskk::orderBy('created_at', 'desc')->get(); //


        $user = Auth::user();


        // return view('frontend.00_full.index', [
        // return view('404', [
        // return view('frontend.00_approve.00_utama.index', [
            return view('frontend.00_android.00_halamanutama.index', [
                'title' => 'Mas Jaki DPUPR Blora | Sistem Informasi Pembina Jasa Konstruksi ',
                'data' => $data, // Mengirimkan data paginasi ke view
                'dataartikel' => $dataartikel, // Mengirimkan data paginasi ke view
                'dataheaderberanda' => $dataheaderberanda, // Mengirimkan data paginasi ke view
                'user' => $user, // Mengirimkan data paginasi ke view
                'dataagendapelatihan' => $dataagendapelatihan, // Mengirimkan data paginasi ke view
                'agendaskk' => $agendaskk, // Mengirimkan data paginasi ke view
            // 'databerita' => $databerita, // Mengirimkan data paginasi ke view
        ]);
    }

    public function web()
    {
        $data = beritajakon::orderBy('created_at', 'desc')->get(); //
        $dataartikel = artikeljakonmasjaki::orderBy('created_at', 'desc')->get(); //
        $dataheaderberanda = headerberanda::orderBy('created_at', 'desc')->get(); //
        $dataagendapelatihan = agendapelatihan::orderBy('created_at', 'desc')->get(); //
        $agendaskk = agendaskk::orderBy('created_at', 'desc')->get(); //
        $user = Auth::user();


        // return view('frontend.00_full.index', [
        // return view('404', [
        return view('frontend.00_approve.00_utama.index', [
        // return view('frontend.00_android.00_halamanutama.index', [
            'title' => 'Mas Jaki DPUPR Blora | Sistem Informasi Pembina Jasa Konstruksi ',
            'data' => $data, // Mengirimkan data paginasi ke view
            'dataartikel' => $dataartikel, // Mengirimkan data paginasi ke view
            'dataheaderberanda' => $dataheaderberanda, // Mengirimkan data paginasi ke view
            'dataagendapelatihan' => $dataagendapelatihan, // Mengirimkan data paginasi ke view
            'agendaskk' => $agendaskk, // Mengirimkan data paginasi ke view
            'user' => $user, // Mengirimkan data paginasi ke view
            // 'databerita' => $databerita, // Mengirimkan data paginasi ke view
        ]);
    }

    // public function createstorepertanyaanpublik(Request $request)
    //         {
    //             // Validasi input
    //             $request->validate([
    //                 'qasebagai_id' => 'required|integer|exists:qasebagai,id',
    //                 'qapertanyaan_id' => 'required|integer|exists:qapertanyaan,id',
    //                 'nama_lengkap' => 'required|string|max:255',
    //                 'email' => 'required|email|max:255',
    //                 'telepon' => 'required|string|max:20',
    //             ]);

    //             // Buat entri baru di database
    //             qa::create([
    //                 'qasebagai_id' => $request->input('qasebagai_id'),
    //                 'qapertanyaan_id' => $request->input('qapertanyaan_id'),
    //                 'nama_lengkap' => $request->input('nama_lengkap'),
    //                 'email' => $request->input('email'),
    //                 'telepon' => $request->input('telepon'),
    //             ]);

    //             // Menyimpan pesan flash untuk umpan balik
    //             session()->flash('pertanyaan', 'Pertanyaan Anda Berhasil Dikirim !');

    //             // Redirect ke halaman yang sesuai
    //             return redirect('/');
    //         }

// =================================================================================================================
// ============================= MENU ANDROID =======================================


}


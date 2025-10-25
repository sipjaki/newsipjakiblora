<?php

namespace App\Http\Controllers;

use App\Models\agendapelatihan;
use App\Models\agendaskk;
use App\Models\allskktenagakerjablora;
use App\Models\artikeljakonmasjaki;
use App\Models\beritajakon;
use App\Models\bujkkonsultan;
use App\Models\bujkkontraktor;
use App\Models\dokumentasijakon;
use App\Models\headerberanda;
use App\Models\pagevisit;
use App\Models\paketpekerjaanmasjaki;
use App\Models\pesertapelatihan;
use App\Models\skktenagakerjablora;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;


class AdminDashboardController extends Controller
{
    //
    public function index()
    {

        // ---------------------------
        // JUMLAH DATA YANG ADA
        $data_berita = beritajakon::count();
        $data_artikel = artikeljakonmasjaki::count();
        $data_dokumentasijakon = dokumentasijakon::count();
        $data_bujk = bujkkontraktor::count() + bujkkonsultan::count();
        $data_2024 = skktenagakerjablora::count();
        $data_2025 = allskktenagakerjablora::count();
        $data_semuatkk = skktenagakerjablora::count() + allskktenagakerjablora::count();
        $data_paketpekerjaan = paketpekerjaanmasjaki::count();
        $data_agendapelatihan = agendapelatihan::count();
        $data_agendaskk = agendaskk::count();
        $data_pesertapelatihan = pesertapelatihan::count();

        $user = Auth::user();

        $visitCount = pagevisit::sum('visit_count'); // Total kunjungan
        $conversionRate = 12; // Angka contoh, sesuaikan dengan logika Anda
        $salesRate = 0.8; // Angka contoh, sesuaikan dengan logika Anda
        $registrationRate = -1; // Angka contoh, sesuaikan dengan logika

        // Mendapatkan user_id yang sedang login
$userId = Auth::id();

// Menghitung jumlah kegiatan yang diikuti oleh user tersebut berdasarkan user_id dan agendaskk_id
$jumlahKegiatan = allskktenagakerjablora::where('user_id', $userId)
                                       ->whereNotNull('agendaskk_id')  // Hanya yang memiliki agendaskk_id
                                       ->count();

$jumlahKegiatan = $jumlahKegiatan ?: 0;


$jumlahDikembalikan = allskktenagakerjablora::where('user_id', $userId)
    ->whereNotNull('agendaskk_id')
    ->where('verifikasipu', 'dikembalikan')
    ->count();

$jumlahDikembalikan = $jumlahDikembalikan ?: 0;

$jumlahLolos = allskktenagakerjablora::where('user_id', $userId)
    ->whereNotNull('agendaskk_id')
    ->where('verifikasipu', 'lolos')
    ->count();

$jumlahLolos = $jumlahLolos ?: 0;


$jumlahVerifikasiLps = allskktenagakerjablora::where('user_id', $userId)
    ->whereNotNull('agendaskk_id')
    ->where('verifikasilps', true)
    ->count();

$jumlahVerifikasiLps = $jumlahVerifikasiLps ?: 0;

$jumlahDenganSertifikat = allskktenagakerjablora::where('user_id', $userId)
    ->whereNotNull('agendaskk_id')       // pastikan ada agendaskk_id
    ->whereNotNull('sertifikat')         // pastikan sertifikat tidak null
    ->where('sertifikat', '!=', '')      // pastikan sertifikat tidak kosong string
    ->count();

// Jika tidak ada, pastikan tetap 0
$jumlahDenganSertifikat = $jumlahDenganSertifikat ?: 0;


        $dataallskktenagakerjablora = allskktenagakerjablora::all();
        // return view('backend.00_adminmasjaki.01_fiturterpisah.01_dashboard', [
        return view('backend.00_administrator.01_halamanutama.dashboard', [
            'title' => 'Dashboard Mas Jaki DPUPR Blora',
            'user' => $user,
            'visitCount' => $visitCount,
            'conversionRate' => $conversionRate,
            'salesRate' => $salesRate,
            'registrationRate' => $registrationRate,
            'jumlahKegiatan' => $jumlahKegiatan,
            'jumlahDikembalikan' => $jumlahDikembalikan,
            'jumlahLolos' => $jumlahLolos,
            'jumlahVerifikasiLps' => $jumlahVerifikasiLps,
            'jumlahDenganSertifikat' => $jumlahDenganSertifikat,
            // 'jumlahQa' => $jumlahQa,  // Menambahkan jumlah data ke view
            // 'jumlahBerita' => $jumlahBerita,  // Menambahkan jumlah data ke view
            // 'jumlahAgendasertifikasi' => $jumlahAgendasertifikasi,  // Menambahkan jumlah data ke view
            'data_berita' => $data_berita,
            'data_artikel' => $data_artikel,
            'data_dokumentasijakon' => $data_dokumentasijakon,
            'data_bujk' => $data_bujk,
            'data_2024' => $data_2024,
            'data_2025' => $data_2025,
            'data_semuatkk' => $data_semuatkk,
            'data_paketpekerjaan' => $data_paketpekerjaan,
            'data_agendapelatihan' => $data_agendapelatihan,
            'data_agendaskk' => $data_agendaskk,
            'data_pesertapelatihan' => $data_pesertapelatihan,
        ]);
    }


    public function header()
    {

        $data = headerberanda::all();
        $user = Auth::user();
        // return view('backend.00_adminmasjaki.01_fiturterpisah.01_dashboard', [
        return view('backend.01_beranda.01_header.index', [
            'title' => 'Beranda | Informasi Header Web Mas Jaki ',
            'user' => $user,
            'data' => $data,
        ]);
    }

    public function headerdelete($judul)
    {
        // Cari item berdasarkan judul
        $entry = headerberanda::where('judul', $judul)->first();

        if ($entry) {
            // Jika ada file header yang terdaftar, hapus dari storage
            if (Storage::disk('public')->exists($entry->header)) {
                Storage::disk('public')->delete($entry->header);
            }

            // Hapus entri dari database
            $entry->delete();

            // Redirect atau memberi respons sesuai kebutuhan
            return redirect('/header')->with('delete', 'Data Berhasil Di Hapus !');

        }

        return redirect()->back()->with('error', 'Item not found');
    }

    public function headerupdate($id)
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    $tupoksi = headerberanda::where('id', $id)->firstOrFail();
    $user = Auth::user();

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.01_beranda.01_header.update', [
        'data' => $tupoksi,
        'user' => $user,
        'title' => 'Update Header Beranda Web'
    ]);
}

public function headerupdatecreate(Request $request, $id)
{
    // Validasi input
    $validatedData = $request->validate([
        'judul'  => 'required|string|max:255',
        'header' => 'nullable|image|mimes:jpg,jpeg,png,gif,webp|max:20480', // max 20MB
    ], [
        'judul.required' => 'Judul wajib diisi!',
        'header.image'   => 'Header harus berupa gambar!',
        'header.mimes'   => 'Format gambar harus jpg, jpeg, png, gif, atau webp!',
        'header.max'     => 'Ukuran gambar maksimal 20MB!',
    ]);

    // Ambil data berdasarkan ID
    $data = headerberanda::findOrFail($id);

    // Siapkan data update
    $updateData = [
        'judul' => $validatedData['judul'],
    ];

    // Jika ada upload gambar baru
    if ($request->hasFile('header')) {
        // Hapus file lama jika ada
        if ($data->header && file_exists(public_path('header_images/' . $data->header))) {
            unlink(public_path('header_images/' . $data->header));
        }

        // Simpan file baru ke public/header_images
        $file     = $request->file('header');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('header_images'), $fileName);

        // Simpan nama file ke database
        $updateData['header'] = 'header_images/' . $fileName;
    }

    // Update data
    $data->update($updateData);

    // Flash pesan sukses
    session()->flash('update', 'Data Berhasil Diupdate!');

    // Redirect ke halaman yang sesuai
    return redirect('/header');
}



}

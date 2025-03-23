<?php

namespace App\Http\Controllers;

use App\Models\asosiasipengusaha;
use App\Models\ketertiban;
use App\Models\metodepengadaan;
use App\Models\paketpekerjaan;
use App\Models\penanggungjawabteknis;
use App\Models\pengawasanbangunangedung;
use App\Models\pengawasanketertiban;
use App\Models\pengawasanlokasi;
use App\Models\pengawasanstatus;
use App\Models\pengawasantindakan;
use App\Models\sbulampiran1;
use App\Models\sbulampiran2;
use App\Models\sbulampiran3;
use App\Models\standarbiayaumum;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth; // Pastikan Anda mengimpor facade ini

use Carbon\Carbon;


class DatajakonController extends Controller
{
    //

    //  -----------------------------------------------------------------------

    public function newstandarbiayaumum()
    {
        $data = standarbiayaumum::paginate(15);
        $datasbu1 = sbulampiran1::paginate(15);
        $datasbu2 = sbulampiran2::paginate(15);
        $datasbu3 = sbulampiran3::paginate(15);

        $user = Auth::user();

        return view('frontend.07_ahsp.01_standarbiayaumum.standarbiayaumum', [
            'title' => 'Standar Biaya Umum ',
            'user' => $user,
            'data' => $data,
            'datasbu1' => $datasbu1,
            'datasbu2' => $datasbu2,
            'datasbu3' => $datasbu3,

        ]);
    }

    public function standarbiayaumumshowbyjudul($judul)
    {
        $data = standarbiayaumum::where('judul', $judul)->firstOrFail();
        // $datasbu1 = sbulampiran1::where('judul', $judul)->firstOrFail();
        // $datasbu2 = sbulampiran2::where('judul', $judul)->firstOrFail();
        // $datasbu3 = sbulampiran3::where('judul', $judul)->firstOrFail();

        $user = Auth::user();

        return view('frontend.07_ahsp.01_standarbiayaumum.standarbiayaumumshow', [
            'data' => $data,
            // 'data' => $datasbu1,
            // 'data' => $datasbu2,
            // 'data' => $datasbu3,
            'title' => 'Peraturan Standar Biaya Umum',
        ]);
    }

    public function standarbiayaumumshowbyjudul1($judul)
    {
        // $data = standarbiayaumum::where('judul', $judul)->firstOrFail();
        $datasbu1 = sbulampiran1::where('judul', $judul)->firstOrFail();
        // $datasbu2 = sbulampiran2::where('judul', $judul)->firstOrFail();
        // $datasbu3 = sbulampiran3::where('judul', $judul)->firstOrFail();

        $user = Auth::user();

        return view('frontend.07_ahsp.01_standarbiayaumum.standarbiayaumum1', [
            'data' => $datasbu1,
            // 'data' => $datasbu1,
            // 'data' => $datasbu2,
            // 'data' => $datasbu3,
            'title' => 'Peraturan Standar Biaya Umum',
        ]);
    }

    public function standarbiayaumumshowbyjudul2($judul)
    {
        // $data = standarbiayaumum::where('judul', $judul)->firstOrFail();
        // $datasbu1 = sbulampiran2::where('judul', $judul)->firstOrFail();
        $datasbu2 = sbulampiran2::where('judul', $judul)->firstOrFail();
        // $datasbu3 = sbulampiran3::where('judul', $judul)->firstOrFail();

        $user = Auth::user();

        return view('frontend.07_ahsp.01_standarbiayaumum.standarbiayaumum2', [
            'data' => $datasbu2,
            // 'data' => $datasbu1,
            // 'data' => $datasbu2,
            // 'data' => $datasbu3,
            'title' => 'Peraturan Standar Biaya Umum',
        ]);
    }

    public function standarbiayaumumshowbyjudul3($judul)
    {
        // $data = standarbiayaumum::where('judul', $judul)->firstOrFail();
        // $datasbu1 = sbulampiran2::where('judul', $judul)->firstOrFail();
        // $datasbu2 = sbulampiran2::where('judul', $judul)->firstOrFail();
        $datasbu3 = sbulampiran3::where('judul', $judul)->firstOrFail();

        $user = Auth::user();

        return view('frontend.07_ahsp.01_standarbiayaumum.standarbiayaumum3', [
            'data' => $datasbu3,
            // 'data' => $datasbu1,
            // 'data' => $datasbu2,
            // 'data' => $datasbu3,
            'title' => 'Peraturan Standar Biaya Umum',
        ]);
    }

    // ============================ SBU LAMPIRAN 3 ========================================

    public function fesbulampiran3()
    {
        $data = sbulampiran3::paginate(10);

        $user = Auth::user();

        return view('frontend.03_datajakon.02_sbulampiran3', [
            'title' => 'Lampiran 3 Standar Biaya Umum ',
            'user' => $user,
            'data' => $data,

        ]);
    }

    public function fesbulampiran3showbyjudulfe($judul)
    {
        $datastandarbiayaumum = sbulampiran3::where('judul', $judul)->firstOrFail();
        $user = Auth::user();

        return view('frontend.03_datajakon.02_sbulampiran3show', [
            'data' => $datastandarbiayaumum,
            'user' => $user,
            'title' => 'Show Details Lampiran 3 Standar Biaya Umum',
        ]);
    }

    // ============================ SBU LAMPIRAN 2 ========================================

    public function fesbulampiran2()
    {
        $data = sbulampiran2::paginate(10);

        $user = Auth::user();

        return view('frontend.03_datajakon.02_sbulampiran2', [
            'title' => 'Lampiran 2 Standar Biaya Umum ',
            'user' => $user,
            'data' => $data,

        ]);
    }

    public function fesbulampiran2showbyjudulfe($judul)
    {
        $datastandarbiayaumum = sbulampiran2::where('judul', $judul)->firstOrFail();
        $user = Auth::user();

        return view('frontend.03_datajakon.02_sbulampiran2show', [
            'data' => $datastandarbiayaumum,
            'user' => $user,
            'title' => 'Show Details Lampiran 2 Standar Biaya Umum',
        ]);
    }

    // ============================ SBU LAMPIRAN 1 ========================================

    public function fesbulampiran1()
    {
        $data = sbulampiran1::paginate(10);

        $user = Auth::user();

        return view('frontend.03_datajakon.02_sbulampiran1', [
            'title' => 'Lampiran 1 Standar Biaya Umum ',
            'user' => $user,
            'data' => $data,

        ]);
    }

    public function fesbulampiran1showbyjudulfe($judul)
    {
        $datastandarbiayaumum = sbulampiran1::where('judul', $judul)->firstOrFail();
        $user = Auth::user();

        return view('frontend.03_datajakon.02_sbulampiran1show', [
            'data' => $datastandarbiayaumum,
            'user' => $user,
            'title' => 'Show Details Lampiran 1 Standar Biaya Umum',
        ]);
    }



    // ======================================== PAKET PEKERJAAN =====================================

    public function paketpekerjaan()
    {
        $datapaketpekerjaan = paketpekerjaan::paginate(15);
        $datametodepengadaan = metodepengadaan::all();

        return view('frontend.03_datajakon.03_paketpekerjaan', [
            'title' => 'Paket Pekerjaan Kabupaten Bandung Barat',
            'data' => $datapaketpekerjaan,
            'datametodepengadaan' => $datametodepengadaan,

        ]);
    }


    public function bepaketpekerjaan()
    {

        $paketpekerjaan = paketpekerjaan::paginate(15);
        $user = Auth::user();

        return view('backend.03_datajakon.04_paketpekerjaan.index', [
            'data' => $paketpekerjaan,
            'user' => $user,
            'title' => 'Paket Pekerjaan Pemerintah Kabupaten Bandung Barat ',

        ]);
    }

    public function paketpekerjaanshowbyjudul($instansi)
    {
        $paketpekerjaan = paketpekerjaan::where('instansi', $instansi)->firstOrFail();
        $user = Auth::user();

        return view('backend.03_datajakon.04_paketpekerjaan.show', [
            'data' => $paketpekerjaan,
            'user' => $user,
            'title' => 'Details Paket Pekerjaan',
        ]);
    }
    public function updatepaketpekerjaan($instansi)
    {
        // Cari data undang-undang berdasarkan nilai 'judul'
        $datapaketpekerjaan = paketpekerjaan::where('instansi', $instansi)->firstOrFail();
        $datametodepengadaan = metodepengadaan::all();
        // Tampilkan form update dengan data yang ditemukan
        $user = Auth::user();

        return view('backend.03_datajakon.04_paketpekerjaan.update', [
            'datapaketpekerjaan' => $datapaketpekerjaan,
            'datametodepengadaan' => $datametodepengadaan,
            'user' => $user,

            'title' => 'Update Paket Pekerjaan'
        ]);
    }

    // -------------------- UPDATE DATA CREATE UPDATE UNDANG UNDANG JASA KONSTRUKSI ----------------------

public function createupdatepaketpekerjaan(Request $request, $instansi)
{
    // Validasi input
    $request->validate([
        'instansi' => 'required|string|max:255',
        'jumlah_pagu' => 'required|numeric|min:10000|max:10000000000', // Validasi untuk jumlah pagu
        'pekerjaan' => 'required|string|max:255',
        'foto_pekerjaan' => 'nullable|file|mimes:jpeg,png,jpg|max:20480',
        'metodepengadaan_id' => 'required|string|max:255',
        'tahun' => 'required|integer|digits:4',
        'progress_fisik' => 'nullable|numeric|min:0|max:100', // 'progress_fisik' => 'required|numeric|min:0|max:100',
    ]);

    // Cari data paketpekerjaan berdasarkan instansi
    $datapaketpekerjaan = paketpekerjaan::where('instansi', $instansi)->firstOrFail();

    // Path folder penyimpanan
    $storagePath = storage_path('app/public/datajakon/paketpekerjaan');

    // Cek dan buat folder jika tidak ada
    if (!File::exists($storagePath)) {
        File::makeDirectory($storagePath, 0755, true);
    }

    // Simpan file foto_pekerjaan dan ambil path-nya
    $filePath = $datapaketpekerjaan->foto_pekerjaan; // Default ke foto yang ada jika tidak ada file baru
    if ($request->hasFile('foto_pekerjaan')) {
        $file = $request->file('foto_pekerjaan');
        $filePath = $file->store('datajakon/paketpekerjaan', 'public');
    }

    // Ambil dan konversi jumlah_pagu dari request
    $jumlahPagu = $request->input('jumlah_pagu');
    $jumlahPagu = preg_replace('/[^\d]/', '', $jumlahPagu);
    $jumlahPagu = (int) $jumlahPagu;

    // Update data paketpekerjaan dengan data dari form
    $datapaketpekerjaan->update([
        'instansi' => $request->input('instansi'),
        'jumlah_pagu' => $jumlahPagu,
        'pekerjaan' => $request->input('pekerjaan'),
        'foto_pekerjaan' => $filePath,
        'metodepengadaan_id' => $request->input('metodepengadaan_id'),
        'tahun' => $request->input('tahun'),
        'progress_fisik' => $request->input('progress_fisik', 0), // Default to 0 if not provided
        // 'progress_fisik' => $request->input('progress_fisik'),
    ]);

    // Flash pesan session
    session()->flash('update', 'Data Paket Pekerjaan Berhasil Diupdate!');

    // Redirect ke halaman yang sesuai
    return redirect('/paketpekerjaan'); // Pastikan rute ini ada di web.php
}

// ------------- CREATE DATA PAKET PEKERJAAN --------------

public function createpaketpekerjaan()
{

        $datametodepengadaan = metodepengadaan::all();
        $user = Auth::user();

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.03_datajakon.04_paketpekerjaan.create', [
        'datametodepengadaan' => $datametodepengadaan,
        'user' => $user,
        'title' => 'Create Paket Pekerjaan'
    ]);
}

public function createstorepaketpekerjaan(Request $request)
{
    // Validasi input
    $request->validate([
        'instansi' => 'required|string|max:255',
        'jumlah_pagu' => 'required|numeric|min:10000|max:10000000000', // Validasi untuk jumlah pagu
        'pekerjaan' => 'required|string|max:255',
        'foto_pekerjaan' => 'nullable|file|mimes:jpeg,png,jpg|max:20480',
        'metodepengadaan_id' => 'required|string|max:255',
        'tahun' => 'required|integer|digits:4',
        'progress_fisik' => 'nullable|numeric|min:0|max:100',
    ]);

    // Simpan file foto pekerjaan dan ambil path jika ada
    $filePathFotoPekerjaan = null;
    if ($request->hasFile('foto_pekerjaan')) {
        $filePathFotoPekerjaan = $request->file('foto_pekerjaan')->store('datajakon/paketpekerjaan', 'public');
    }

    // Ambil dan konversi jumlah_pagu dari request
    $jumlahPagu = $request->input('jumlah_pagu');
    $jumlahPagu = preg_replace('/[^\d]/', '', $jumlahPagu);
    $jumlahPagu = (int) $jumlahPagu;

    // Buat entri baru di database
    paketpekerjaan::create([
        'instansi' => $request->input('instansi'),
        'jumlah_pagu' => $jumlahPagu,
        'pekerjaan' => $request->input('pekerjaan'),
        'foto_pekerjaan' => $filePathFotoPekerjaan,
        'metodepengadaan_id' => $request->input('metodepengadaan_id'),
        'tahun' => $request->input('tahun'),
        'progress_fisik' => $request->input('progress_fisik', 0), // Default to 0 if not provided
    ]);

    session()->flash('create', 'Data Berhasil Di Tambahkan !');
    return redirect('/paketpekerjaan'); // Ganti 'your.route.name' dengan nama route yang sesuai
}


public function deletepaketpekerjaan($instansi)
{
    // Cari entri berdasarkan name
    $entry = paketpekerjaan::where('instansi', $instansi)->first();

    if ($entry) {
        // Hapus file terkait jika ada
        if ($entry->foto_pekerjaan) {
            Storage::disk('public')->delete($entry->foto_pekerjaan);
        }

        // Hapus entri dari database
        paketpekerjaan::destroy($entry->id);

        // Set pesan flash untuk sukses
        session()->flash('delete', 'Data Berhasil Dihapus!');

        // Redirect ke halaman yang sesuai
        return redirect('/paketpekerjaan');
    } else {
        // Set pesan flash jika data tidak ditemukan
        session()->flash('error', 'Data Tidak Ditemukan!');

        // Redirect ke halaman yang sesuai
        return redirect('/paketpekerjaan');
    }
}







    // ============================================================================== =========



}

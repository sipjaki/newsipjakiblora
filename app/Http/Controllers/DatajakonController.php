<?php

namespace App\Http\Controllers;

use App\Models\asosiasipengusaha;
use App\Models\metodepengadaan;
use App\Models\paketpekerjaan;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class DatajakonController extends Controller
{
    //

    public function asosiasi()
    {
        
        return view('frontend.03_datajakon.01_asosiasi', [
            'title' => 'Asosiasi Pengusaha ',
           
        ]);
    }

    public function asosiasipengusaha()
    {
        
        $dataasosiasi = asosiasipengusaha::paginate(15);
        return view('backend.03_datajakon.02_asosiasipengusaha.index', [
            'data' => $dataasosiasi,
            'title' => 'Asosiasi Pengusaha ',
           
        ]);

        // $datauser = user::paginate(15);
        // $datastatusadmin = statusadmin::all();
        
        // return view('backend.15_administrator.user.index', [
        //     'title' => 'Daftar User Admin Sipjaki ',
        //     'datauser' => $datauser,  
        //     'datastatusadmin' => $datastatusadmin,  
           
        // ]);
    }

    public function asosiasipengusahashowbyjudul($nama_asosiasi)
    {
        $dataasosiasipengusaha = asosiasipengusaha::where('nama_asosiasi', $nama_asosiasi)->firstOrFail();

        return view('backend.03_datajakon.02_asosiasipengusaha.show', [
            'data' => $dataasosiasipengusaha,
            'title' => 'Details Asosiasi Pengusaha',
        ]);
    }
    
                // -------------------- UPDATE ASOSIASI PENGUSAHA ----------------------
            public function updateasosiasipengusaha($nama_asosiasi)
                {
                    // Cari data undang-undang berdasarkan nilai 'judul'
                    $dataasosiasipengusaha = asosiasipengusaha::where('nama_asosiasi', $nama_asosiasi)->firstOrFail();
                    
                    // Tampilkan form update dengan data yang ditemukan
                    return view('backend.03_datajakon.02_asosiasipengusaha.update', [
                        'dataasosiasipengusaha' => $dataasosiasipengusaha,
                    
                        'title' => 'Update Asosiasi Pengusaha'
                    ]);
                }
                
                // -------------------- UPDATE DATA CREATE UPDATE UNDANG UNDANG JASA KONSTRUKSI ----------------------
            
                public function createupdateasosiasipengusaha(Request $request, $nama_asosiasi)
                {
                    // Validasi input
                    $request->validate([
                        'nama_asosiasi' => 'required|string|max:255',
                        'alamat_kantor' => 'required|string|max:255',
                        'kota' => 'required|string|max:255',
                        'provinsi' => 'required|string|max:255',
                        'kontak' => 'required|string|max:255',
                        'email' => 'required|string|email|max:255',
                        'website' => 'required|string|max:255',
                        'kepala_asosiasi' => 'required|string|max:255',
                        // 'tanggal_berdiri' => 'required|date_format:Y-m-d',
                        'jumlah_anggota' => 'required|integer',
                        'status' => 'required|string|max:255',
                        'foto_asosiasi' => 'nullable|file|mimes:jpg,jpeg,png|max:20480',
                    ]);
                
                    // Cari data asosiasipengusaha berdasarkan nama
                    $dataasosiasipengusaha = asosiasipengusaha::where('nama_asosiasi', $nama_asosiasi)->firstOrFail();
                
                    // Path folder penyimpanan
                    $storagePath = storage_path('app/public/asosiasipengusaha');
                
                    // Cek dan buat folder jika tidak ada
                    if (!File::exists($storagePath)) {
                        File::makeDirectory($storagePath, 0755, true);
                    }
                
                    // Simpan file foto_asosiasi dan ambil path-nya
                    $filePath = $dataasosiasipengusaha->foto_asosiasi; // Default ke foto yang ada jika tidak ada file baru
                    if ($request->hasFile('foto_asosiasi')) {
                        $file = $request->file('foto_asosiasi');
                        $filePath = $file->store('asosiasipengusaha', 'public');
                    }
                
                    // Format tanggal sudah sesuai
                    // $tanggalBerdiri = $request->input('tanggal_berdiri');
                
                    // Update data asosiasipengusaha dengan data dari form
                    $dataasosiasipengusaha->update([
                        'nama_asosiasi' => $request->input('nama_asosiasi'),
                        'alamat_kantor' => $request->input('alamat_kantor'),
                        'kota' => $request->input('kota'),
                        'provinsi' => $request->input('provinsi'),
                        'kontak' => $request->input('kontak'),
                        'email' => $request->input('email'),
                        'website' => $request->input('website'),
                        'kepala_asosiasi' => $request->input('kepala_asosiasi'),
                        // 'tanggal_berdiri' => $tanggalBerdiri,
                        'jumlah_anggota' => $request->input('jumlah_anggota'),
                        'status' => $request->input('status'),
                        'foto_asosiasi' => $filePath,
                    ]);
                
                    // Flash pesan session
                    session()->flash('update', 'Data Asosiasi Pengusaha Berhasil Diupdate!');
                
                    // Redirect ke halaman yang sesuai
                    return redirect('/asosiasipengusaha');
                }

                
    //================ DELETE DATA ASOSIASI PENGUSAHA  ========================== 
    public function deleteasosiasipengusaha($nama_asosiasi)
    {
        // Cari entri berdasarkan name
        $entry = asosiasipengusaha::where('nama_asosiasi', $nama_asosiasi)->first();
    
        if ($entry) {
            // Hapus file terkait jika ada
            if ($entry->foto_asosiasi) {
                Storage::disk('public')->delete($entry->foto_asosiasi);
            }
    
            // Hapus entri dari database
            asosiasipengusaha::destroy($entry->id);
    
            // Set pesan flash untuk sukses
            session()->flash('delete', 'Data Berhasil Dihapus!');
    
            // Redirect ke halaman yang sesuai
            return redirect('/asosiasipengusaha');
        } else {
            // Set pesan flash jika data tidak ditemukan
            session()->flash('error', 'Data Tidak Ditemukan!');
    
            // Redirect ke halaman yang sesuai
            return redirect('/asosiasipengusaha');
        }
    }
                
    //  -----------------------------------------------------------------------

    public function standarbiayaumum()
    {
        
        return view('frontend.03_datajakon.02_standarbiayaumum', [
            'title' => 'Standar Biaya Umum ',
           
        ]);
    }


    // ======================================== PAKET PEKERJAAN =====================================

    public function paketpekerjaan()
    {
        
        return view('frontend.03_datajakon.03_paketpekerjaan', [
            'title' => 'Paket Pekerjaan Kabupaten Bandung Barat',
           
        ]);
    }

    
    public function bepaketpekerjaan()
    {
        
        $paketpekerjaan = paketpekerjaan::paginate(15);
        return view('backend.03_datajakon.04_paketpekerjaan.index', [
            'data' => $paketpekerjaan,
            'title' => 'Paket Pekerjaan Pemerintah Kabupaten Bandung Barat ',
           
        ]);
    }

    public function paketpekerjaanshowbyjudul($instansi)
    {
        $paketpekerjaan = paketpekerjaan::where('instansi', $instansi)->firstOrFail();

        return view('backend.03_datajakon.04_paketpekerjaan.show', [
            'data' => $paketpekerjaan,
            'title' => 'Details Paket Pekerjaan',
        ]);
    }
    public function updatepaketpekerjaan($instansi)
    {
        // Cari data undang-undang berdasarkan nilai 'judul'
        $datapaketpekerjaan = paketpekerjaan::where('instansi', $instansi)->firstOrFail();
        $datametodepengadaan = metodepengadaan::all();
        // Tampilkan form update dengan data yang ditemukan
        return view('backend.03_datajakon.04_paketpekerjaan.update', [
            'datapaketpekerjaan' => $datapaketpekerjaan,
            'datametodepengadaan' => $datametodepengadaan,
        
            'title' => 'Update Paket Pekerjaan'
        ]);
    }
    
    // -------------------- UPDATE DATA CREATE UPDATE UNDANG UNDANG JASA KONSTRUKSI ----------------------

public function createupdatepaketpekerjaan(Request $request, $instansi)
{
    // Validasi input
    $request->validate([
        'instansi' => 'required|string|max:255',
        'jumlah_pagu' => 'required|numeric|min:10000|max:10000000000', // Validasi untuk angka
        'metodepengadaan_id' => 'required|string|max:255',
        'pekerjaan' => 'required|string|max:255',
        'foto_pekerjaan' => 'nullable|file|mimes:jpg,jpeg,png|max:20480',
        'tahun' => 'required|integer|between:2021,2029', // Validasi tahun
        // 'progress_fisik' => 'required|numeric|min:0|max:100',
    ]);

    // Cari data paketpekerjaan berdasarkan instansi
    $datapaketpekerjaan = PaketPekerjaan::where('instansi', $instansi)->firstOrFail();

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
        'jumlah_pagu' => $jumlahPagu, // Pastikan jumlah_pagu disimpan sebagai integer
        'metodepengadaan_id' => $request->input('metodepengadaan_id'),
        'pekerjaan' => $request->input('pekerjaan'),
        'foto_pekerjaan' => $filePath,
        'tahun' => $request->input('tahun'), // Update tahun
        // 'progress_fisik' => $request->input('progress_fisik'),
    ]);

    // Flash pesan session
    session()->flash('update', 'Data Paket Pekerjaan Berhasil Diupdate!');

    // Redirect ke halaman yang sesuai
    return redirect('/paketpekerjaan'); // Pastikan rute ini ada di web.php
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

    
    public function pengawasan()
    {
        
        return view('frontend.03_datajakon.04_pengawasan', [
            'title' => 'Pengawasan Konstruksi Kabupaten Bandung Barat',
           
        ]);
    }



    
}

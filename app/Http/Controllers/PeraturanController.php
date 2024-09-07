<?php

namespace App\Http\Controllers;

use App\Models\keputusanmenteri;
// use Illuminate\Http\Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


use App\Models\peraturan; // Pastikan namespace model sesuai dengan struktur direktori
use App\Models\perbupatiwalikota;
use App\Models\perdaerah;
// Pastikan namespace model sesuai dengan struktur direktori
use App\Models\perpemerintah;
use App\Models\perpresiden;
use App\Models\permenteri;
use App\Models\suratedaran;
use App\Models\referensi;
use App\Models\pergubernur;
use App\Models\suratkeputusan;

class PeraturanController extends Controller
{
    // BACKEND DATABASE UNDANG UNDANG 
    public function undangundang()
    {
        $data= peraturan::all(); // Menggunakan paginate() untuk pagination

        return view('backend.14_peraturan.01_undangundang.index', [
            'title' => 'Undang - Undang Jasa Konstruksi',
            'data' => $data, // Mengirimkan data paginasi ke view
        ]);
    }

    // FRONTEND  DATABASE UNDANG UNDANG 

    public function feundangundang()
    {
        $data= peraturan::all(); // Menggunakan paginate() untuk pagination

        return view('frontend.11_peraturan.01_undangundang', [
            'title' => 'Undang - Undang Jasa Konstruksi',
            'data' => $data, // Mengirimkan data paginasi ke view
        ]);
    }
    
    
    // -------------------- UPDATE DATA UNDANG UNDANG JASA KONSTRUKSI ----------------------
    public function updateundangundang($judul)
    {
        // Cari data undang-undang berdasarkan nilai 'judul'
        $undangUndang = peraturan::where('judul', $judul)->firstOrFail();
        
        // Tampilkan form update dengan data yang ditemukan
        return view('backend.14_peraturan.01_undangundang.update', [
            'undangUndang' => $undangUndang,
            'title' => 'Update UUD Jasa Konstruksi'
        ]);
    }
    
    // -------------------- UPDATE DATA CREATE UPDATE UNDANG UNDANG JASA KONSTRUKSI ----------------------
            public function createupdateundangundang(Request $request, $judul)
        {
            // Validasi input
            $request->validate([
                'judul' => 'required|string|max:255',
                // 'peraturan' => 'required|file', // Validasi file sesuai jenis dan ukuran
            ]);

            // Cari data undang-undang berdasarkan nilai 'judul'
            $undangUndang = peraturan::where('judul', $judul)->firstOrFail();
            
            // Simpan file dan ambil path-nya
            $filePath = null;
            if ($request->hasFile('peraturan')) {
                $file = $request->file('peraturan');
                $filePath = $file->store('undangundang', 'public'); // Menyimpan di storage/app/public/undangundang
            }

            // Update data undang-undang dengan data dari form
            $undangUndang->update([
                'judul' => $request->input('judul'),
                'peraturan' => $filePath ? $filePath : $undangUndang->peraturan, // Gunakan path baru jika ada file
            ]);

            // Redirect ke URL '/peruud' dengan pesan sukses
            return redirect('/peruud')
                                ->with('success', 'Data Undang-Undang Berhasil Di Update !');
        }
    


    // -------------------------------------------------------------------------------------------------------
    // BACKEND DATABASE PEMERINTAH 


    public function pemerintah()
    {
        $data= perpemerintah::all(); // Menggunakan paginate() untuk pagination

        return view('backend.14_peraturan.02_pemerintah.index', [
            'title' => 'Peraturan Pemerintah',
            'data' => $data, // Mengirimkan data paginasi ke view
        ]);
    }
    
    // FRONTEND  DATABASE PEMERINTAH 
    
        public function fepemerintah()
        {
            $data= perpemerintah::all(); // Menggunakan paginate() untuk pagination
    
            return view('frontend.11_peraturan.02_peraturanpemerintah', [
                'title' => 'Peraturan Pemerintah',
                'data' => $data, // Mengirimkan data paginasi ke view
            ]);
        }


    
    // -------------------- UPDATE DATA PERATURAN PEMERINTAH JASA KONSTRUKSI ----------------------
    public function updateperpemerintah($judul)
    {
        // Cari data undang-undang berdasarkan nilai 'judul'
        $perpemerintah = perpemerintah::where('judul', $judul)->firstOrFail();
        
        // Tampilkan form update dengan data yang ditemukan
        return view('backend.14_peraturan.02_pemerintah.update', [
            'perpemerintah' => $perpemerintah,
            'title' => 'Update Peraturan Pemerintah'
        ]);
    }
    
    // -------------------- UPDATE DATA CREATE UPDATE UNDANG UNDANG JASA KONSTRUKSI ----------------------
            public function createupdateperpemerintah(Request $request, $judul)
        {
            // Validasi input
            $request->validate([
                'judul' => 'required|string|max:255',
                // 'peraturan' => 'required|file', // Validasi file sesuai jenis dan ukuran
            ]);

            // Cari data undang-undang berdasarkan nilai 'judul'
            $perpemerintah = perpemerintah::where('judul', $judul)->firstOrFail();
            
            // Simpan file dan ambil path-nya
            $filePath = null;
            if ($request->hasFile('peraturan')) {
                $file = $request->file('peraturan');
                $filePath = $file->store('perpemerintah', 'public'); // Menyimpan di storage/app/public/undangundang
            }

            // Update data undang-undang dengan data dari form
            $perpemerintah->update([
                'judul' => $request->input('judul'),
                'peraturan' => $filePath ? $filePath : $perpemerintah->peraturan, // Gunakan path baru jika ada file
            ]);

            // Redirect ke URL '/peruud' dengan pesan sukses
            return redirect('/perpemerintah')
                                ->with('success', 'Data Peraturan Pemerintah Berhasil Di Update !');
        }

    




    // -------------------------------------------------------------------------------------------------------
    // BACKEND DATABASE PRESIDEN 

    public function presiden()
    {
        $data= perpresiden::all(); // Menggunakan paginate() untuk pagination

        return view('backend.14_peraturan.03_presiden.index', [
            'title' => 'Peraturan Presiden',
            'data' => $data, // Mengirimkan data paginasi ke view
        ]);
    }
    
    
    // FRONTEND DATABASE PRESIDEN 
    
    public function fepresiden()
    {
        $data= perpresiden::all(); // Menggunakan paginate() untuk pagination

        return view('frontend.11_peraturan.03_peraturanpresiden', [
            'title' => 'Peraturan Presiden',
            'data' => $data, // Mengirimkan data paginasi ke view
        ]);
    }


    
    // -------------------- UPDATE DATA PERATURAN PEMERINTAH JASA KONSTRUKSI ----------------------
    public function updateperpresiden($judul)
    {
        // Cari data undang-undang berdasarkan nilai 'judul'
        $perpresiden = perpresiden::where('judul', $judul)->firstOrFail();
        
        // Tampilkan form update dengan data yang ditemukan
        return view('backend.14_peraturan.03_presiden.update', [
            'perpresiden' => $perpresiden,
            'title' => 'Update Peraturan Presiden'
        ]);
    }
    
    // -------------------- UPDATE DATA CREATE UPDATE UNDANG UNDANG JASA KONSTRUKSI ----------------------
            public function createupdateperpresiden(Request $request, $judul)
        {
            // Validasi input
            $request->validate([
                'judul' => 'required|string|max:255',
                // 'peraturan' => 'required|file', // Validasi file sesuai jenis dan ukuran
            ]);

            // Cari data undang-undang berdasarkan nilai 'judul'
            $perpresiden = perpresiden::where('judul', $judul)->firstOrFail();
            
            // Simpan file dan ambil path-nya
            $filePath = null;
            if ($request->hasFile('peraturan')) {
                $file = $request->file('peraturan');
                $filePath = $file->store('perpresiden', 'public'); // Menyimpan di storage/app/public/undangundang
            }

            // Update data undang-undang dengan data dari form
            $perpresiden->update([
                'judul' => $request->input('judul'),
                'peraturan' => $filePath ? $filePath : $perpresiden->peraturan, // Gunakan path baru jika ada file
            ]);

            // Redirect ke URL '/peruud' dengan pesan sukses
            return redirect('/perpresiden')
                                ->with('success', 'Data Peraturan Presiden Berhasil Di Update !');
        }

    


    

    // -------------------------------------------------------------------------------------------------------
    // BACKEND DATABASE MENTERI  

    public function menteri()
    {
        $data= permenteri::paginate(15); // Menggunakan paginate() untuk pagination

        return view('backend.14_peraturan.04_menteri.index', [
            'title' => 'Peraturan Menteri PUPR',
            'data' => $data, // Mengirimkan data paginasi ke view
        ]);
    }
    
    // FRONTEND DATABASE MENTERI  
    public function fementeri()
    {
        $data= permenteri::paginate(15); // Menggunakan paginate() untuk pagination

        return view('frontend.11_peraturan.04_peraturanmenteri', [
            'title' => 'Peraturan Menteri PUPR Tentang Jasa Konstruksi',
            'data' => $data, // Mengirimkan data paginasi ke view
        ]);
    }
    
            
    public function menterishowByJudul($judul)
            {
                $data = permenteri::where('judul', $judul)->firstOrFail();

                return view('backend.14_peraturan.04_menteri.show', [
                    'data' => $data,
                    'title' => 'Details Data Peraturan Menteri',
                ]);
            }
    
            public function fementerishowByJudul($judul)
            {
                $data = permenteri::where('judul', $judul)->firstOrFail();

                return view('frontend.11_peraturan.04_peraturanmenterishow', [
                    'data' => $data,
                    'title' => 'Details Data Peraturan Menteri',
                ]);
            }
            // ------------------------------

            
    
    // -------------------- UPDATE DATA PERATURAN PEMERINTAH JASA KONSTRUKSI ----------------------
    public function updateshowpermenteri($judul)
    {
        // Cari data undang-undang berdasarkan nilai 'judul'
        $permenteri = permenteri::where('judul', $judul)->firstOrFail();
        
        // Tampilkan form update dengan data yang ditemukan
        return view('backend.14_peraturan.04_menteri.update', [
            'permenteri' => $permenteri,
            'title' => 'Update Peraturan Menteri'
        ]);
    }
    
    // -------------------- UPDATE DATA CREATE UPDATE UNDANG UNDANG JASA KONSTRUKSI ----------------------
            public function createupdatepermenteri(Request $request, $judul)
        {
            // Validasi input
            $request->validate([
                'judul' => 'required|string|max:255',
                // 'peraturan' => 'required|file', // Validasi file sesuai jenis dan ukuran
            ]);

            // Cari data undang-undang berdasarkan nilai 'judul'
            $permenteri = permenteri::where('judul', $judul)->firstOrFail();
            
            // Simpan file dan ambil path-nya
            $filePath = null;
            if ($request->hasFile('peraturan')) {
                $file = $request->file('peraturan');
                $filePath = $file->store('permenteri', 'public'); // Menyimpan di storage/app/public/undangundang
            }

            // Update data undang-undang dengan data dari form
            $permenteri->update([
                'judul' => $request->input('judul'),
                'peraturan' => $filePath ? $filePath : $permenteri->peraturan, // Gunakan path baru jika ada file
            ]);


            
            session()->flash('update', 'Data Peraturan Menteri Berhasil Diupdate !');
            // Redirect ke halaman yang sesuai
            return redirect('/permenteri');
                   }

    
// ------------ CREATE DATA PER MENTERI ----------------

            public function createpermenteri()
            {
                
                // Tampilkan form update dengan data yang ditemukan
                return view('backend.14_peraturan.04_menteri.create', [
                    'title' => 'Create Peraturan Menteri'
                ]);
            }

            public function createstorepermenteri(Request $request)
            {
                // Validasi input
                $request->validate([
                    'judul' => 'required|string|max:255',
                    'peraturan' => 'required|file|mimes:pdf|max:20480', // 20MB max file size
                ]);
            
                // Simpan file dan ambil path
                $filePath = $request->file('peraturan')->store('peraturan', 'public');
            
                // Buat entri baru di database
                permenteri::create([
                    'judul' => $request->input('judul'),
                    'peraturan' => $filePath,
                ]);
            
                session()->flash('create', 'Data Berhasil Di Tambahkan !');
                // Redirect ke halaman yang sesuai
                return redirect('/permenteri');
            }
            


    // ==================== DELETE PERMENTERI 

    public function deleterpermenteri(Request $request, $judul)
{
    // Cari entri berdasarkan judul
    $entry = permenteri::where('judul', $judul)->first();

    if ($entry) {
        // Hapus file terkait jika ada
        if (Storage::disk('public')->exists($entry->peraturan)) {
            Storage::disk('public')->delete($entry->peraturan);
        }

        // Hapus entri dari database
        $entry->delete();

        // Set pesan flash untuk sukses
        session()->flash('delete', 'Data Berhasil Dihapus!');
    } else {
        // Set pesan flash jika data tidak ditemukan
        session()->flash('error', 'Data Tidak Ditemukan!');
    }

    // Redirect ke halaman yang sesuai
    return redirect('/permenteri');
}


            // ========================================================================================================
 
    public function skmenteri()
            {
                $data= keputusanmenteri::paginate(15); // Menggunakan paginate() untuk pagination
        
                return view('backend.14_peraturan.05_skmenteri.index', [
                    'title' => 'Surat Keputusan Menteri',
                    'data' => $data, // Mengirimkan data paginasi ke view
                ]);
            }

              
            public function skmenterishowByJudul($judul)
            {
                $data = keputusanmenteri::where('judul', $judul)->firstOrFail();

                return view('backend.14_peraturan.05_skmenteri.show', [
                    'data' => $data,
                    'title' => 'Details Data SK Peraturan Menteri',
                ]);
            }

            
public function feskmenteri()
            {
                $data= keputusanmenteri::paginate(15); // Menggunakan paginate() untuk pagination
        
                return view('frontend.11_peraturan.05_keputusanmenteri', [
                    'title' => 'Surat Keputusan Menteri Jasa Konstruksi',
                    'data' => $data, // Mengirimkan data paginasi ke view
                ]);
            }

    
            public function feskmenterishowByJudul($judul)
            {
                $data = keputusanmenteri::where('judul', $judul)->firstOrFail();

                return view('frontend.11_peraturan.05_keputusanmenterishow', [
                    'data' => $data,
                    'title' => 'Details Data Keputusan Menteri',
                ]);
            }
            
            
public function suratedaranmenteri()
            {
                $data= suratedaran::paginate(15); // Menggunakan paginate() untuk pagination
        
                return view('frontend.11_peraturan.06_suratedaranmenteri', [
                    'title' => 'Surat Edatan Menteri Jasa Konstruksi',
                    'data' => $data, // Mengirimkan data paginasi ke view
                ]);
            }

    
            public function suratedaranmenterishowByJudul($judul)
            {
                $data = suratedaran::where('judul', $judul)->firstOrFail();

                return view('frontend.11_peraturan.06_suratedaranmenterishow', [
                    'data' => $data,
                    'title' => 'Details Data Surat Edaran Menteri',
                ]);
            }

public function fereferensi()
            {
                $data= referensi::all(); // Menggunakan paginate() untuk pagination
        
                return view('frontend.11_peraturan.07_suratreferensi', [
                    'title' => 'Surat Referensi Jasa Konstruksi',
                    'data' => $data, // Mengirimkan data paginasi ke view
                ]);
            }
            
    public function feperdaerah()
            {
                $data= perdaerah::paginate(15); // Menggunakan paginate() untuk pagination
        
                return view('frontend.11_peraturan.08_peraturandaerah', [
                    'title' => 'Peraturan Daerah Jasa Konstruksi',
                    'data' => $data, // Mengirimkan data paginasi ke view
                ]);
            }
            
    
            public function feperdaerahshowByJudul($judul)
            {
                $data = perdaerah::where('judul', $judul)->firstOrFail();
                
                return view('frontend.11_peraturan.08_peraturandaerahshow', [
                    'data' => $data,
                    'title' => 'Details Peraturan Daerah Jasa Konstruksi',
                ]);
            }

    public function fegubernur()
                        {
                            $data= pergubernur::all(); // Menggunakan paginate() untuk pagination
                    
                            return view('frontend.11_peraturan.09_peraturangubernur', [
                                'title' => 'Peraturan Gubernur Jasa Konstruksi',
                                'data' => $data, // Mengirimkan data paginasi ke view
                            ]);
                        }
          
    public function feperbupatiwalikota()
                        {
                            $data= perbupatiwalikota::paginate(15); // Menggunakan paginate() untuk pagination
                    
                            return view('frontend.11_peraturan.10_peraturanwalikota', [
                                'title' => 'Peraturan Bupati/Walikota Jasa Konstruksi',
                                'data' => $data, // Mengirimkan data paginasi ke view
                            ]);
                        }
                        
                
                        public function feperbupatiwalikotashowByJudul($judul)
                        {
                            $data = perbupatiwalikota::where('judul', $judul)->firstOrFail();
                            
                            return view('frontend.11_peraturan.10_peraturanwalikotashow', [
                                'data' => $data,
                                'title' => 'Details Peraturan Bupati/Walikota Jasa Konstruksi',
                            ]);
                        }
                    
    public function fesuratkeputusan()
                        {
                            $data= suratkeputusan::paginate(15); // Menggunakan paginate() untuk pagination
                    
                            return view('frontend.11_peraturan.11_suratkeputusan', [
                                'title' => 'Surat Keputusan Jasa Konstruksi',
                                'data' => $data, // Mengirimkan data paginasi ke view
                            ]);
                        }
                        
                
                        public function fesuratkeputusanshowByJudul($judul)
                        {
                            $data = suratkeputusan::where('judul', $judul)->firstOrFail();
                            
                            return view('frontend.11_peraturan.11_suratkeputusanshow', [
                                'data' => $data,
                                'title' => 'Details Surat Keputusan Jasa Konstruksi',
                            ]);
                        }
                    
            
}

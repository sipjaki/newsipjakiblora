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

use Illuminate\Support\Facades\Auth; 



class PeraturanController extends Controller
{
    // BACKEND DATABASE UNDANG UNDANG 
    public function undangundang()
    {
        $data= peraturan::all(); // Menggunakan paginate() untuk pagination
        $user = Auth::user();

        return view('backend.14_peraturan.01_undangundang.index', [
            'title' => 'Undang - Undang Jasa Konstruksi',
            'data' => $data, // Mengirimkan data paginasi ke view
            'user' => $user, // Mengirimkan data paginasi ke view
        ]);
    }

    // FRONTEND  DATABASE UNDANG UNDANG 

    public function feundangundang()
    {
        $data= peraturan::all(); // Menggunakan paginate() untuk pagination
        $user = Auth::user();

        return view('frontend.11_peraturan.01_undangundang', [
            'title' => 'Undang - Undang Jasa Konstruksi',
            'data' => $data, // Mengirimkan data paginasi ke view
            'user' => $user, // Mengirimkan data paginasi ke view
        ]);
    }
    
    
    // -------------------- UPDATE DATA UNDANG UNDANG JASA KONSTRUKSI ----------------------
    public function updateundangundang($judul)
    {
        // Cari data undang-undang berdasarkan nilai 'judul'
        $undangUndang = peraturan::where('judul', $judul)->firstOrFail();
        $user = Auth::user();

        // Tampilkan form update dengan data yang ditemukan
        return view('backend.14_peraturan.01_undangundang.update', [
            'undangUndang' => $undangUndang,
            'user' => $user,
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
            $filePath = $file->store('peraturan/01_uud', 'public'); // Menyimpan di storage/app/public/undangundang
        }

        // Update data undang-undang dengan data dari form
        $undangUndang->update([
            'judul' => $request->input('judul'),
            'peraturan' => $filePath ? $filePath : $undangUndang->peraturan, // Gunakan path baru jika ada file
        ]);
        
        session()->flash('update', 'Data Undang Undang Berhasil Diupdate !');
        // Redirect ke halaman yang sesuai
        return redirect('/peruud');
    
    }



    // -------------------------------------------------------------------------------------------------------
    // BACKEND DATABASE PEMERINTAH 


    public function pemerintah()
    {
        $data= perpemerintah::all(); // Menggunakan paginate() untuk pagination
        $user = Auth::user();

        return view('backend.14_peraturan.02_pemerintah.index', [
            'title' => 'Peraturan Pemerintah',
            'data' => $data, // Mengirimkan data paginasi ke view
            'user' => $user, // Mengirimkan data paginasi ke view
        ]);
    }
    
    // FRONTEND  DATABASE PEMERINTAH 
    
        public function fepemerintah()
        {
            $data= perpemerintah::all(); // Menggunakan paginate() untuk pagination
            $user = Auth::user();

            return view('frontend.11_peraturan.02_peraturanpemerintah', [
                'title' => 'Peraturan Pemerintah',
                'data' => $data, // Mengirimkan data paginasi ke view
                'user' => $user, // Mengirimkan data paginasi ke view
            ]);
        }


    
    // -------------------- UPDATE DATA PERATURAN PEMERINTAH JASA KONSTRUKSI ----------------------
    public function updateperpemerintah($judul)
    {
        // Cari data undang-undang berdasarkan nilai 'judul'
        $perpemerintah = perpemerintah::where('judul', $judul)->firstOrFail();
        $user = Auth::user();

        // Tampilkan form update dengan data yang ditemukan
        return view('backend.14_peraturan.02_pemerintah.update', [
            'perpemerintah' => $perpemerintah,
            'user' => $user,
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
            $filePath = $file->store('peraturan/02_pemerintah', 'public'); // Menyimpan di storage/app/public/undangundang
        }

        // Update data undang-undang dengan data dari form
        $perpemerintah->update([
            'judul' => $request->input('judul'),
            'peraturan' => $filePath ? $filePath : $perpemerintah->peraturan, // Gunakan path baru jika ada file
        ]);
        
        session()->flash('update', 'Data Peraturan Pemerintah Berhasil Diupdate !');
        // Redirect ke halaman yang sesuai
        return redirect('/perpemerintah');
    
                            }

    
    // -------------------------------------------------------------------------------------------------------
    // BACKEND DATABASE PRESIDEN 

    public function presiden()
    {
        $data= perpresiden::all(); // Menggunakan paginate() untuk pagination
        $user = Auth::user();

        return view('backend.14_peraturan.03_presiden.index', [
            'title' => 'Peraturan Presiden',
            'data' => $data, // Mengirimkan data paginasi ke view
            'user' => $user, // Mengirimkan data paginasi ke view
        ]);
    }
    
    
    // FRONTEND DATABASE PRESIDEN 
    
    public function fepresiden()
    {
        $data= perpresiden::all(); // Menggunakan paginate() untuk pagination
        $user = Auth::user();

        return view('frontend.11_peraturan.03_peraturanpresiden', [
            'title' => 'Peraturan Presiden',
            'data' => $data, // Mengirimkan data paginasi ke view
            'user' => $user, // Mengirimkan data paginasi ke view
        ]);
    }


    
    // -------------------- UPDATE DATA PERATURAN PEMERINTAH JASA KONSTRUKSI ----------------------
    public function updateperpresiden($judul)
    {
        // Cari data undang-undang berdasarkan nilai 'judul'
        $perpresiden = perpresiden::where('judul', $judul)->firstOrFail();
        $user = Auth::user();

        // Tampilkan form update dengan data yang ditemukan
        return view('backend.14_peraturan.03_presiden.update', [
            'perpresiden' => $perpresiden,
            'user' => $user,
            'title' => 'Update Peraturan Presiden'
        ]);
    }
    
    // -------------------- UPDATE DATA CREATE UPDATE UNDANG UNDANG JASA KONSTRUKSI ----------------------
            public function createupdateperpresiden(Request $request, $judul)
        {
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
                $filePath = $file->store('peraturan/03_presiden', 'public'); // Menyimpan di storage/app/public/undangundang
            }
    
            // Update data undang-undang dengan data dari form
            $perpresiden->update([
                'judul' => $request->input('judul'),
                'peraturan' => $filePath ? $filePath : $perpresiden->peraturan, // Gunakan path baru jika ada file
            ]);
            
            session()->flash('update', 'Data Peraturan Presiden Berhasil Diupdate !');
            // Redirect ke halaman yang sesuai
            return redirect('/perpresiden');
        
                            }

    


    

    // -------------------------------------------------------------------------------------------------------
    // BACKEND DATABASE MENTERI  

    public function menteri()
    {
        $data= permenteri::paginate(15); // Menggunakan paginate() untuk pagination
        $user = Auth::user();

        return view('backend.14_peraturan.04_menteri.index', [
            'title' => 'Peraturan Menteri PUPR',
            'data' => $data, // Mengirimkan data paginasi ke view
            'user' => $user, // Mengirimkan data paginasi ke view
        ]);
    }
    
    // FRONTEND DATABASE MENTERI  
    public function fementeri()
    {
        $data= permenteri::paginate(15); // Menggunakan paginate() untuk pagination
        $user = Auth::user();

        return view('frontend.11_peraturan.04_peraturanmenteri', [
            'title' => 'Peraturan Menteri PUPR Tentang Jasa Konstruksi',
            'data' => $data, // Mengirimkan data paginasi ke view
            'user' => $user, // Mengirimkan data paginasi ke view
        ]);
    }
    
            
    public function menterishowByJudul($judul)
            {
                $data = permenteri::where('judul', $judul)->firstOrFail();
                $user = Auth::user();

                return view('backend.14_peraturan.04_menteri.show', [
                    'data' => $data,
                    'user' => $user,
                    'title' => 'Details Data Peraturan Menteri',
                ]);
            }
    
            public function fementerishowByJudul($judul)
            {
                $data = permenteri::where('judul', $judul)->firstOrFail();
                $user = Auth::user();

                return view('frontend.11_peraturan.04_peraturanmenterishow', [
                    'data' => $data,
                    'user' => $user,
                    'title' => 'Details Data Peraturan Menteri',
                ]);
            }
            // ------------------------------

            
    
    // -------------------- UPDATE DATA PERATURAN PEMERINTAH JASA KONSTRUKSI ----------------------
    public function updateshowpermenteri($judul)
    {
        // Cari data undang-undang berdasarkan nilai 'judul'
        $permenteri = permenteri::where('judul', $judul)->firstOrFail();
        $user = Auth::user();

        // Tampilkan form update dengan data yang ditemukan
        return view('backend.14_peraturan.04_menteri.update', [
            'permenteri' => $permenteri,
            'user' => $user,
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
                $filePath = $file->store('peraturan/04_menteri', 'public'); // Menyimpan di storage/app/public/undangundang
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
                $user = Auth::user();

                // Tampilkan form update dengan data yang ditemukan
                return view('backend.14_peraturan.04_menteri.create', [
                    'title' => 'Create Peraturan Menteri',
                    'user' => $user,
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
                $filePath = $request->file('peraturan')->store('peraturan/04_menteri', 'public');
            
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
                $user = Auth::user();

                return view('backend.14_peraturan.05_skmenteri.index', [
                    'title' => 'Surat Keputusan Menteri',
                    'data' => $data, // Mengirimkan data paginasi ke view
                    'user' => $user, // Mengirimkan data paginasi ke view
                ]);
            }

              
            public function skmenterishowByJudul($judul)
            {
                $data = keputusanmenteri::where('judul', $judul)->firstOrFail();
                $user = Auth::user();

                return view('backend.14_peraturan.05_skmenteri.show', [
                    'data' => $data,
                    'user' => $user,
                    'title' => 'Details Data SK Peraturan Menteri',
                ]);
            }

            
public function feskmenteri()
            {
                $data= keputusanmenteri::paginate(15); // Menggunakan paginate() untuk pagination
                $user = Auth::user();

                return view('frontend.11_peraturan.05_keputusanmenteri', [
                    'title' => 'Surat Keputusan Menteri Jasa Konstruksi',
                    'data' => $data, // Mengirimkan data paginasi ke view
                    'user' => $user, // Mengirimkan data paginasi ke view
                ]);
            }

    
            public function feskmenterishowByJudul($judul)
            {
                $data = keputusanmenteri::where('judul', $judul)->firstOrFail();
                $user = Auth::user();

                return view('frontend.11_peraturan.05_keputusanmenterishow', [
                    'data' => $data,
                    'user' => $user,
                    'title' => 'Details Data Keputusan Menteri',
                ]);
            }

                
    // -------------------- UPDATE DATA PERATURAN PEMERINTAH JASA KONSTRUKSI ----------------------
    public function updateshowskmenteri($judul)
    {
        // Cari data undang-undang berdasarkan nilai 'judul'
        $skmenteri = keputusanmenteri::where('judul', $judul)->firstOrFail();
        $user = Auth::user();

        // Tampilkan form update dengan data yang ditemukan
        return view('backend.14_peraturan.05_skmenteri.update', [
            'skmenteri' => $skmenteri,
            'user' => $user,
            'title' => 'Update Surat Keputusan Menteri'
        ]);
    }
    
    // -------------------- UPDATE DATA CREATE UPDATE UNDANG UNDANG JASA KONSTRUKSI ----------------------
            public function createupdateskmenteri(Request $request, $judul)
        {
            // Validasi input
            $request->validate([
                'judul' => 'required|string|max:255',
                // 'peraturan' => 'required|file', // Validasi file sesuai jenis dan ukuran
            ]);

            // Cari data undang-undang berdasarkan nilai 'judul'
            $skmenteri = keputusanmenteri::where('judul', $judul)->firstOrFail();
            
            // Simpan file dan ambil path-nya
            $filePath = null;
            if ($request->hasFile('peraturan')) {
                $file = $request->file('peraturan');
                $filePath = $file->store('peraturan/05_keputusanmenteri', 'public'); // Menyimpan di storage/app/public/undangundang
            }

            // Update data undang-undang dengan data dari form
            $skmenteri->update([
                'judul' => $request->input('judul'),
                'peraturan' => $filePath ? $filePath : $skmenteri->peraturan, // Gunakan path baru jika ada file
            ]);


            
            session()->flash('update', 'Data Surat Keputusan Menteri Berhasil Diupdate !');
            // Redirect ke halaman yang sesuai
            return redirect('/skmenteri');
                   }
    
                   
// ------------ CREATE DATA SURAT KEPUTUSAN MENTERI ----------------

            public function createskmenteri()
            {
                $user = Auth::user();
                
                // Tampilkan form update dengan data yang ditemukan
                return view('backend.14_peraturan.05_skmenteri.create', [
                    'title' => 'Create Surat Keputusan Menteri',
                    'user' => $user
                ]);
            }

            public function createstoreskmenteri(Request $request)
            {
                // Validasi input
                $request->validate([
                    'judul' => 'required|string|max:255',
                    'peraturan' => 'required|file|mimes:pdf|max:20480', // 20MB max file size
                ]);
            
                // Simpan file dan ambil path
                $filePath = $request->file('peraturan')->store('peraturan/05_keputusanmenteri', 'public');
            
                // Buat entri baru di database
                keputusanmenteri::create([
                    'judul' => $request->input('judul'),
                    'peraturan' => $filePath,
                ]);
            
                session()->flash('create', 'Data Berhasil Di Tambahkan !');
                // Redirect ke halaman yang sesuai
                return redirect('/skmenteri');
            }
            

    // ==================== DELETE SURAT KEPUTUSAN MENTERI 

    public function deleteskmenteri(Request $request, $judul)
{
    // Cari entri berdasarkan judul
    $entry = keputusanmenteri::where('judul', $judul)->first();

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
    return redirect('/skmenteri');
}



            // =====================================================================================
            
            
public function suratedaranmenteri()
            {
                $data= suratedaran::paginate(15); // Menggunakan paginate() untuk pagination
                $user = Auth::user();

                return view('frontend.11_peraturan.06_suratedaranmenteri', [
                    'title' => 'Surat Edatan Menteri Jasa Konstruksi',
                    'data' => $data, // Mengirimkan data paginasi ke view
                    'user' => $user, // Mengirimkan data paginasi ke view
                ]);
            }

    
            public function suratedaranmenterishowByJudul($judul)
            {
                $data = suratedaran::where('judul', $judul)->firstOrFail();
                $user = Auth::user();

                return view('frontend.11_peraturan.06_suratedaranmenterishow', [
                    'data' => $data,
                    'user' => $user,
                    'title' => 'Details Data Surat Edaran Menteri',
                ]);
            }


            // BACKEND
            public function suratedaran()
            {
                $data= suratedaran::paginate(15); // Menggunakan paginate() untuk pagination
                $user = Auth::user();

                return view('backend.14_peraturan.06_suratedaran.index', [
                    'title' => 'Surat Edaran Menteri',
                    'data' => $data, // Mengirimkan data paginasi ke view
                    'user' => $user, // Mengirimkan data paginasi ke view
                ]);
            }

              
            public function suratedaranshowByJudul($judul)
            {
                $data = suratedaran::where('judul', $judul)->firstOrFail();
                $user = Auth::user();

                return view('backend.14_peraturan.06_suratedaran.show', [
                    'data' => $data,
                    'user' => $user,
                    'title' => 'Details Data Surat Edaran Menteri',
                ]);
            }


            // UPDATE SURAT EDARAN MENTERI PUPR =====================

                // -------------------- UPDATE DATA PERATURAN PEMERINTAH JASA KONSTRUKSI ----------------------
    public function updateshowsuratedaran($judul)
    {
        // Cari data undang-undang berdasarkan nilai 'judul'
        $suratedaran = suratedaran::where('judul', $judul)->firstOrFail();
        $user = Auth::user();

        // Tampilkan form update dengan data yang ditemukan
        return view('backend.14_peraturan.06_suratedaran.update', [
            'suratedaran' => $suratedaran,
            'user' => $user,
            'title' => 'Update Surat Edaran Menteri'
        ]);
    }
    
    // -------------------- UPDATE DATA CREATE UPDATE UNDANG UNDANG JASA KONSTRUKSI ----------------------
            public function createupdatesuratedaran(Request $request, $judul)
        {
            // Validasi input
            $request->validate([
                'judul' => 'required|string|max:255',
                // 'peraturan' => 'required|file', // Validasi file sesuai jenis dan ukuran
            ]);

            // Cari data undang-undang berdasarkan nilai 'judul'
            $suratedaran = suratedaran::where('judul', $judul)->firstOrFail();
            
            // Simpan file dan ambil path-nya
            $filePath = null;
            if ($request->hasFile('peraturan')) {
                $file = $request->file('peraturan');
                $filePath = $file->store('peraturan/06_suratedaran', 'public'); // Menyimpan di storage/app/public/undangundang
            }

            // Update data undang-undang dengan data dari form
            $suratedaran->update([
                'judul' => $request->input('judul'),
                'peraturan' => $filePath ? $filePath : $suratedaran->peraturan, // Gunakan path baru jika ada file
            ]);

            
            session()->flash('update', 'Data Surat Keputusan Menteri Berhasil Diupdate !');
            // Redirect ke halaman yang sesuai
            return redirect('/suratedaran');
                   }


                          
// ------------ CREATE DATA SURAT EDARAN MENTERI ----------------

            public function createsuratedaran()
            {
                $user = Auth::user();

                // Tampilkan form update dengan data yang ditemukan
                return view('backend.14_peraturan.06_suratedaran.create', [
                    'title' => 'Create Surat Edaran Menteri',
                    'user' => $user,
                ]);
            }

            public function createstoresuratedaran(Request $request)
            {
                // Validasi input
                $request->validate([
                    'judul' => 'required|string|max:255',
                    'peraturan' => 'required|file|mimes:pdf|max:20480', // 20MB max file size
                ]);
            
                // Simpan file dan ambil path
                $filePath = $request->file('peraturan')->store('peraturan/06_suratedaran', 'public');
            
                // Buat entri baru di database
                suratedaran::create([
                    'judul' => $request->input('judul'),
                    'peraturan' => $filePath,
                ]);
            
                session()->flash('create', 'Data Berhasil Di Tambahkan !');
                // Redirect ke halaman yang sesuai
                return redirect('/suratedaran');
            }
            

    // ==================== DELETE SURAT KEPUTUSAN MENTERI 

    public function deletesuratedaran(Request $request, $judul)
{
    // Cari entri berdasarkan judul
    $entry = suratedaran::where('judul', $judul)->first();

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
    return redirect('/suratedaran');
}


// --------------------------------- DATA PERATURAN REFERENSI

public function fereferensi()
            {
                $data= referensi::all(); // Menggunakan paginate() untuk pagination
                $user = Auth::user();

                return view('frontend.11_peraturan.07_suratreferensi', [
                    'title' => 'Surat Referensi Jasa Konstruksi',
                    'data' => $data, // Mengirimkan data paginasi ke view
                    'user' => $user, // Mengirimkan data paginasi ke view
                ]);
            }
            

            // BACKEND SURAT REFERENSI --------------------------------------------------
            public function referensi()
                {
                    $data= referensi::all(); // Menggunakan paginate() untuk pagination
                    $user = Auth::user();

                    return view('backend.14_peraturan.07_referensi.index', [
                        'title' => 'Surat Referensi Jasa Konstruksi',
                        'data' => $data, // Mengirimkan data paginasi ke view
                        'user' => $user, // Mengirimkan data paginasi ke view
                    ]);
                }


                    // -------------------- UPDATE DATA UNDANG UNDANG JASA KONSTRUKSI ----------------------
    public function updatereferensi($judul)
    {
        // Cari data undang-undang berdasarkan nilai 'judul'
        $referensi = referensi::where('judul', $judul)->firstOrFail();
        $user = Auth::user();

        // Tampilkan form update dengan data yang ditemukan
        return view('backend.14_peraturan.07_referensi.update', [
            'referensi' => $referensi,
            'user' => $user,
            'title' => 'Update Surat Referensi Jasa Konstruksi'
        ]);
    }
    
    // -------------------- UPDATE DATA CREATE UPDATE UNDANG UNDANG JASA KONSTRUKSI ----------------------
            public function createupdatereferensi(Request $request, $judul)
        {
            // Validasi input
            $request->validate([
                'judul' => 'required|string|max:255',
                // 'peraturan' => 'required|file', // Validasi file sesuai jenis dan ukuran
            ]);

            // Cari data undang-undang berdasarkan nilai 'judul'
            $referensi = referensi::where('judul', $judul)->firstOrFail();
            
            // Simpan file dan ambil path-nya
            $filePath = null;
            if ($request->hasFile('peraturan')) {
                $file = $request->file('peraturan');
                $filePath = $file->store('peraturan/07_suratreferensi', 'public'); // Menyimpan di storage/app/public/undangundang
            }

            // Update data undang-undang dengan data dari form
            $referensi->update([
                'judul' => $request->input('judul'),
                'peraturan' => $filePath ? $filePath : $referensi->peraturan, // Gunakan path baru jika ada file
            ]);

            // Redirect ke URL '/peruud' dengan pesan sukses
            return redirect('/referensi')
                                ->with('success', 'Data Referensi Berhasil Di Update !');
        }
    


    // -------------------------------------------------------------------------------------------------------

    public function feperdaerah()
            {
                $data= perdaerah::paginate(15); // Menggunakan paginate() untuk pagination
                $user = Auth::user();

                return view('frontend.11_peraturan.08_peraturandaerah', [
                    'title' => 'Peraturan Daerah Jasa Konstruksi',
                    'data' => $data, // Mengirimkan data paginasi ke view
                    'user' => $user, // Mengirimkan data paginasi ke view
                ]);
            
            }
                        
    
            public function feperdaerahshowByJudul($judul)
            {
                $data = perdaerah::where('judul', $judul)->firstOrFail();
                $user = Auth::user();

                return view('frontend.11_peraturan.08_peraturandaerahshow', [
                    'data' => $data,
                    'user' => $user,
                    'title' => 'Details Peraturan Daerah Jasa Konstruksi',
                ]);
            }

            // =====================================================================================
            
public function suratperdaerah()
{
    $data= perdaerah::paginate(15); // Menggunakan paginate() untuk pagination
    $user = Auth::user();

    return view('backend.14_peraturan.08_perdaerah.index', [
        'title' => 'Surat Peraturan Daerah Tentang Jasa Konstruksi',
        'data' => $data, // Mengirimkan data paginasi ke view
        'user' => $user, // Mengirimkan data paginasi ke view
    ]);
}


public function suratperdaerahshowByJudul($judul)
{
    $data = perdaerah::where('judul', $judul)->firstOrFail();
    $user = Auth::user();

    return view('backend.14_peraturan.08_perdaerah.show', [
        'data' => $data,
        'user' => $user,
        'title' => 'Details Data Surat Peraturan Daerah',
    ]);
}


                // -------------------- UPDATE DATA PERATURAN DAERAH JASA KONSTRUKSI ----------------------
                public function updateshowperdaerah($judul)
                {
                    // Cari data undang-undang berdasarkan nilai 'judul'
                    $perdaerah = perdaerah::where('judul', $judul)->firstOrFail();
                    $user = Auth::user();
      
                    // Tampilkan form update dengan data yang ditemukan
                    return view('backend.14_peraturan.08_perdaerah.update', [
                        'perdaerah' => $perdaerah,
                        'user' => $user,
                        'title' => 'Update Peraturan Daerah'
                    ]);
                }
                
                // -------------------- UPDATE DATA CREATE UPDATE UNDANG UNDANG JASA KONSTRUKSI ----------------------
                        public function createupdateperdaerah(Request $request, $judul)
                    {
                        // Validasi input
                        $request->validate([
                            'judul' => 'required|string|max:255',
                            // 'peraturan' => 'required|file', // Validasi file sesuai jenis dan ukuran
                        ]);
            
                        // Cari data undang-undang berdasarkan nilai 'judul'
                        $perdaerah = perdaerah::where('judul', $judul)->firstOrFail();
                        
                        // Simpan file dan ambil path-nya
                        $filePath = null;
                        if ($request->hasFile('peraturan')) {
                            $file = $request->file('peraturan');
                            $filePath = $file->store('peraturan/08_daerah', 'public'); // Menyimpan di storage/app/public/undangundang
                        }
            
                        // Update data undang-undang dengan data dari form
                        $perdaerah->update([
                            'judul' => $request->input('judul'),
                            'peraturan' => $filePath ? $filePath : $perdaerah->peraturan, // Gunakan path baru jika ada file
                        ]);
            
                        
                        session()->flash('update', 'Data Peraturan Daerah Berhasil Diupdate !');
                        // Redirect ke halaman yang sesuai
                        return redirect('/perdaerah');
                               }
            
             
// ------------ CREATE DATA SURAT EDARAN MENTERI ----------------

public function createperdaerah()
{
    $user = Auth::user();

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.14_peraturan.08_perdaerah.create', [
        'title' => 'Create Peraturan Daerah',
        'user' => $user,
    ]);
}

public function createstoreperdaerah(Request $request)
{
    // Validasi input
    $request->validate([
        'judul' => 'required|string|max:255',
        'peraturan' => 'required|file|mimes:pdf|max:20480', // 20MB max file size
    ]);

    // Simpan file dan ambil path
    $filePath = $request->file('peraturan')->store('peraturan/08_daerah', 'public');

    // Buat entri baru di database
    perdaerah::create([
        'judul' => $request->input('judul'),
        'peraturan' => $filePath,
    ]);

    session()->flash('create', 'Data Berhasil Di Tambahkan !');
    // Redirect ke halaman yang sesuai
    return redirect('/perdaerah');
}


    // ==================== DELETE SURAT KEPUTUSAN MENTERI 

    public function deleteperdaerah(Request $request, $judul)
{
    // Cari entri berdasarkan judul
    $entry = perdaerah::where('judul', $judul)->first();

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
    return redirect('/perdaerah');
}


// --------------------------------------- DATABASE SURAT PERATURAN GUBERNUR

                public function fegubernur()
                        {
                            $data= pergubernur::all(); // Menggunakan paginate() untuk pagination
                            $user = Auth::user();

                            return view('frontend.11_peraturan.09_peraturangubernur', [
                                'title' => 'Peraturan Gubernur Jasa Konstruksi',
                                'data' => $data, // Mengirimkan data paginasi ke view
                                'user' => $user, // Mengirimkan data paginasi ke view
                            ]);
                        }



// =====================================================================================
            
public function suratpergubernur()
{
    $data= pergubernur::paginate(15); // Menggunakan paginate() untuk pagination
    $user = Auth::user();

    return view('backend.14_peraturan.09_pergubernur.index', [
        'title' => 'Peraturan Gubernur Tentang Jasa Konstruksi',
        'data' => $data, // Mengirimkan data paginasi ke view
        'user' => $user, // Mengirimkan data paginasi ke view
    ]);
}


public function pergubernurshowByJudul($judul)
{
    $data = pergubernur::where('judul', $judul)->firstOrFail();
    $user = Auth::user();

    return view('backend.14_peraturan.09_pergubernur.show', [
        'data' => $data,
        'user' => $user,
        'title' => 'Details Data Peraturan Gubernur',
    ]);
}

                // -------------------- UPDATE DATA PERATURAN GUBERNUR JASA KONSTRUKSI ----------------------
                public function updateshowpergubernur($judul)
                {
                    $user = Auth::user();
                    // Cari data undang-undang berdasarkan nilai 'judul'
                    $pergubernur = pergubernur::where('judul', $judul)->firstOrFail();
                    
                    // Tampilkan form update dengan data yang ditemukan
                    return view('backend.14_peraturan.09_pergubernur.update', [
                        'pergubernur' => $pergubernur,
                        'user' => $user,
                        'title' => 'Update Peraturan Gubernur'
                    ]);
                }
                
                // -------------------- UPDATE DATA CREATE UPDATE UNDANG UNDANG JASA KONSTRUKSI ----------------------
                        public function createupdatepergubernur(Request $request, $judul)
                    {
                        // Validasi input
                        $request->validate([
                            'judul' => 'required|string|max:255',
                            // 'peraturan' => 'required|file', // Validasi file sesuai jenis dan ukuran
                        ]);
            
                        // Cari data undang-undang berdasarkan nilai 'judul'
                        $pergubernur = pergubernur::where('judul', $judul)->firstOrFail();
                        
                        // Simpan file dan ambil path-nya
                        $filePath = null;
                        if ($request->hasFile('peraturan')) {
                            $file = $request->file('peraturan');
                            $filePath = $file->store('peraturan/09_gubernur', 'public'); // Menyimpan di storage/app/public/undangundang
                        }
            
                        // Update data undang-undang dengan data dari form
                        $pergubernur->update([
                            'judul' => $request->input('judul'),
                            'peraturan' => $filePath ? $filePath : $pergubernur->peraturan, // Gunakan path baru jika ada file
                        ]);
            
                        
                        session()->flash('update', 'Data Peraturan Gubernur Berhasil Diupdate !');
                        // Redirect ke halaman yang sesuai
                        return redirect('/pergubernur');
                               }

                               
                               
// ------------ CREATE DATA SURAT PERATURAN GUBERNUR ----------------

public function createpergubernur()
{
    $user = Auth::user();

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.14_peraturan.09_pergubernur.create', [
        'title' => 'Create Peraturan Gubernur',
        'user' => $user
    ]);
}

public function createstorepergubernur(Request $request)
{
    // Validasi input
    $request->validate([
        'judul' => 'required|string|max:255',
        'peraturan' => 'required|file|mimes:pdf|max:20480', // 20MB max file size
    ]);

    // Simpan file dan ambil path
    $filePath = $request->file('peraturan')->store('peraturan/09_gubernur', 'public');

    // Buat entri baru di database
    pergubernur::create([
        'judul' => $request->input('judul'),
        'peraturan' => $filePath,
    ]);

    session()->flash('create', 'Data Berhasil Di Tambahkan !');
    // Redirect ke halaman yang sesuai
    return redirect('/pergubernur');
}


    // ==================== DELETE SURAT KEPUTUSAN MENTERI 

    public function deletepergubernur(Request $request, $judul)
{
    // Cari entri berdasarkan judul
    $entry = pergubernur::where('judul', $judul)->first();

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
    return redirect('/pergubernur');
}



// ------------------- DATABASE SURAT PERATURAN BUPATI WALIKOTA -------------
          
    public function feperbupatiwalikota()
                        {
                            $data= perbupatiwalikota::paginate(15); // Menggunakan paginate() untuk pagination
                            $user = Auth::user();

                            return view('frontend.11_peraturan.10_peraturanwalikota', [
                                'title' => 'Peraturan Bupati/Walikota Jasa Konstruksi',
                                'data' => $data, // Mengirimkan data paginasi ke view
                                'user' => $user, // Mengirimkan data paginasi ke view
                            ]);
                        }
                        
                
                        public function feperbupatiwalikotashowByJudul($judul)
                        {
                            $data = perbupatiwalikota::where('judul', $judul)->firstOrFail();
                            $user = Auth::user();

                            return view('frontend.11_peraturan.10_peraturanwalikotashow', [
                                'data' => $data,
                                'user' => $user,
                                'title' => 'Details Peraturan Bupati/Walikota Jasa Konstruksi',
                            ]);
                        }


                        // =====================================================================================
            
public function suratperwalikotabupati()
{
    $data= perbupatiwalikota::paginate(15); // Menggunakan paginate() untuk pagination
    $user = Auth::user();

    return view('backend.14_peraturan.10_perwalikotabupati.index', [
        'title' => 'Peraturan Walikota/Bupati Tentang Jasa Konstruksi',
        'data' => $data, // Mengirimkan data paginasi ke view
        'user' => $user, // Mengirimkan data paginasi ke view
    ]);
}


public function perwalikotabupatishowByJudul($judul)
{
    $data = perbupatiwalikota::where('judul', $judul)->firstOrFail();
    $user = Auth::user();

    return view('backend.14_peraturan.10_perwalikotabupati.show', [
        'data' => $data,
        'user' => $user,
        'title' => 'Details Data Peraturan Walikota/Bupati',
    ]);
}

                // -------------------- UPDATE DATA PERATURAN GUBERNUR JASA KONSTRUKSI ----------------------
                public function updateshowperwalikotabupati($judul)
                {
                    // Cari data undang-undang berdasarkan nilai 'judul'
                    $perwalikotabupati = perbupatiwalikota::where('judul', $judul)->firstOrFail();
                    $user = Auth::user();
       
                    // Tampilkan form update dengan data yang ditemukan
                    return view('backend.14_peraturan.10_perwalikotabupati.update', [
                        'perwalikotabupati' => $perwalikotabupati,
                        'title' => 'Update Peraturan Walikota/Bupati',
                        'user' => $user,
                    ]);
                }
                
                // -------------------- UPDATE DATA CREATE UPDATE UNDANG UNDANG JASA KONSTRUKSI ----------------------
                        public function createupdateperwalikotabupati(Request $request, $judul)
                    {
                        // Validasi input
                        $request->validate([
                            'judul' => 'required|string|max:255',
                            // 'peraturan' => 'required|file', // Validasi file sesuai jenis dan ukuran
                        ]);
            
                        // Cari data undang-undang berdasarkan nilai 'judul'
                        $perwalikotabupati = perbupatiwalikota::where('judul', $judul)->firstOrFail();
                        
                        // Simpan file dan ambil path-nya
                        $filePath = null;
                        if ($request->hasFile('peraturan')) {
                            $file = $request->file('peraturan');
                            $filePath = $file->store('peraturan/10_bupatiwalikota', 'public'); // Menyimpan di storage/app/public/undangundang
                        }
            
                        // Update data undang-undang dengan data dari form
                        $perwalikotabupati->update([
                            'judul' => $request->input('judul'),
                            'peraturan' => $filePath ? $filePath : $perwalikotabupati->peraturan, // Gunakan path baru jika ada file
                        ]);
            
                        
                        session()->flash('update', 'Data Peraturan Walikota/Bupati Berhasil Diupdate !');
                        // Redirect ke halaman yang sesuai
                        return redirect('/perwalikotabupati');
                               }

                                  
// ------------ CREATE DATA SURAT PERATURAN WALIKOTA GUBERNUR ----------------

public function createperwalikotabupati()
{
    $user = Auth::user();

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.14_peraturan.10_perwalikotabupati.create', [
        'title' => 'Create Peraturan Walikota/Bupati',
        'user' => $user,
    ]);
}

public function createstoreperwalikotabupati(Request $request)
{
    // Validasi input
    $request->validate([
        'judul' => 'required|string|max:255',
        'peraturan' => 'required|file|mimes:pdf|max:20480', // 20MB max file size
    ]);

    // Simpan file dan ambil path
    $filePath = $request->file('peraturan')->store('peraturan/10_bupatiwalikota', 'public');

    // Buat entri baru di database
    perbupatiwalikota::create([
        'judul' => $request->input('judul'),
        'peraturan' => $filePath,
    ]);

    session()->flash('create', 'Data Berhasil Di Tambahkan !');
    // Redirect ke halaman yang sesuai
    return redirect('/perwalikotabupati');
}


    // ==================== DELETE SURAT KEPUTUSAN MENTERI 

    public function deleteperwalikotabupati(Request $request, $judul)
{
    // Cari entri berdasarkan judul
    $entry = perbupatiwalikota::where('judul', $judul)->first();

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
    return redirect('/perwalikotabupati');
}


// ==============================================================================================================================
                               
                               

                    
    public function fesuratkeputusan()
                        {
                            $data= suratkeputusan::paginate(15); // Menggunakan paginate() untuk pagination
                            $user = Auth::user();

                            return view('frontend.11_peraturan.11_suratkeputusan', [
                                'title' => 'Surat Keputusan Jasa Konstruksi',
                                'data' => $data, // Mengirimkan data paginasi ke view
                                'user' => $user, // Mengirimkan data paginasi ke view
                            ]);
                        }
                        
                
                        public function fesuratkeputusanshowByJudul($judul)
                        {
                            $data = suratkeputusan::where('judul', $judul)->firstOrFail();
                            $user = Auth::user();

                            return view('frontend.11_peraturan.11_suratkeputusanshow', [
                                'data' => $data,
                                'user' => $user,
                                'title' => 'Details Surat Keputusan Jasa Konstruksi',
                            ]);
                        }
                        // =====================================================================================

                        // =====================================================================================
            
public function keputusan()
{
    $data= suratkeputusan::paginate(15); // Menggunakan paginate() untuk pagination
    $user = Auth::user();

    return view('backend.14_peraturan.11_keputusan.index', [
        'title' => 'Surat Keputusan Tentang Jasa Konstruksi',
        'data' => $data, // Mengirimkan data paginasi ke view
        'user' => $user, // Mengirimkan data paginasi ke view
    ]);
}


public function keputusanshowbyjudul($judul)
{
    $data = suratkeputusan::where('judul', $judul)->firstOrFail();
    $user = Auth::user();

    return view('backend.14_peraturan.11_keputusan.show', [
        'data' => $data,
        'user' => $user,
        'title' => 'Details Data Surat Keputusan',
    ]);
}


                        // =====================================================================================
            
                // -------------------- UPDATE DATA PERATURAN GUBERNUR JASA KONSTRUKSI ----------------------
                public function updateshowkeputusan($judul)
                {
                    // Cari data undang-undang berdasarkan nilai 'judul'
                    $keputusan = suratkeputusan::where('judul', $judul)->firstOrFail();
                    $user = Auth::user();

                    // Tampilkan form update dengan data yang ditemukan
                    return view('backend.14_peraturan.11_keputusan.update', [
                        'keputusan' => $keputusan,
                        'user' => $user,
                        'title' => 'Update Surat Keputusan'
                    ]);
                }
                
                // -------------------- UPDATE DATA CREATE UPDATE UNDANG UNDANG JASA KONSTRUKSI ----------------------
                        public function createupdatekeputusan(Request $request, $judul)
                    {
                        // Validasi input
                        $request->validate([
                            'judul' => 'required|string|max:255',
                            // 'peraturan' => 'required|file', // Validasi file sesuai jenis dan ukuran
                        ]);
            
                        // Cari data undang-undang berdasarkan nilai 'judul'
                        $keputusan = suratkeputusan::where('judul', $judul)->firstOrFail();
                        
                        // Simpan file dan ambil path-nya
                        $filePath = null;
                        if ($request->hasFile('peraturan')) {
                            $file = $request->file('peraturan');
                            $filePath = $file->store('peraturan/11_keputusan', 'public'); // Menyimpan di storage/app/public/undangundang
                        }
            
                        // Update data undang-undang dengan data dari form
                        $keputusan->update([
                            'judul' => $request->input('judul'),
                            'peraturan' => $filePath ? $filePath : $keputusan->peraturan, // Gunakan path baru jika ada file
                        ]);
            
                        
                        session()->flash('update', 'Data Surat Keputusan Berhasil Diupdate !');
                        // Redirect ke halaman yang sesuai
                        return redirect('/keputusan');
                               }

       
                               
// ------------ CREATE DATA SURAT KEPUTUSAN  ----------------

public function createkeputusan()
{
    $user = Auth::user();

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.14_peraturan.11_keputusan.create', [
        'title' => 'Create Surat Keputusan',
        'user' => $user,
    ]);
}

public function createstorekeputusan(Request $request)
{
    // Validasi input
    $request->validate([
        'judul' => 'required|string|max:255',
        'peraturan' => 'required|file|mimes:pdf|max:20480', // 20MB max file size
    ]);

    // Simpan file dan ambil path
    $filePath = $request->file('peraturan')->store('peraturan/11_keputusan', 'public');

    // Buat entri baru di database
    suratkeputusan::create([
        'judul' => $request->input('judul'),
        'peraturan' => $filePath,
    ]);

    session()->flash('create', 'Data Berhasil Di Tambahkan !');
    // Redirect ke halaman yang sesuai
    return redirect('/keputusan');
}



    // ==================== DELETE SURAT KEPUTUSAN MENTERI 

    public function deletekeputusan(Request $request, $judul)
{
    // Cari entri berdasarkan judul
    $entry = suratkeputusan::where('judul', $judul)->first();

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
    return redirect('/keputusan');
}





                        

            
}

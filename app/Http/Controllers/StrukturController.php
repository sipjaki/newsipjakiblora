<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\struktur; // Pastikan namespace model sesuai dengan struktur direktori
use App\Models\strukturdinas;

class StrukturController extends Controller
{
    public function index()
    {
        $data= strukturdinas::all(); // Menggunakan paginate() untuk pagination

        return view('backend.01_struktur.01_kedinasan.index', [
            'title' => 'Struktur Kedinasan PUPR Kabupaten Bandung Barat',
            'data' => $data, // Mengirimkan data paginasi ke view
        ]);
    }

         
                // -------------------- UPDATE DATA PERATURAN GUBERNUR JASA KONSTRUKSI ----------------------
                public function updatestruktur($judul)
                {
                    // Cari data undang-undang berdasarkan nilai 'judul'
                    $strukturdinas = strukturdinas::where('judul', $judul)->firstOrFail();
                    
                    // Tampilkan form update dengan data yang ditemukan
                    return view('backend.01_struktur.01_kedinasan.update', [
                        'strukturdinas' => $strukturdinas,
                        'title' => 'Update Surat Kedinasan PUPR KBB'
                    ]);
                }
                
                // -------------------- UPDATE DATA CREATE UPDATE UNDANG UNDANG JASA KONSTRUKSI ----------------------
                        public function createupdatestruktur(Request $request, $judul)
                    {
                        // Validasi input
                        $request->validate([
                            'judul' => 'required|string|max:255',
                            // 'peraturan' => 'required|file', // Validasi file sesuai jenis dan ukuran
                        ]);
            
                        // Cari data undang-undang berdasarkan nilai 'judul'
                        $strukturdinas = strukturdinas::where('judul', $judul)->firstOrFail();
                        
                        // Simpan file dan ambil path-nya
                        $filePath = null;
                        if ($request->hasFile('peraturan')) {
                            $file = $request->file('peraturan');
                            $filePath = $file->store('struktur/01_dinas', 'public'); // Menyimpan di storage/app/public/undangundang
                        }
            
                        // Update data undang-undang dengan data dari form
                        $strukturdinas->update([
                            'judul' => $request->input('judul'),
                            'peraturan' => $filePath ? $filePath : $strukturdinas->peraturan, // Gunakan path baru jika ada file
                        ]);
            
                        
                        session()->flash('update', 'Data Struktur Kedinasan Berhasil Diupdate !');
                        // Redirect ke halaman yang sesuai
                        return redirect('/struktur');
                               }

    //    ======================================================================

    public function renstra()
    {
        $data= struktur::all(); // Menggunakan paginate() untuk pagination

        return view('backend.01_struktur.02_renstra.index', [
            'title' => 'Rencana Strategis Program & Jasa Konstruksi',
            'data' => $data, // Mengirimkan data paginasi ke view
        ]);
    }

  

    
    public function tupoksi()
    {
        // $data= struktur::all(); // Menggunakan paginate() untuk pagination

        return view('backend.01_struktur.03_tupoksi.index', [
            'title' => 'Tupoksi Program & Jasa Konstruksi',
            // 'data' => $data, // Mengirimkan data paginasi ke view
        ]);
    }

    // public function showByName($nama)
    // {
    //     $item = Skktenagakerja::where('nama', $nama)->firstOrFail();

    //     return view('backend.04_skk.01_skk.show', [
    //         'data' => $item,
    //         'title' => 'Detail SKK Tenaga Kerja',
    //     ]);
    // }
}

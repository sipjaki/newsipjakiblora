<?php

namespace App\Http\Controllers;

use App\Models\berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;




class BeritaController extends Controller
{
    //

    
// =====================================================================================
            
public function databerita()
{
    $data= berita::paginate(8); // Menggunakan paginate() untuk pagination

    return view('backend.02_berita.01_berita.index', [
        'title' => 'Berita Jasa Konstruksi Pemerintah Kabupaten Bandung Barat',
        'data' => $data, // Mengirimkan data paginasi ke view
    ]);
}


public function databeritashowbyjudul($judul)
{
    $data = berita::where('judul', $judul)->firstOrFail();

    return view('backend.02_berita.01_berita.show', [
        'data' => $data,
        'title' => 'Details Berita Jasa Konstruksi',
    ]);
}

                // -------------------- UPDATE DATA PERATURAN GUBERNUR JASA KONSTRUKSI ----------------------
                // public function updatedataberita($judul)
                // {
                //     // Cari data undang-undang berdasarkan nilai 'judul'
                //     $berita = berita::where('judul', $judul)->firstOrFail();
                    
                //     // Tampilkan form update dengan data yang ditemukan
                //     return view('backend.02_berita.berita.update', [
                //         'berita' => $berita,
                //         'title' => 'Update Data Berita Jasa Konstruksi'
                //     ]);
                // }
                
                // -------------------- UPDATE DATA CREATE UPDATE UNDANG UNDANG JASA KONSTRUKSI ----------------------
                    //     public function createupdatedataberita(Request $request, $judul)
                    // {
                    //     // Validasi input
                    //     $request->validate([
                    //         'judul' => 'required|string|max:255',
                    //         // 'peraturan' => 'required|file', // Validasi file sesuai jenis dan ukuran
                    //     ]);
            
                    //     // Cari data undang-undang berdasarkan nilai 'judul'
                    //     $berita = berita::where('judul', $judul)->firstOrFail();
                        
                    //     // Simpan file dan ambil path-nya
                    //     $filePath = null;
                    //     if ($request->hasFile('gambar')) {
                    //         $file = $request->file('gambar');
                    //         $filePath = $file->store('berita/databerita', 'public'); // Menyimpan di storage/app/public/undangundang
                    //     }
            
                    //     // Update data undang-undang dengan data dari form
                    //     $berita->update([
                    //         'judul' => $request->input('judul'),
                    //         'peraturan' => $filePath ? $filePath : $berita->gambar, // Gunakan path baru jika ada file
                    //     ]);
            
                        
                    //     session()->flash('update', 'Data Berita Berhasil Diupdate !');
                    //     // Redirect ke halaman yang sesuai
                    //     return redirect('/databerita');
                    //            }

                               
                               
// ------------ CREATE DATA SURAT PERATURAN GUBERNUR ----------------

// public function createdataberita()
// {
    
//     // Tampilkan form update dengan data yang ditemukan
//     return view('backend.02_berita.berita.create', [
//         'title' => 'Create Berita Jasa Konstruksi'
//     ]);
// }

// public function createstoredataberita(Request $request)
// {
//     // Validasi input
//     $request->validate([
//         'judul' => 'required|string|max:255',
//         'gambar' => 'required|file|mimes:pdf|max:20480', // 20MB max file size
//     ]);

//     // Simpan file dan ambil path
//     $filePath = $request->file('gambar')->store('peraturan/09_gubernur', 'public');

//     // Buat entri baru di database
//     pergubernur::create([
//         'judul' => $request->input('judul'),
//         'peraturan' => $filePath,
//     ]);

//     session()->flash('create', 'Data Berhasil Di Tambahkan !');
//     // Redirect ke halaman yang sesuai
//     return redirect('/pergubernur');
// }


    // ==================== DELETE SURAT KEPUTUSAN MENTERI 

//     public function deletepergubernur(Request $request, $judul)
// {
//     // Cari entri berdasarkan judul
//     $entry = pergubernur::where('judul', $judul)->first();

//     if ($entry) {
//         // Hapus file terkait jika ada
//         if (Storage::disk('public')->exists($entry->peraturan)) {
//             Storage::disk('public')->delete($entry->peraturan);
//         }

//         // Hapus entri dari database
//         $entry->delete();

//         // Set pesan flash untuk sukses
//         session()->flash('delete', 'Data Berhasil Dihapus!');
//     } else {
//         // Set pesan flash jika data tidak ditemukan
//         session()->flash('error', 'Data Tidak Ditemukan!');
//     }

//     // Redirect ke halaman yang sesuai
//     return redirect('/pergubernur');
// }


}

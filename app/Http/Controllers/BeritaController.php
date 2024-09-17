<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\user;
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
                public function updatedataberita($judul)
                {
                    // Cari data undang-undang berdasarkan nilai 'judul'
                    $berita = berita::where('judul', $judul)->firstOrFail();
                    $datauser = user::all();
                    
                    // Tampilkan form update dengan data yang ditemukan
                    return view('backend.02_berita.01_berita.update', [
                        'berita' => $berita,
                        'datauser' => $datauser,
                        'title' => 'Update Data Berita Jasa Konstruksi'
                    ]);
                }
                
                public function createupdatedataberita(Request $request, $judul)
                {
                    // Validasi input
                    $request->validate([
                        'judul' => 'required|string|max:255',
                        // 'user_id' => 'required|exists:users,id', // Pastikan tabel dan kolom ini benar
                        'keterangan' => 'required|string',
                        'tanggal' => 'required|date',
                        'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar
                    ]);
                
                    // Cari data berita berdasarkan nilai 'judul'
                    $berita = Berita::where('judul', $judul)->firstOrFail();
                    
                    // Simpan file dan ambil path-nya
                    $filePath = $berita->gambar; // Set default ke gambar lama
                    
                    if ($request->hasFile('gambar')) {
                        $file = $request->file('gambar');
                        $filePath = $file->store('berita/databerita', 'public'); // Menyimpan di storage/app/public/berita/databerita
                    }
                
                    // Update data berita dengan data dari form
                    $berita->update([
                        'judul' => $request->input('judul'),
                        // 'user_id' => $request->input('user_id'),
                        'keterangan' => $request->input('keterangan'),
                        'tanggal' => $request->input('tanggal'),
                        'gambar' => $filePath, // Gunakan path baru jika ada file
                    ]);
                
                    session()->flash('update', 'Data Berita Berhasil Diupdate!');
                    
                    // Redirect ke halaman yang sesuai
                    return redirect('/databerita'); // Pastikan ini sesuai dengan nama route Anda
                }
                
                               
                               
// ------------ CREATE DATA SURAT PERATURAN GUBERNUR ----------------

public function createnewdataberita()
{
    
    // Tampilkan form update dengan data yang ditemukan
    return view('backend.02_berita.01_berita.create', [
        'title' => 'Create Berita Jasa Konstruksi '
    ]);
}

public function createnewstoredataberita(Request $request)
{
    // Validasi input
    $request->validate([
        'judul' => 'required|string|max:255',
        'gambar' => 'required|file|mimes:pdf|max:20480', // 20MB max file size
    ]);

    // Simpan file dan ambil path
    $filePath = $request->file('gambar')->store('berita/databerita', 'public');

    // Buat entri baru di database
    berita::create([
        'judul' => $request->input('judul'),
        'peraturan' => $filePath,
    ]);

    session()->flash('create', 'Data Berhasil Di Tambahkan !');
    // Redirect ke halaman yang sesuai
    return redirect('/databerita');
}


    // ==================== DELETE SURAT KEPUTUSAN MENTERI 

    public function deletedataberita(Request $request, $judul)
{
    // Cari entri berdasarkan judul
    $entry = berita::where('judul', $judul)->first();

    if ($entry) {
        // Hapus file terkait jika ada
        if (Storage::disk('public')->exists($entry->gambar)) {
            Storage::disk('public')->delete($entry->gambar);
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
    return redirect('/databerita');
}


}

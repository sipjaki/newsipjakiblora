<?php

namespace App\Http\Controllers;

use App\Models\agendastatus;
use App\Models\keterampilanpekerja;
use App\Models\metodepengadaan;
use App\Models\pengawasanbangunangedung;
use App\Models\pengawasanlokasi;
use App\Models\pengawasanstatus;
use App\Models\pengawasantindakan;
use App\Models\qapertanyaan;
use App\Models\qasebagai;
use App\Models\statusadmin;
use App\Models\tahunpilihan;
use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\File; // Pastikan ini ada
use Illuminate\Support\Facades\Storage; // Jika Anda menggunakan Storage juga

use Illuminate\Support\Facades\Auth; 

class SettingmenuController extends Controller
{
    //
    public function alldata()
    {
        // Mengambil data dengan pagination
        $user = Auth::user();
        $jumlahstatusadmin = statusadmin::count();
        $jumlahpengawasanlokasi = pengawasanlokasi::count();
        $jumlahqasebagai = qasebagai::count();
        $jumlahqapertanyaan = qapertanyaan::count();
        $jumlahmetodepengadaan = metodepengadaan::count();
        $jumlahpengawasanbangunangedung = pengawasanbangunangedung::count();
        $jumlahpengawasanstatus = pengawasanstatus::count();
        $jumlahpengawasantindakan = pengawasantindakan::count();
        $jumlahagendastatus = agendastatus::count();
        $jumlahketerampilanpekerja = keterampilanpekerja::count();
        $jumlahpilihantahun = tahunpilihan::count();



        // Mengirimkan data ke view
        return view('backend.16_setting.01_alldata.index', [
            'title' => 'All Data Settings Menu',
            'user' => $user, // Mengirimkan data kecamatan unik ke view
            'jumlahstatusadmin' => $jumlahstatusadmin, // Mengirimkan data kecamatan unik ke view
            'jumlahpengawasanlokasi' => $jumlahpengawasanlokasi, // Mengirimkan data kecamatan unik ke view
            'jumlahqasebagai' => $jumlahqasebagai, // Mengirimkan data kecamatan unik ke view
            'jumlahqapertanyaan' => $jumlahqapertanyaan, // Mengirimkan data kecamatan unik ke view
            'jumlahmetodepengadaan' => $jumlahmetodepengadaan, // Mengirimkan data kecamatan unik ke view
            'jumlahpengawasanbangunangedung' => $jumlahpengawasanbangunangedung, // Mengirimkan data kecamatan unik ke view
            'jumlahpengawasanstatus' => $jumlahpengawasanstatus, // Mengirimkan data kecamatan unik ke view
            'jumlahpengawasantindakan' => $jumlahpengawasantindakan, // Mengirimkan data kecamatan unik ke view
            'jumlahagendastatus' => $jumlahagendastatus, // Mengirimkan data kecamatan unik ke view
            'jumlahketerampilanpekerja' => $jumlahketerampilanpekerja, // Mengirimkan data kecamatan unik ke view
            'jumlahpilihantahun' => $jumlahpilihantahun, // Mengirimkan data kecamatan unik ke view
        ]);
    }


    public function statusadmin()
    {

        $datastatusadmin = statusadmin::orderBy('created_at', 'desc')->paginate(15);
        $user = Auth::user();

        return view('backend.16_setting.02_statusadmin.index', [
            'title' => 'Settings Status Admin',
            'user' => $user, // Mengirimkan data kecamatan unik ke view
            'data' => $datastatusadmin, // Mengirimkan data kecamatan unik ke view
           
        ]);

    }

    public function deletestatusadmin($id)
    {
        // Cari entri berdasarkan judul
        $entry = statusadmin::where('id', $id)->first();
    
        if ($entry) {
            // Hapus entri dari database
            statusadmin::destroy($entry->id);
    
            // Set pesan flash untuk sukses
            session()->flash('delete', 'Data Berhasil Dihapus!');
    
            // Redirect ke halaman yang sesuai
            return redirect('/settingstatusadmin');
        } else {
            // Set pesan flash jika data tidak ditemukan
            session()->flash('error', 'Data Tidak Ditemukan!');
    
            // Redirect ke halaman yang sesuai
            return redirect('/settingstatusadmin');
        }
    }


        
// CREATE DATA SETTINGS STATUS ADMIN ============================================================================================
public function createstatusadmin()
{
                $user = Auth::user();
    
                // Tampilkan form update dengan data yang ditemukan
                return view('backend.16_setting.02_statusadmin.create', [
                    // 'data' => $datapenanggungjawabteknis,
                    'user' => $user,
                    'title' => 'Create Status Admin'
                ]);
}

// Menyimpan data asosiasi pengusaha

public function createstorestatusadmin(Request $request)
{
    // Validate input
    $request->validate([
        'status' => 'required|string|max:255',
                    
    ]);

    // Create a new entry in the database
    statusadmin::create([
        'status' => $request->input('status'),
               
    ]);

    session()->flash('create', 'Data Berhasil Ditambahkan!');
    
    // Redirect to the desired route
    return redirect('/settingstatusadmin'); // Adjust this to your desired route
}

}

<?php

namespace App\Http\Controllers;

use App\Models\agendastatus;
use App\Models\Keterampilanpekerja;
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
        $jumlahketerampilanpekerja = Keterampilanpekerja::count();
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

}

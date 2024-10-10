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

// 01 SEETING MENU STATUS ADMIN ============================================================================
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

// 02 SEETING MENU KECAMATAN LOKASI ============================================================================
    public function settingkecamatan()
    {

        $datapengawasanlokasi = pengawasanlokasi::orderBy('created_at', 'desc')->paginate(15);
        $user = Auth::user();

        return view('backend.16_setting.03_kecamatan.index', [
            'title' => 'Settings Kecamatan/Kota',
            'user' => $user, // Mengirimkan data kecamatan unik ke view
            'data' => $datapengawasanlokasi, // Mengirimkan data kecamatan unik ke view
           
        ]);

    }

    public function deletesettingkecamatan($id)
    {
        // Cari entri berdasarkan judul
        $entry = pengawasanlokasi::where('id', $id)->first();
    
        if ($entry) {
            // Hapus entri dari database
            pengawasanlokasi::destroy($entry->id);
    
            // Set pesan flash untuk sukses
            session()->flash('delete', 'Data Berhasil Dihapus!');
    
            // Redirect ke halaman yang sesuai
            return redirect('/settingkecamatan');
        } else {
            // Set pesan flash jika data tidak ditemukan
            session()->flash('error', 'Data Tidak Ditemukan!');
    
            // Redirect ke halaman yang sesuai
            return redirect('/settingkecamatan');
        }
    }


        
// CREATE DATA SETTINGS STATUS ADMIN ============================================================================================
public function createsettingkecamatan()
{
                $user = Auth::user();
                // Tampilkan form update dengan data yang ditemukan
                return view('backend.16_setting.03_kecamatan.create', [
                    // 'data' => $datapenanggungjawabteknis,
                    'user' => $user,
                    'title' => 'Create Kecamatan/Kota'
                ]);
}

// Menyimpan data asosiasi pengusaha

public function createstoresettingkecamatan(Request $request)
{
    // Validate input
    $request->validate([
        'kota' => 'required|string|max:255',
                    
    ]);

    // Create a new entry in the database
    pengawasanlokasi::create([
        'kota' => $request->input('kota'),
               
    ]);

    session()->flash('create', 'Data Berhasil Ditambahkan!');
    
    // Redirect to the desired route
    return redirect('/settingkecamatan'); // Adjust this to your desired route
}

// 03 SEETING QA SEBAGAI PERTANYAAN ============================================================================
    public function settingqasebagai()
    {

        $dataqasebagai = qasebagai::orderBy('created_at', 'desc')->paginate(15);
        $user = Auth::user();

        return view('backend.16_setting.04_qasebagai.index', [
            'title' => 'Settings QA Sebagai',
            'user' => $user, // Mengirimkan data kecamatan unik ke view
            'data' => $dataqasebagai, // Mengirimkan data kecamatan unik ke view
           
        ]);

    }

    public function deletesettingqasebagai($id)
    {
        // Cari entri berdasarkan judul
        $entry = qasebagai::where('id', $id)->first();
    
        if ($entry) {
            // Hapus entri dari database
            qasebagai::destroy($entry->id);
    
            // Set pesan flash untuk sukses
            session()->flash('delete', 'Data Berhasil Dihapus!');
    
            // Redirect ke halaman yang sesuai
            return redirect('/settingqasebagai');
        } else {
            // Set pesan flash jika data tidak ditemukan
            session()->flash('error', 'Data Tidak Ditemukan!');
    
            // Redirect ke halaman yang sesuai
            return redirect('/settingqasebagai');
        }
    }


        
// CREATE DATA SETTINGS STATUS ADMIN ============================================================================================
public function createsettingqasebagai()
{
                $user = Auth::user();
                // Tampilkan form update dengan data yang ditemukan
                return view('backend.16_setting.04_qasebagai.create', [
                    // 'data' => $datapenanggungjawabteknis,
                    'user' => $user,
                    'title' => 'Create QA Sebagai'
                ]);
}

// Menyimpan data asosiasi pengusaha

public function createstoresettingqasebagai(Request $request)
{
    // Validate input
    $request->validate([
        'sebagai' => 'required|string|max:255',
                    
    ]);

    // Create a new entry in the database
    qasebagai::create([
        'sebagai' => $request->input('sebagai'),
               
    ]);

    session()->flash('create', 'Data Berhasil Ditambahkan!');
    
    // Redirect to the desired route
    return redirect('/settingqasebagai'); // Adjust this to your desired route
}

// 04 SEETING DATA QA PERTANYAAN ============================================================================
    public function settingqapertanyaan()
    {

        $dataqapertanyaan = qapertanyaan::orderBy('created_at', 'desc')->paginate(15);
        $user = Auth::user();

        return view('backend.16_setting.05_qapertanyaan.index', [
            'title' => 'Settings QA Pertanyaan',
            'user' => $user, // Mengirimkan data kecamatan unik ke view
            'data' => $dataqapertanyaan, // Mengirimkan data kecamatan unik ke view
           
        ]);

    }

    public function deletesettingqapertanyaan($id)
    {
        // Cari entri berdasarkan judul
        $entry = qapertanyaan::where('id', $id)->first();
    
        if ($entry) {
            // Hapus entri dari database
            qapertanyaan::destroy($entry->id);
    
            // Set pesan flash untuk sukses
            session()->flash('delete', 'Data Berhasil Dihapus!');
    
            // Redirect ke halaman yang sesuai
            return redirect('/settingqapertanyaan');
        } else {
            // Set pesan flash jika data tidak ditemukan
            session()->flash('error', 'Data Tidak Ditemukan!');
    
            // Redirect ke halaman yang sesuai
            return redirect('/settingqapertanyaan');
        }
    }


        
// CREATE DATA SETTINGS STATUS ADMIN ============================================================================================
public function createsettingqapertanyaan()
{
                $user = Auth::user();
                // Tampilkan form update dengan data yang ditemukan
                return view('backend.16_setting.05_qapertanyaan.create', [
                    // 'data' => $datapenanggungjawabteknis,
                    'user' => $user,
                    'title' => 'Create QA Pertanyaan'
                ]);
}

// Menyimpan data asosiasi pengusaha

public function createstoresettingqapertanyaan(Request $request)
{
    // Validate input
    $request->validate([
        'pertanyaan' => 'required|string|max:255',
                    
    ]);

    // Create a new entry in the database
    qapertanyaan::create([
        'pertanyaan' => $request->input('pertanyaan'),
               
    ]);

    session()->flash('create', 'Data Berhasil Ditambahkan!');
    
    // Redirect to the desired route
    return redirect('/settingqapertanyaan'); // Adjust this to your desired route
}

// 05 SEETING METODE PENGADAAN PEKERJAAN ============================================================================
    public function settingmetodepengadaan()
    {

        $datametodepengadaan = metodepengadaan::orderBy('created_at', 'desc')->paginate(15);
        $user = Auth::user();

        return view('backend.16_setting.06_metodepangadaan.index', [
            'title' => 'Settings Metode Pengadaan',
            'user' => $user, // Mengirimkan data kecamatan unik ke view
            'data' => $datametodepengadaan, // Mengirimkan data kecamatan unik ke view
           
        ]);

    }

    public function deletesettingmetodepengadaan($id)
    {
        // Cari entri berdasarkan judul
        $entry = metodepengadaan::where('id', $id)->first();
    
        if ($entry) {
            // Hapus entri dari database
            metodepengadaan::destroy($entry->id);
    
            // Set pesan flash untuk sukses
            session()->flash('delete', 'Data Berhasil Dihapus!');
    
            // Redirect ke halaman yang sesuai
            return redirect('/settingmetodepengadaan');
        } else {
            // Set pesan flash jika data tidak ditemukan
            session()->flash('error', 'Data Tidak Ditemukan!');
    
            // Redirect ke halaman yang sesuai
            return redirect('/settingmetodepengadaan');
        }
    }


        
// CREATE DATA SETTINGS STATUS ADMIN ============================================================================================
public function createsettingmetodepengadaan()
{
                $user = Auth::user();
                // Tampilkan form update dengan data yang ditemukan
                return view('backend.16_setting.06_metodepangadaan.create', [
                    // 'data' => $datapenanggungjawabteknis,
                    'user' => $user,
                    'title' => 'Create Metode Pengadaan'
                ]);
}

// Menyimpan data asosiasi pengusaha

public function createstoresettingmetodepengadaan(Request $request)
{
    // Validate input
    $request->validate([
        'metode' => 'required|string|max:255',
                    
    ]);

    // Create a new entry in the database
    metodepengadaan::create([
        'metode' => $request->input('metode'),
               
    ]);

    session()->flash('create', 'Data Berhasil Ditambahkan!');
    
    // Redirect to the desired route
    return redirect('/settingmetodepengadaan'); // Adjust this to your desired route
}

// 06 SEETING METODE PENGADAAN PEKERJAAN ============================================================================
    public function settingpengawasanbangunangedung()
    {

        $datapengawasanbangunangedung = pengawasanbangunangedung::orderBy('created_at', 'desc')->paginate(15);
        $user = Auth::user();

        return view('backend.16_setting.07_pengawasanbangunangedung.index', [
            'title' => 'Settings Metode Pengawasan Bangunan',
            'user' => $user, // Mengirimkan data kecamatan unik ke view
            'data' => $datapengawasanbangunangedung, // Mengirimkan data kecamatan unik ke view
           
        ]);

    }

    public function deletesettingpengawasanbangunangedung($id)
    {
        // Cari entri berdasarkan judul
        $entry = pengawasanbangunangedung::where('id', $id)->first();
    
        if ($entry) {
            // Hapus entri dari database
            pengawasanbangunangedung::destroy($entry->id);
    
            // Set pesan flash untuk sukses
            session()->flash('delete', 'Data Berhasil Dihapus!');
    
            // Redirect ke halaman yang sesuai
            return redirect('/settingpengawasanbangunangedung');
        } else {
            // Set pesan flash jika data tidak ditemukan
            session()->flash('error', 'Data Tidak Ditemukan!');
    
            // Redirect ke halaman yang sesuai
            return redirect('/settingpengawasanbangunangedung');
        }
    }


        
// CREATE DATA SETTINGS STATUS ADMIN ============================================================================================
public function createsettingpengawasanbangunangedung()
{
                $user = Auth::user();
                // Tampilkan form update dengan data yang ditemukan
                return view('backend.16_setting.07_pengawasanbangunangedung.create', [
                    // 'data' => $datapenanggungjawabteknis,
                    'user' => $user,
                    'title' => 'Create Pengawasan Bangunan Gedung'
                ]);
}

// Menyimpan data asosiasi pengusaha

public function createstoresettingpengawasanbangunangedung(Request $request)
{
    // Validate input
    $request->validate([
        'bangunan' => 'required|string|max:255',
                    
    ]);

    // Create a new entry in the database
    pengawasanbangunangedung::create([
        'bangunan' => $request->input('bangunan'),
               
    ]);

    session()->flash('create', 'Data Berhasil Ditambahkan!');
    
    // Redirect to the desired route
    return redirect('/settingpengawasanbangunangedung'); // Adjust this to your desired route
}

// 07 SEETING METODE PENGADAAN PEKERJAAN ============================================================================
    public function settingpengawasanstatus()
    {

        $datapengawasanstatus = pengawasanstatus::orderBy('created_at', 'desc')->paginate(15);
        $user = Auth::user();

        return view('backend.16_setting.08_pengawasanstatus.index', [
            'title' => 'Settings Pengawasan Status',
            'user' => $user, // Mengirimkan data kecamatan unik ke view
            'data' => $datapengawasanstatus, // Mengirimkan data kecamatan unik ke view
           
        ]);

    }

    public function deletesettingpengawasanstatus($id)
    {
        // Cari entri berdasarkan judul
        $entry = pengawasanstatus::where('id', $id)->first();
    
        if ($entry) {
            // Hapus entri dari database
            pengawasanstatus::destroy($entry->id);
    
            // Set pesan flash untuk sukses
            session()->flash('delete', 'Data Berhasil Dihapus!');
    
            // Redirect ke halaman yang sesuai
            return redirect('/settingpengawasanstatus');
        } else {
            // Set pesan flash jika data tidak ditemukan
            session()->flash('error', 'Data Tidak Ditemukan!');
    
            // Redirect ke halaman yang sesuai
            return redirect('/settingpengawasanstatus');
        }
    }


        
// CREATE DATA SETTINGS STATUS ADMIN ============================================================================================
public function createsettingpengawasanstatus()
{
                $user = Auth::user();
                // Tampilkan form update dengan data yang ditemukan
                return view('backend.16_setting.08_pengawasanstatus.create', [
                    // 'data' => $datapenanggungjawabteknis,
                    'user' => $user,
                    'title' => 'Create Pengawasan Status'
                ]);
}

// Menyimpan data asosiasi pengusaha

public function createstoresettingpengawasanstatus(Request $request)
{
    // Validate input
    $request->validate([
        'status' => 'required|string|max:255',
                    
    ]);

    // Create a new entry in the database
    pengawasanstatus::create([
        'status' => $request->input('status'),
               
    ]);

    session()->flash('create', 'Data Berhasil Ditambahkan!');
    
    // Redirect to the desired route
    return redirect('/settingpengawasanstatus'); // Adjust this to your desired route
}

// 08 SEETING PENGAWASAN TINDAKAN MENUS ============================================================================
    public function settingpengawasantindakan()
    {

        $datapengawasantindakan = pengawasantindakan::orderBy('created_at', 'desc')->paginate(15);
        $user = Auth::user();

        return view('backend.16_setting.09_pengawasantindakan.index', [
            'title' => 'Settings Pengawasan Tindakan',
            'user' => $user, // Mengirimkan data kecamatan unik ke view
            'data' => $datapengawasantindakan, // Mengirimkan data kecamatan unik ke view
           
        ]);

    }

    public function deletesettingpengawasantindakan($id)
    {
        // Cari entri berdasarkan judul
        $entry = pengawasantindakan::where('id', $id)->first();
    
        if ($entry) {
            // Hapus entri dari database
            pengawasantindakan::destroy($entry->id);
    
            // Set pesan flash untuk sukses
            session()->flash('delete', 'Data Berhasil Dihapus!');
    
            // Redirect ke halaman yang sesuai
            return redirect('/settingpengawasantindakan');
        } else {
            // Set pesan flash jika data tidak ditemukan
            session()->flash('error', 'Data Tidak Ditemukan!');
    
            // Redirect ke halaman yang sesuai
            return redirect('/settingpengawasantindakan');
        }
    }


        
// CREATE DATA SETTINGS STATUS ADMIN ============================================================================================
public function createsettingpengawasantindakan()
{
                $user = Auth::user();
                // Tampilkan form update dengan data yang ditemukan
                return view('backend.16_setting.09_pengawasantindakan.create', [
                    // 'data' => $datapenanggungjawabteknis,
                    'user' => $user,
                    'title' => 'Create Pengawasan Tindakan'
                ]);
}

// Menyimpan data asosiasi pengusaha

public function createstoresettingpengawasantindakan(Request $request)
{
    // Validate input
    $request->validate([
        'tindakan' => 'required|string|max:255',
                    
    ]);

    // Create a new entry in the database
    pengawasantindakan::create([
        'tindakan' => $request->input('tindakan'),
               
    ]);

    session()->flash('create', 'Data Berhasil Ditambahkan!');
    
    // Redirect to the desired route
    return redirect('/settingpengawasantindakan'); // Adjust this to your desired route
}

// 09 SEETING AGENDA STATUS ============================================================================
    public function settingagendastatus()
    {

        $dataagendastatus = agendastatus::orderBy('created_at', 'desc')->paginate(15);
        $user = Auth::user();

        return view('backend.16_setting.10_agendastatus.index', [
            'title' => 'Settings Agenda Status',
            'user' => $user, // Mengirimkan data kecamatan unik ke view
            'data' => $dataagendastatus, // Mengirimkan data kecamatan unik ke view
           
        ]);

    }

    public function deletesettingagendastatus($id)
    {
        // Cari entri berdasarkan judul
        $entry = agendastatus::where('id', $id)->first();
    
        if ($entry) {
            // Hapus entri dari database
            agendastatus::destroy($entry->id);
    
            // Set pesan flash untuk sukses
            session()->flash('delete', 'Data Berhasil Dihapus!');
    
            // Redirect ke halaman yang sesuai
            return redirect('/settingagendastatus');
        } else {
            // Set pesan flash jika data tidak ditemukan
            session()->flash('error', 'Data Tidak Ditemukan!');
    
            // Redirect ke halaman yang sesuai
            return redirect('/settingagendastatus');
        }
    }


        
// CREATE DATA SETTINGS STATUS ADMIN ============================================================================================
public function createsettingagendastatus()
{
                $user = Auth::user();
                // Tampilkan form update dengan data yang ditemukan
                return view('backend.16_setting.10_agendastatus.create', [
                    // 'data' => $datapenanggungjawabteknis,
                    'user' => $user,
                    'title' => 'Create Agenda Status'
                ]);
}

// Menyimpan data asosiasi pengusaha

public function createstoresettingagendastatus(Request $request)
{
    // Validate input
    $request->validate([
        'status' => 'required|string|max:255',
                    
    ]);

    // Create a new entry in the database
    agendastatus::create([
        'status' => $request->input('status'),
               
    ]);

    session()->flash('create', 'Data Berhasil Ditambahkan!');
    
    // Redirect to the desired route
    return redirect('/settingagendastatus'); // Adjust this to your desired route
}

// 10 SEETING KETERAMPILAN PEKERJA ============================================================================
    public function settingketerampilanpekerja()
    {

        $dataketerampilanpekerja = keterampilanpekerja::orderBy('created_at', 'desc')->paginate(15);
        $user = Auth::user();

        return view('backend.16_setting.11_keterampilanpekerja.index', [
            'title' => 'Settings Keterampilan Pekerja',
            'user' => $user, // Mengirimkan data kecamatan unik ke view
            'data' => $dataketerampilanpekerja, // Mengirimkan data kecamatan unik ke view
           
        ]);

    }

    public function deletesettingketerampilanpekerja($id)
    {
        // Cari entri berdasarkan judul
        $entry = keterampilanpekerja::where('id', $id)->first();
    
        if ($entry) {
            // Hapus entri dari database
            keterampilanpekerja::destroy($entry->id);
    
            // Set pesan flash untuk sukses
            session()->flash('delete', 'Data Berhasil Dihapus!');
    
            // Redirect ke halaman yang sesuai
            return redirect('/settingketerampilanpekerja');
        } else {
            // Set pesan flash jika data tidak ditemukan
            session()->flash('error', 'Data Tidak Ditemukan!');
    
            // Redirect ke halaman yang sesuai
            return redirect('/settingketerampilanpekerja');
        }
    }


        
// CREATE DATA SETTINGS STATUS ADMIN ============================================================================================
public function createsettingketerampilanpekerja()
{
                $user = Auth::user();
                // Tampilkan form update dengan data yang ditemukan
                return view('backend.16_setting.11_keterampilanpekerja.create', [
                    // 'data' => $datapenanggungjawabteknis,
                    'user' => $user,
                    'title' => 'Create Keterampilan Pekerja'
                ]);
}

// Menyimpan data asosiasi pengusaha

public function createstoresettingketerampilanpekerja(Request $request)
{
    // Validate input
    $request->validate([
        'keterampilan' => 'required|string|max:255',
                    
    ]);

    // Create a new entry in the database
    keterampilanpekerja::create([
        'keterampilan' => $request->input('keterampilan'),
               
    ]);

    session()->flash('create', 'Data Berhasil Ditambahkan!');
    
    // Redirect to the desired route
    return redirect('/settingketerampilanpekerja'); // Adjust this to your desired route
}

// 11 SEETING MENU TAHUN PILIHAN  ============================================================================
    public function settingtahunpilihan()
    {

        $datatahunpilihan = tahunpilihan::orderBy('created_at', 'desc')->paginate(15);
        $user = Auth::user();

        return view('backend.16_setting.12_tahunpilihan.index', [
            'title' => 'Settings Tahun Registrasi',
            'user' => $user, // Mengirimkan data kecamatan unik ke view
            'data' => $datatahunpilihan, // Mengirimkan data kecamatan unik ke view
           
        ]);

    }

    public function deletesettingtahunpilihan($id)
    {
        // Cari entri berdasarkan judul
        $entry = tahunpilihan::where('id', $id)->first();
    
        if ($entry) {
            // Hapus entri dari database
            tahunpilihan::destroy($entry->id);
    
            // Set pesan flash untuk sukses
            session()->flash('delete', 'Data Berhasil Dihapus!');
    
            // Redirect ke halaman yang sesuai
            return redirect('/settingtahunpilihan');
        } else {
            // Set pesan flash jika data tidak ditemukan
            session()->flash('error', 'Data Tidak Ditemukan!');
    
            // Redirect ke halaman yang sesuai
            return redirect('/settingtahunpilihan');
        }
    }


        
// CREATE DATA SETTINGS STATUS ADMIN ============================================================================================
public function createsettingtahunpilihan()
{
                $user = Auth::user();
                // Tampilkan form update dengan data yang ditemukan
                return view('backend.16_setting.12_tahunpilihan.create', [
                    // 'data' => $datapenanggungjawabteknis,
                    'user' => $user,
                    'title' => 'Create Tahun Registrasi'
                ]);
}

// Menyimpan data asosiasi pengusaha

public function createstoresettingtahunpilihan(Request $request)
{
    // Validate input
    $request->validate([
        'tahun' => 'required|string|max:255',
                    
    ]);

    // Create a new entry in the database
    tahunpilihan::create([
        'tahun' => $request->input('tahun'),
               
    ]);

    session()->flash('create', 'Data Berhasil Ditambahkan!');
    
    // Redirect to the desired route
    return redirect('/settingtahunpilihan'); // Adjust this to your desired route
}

}

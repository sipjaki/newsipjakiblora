<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\DatajakonController;
use App\Http\Controllers\FedashboardController;
use App\Http\Controllers\AgendaskkController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PeraturanController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\SettingmenuController;
use App\Http\Controllers\BujkkontraktorController;
use App\Http\Controllers\BujkkonsultanController;
use App\Http\Controllers\DatastatistikajakonbloraController;
use App\Http\Controllers\SkktenagakerjabloraController;
use App\Http\Controllers\PembinaanController;
use App\Http\Controllers\PengawasanbujkController;
use App\Http\Controllers\KecelakaankerjamasjakiController;
use App\Http\Controllers\TertibjasakonstruksiController;
use App\Http\Controllers\RantaipasokbloraController;
use App\Http\Controllers\TokobangunanbloraController;
use App\Http\Controllers\ShstbloraController;
use App\Http\Controllers\SatuanhargamaterialController;
use App\Http\Controllers\BeritajakonController;
use App\Http\Controllers\KritikdansaranController;
use App\Http\Controllers\AllskktenagakerjabloraController;
use App\Http\Controllers\PaketpekerjaanmasjakiController;
use App\Http\Controllers\PesertapelatihanController;
use App\Http\Controllers\AndroidVersionController;
use App\Http\Controllers\DownloadExcelController;
use App\Http\Controllers\HakAksesController;
use App\Http\Controllers\SettingDataController;
use App\Http\Controllers\VerifikasiController;
use App\Models\tertibjasakonstruksi;
// MAS JAKI

// atas
use Illuminate\Support\Facades\Route;


use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// ------------------------- FRONTEND HALAMAN SERTIFIKAT ANDROID  --------------------------
Route::get('/sertifikat', [AndroidVersionController::class, 'sertifikatindex']);
Route::get('/sertifikatpelatihan', [AndroidVersionController::class, 'sertifikatpelatihan']);
Route::get('/sertifikattkk', [AndroidVersionController::class, 'sertifikattkk']);
Route::post('/carisertifikat', [AndroidVersionController::class, 'carisertifikat'])->name('cari.sertifikat');


// ------------------------- FRONTEND HALAMAN UTAMA MAS JAKI BLORA  --------------------------
Route::get('/resberita', [BeritajakonController::class, 'androidberita']);
Route::get('/resberita/{judulberita}', [BeritajakonController::class, 'androidberitashow']);

Route::get('/resartikeljakon', [BeritajakonController::class, 'androidartikeljakon']);
Route::get('/resartikeljakon/{judul}', [BeritajakonController::class, 'androidartikeljakonshow']);

// -----------------------------------------------------------------------------------------------
Route::get('/ressatuanhargadasar', [SatuanhargamaterialController::class, 'satuanhargamaterial']);
Route::get('/ressatuanhargamaterial', [SatuanhargamaterialController::class, 'satuanhargamaterialshow']);
Route::get('/ressatuanhargaupah', [SatuanhargamaterialController::class, 'ressatuanhargaupah']);
Route::get('/ressatuanhargaperalatan', [SatuanhargamaterialController::class, 'ressatuanhargaperalatan']);
Route::get('/resshstblora', [ShstbloraController::class, 'resshstblora']);
Route::get('/resahspkonstruksi', [SatuanhargamaterialController::class, 'resahspkonstruksi']);
Route::get('/resahspdiv1', [SatuanhargamaterialController::class, 'resahspdiv1']);
Route::get('/resahspdiv2', [SatuanhargamaterialController::class, 'resahspdiv2']);
Route::get('/resahspdiv3', [SatuanhargamaterialController::class, 'resahspdiv3']);
Route::get('/resahspdiv4', [SatuanhargamaterialController::class, 'resahspdiv4']);
Route::get('/resahspdiv5', [SatuanhargamaterialController::class, 'resahspdiv5']);
Route::get('/resahspdiv6', [SatuanhargamaterialController::class, 'resahspdiv6']);
Route::get('/resahspdiv7', [SatuanhargamaterialController::class, 'resahspdiv7']);
Route::get('/resahspdiv8', [SatuanhargamaterialController::class, 'resahspdiv8']);
Route::get('/resahspdiv9', [SatuanhargamaterialController::class, 'resahspdiv9']);

// ---------------------------- MENU UTAMA ANDROID ------------------------------------------------
// ================================================ MENU BERITA
Route::get('/berita', [AndroidVersionController::class, 'menuberita']);

// ================================================ MENU KELEMBAGAAN
Route::get('/kelembagaan', [AndroidVersionController::class, 'menukelembagaan']);
// ================================================ MENU 1 STRUKTUR ORGANISASI ===========================================
Route::get('/resstruktur', [AndroidVersionController::class, 'menustruktur']);
// ================================================ MENU 2 PROFIL JAKON JASA KONSTRUKSI  ===========================================
Route::get('/resprofiljakon', [AndroidVersionController::class, 'menuprofiljakon']);
// ================================================ MENU 3 TUPOKSI JASA KONSTRUKSI  ===========================================
Route::get('/restupoksi', [AndroidVersionController::class, 'menutupoksi']);

// ================================================ MENU DATA JAKON
// MENU DATA BUJK KONTRAKTOR ------------------------------------------------
Route::get('/resdatajakon', [AndroidVersionController::class, 'menudatajakon']);
Route::get('/resbujkkontraktor', [AndroidVersionController::class, 'menubujkkontraktor']);
Route::get('/resbujkkontraktor/{namalengkap}', [AndroidVersionController::class, 'menubujkkontraktordetails']);

// MENU DATA BUJK KONSULTAN  ------------------------------------------------
Route::get('/resbujkkonsultan', [AndroidVersionController::class, 'menubujkkonsultan']);
Route::get('/resbujkkonsultan/{namalengkap}', [AndroidVersionController::class, 'menubujkkonsultandetails']);

// MENU DATA ASOSIASI MAS JAKI ------------------------------------------------
Route::get('/reasasosiasimasjaki', [AndroidVersionController::class, 'menuasosiasimasjaki']);
Route::get('/reasasosiasimasjaki/asosiasikonstruksi/{id}', [AndroidVersionController::class, 'reasasosiasimasjakikontraktor']);
Route::get('/reasasosiasimasjaki/asosiasikonsultan/{id}', [AndroidVersionController::class, 'reasasosiasimasjakikonsultan']);


// MENU DATA TKK DPUPR BLORA
// Route::get('/resbujkkonsultan', [AndroidVersionController::class, 'menubujkkonsultan']);
// Route::get('/resbujkkonsultan/{namalengkap}', [AndroidVersionController::class, 'menubujkkonsultandetails']);

// MENU DATA TKK KABUPATEN BLORA
Route::get('/resalltkkblora', [AndroidVersionController::class, 'menuresalltkkblora']);
Route::get('/resalltkkbloradpupr', [AndroidVersionController::class, 'menuresalltkkbloradpupr']);
Route::get('/resalltkkblora/{id}', [AndroidVersionController::class, 'menuresalltkkbloradetails']);
// makanyu

// MENU PROFIL PAKET PEKERJAAN MAS JAKI BLORA
Route::get('/resprofilpaketpekerjaan', [AndroidVersionController::class, 'menuresprofilpaketpekerjaan']);
Route::get('/resprofilpaketpekerjaan/{id}', [AndroidVersionController::class, 'menuresprofilpaketpekerjaandetails']);


// Rute untuk detailsnamapaketpekerjaan
Route::get('/detailsnamapaketpekerjaan/{id}', [AndroidVersionController::class, 'show'])->name('detailsnamapaketpekerjaan.show');

// Rute untuk detailspaketpekerjaan
Route::get('/detailspaketpekerjaan/{id}', [AndroidVersionController::class, 'show'])->name('detailspaketpekerjaan.show');

// Rute untuk sppbj
Route::get('/sppbj/{id}', [AndroidVersionController::class, 'show'])->name('sppbj.show');

// Rute untuk spk
Route::get('/spk/{id}', [AndroidVersionController::class, 'show'])->name('spk.show');

// Rute untuk sskk
Route::get('/sskk/{id}', [AndroidVersionController::class, 'show'])->name('sskk.show');

// Rute untuk suratperjanjianpekerjaan
Route::get('/suratperjanjianpekerjaan/{id}', [AndroidVersionController::class, 'show'])->name('suratperjanjianpekerjaan.show');



// ================================================ MENU D. PEMBINAAN
// MENU PEMBINAAN JASA KONSTRUKSI  ------------------------------------------------
Route::get('/respembinaan', [AndroidVersionController::class, 'menurespembinaan']);

// MENU 1 AGENDA PELATIHAN ------------------------------------------------
Route::get('/resagendapelatihan', [AndroidVersionController::class, 'menuresagendapelatihan']);
Route::get('/resagendapelatihan/{namakegiatan}', [AndroidVersionController::class, 'menuresagendapelatihandetails']);
Route::get('/respesertapelatihan', [AndroidVersionController::class, 'respesertapelatihan']);
Route::get('/respelatihanpeserta/{namakegiatan}', [AndroidVersionController::class, 'menurespelatihanpeserta']);

// DAFTAR PESERTA PELATIHAN MENU ANDROID
Route::get('/resdaftarpelatihanpeserta/create/{id}', [AndroidVersionController::class, 'resdaftarpelatihanpeserta'])->name('resdaftarpelatihanpeserta');
Route::post('/resdaftarpelatihanpeserta/createpeserta/new', [AndroidVersionController::class, 'resdaftarpelatihanpesertanew'])->name('resdaftarpelatihanpesertanew');

// MENU 3 AGENDA TKK KONSTRUKSI KAB BLORA ------------------------------------------------
Route::get('/resagendatkk', [AndroidVersionController::class, 'menuresagendatkk']);
Route::get('/resagendatkk/{namakegiatan}', [AndroidVersionController::class, 'menuresagendatkkdetails']);
Route::get('/respelatihanskk/{namakegiatan}', [AndroidVersionController::class, 'menurespelatihanskk']);
Route::get('/respesertaskk', [AndroidVersionController::class, 'menurespesertaskk']);
Route::get('/resskkpeserta/{namakegiatan}', [AndroidVersionController::class, 'menuresskkpeserta']);


Route::get('/resdaftarpelatihanpesertaskk/create/{id}', [AndroidVersionController::class, 'resdaftarpelatihanpesertaskk'])->middleware('auth')->name('resdaftarpelatihanpesertaskk');


// Route::post('/resdaftarpelatihanpesertaskk/createpeserta/new', [AndroidVersionController::class, 'resdaftarpelatihanpesertanew'])->name('resdaftarpelatihanpesertanew');


// ================================================ MENU E. PENGAWASAN
// MENU PEMBINAAN JASA KONSTRUKSI  ------------------------------------------------
Route::get('/respengawasan', [AndroidVersionController::class, 'menurespengawasan']);

// MENU TERTIB JAKON USAHA JASA KONSTRUKSI  ------------------------------------------------
Route::get('/resjakonusaha', [AndroidVersionController::class, 'menuresjakonusaha']);

// Route untuk surat tertib jakon usaha 1
Route::get('surattertibjakonusaha1/{id}', [AndroidVersionController::class, 'show1'])->name('surattertibjakonusaha1.show');

// Route untuk surat tertib jakon usaha 2
Route::get('surattertibjakonusaha2/{id}', [AndroidVersionController::class, 'show2'])->name('surattertibjakonusaha2.show');

// Route untuk surat tertib jakon usaha 3
Route::get('surattertibjakonusaha3/{id}', [AndroidVersionController::class, 'show3'])->name('surattertibjakonusaha3.show');

// Route untuk surat tertib jakon usaha 4
Route::get('surattertibjakonusaha4/{id}', [AndroidVersionController::class, 'show4'])->name('surattertibjakonusaha4.show');
// Route::get('/resbujkkontraktor', [AndroidVersionController::class, 'menubujkkontraktor']);
// Route::get('/resbujkkontraktor/{namalengkap}', [AndroidVersionController::class, 'menubujkkontraktordetails']);


// MENU TERTIB JAKON PEMANFAATAN USAHA JASA KONSTRUKSI  ------------------------------------------------
Route::get('/resjakonpemanfataan', [AndroidVersionController::class, 'menuresjakonpemanfataan']);

// Route untuk surat tertib jakon usaha 1
Route::get('surattertibjakonpemanfaatan1/{id}', [AndroidVersionController::class, 'showpemanfaatan1'])->name('surattertibjakonpemanfaatan1.show');

// Route untuk surat tertib jakon usaha 2
Route::get('surattertibjakonpemanfaatan2/{id}', [AndroidVersionController::class, 'showpemanfaatan2'])->name('surattertibjakonpemanfaatan2.show');

// Route untuk surat tertib jakon usaha 3
Route::get('surattertibjakonpemanfaatan3/{id}', [AndroidVersionController::class, 'showpemanfaatan3'])->name('surattertibjakonpemanfaatan3.show');

// Route untuk surat tertib jakon usaha 4
Route::get('surattertibjakonpemanfaatan4/{id}', [AndroidVersionController::class, 'showpemanfaatan4'])->name('surattertibjakonpemanfaatan4.show');
// Route::get('/resbujkkontraktor', [AndroidVersionController::class, 'menubujkkontraktor']);
// Route::get('/resbujkkontraktor/{namalengkap}', [AndroidVersionController::class, 'menubujkkontraktordetails']);

// MENU TERTIB JAKON PENYELENGGARAAN JASA KONSTRUKSI  ------------------------------------------------
Route::get('/resjakonpenyelenggaraan', [AndroidVersionController::class, 'menuresjakonpenyelenggaraan']);

// Route untuk surat tertib jakon usaha 1
Route::get('surattertibjakonpenyelenggaraan1/{id}', [AndroidVersionController::class, 'showpenyelenggaraan'])->name('surattertibjakonpenyelenggaraan1.show');

// Route untuk surat tertib jakon usaha 1
Route::get('surattertibjakonpenyelenggaraan2/{id}', [AndroidVersionController::class, 'showpenyelenggaraan'])->name('surattertibjakonpenyelenggaraan2.show');

// Route untuk surat tertib jakon usaha 1
Route::get('surattertibjakonpenyelenggaraan3/{id}', [AndroidVersionController::class, 'showpenyelenggaraan'])->name('surattertibjakonpenyelenggaraan3.show');

// Route untuk surat tertib jakon usaha 1
Route::get('surattertibjakonpenyelenggaraan4/{id}', [AndroidVersionController::class, 'showpenyelenggaraan'])->name('surattertibjakonpenyelenggaraan4.show');

// Route untuk surat tertib jakon usaha 1
Route::get('surattertibjakonpenyelenggaraan5/{id}', [AndroidVersionController::class, 'showpenyelenggaraan'])->name('surattertibjakonpenyelenggaraan5.show');

// Route untuk surat tertib jakon usaha 1
Route::get('surattertibjakonpenyelenggaraan6/{id}', [AndroidVersionController::class, 'showpenyelenggaraan'])->name('surattertibjakonpenyelenggaraan6.show');


// MENU PENGAWASAN BUJK  ------------------------------------------------
Route::get('/respengawasanbujk', [AndroidVersionController::class, 'menurespengawasanbujk']);
Route::get('/respengawasanbujk/{namaperusahaan}', [AndroidVersionController::class, 'menurespengawasanbujkdetails']);

// MENU PENGAWASAN BUJK  ------------------------------------------------
Route::get('/reskecelakaankerja', [AndroidVersionController::class, 'menureskecelakaankerja']);
Route::get('/reskecelakaankerja/{id}', [AndroidVersionController::class, 'menureskecelakaankerjadetails']);

// ================================================ MENU F. AHSP
// MENU PEMBINAAN JASA KONSTRUKSI  ------------------------------------------------
Route::get('/resahsp', [AndroidVersionController::class, 'menuresahsp']);
// Route::get('/resbujkkontraktor', [AndroidVersionController::class, 'menubujkkontraktor']);
// Route::get('/resbujkkontraktor/{namalengkap}', [AndroidVersionController::class, 'menubujkkontraktordetails']);

// ================================================ MENU F. AHSP
// MENU RANTAI PASOK JASA KONSTRUKSI  ------------------------------------------------
Route::get('/resrantaipasok', [AndroidVersionController::class, 'menuresrantaipasok']);
// Route::get('/resbujkkontraktor', [AndroidVersionController::class, 'menubujkkontraktor']);
// Route::get('/resbujkkontraktor/{namalengkap}', [AndroidVersionController::class, 'menubujkkontraktordetails']);







// ==========================================================================================================================================
// ---------------------- BAGIAN 01 BERANDA HALAMAN DEPAN -----------------------//
// ==========================================================================================================================================
Route::get('/', [FedashboardController::class, 'index']);
Route::get('/web', [FedashboardController::class, 'web']);

Route::get('/404', function () {
    // return view('welcome');
    return view('404', [
        'title' => 'Under Constructions',
    ]);
});

Route::get('/kritikdansaran', [KritikdansaranController::class, 'index']);

// ==========================================================================================================================================
// ---------------------- BAGIAN 02 KELEMBAGAAN FRONTEND -----------------------//
// ==========================================================================================================================================
// ---------------------- MENU 1-----------------------------------------------------
Route::get('/profil/struktur', [StrukturController::class, 'strukturdpuprkabblora']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 2-----------------------------------------------------
Route::get('/profil/rencanastrategis', [StrukturController::class, 'rencanastrategisdpuprkabblora']);

// ---------------------- MENU 2-----------------------------------------------------
Route::get('/profil/tupoksi', [StrukturController::class, 'tupoksifekbb']);
// ___________________________________________________________________________________________________________________________________


// ==========================================================================================================================================
// ---------------------- BAGIAN 03 BERITA FRONTEND -----------------------//
// ==========================================================================================================================================
// ---------------------- MENU PERATURAN -----------------------------------------------------
// -------- BAGIAN 1 ---------------------------------
Route::get('/peraturan/undangundang', [PeraturanController::class, 'feundangundang']);
Route::get('/peraturan/undangundang/{judul}', [PeraturanController::class, 'undangundangshowByJudul']);
// ___________________________________________________________________________________________________________________________________

// -------- BAGIAN 2 ---------------------------------
Route::get('/peraturan/pemerintah', [PeraturanController::class, 'fepemerintah']);
Route::get('/peraturan/pemerintah/{judul}', [PeraturanController::class, 'pemerintahshowByJudul']);
// ___________________________________________________________________________________________________________________________________

// -------- BAGIAN 3 ---------------------------------
Route::get('/peraturan/presiden', [PeraturanController::class, 'fepresiden']);
Route::get('/peraturan/presiden/{judul}', [PeraturanController::class, 'presidenshowByJudul']);
// ___________________________________________________________________________________________________________________________________

// -------- BAGIAN 4 ---------------------------------
Route::get('/peraturan/menteri', [PeraturanController::class, 'fementeri']);
Route::get('/peraturan/menteri/{judul}', [PeraturanController::class, 'fementerishowByJudul']);
// ___________________________________________________________________________________________________________________________________

// -------- BAGIAN 5 ---------------------------------
Route::get('/peraturan/keputusanmenteri', [PeraturanController::class, 'feskmenteri']);
Route::get('/peraturan/keputusanmenteri/{judul}', [PeraturanController::class, 'feskmenterishowByJudul']);
// ___________________________________________________________________________________________________________________________________

// -------- BAGIAN 6 ---------------------------------
Route::get('/peraturan/suratedaranmenteri', [PeraturanController::class, 'suratedaranmenteri']);
Route::get('/peraturan/suratedaranmenteri/{judul}', [PeraturanController::class, 'suratedaranmenterishowByJudul']);
// ___________________________________________________________________________________________________________________________________

// -------- BAGIAN 7 ---------------------------------
Route::get('/peraturan/referensi', [PeraturanController::class, 'fereferensi']);
Route::get('/peraturan/referensi/{judul}', [PeraturanController::class, 'referensishowByJudul']);
// ___________________________________________________________________________________________________________________________________

// -------- BAGIAN 8 ---------------------------------
Route::get('/peraturan/daerah', [PeraturanController::class, 'feperdaerah']);
Route::get('/peraturan/daerah/{judul}', [PeraturanController::class, 'feperdaerahshowByJudul']);
// ___________________________________________________________________________________________________________________________________

// -------- BAGIAN 9 ---------------------------------
Route::get('/peraturan/peraturangubernur', [PeraturanController::class, 'feperaturangubernur']);
Route::get('/peraturan/gubernur/{judul}', [PeraturanController::class, 'gubernurshowByJudul']);
// ___________________________________________________________________________________________________________________________________

// -------- BAGIAN 10 ---------------------------------
Route::get('/peraturan/walikotadanbupati', [PeraturanController::class, 'feperbupatiwalikota']);
Route::get('/peraturan/walikotadanbupati/{judul}', [PeraturanController::class, 'feperbupatiwalikotashowByJudul']);
// ___________________________________________________________________________________________________________________________________

// -------- BAGIAN 11 ---------------------------------
Route::get('/peraturan/suratkeputusan', [PeraturanController::class, 'fesuratkeputusan']);
Route::get('/peraturan/suratkeputusan/{judul}', [PeraturanController::class, 'fesuratkeputusanshowByJudul']);
// ___________________________________________________________________________________________________________________________________

// -------- STANDAR BIAYA UMUM ---------------------------------
Route::get('/standarbiayaumummasjaki', [DatajakonController::class, 'newstandarbiayaumum']);
Route::get('/standarbiayaumummasjaki/{judul}', [DatajakonController::class, 'standarbiayaumumshowbyjudul']);
Route::get('/standarbiayaumumsbu1/{judul}', [DatajakonController::class, 'standarbiayaumumshowbyjudul1']);
Route::get('/standarbiayaumumsbu2/{judul}', [DatajakonController::class, 'standarbiayaumumshowbyjudul2']);
Route::get('/standarbiayaumumsbu3/{judul}', [DatajakonController::class, 'standarbiayaumumshowbyjudul3']);

Route::get('/datajakon/fesbulampiran3', [DatajakonController::class, 'fesbulampiran3']);
Route::get('/datajakon/fesbulampiran3/{judul}', [DatajakonController::class, 'fesbulampiran3showbyjudulfe']);

Route::get('/datajakon/fesbulampiran2', [DatajakonController::class, 'fesbulampiran2']);
Route::get('/datajakon/fesbulampiran2/{judul}', [DatajakonController::class, 'fesbulampiran2showbyjudulfe']);

Route::get('/datajakon/fesbulampiran1', [DatajakonController::class, 'fesbulampiran1']);
Route::get('/datajakon/fesbulampiran1/{judul}', [DatajakonController::class, 'fesbulampiran1showbyjudulfe']);
// ___________________________________________________________________________________________________________________________________


// ---------------------- MENU 2 BERITA JAKON -----------------------------------------------------
Route::get('/beritajakon', [BeritajakonController::class, 'index']);
Route::get('/beritajakon/{judulberita}', [BeritajakonController::class, 'showjudulberita']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 3 ARTIKEL JAKON -----------------------------------------------------
Route::get('/artikeljakon', [BeritajakonController::class, 'artikeljakon']);
Route::get('/artikeljakon/{judul}', [BeritajakonController::class, 'artikeljakonshow']);
// ___________________________________________________________________________________________________________________________________


// ==========================================================================================================================================
// ---------------------- BAGIAN 04 DATA JAKON  -----------------------//
// ==========================================================================================================================================
// ---------------------- MENU DATA BUJK KONTRAKTOR DAN KONSULTAN  -----------------------//
// ==========================================================================================================================================

// ---------------------- MENU 1 BUJK KONTRAKTOR -----------------------------------------------------
Route::get('/datajakon/bujkkontraktor', [BujkkontraktorController::class, 'bujkkontraktor'])->name('bujkkontraktor');
Route::get('/datajakon/bujkkontraktor/{namalengkap}', [BujkkontraktorController::class, 'bujkkontraktorshow']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 2 BUJK KONSULTAN -----------------------------------------------------
Route::get('/datajakon/bujkkonsultan', [BujkkonsultanController::class, 'bujkkonsultan']);
Route::get('/datajakon/bujkkonsultan/{namalengkap}', [BujkkonsultanController::class, 'bujkkonsultanshow']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 3 ASOSIASI MASJAKI  -----------------------------------------------------
Route::get('/datajakon/bujk', [BujkkontraktorController::class, 'index']);
Route::get('/datajakon/asosiasimasjaki', [BujkkontraktorController::class, 'asosiasimasjaki']);
Route::get('/datajakon/asosiasikonstruksi/{namaasosiasi}', [BujkkontraktorController::class, 'asosiasikonstruksishow']);
Route::get('/datajakon/asosiasikonsultan/{namaasosiasi}', [BujkkontraktorController::class, 'asosiasikonsultanshow']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 4 DATA STATISTIK BUJK   -----------------------------------------------------
Route::get('/datajakon/statistikabujkblora', [DatastatistikajakonbloraController::class, 'databujk']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU DATA TENAGA KERJA KONSTRUKSI  -----------------------//
// ==========================================================================================================================================

// ---------------------- MENU 1 SKK TENAGA KERJA DPUPR  -----------------------------------------------------
Route::get('/datajakon/skktenagakerja', [SkktenagakerjabloraController::class, 'index']);
Route::get('/datajakon/skktenagakerjablora', [SkktenagakerjabloraController::class, 'listskktenagakerjablora']);
Route::get('/datajakon/skktenagakerjablora/{nama}', [SkktenagakerjabloraController::class, 'listskktenagakerjablorashow']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 2 SEMUA SKK TENAGA KERJA   -----------------------------------------------------
Route::get('/datajakon/skktenagakerjabloralist', [SkktenagakerjabloraController::class, 'datalistskktenagakerjablora']);
Route::get('/datajakon/skktenagakerjabloralist/{nama}', [SkktenagakerjabloraController::class, 'datalistskktenagakerjablorashow']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 3 DATA STATISTIKA   -----------------------------------------------------
Route::get('/datajakon/statistikaskktenagakerjablora', [DatastatistikajakonbloraController::class, 'statistikaskktenagakerjablora']);
Route::get('/datajakon/statistikaskktenagakerjabloralist', [DatastatistikajakonbloraController::class, 'datastatistikaskktenagakerjablora']);

Route::get('/datajakon/statistikdatajenjang1', [DatastatistikajakonbloraController::class, 'datajenjang1']);
Route::get('/datajakon/statistikdatajenjang2', [DatastatistikajakonbloraController::class, 'datajenjang2']);
Route::get('/datajakon/statistikdatajenjang3', [DatastatistikajakonbloraController::class, 'datajenjang3']);
Route::get('/datajakon/statistikdatajenjang4', [DatastatistikajakonbloraController::class, 'datajenjang4']);
Route::get('/datajakon/statistikdatajenjang5', [DatastatistikajakonbloraController::class, 'datajenjang5']);
Route::get('/datajakon/statistikdatajenjang6', [DatastatistikajakonbloraController::class, 'datajenjang6']);
Route::get('/datajakon/statistikdatajenjang7', [DatastatistikajakonbloraController::class, 'datajenjang7']);
Route::get('/datajakon/statistikdatajenjang8', [DatastatistikajakonbloraController::class, 'datajenjang8']);
Route::get('/datajakon/statistikdatajenjang9', [DatastatistikajakonbloraController::class, 'datajenjang9']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU DATA PROFIL PAKET PEKERJAAN  -----------------------//
// ==========================================================================================================================================

// ---------------------- MENU 1 PROFIL PAKET PEKERJAAN   -----------------------------------------------------
Route::get('/datajakon/profilpaketpekerjaan', [PaketpekerjaanmasjakiController::class, 'paketpekerjaanmasjaki']);
Route::get('/datajakon/profilpaketpekerjaan/{id}', [PaketpekerjaanmasjakiController::class, 'paketpekerjaanshow']);
// ___________________________________________________________________________________________________________________________________


// ==========================================================================================================================================
// ---------------------- BAGIAN 05 PEMBINAA  -----------------------//
// ==========================================================================================================================================
// ---------------------- MENU 1 AGENDA PELATIHAN  -----------------------------------------------------
Route::get('/agendapembinaan', [PembinaanController::class, 'index']);
Route::get('/agendapembinaan/{namakegiatan}', [PembinaanController::class, 'namakegiatandaftar']);
// Route::get('/agendapembinaan/{id}', [PembinaanController::class, 'namakegiatandaftar'])->name('agendapembinaan');

// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 2 DAFTAR PESERTA PELATIHAN  -----------------------------------------------------
Route::get('/daftarpesertapelatihan', [PembinaanController::class, 'daftarpesertapelatihan']);
Route::get('/daftarpesertapelatihans/{namakegiatan}', [PembinaanController::class, 'daftarpesertapelatihanshow']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 3 DAFTAR SKK BIMBINGAN TEKNIS  -----------------------------------------------------
Route::get('/agendaskk', [AgendaskkController::class, 'index']);
Route::get('/agendaskk/{namakegiatan}', [AgendaskkController::class, 'daftaragendaskk']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 4 DAFTAR PESERTA SKK -----------------------------------------------------
Route::get('/daftarpesertaskk', [AgendaskkController::class, 'daftarpesertaskk']);
Route::get('/daftarpesertaskks/{namakegiatan}', [AgendaskkController::class, 'daftarpesertaskkshow']);
// _______ ALTERNATIF DATA YANG SUDAH DI BUATKAN ____________________________________________________________________________________________________________________________
Route::get('/skktenagakerjablora', [AllskktenagakerjabloraController::class, 'index']);
Route::get('/daftarskkblora/{nik}', [AllskktenagakerjabloraController::class, 'skktenagakerjablorashow']);
// ___________________________________________________________________________________________________________________________________

// ==========================================================================================================================================
// ---------------------- BAGIAN 06 PENGAWASAN  -----------------------//
// ==========================================================================================================================================
// ---------------------- MENU TERTIB JASA KONSTRUKSI  -----------------------//
// ==========================================================================================================================================

// ---------------------- MENU 1 TERTIB JAKON USAHA -----------------------------------------------------
Route::get('/tertibjasakonstruksilist', [TertibjasakonstruksiController::class, 'tertibjasakonstruksilist']);
Route::get('/tertibjasakonstruksilist/{namabadanusaha}', [TertibjasakonstruksiController::class, 'tertibjasakonstruksishow']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 2 TERTIB JAKON PEMANFAATAN -----------------------------------------------------
Route::get('/tertibjasakonstruksipemanfaatan', [TertibjasakonstruksiController::class, 'tertibjasakonstruksipemanfaatan']);
Route::get('/tertibjasakonstruksipemanfaatan/{namabangunan}', [TertibjasakonstruksiController::class, 'tertibjasakonstruksipemanfaatanshow']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 3 TERTIB JAKON PENYELENGGARAAN -----------------------------------------------------
Route::get('/tertibjasakonstruksipenyelenggaraan', [TertibjasakonstruksiController::class, 'tertibjasakonstruksipenyelenggaraan']);
Route::get('/tertibjasakonstruksipenyelenggaraan/{kegiatankonstruksi}', [TertibjasakonstruksiController::class, 'tertibjasakonstruksipenyelenggaraanshow']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 4 DATA STATISTIKA JAKON BLORA  -----------------------------------------------------
Route::get('/statistiktertibjakonblora', [DatastatistikajakonbloraController::class, 'tertibjakonblora']);
// ___________________________________________________________________________________________________________________________________



// ---------------------- MENU PENGAWASAN BUJK  -----------------------//
// ==========================================================================================================================================
Route::get('/pengawasanbujk', [PengawasanbujkController::class, 'index']);
Route::get('/pengawasanbujkshow/{namaperusahaan}', [PengawasanbujkController::class, 'bujkpengwasanshowmasjaki']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU KECELAKAAN KERJA  -----------------------//
// ==========================================================================================================================================

// ---------------------- MENU 1 DATA KECELAKAAN KERJA -----------------------------------------------------
Route::get('/kecelakaankerja', [KecelakaankerjamasjakiController::class, 'index']);
Route::get('/kecelakaankerjalist', [KecelakaankerjamasjakiController::class, 'kecelakaankerjalist']);
Route::get('/kecelakaankerjalist/{namapaketpekerjaan}', [KecelakaankerjamasjakiController::class, 'kecelakaankerjashow']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 2 DATA STATISTIKA KECELAKAAN KERJA -----------------------------------------------------

// ___________________________________________________________________________________________________________________________________


// ==========================================================================================================================================
// ---------------------- BAGIAN 07 AHSP HARGA KONSTRUKSI   -----------------------//
// ==========================================================================================================================================

// ---------------------- MENU AHSP KECIPTAKARYAAN  -----------------------//
// ==========================================================================================================================================

// ---------------------- MENU SATUAN HARGA DASAR  -----------------------//
// ==========================================================================================================================================


// ---------------------- MENU 1 SATUAN HARGA DASAR MATERIAL  -----------------------------------------------------
Route::get('/satuanhargamaterial', [SatuanhargamaterialController::class, 'index']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 2 SATUAN HARGA DASAR UPAH TENAGA KERJA  -----------------------------------------------------
Route::get('/satuanhargaupahtenaga', [SatuanhargamaterialController::class, 'satuanhargaupah']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 3 SATUAN HARGA DASAR PERALATAN  -----------------------------------------------------
Route::get('/satuanhargaperalatan', [SatuanhargamaterialController::class, 'satuanhargaperalatan']);
// ___________________________________________________________________________________________________________________________________


// ---------------------- HSP KONSTRUKSI UMUM  -----------------------//
// ==========================================================================================================================================
// ---------------------- MENU HSP DIVISI 1 SAMPAI 9 -----------------------------------------------------

Route::get('/hspdivisi1', [SatuanhargamaterialController::class, 'hspdivisi1']);
Route::get('/satuanhargadivisi1/{id}', [SatuanhargamaterialController::class, 'hspdivisi1show']);

Route::get('/hspdivisi2', [SatuanhargamaterialController::class, 'hspdivisi2']);
Route::get('/satuanhargadivisi2/{id}', [SatuanhargamaterialController::class, 'hspdivisi2show']);

Route::get('/hspdivisi3', [SatuanhargamaterialController::class, 'hspdivisi3']);
Route::get('/satuanhargadivisi3/{id}', [SatuanhargamaterialController::class, 'hspdivisi3show']);

Route::get('/hspdivisi4', [SatuanhargamaterialController::class, 'hspdivisi4']);
Route::get('/satuanhargadivisi4/{id}', [SatuanhargamaterialController::class, 'hspdivisi4show']);

Route::get('/hspdivisi5', [SatuanhargamaterialController::class, 'hspdivisi5']);
Route::get('/satuanhargadivisi5/{id}', [SatuanhargamaterialController::class, 'hspdivisi5show']);

Route::get('/hspdivisi6', [SatuanhargamaterialController::class, 'hspdivisi6']);
Route::get('/satuanhargadivisi6/{id}', [SatuanhargamaterialController::class, 'hspdivisi6show']);

Route::get('/hspdivisi7', [SatuanhargamaterialController::class, 'hspdivisi7']);
Route::get('/satuanhargadivisi7/{id}', [SatuanhargamaterialController::class, 'hspdivisi7show']);

Route::get('/hspdivisi8', [SatuanhargamaterialController::class, 'hspdivisi8']);
Route::get('/satuanhargadivisi8/{id}', [SatuanhargamaterialController::class, 'hspdivisi8show']);

Route::get('/hspdivisi9', [SatuanhargamaterialController::class, 'hspdivisi9']);
Route::get('/satuanhargadivisi9/{id}', [SatuanhargamaterialController::class, 'hspdivisi9show']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU SHST KAB BLORA  -----------------------//
// ==========================================================================================================================================
Route::get('/shstblora', [ShstbloraController::class, 'index']);
// ___________________________________________________________________________________________________________________________________


// ==========================================================================================================================================
// ---------------------- BAGIAN 08 RANTAI PASOK   -----------------------//
// ==========================================================================================================================================
// ---------------------- MENU 1 RANTAI PASOK ASURANSI KONSTRUKSI  -----------------------------------------------------
// BELUM DIBUAT

// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 2 RANTAI PASOK MATERIAL BAHAN BANGUNAN  -----------------------------------------------------
Route::get('/rantaipasokmaterial', [RantaipasokbloraController::class, 'index']);
Route::get('/rantaipasokmaterial/{distributor}', [RantaipasokbloraController::class, 'rantaipasokblorashow']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 3 RANTAI PASOK PERALATAN  -----------------------------------------------------
Route::get('/peralatankonstruksi', [RantaipasokbloraController::class, 'peralatankonstruksi']);
Route::get('/peralatankonstruksi/{namabadanusaha}', [RantaipasokbloraController::class, 'peralatankonstruksishow']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 4 RANTAI PASOK TOKO BANGUNAN   -----------------------------------------------------
Route::get('/tokobangunanblora', [TokobangunanbloraController::class, 'index']);
Route::get('/tokobangunanblora/{kecamatanblora}', [TokobangunanbloraController::class, 'tokobangunanblorashow']);
Route::get('/tokobangunanbloralist/{namatokobangunan}', [TokobangunanbloraController::class, 'tokobangunanbloralistdetails']);
// ___________________________________________________________________________________________________________________________________

// ================================================================================================================================================
// ================================================================================================================================================
// BACKEND MENU APLIKASI SIPJAKI DINAS PUPR PEMERINTAH KABUPATEN BLORA PROVINSI JAWA TENGAH
// ================================================================================================================================================

Route::get('/dashboard', [AdminDashboardController::class, 'index'])->middleware('auth');

// ======================================= BERANDA WEB -------------------------------------------------------------
// ---------------------- MENU 2 BERANDA  -----------------------------------------------------
// ---------------------- MENU 1 HEADER -----------------------------------------------------
Route::get('/header', [AdminDashboardController::class, 'header'])->middleware('auth');
Route::get('/header/update', [AdminDashboardController::class, 'headerupdate'])->middleware('auth');
// Route::get('/header/delete/{judul}', [AdminDashboardController::class, 'headerdelete'])->middleware('auth');
Route::delete('/header/delete/{judul}', [AdminDashboardController::class, 'headerdelete'])->middleware('auth');

// ___________________________________________________________________________________________________________________________________



// ======================================= KELEMBAGAAN BACKEND -------------------------------------------------------------
// ---------------------- MENU 1 STRUKTUR ORGANISASI  -----------------------------------------------------
Route::get('/bestrukturdinas', [StrukturController::class, 'strukturkedinasan'])->middleware(['auth', 'can:super_admin']);
// Route::get('/header/update', [AdminDashboardController::class, 'headerupdate'])->middleware('auth');
// Route::delete('/header/delete/{judul}', [AdminDashboardController::class, 'headerdelete'])->middleware('auth');

// ---------------------- MENU 2 PROFIL JASA KONSTRUKSI MAS JAKI   -----------------------------------------------------
// ___________________________________________________________________________________________________________________________________
Route::get('/beprofiljakon', [StrukturController::class, 'beprofiljakon'])->middleware(['auth', 'can:super_admin']);
// ___________________________________________________________________________________________________________________________________
// ___________________________________________________________________________________________________________________________________
Route::get('/beinformasiopd', [StrukturController::class, 'beinformasiopd'])->middleware(['auth', 'can:super_admin']);
// Route::get('/beinformasiopd/update/{judul}', [StrukturController::class, 'beinformasiopdupdate'])->middleware('auth');
Route::get('/beinformasiopd/update/{id}', [StrukturController::class, 'beinformasiopdupdate'])->middleware(['auth', 'can:super_admin'])->name('update.beinformasiopd');
Route::post('/beinformasiopd/updatecreate/{id}', [StrukturController::class, 'beinformasiopdupdatecreate'])->middleware(['auth', 'can:super_admin'])->name('update.beinformasiopdupdatecreate');

// ___________________________________________________________________________________________________________________________________
// ___________________________________________________________________________________________________________________________________
Route::get('/beinfoopd', [StrukturController::class, 'beinfoopd'])->middleware(['auth', 'can:super_admin']);
// Route::get('/beinfoopd/update/{judul}', [StrukturController::class, 'beinfoopdupdate'])->middleware('auth');
Route::get('/beinfoopd/update/{id}', [StrukturController::class, 'beinfoopdupdate'])->middleware(['auth', 'can:super_admin'])->name('update.beinfoopd');
Route::post('/beinfoopd/updatecreate/{id}', [StrukturController::class, 'beinfoopdupdatecreate'])->middleware(['auth', 'can:super_admin'])->name('update.beinfoopdupdatecreate');
// ___________________________________________________________________________________________________________________________________
// ___________________________________________________________________________________________________________________________________
Route::get('/bekepaladinas', [StrukturController::class, 'bekepaladinas'])->middleware(['auth', 'can:super_admin']);
// Route::get('/bekepaladinas/update/{namalengkap}', [StrukturController::class, 'bekepaladinasupdate'])->middleware('auth');
Route::get('/bekepaladinas/update/{id}', [StrukturController::class, 'bekepaladinasupdate'])->middleware(['auth', 'can:super_admin'])->name('update.bekepaladinas');
Route::post('/bekepaladinas/updatecreate/{id}', [StrukturController::class, 'bekepaladinasupdatecreate'])->middleware(['auth', 'can:super_admin'])->name('update.bekepaladinasupdatecreate');
// ___________________________________________________________________________________________________________________________________
// ___________________________________________________________________________________________________________________________________
Route::get('/bekabid', [StrukturController::class, 'bekabidbaru'])->middleware(['auth', 'can:super_admin']);
// Route::get('/bekabid/update/{namalengkap}', [StrukturController::class, 'bekabidshow'])->middleware('auth');
Route::get('/bekabid/update/{id}', [StrukturController::class, 'bekabidbaruupdate'])->middleware(['auth', 'can:super_admin'])->name('update.bekabidbaru');
Route::post('/bekabid/updatecreate/{id}', [StrukturController::class, 'bekabidbaruupdatecreate'])->middleware(['auth', 'can:super_admin'])->name('update.bekabidbaruupdatecreate');
// ___________________________________________________________________________________________________________________________________
// ___________________________________________________________________________________________________________________________________
Route::get('/besubbid', [StrukturController::class, 'besubbid'])->middleware(['auth', 'can:super_admin']);
// Route::get('/besubbid/update/{namalengkap}', [StrukturController::class, 'besubbidupdate'])->middleware('auth');
Route::get('/besubbid/update/{id}', [StrukturController::class, 'besubbidupdate'])->middleware(['auth', 'can:super_admin'])->name('update.besubbidupdate');
Route::post('/besubbid/updatecreate/{id}', [StrukturController::class, 'besubbidcreateupdate'])->middleware(['auth', 'can:super_admin'])->name('update.besubbidcreateupdate');
// ___________________________________________________________________________________________________________________________________
// ___________________________________________________________________________________________________________________________________
Route::get('/beinformasi', [StrukturController::class, 'beinformasi'])->middleware(['auth', 'can:super_admin']);
// Route::get('/beinformasi/update/{id}', [StrukturController::class, 'beinformasiupdate'])->middleware('auth');
Route::get('/beinformasi/update/{id}', [StrukturController::class, 'beinformasiupdate'])->middleware(['auth', 'can:super_admin'])->name('update.beinformasiupdate');
Route::post('/beinformasi/updatecreate/{id}', [StrukturController::class, 'beinformasicreateupdate'])->middleware(['auth', 'can:super_admin'])->name('update.beinformasiupdatecreate');
// ___________________________________________________________________________________________________________________________________
// ___________________________________________________________________________________________________________________________________
Route::get('/besipjaki', [StrukturController::class, 'besipjaki'])->middleware(['auth', 'can:super_admin']);
// Route::get('/besipjaki/update/{id}', [StrukturController::class, 'besipjakiupdate'])->middleware('auth');
Route::get('/besipjaki/update/{id}', [StrukturController::class, 'besipjakiupdate'])->middleware(['auth', 'can:super_admin'])->name('update.besipjakiupdate');
Route::post('/besipjaki/updatecreate/{id}', [StrukturController::class, 'besipjakicreateupdate'])->middleware(['auth', 'can:super_admin'])->name('update.besipjakicreateupdate');
// ___________________________________________________________________________________________________________________________________
// ___________________________________________________________________________________________________________________________________
Route::get('/bejabatan', [StrukturController::class, 'bejabatan'])->middleware(['auth', 'can:super_admin']);
Route::get('/bejabatan/update/{id}', [StrukturController::class, 'bejabatanupdate'])->middleware(['auth', 'can:super_admin'])->name('update.bejabatanupdate');
Route::post('/bejabatan/updatecreate/{id}', [StrukturController::class, 'bejabatancreateupdate'])->middleware(['auth', 'can:super_admin'])->name('update.bejabatancreateupdate');
Route::get('/bejabatan/create', [StrukturController::class, 'bejabatancreate'])->middleware(['auth', 'can:super_admin'])->name('create.bejabatancreate');
Route::post('/bejabatan/createnew', [StrukturController::class, 'bejabatancreatenew'])->middleware(['auth', 'can:super_admin'])->name('create.bejabatancreatenew');
Route::delete('/bejabatan/delete/{namalengkap}', [StrukturController::class, 'bejabatandelete'])->middleware(['auth', 'can:super_admin']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 3 TUPOKSI PROGRAM MAS JAKI -----------------------------------------------------
Route::get('/betupoksi', [StrukturController::class, 'betupoksi'])->middleware(['auth', 'can:super_admin']);
// Route::get('/betupoksi/update/{id}', [StrukturController::class, 'betupoksiupdate'])->middleware('auth');
Route::get('/betupoksi/update/{id}', [StrukturController::class, 'betupoksiupdate'])->middleware(['auth', 'can:super_admin'])->name('update.betupoksiupdate');
Route::post('/betupoksi/updatecreate/{id}', [StrukturController::class, 'betupoksicreateupdate'])->middleware(['auth', 'can:super_admin'])->name('update.betupoksicreateupdate');


// ======================================= BERITA JAKON BACKEND -------------------------------------------------------------
// ---------------------- MENU 1 DAFTAR BERITA MAS JAKI JAKON   -----------------------------------------------------
// ___________________________________________________________________________________________________________________________________
Route::get('/beberitajakon', [BeritajakonController::class, 'beberitajakon'])->middleware(['auth', 'can:super_admin']);
Route::get('/beberitajakon/show/{id}', [BeritajakonController::class, 'beberitajakonshow'])->middleware(['auth', 'can:super_admin']);
Route::get('/beberitajakon/update/{id}', [BeritajakonController::class, 'beberitajakonupdate'])->middleware(['auth', 'can:super_admin'])->name('update.beberitajakonupdate');
Route::post('/beberitajakon/updatecreate/{id}', [BeritajakonController::class, 'beberitajakoncreateupdate'])->middleware(['auth', 'can:super_admin'])->name('update.beberitajakoncreateupdate');
Route::get('/beberitajakon/create', [BeritajakonController::class, 'beberitajakoncreate'])->middleware(['auth', 'can:super_admin'])->name('create.beberitajakoncreate');
Route::post('/beberitajakon/createnew', [BeritajakonController::class, 'beberitajakoncreatenew'])->middleware(['auth', 'can:super_admin'])->name('create.beberitajakoncreatenew');
Route::delete('/beberitajakon/delete/{judulberita}', [BeritajakonController::class, 'beberitajakondelete'])->middleware(['auth', 'can:super_admin']);

// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 2 ARTIKEL JAKON MAS JAKI BLORA   -----------------------------------------------------
// ___________________________________________________________________________________________________________________________________
Route::get('/beartikeljakon', [BeritajakonController::class, 'beartikeljakon'])->middleware(['auth', 'can:super_admin']);
Route::get('/beartikeljakon/show/{id}', [BeritajakonController::class, 'beartikeljakonshow'])->middleware(['auth', 'can:super_admin']);
Route::get('/beartikeljakon/update/{id}', [BeritajakonController::class, 'beartikeljakonupdate'])->middleware(['auth', 'can:super_admin'])->name('update.beartikeljakonupdate');
Route::post('/beartikeljakon/updatecreate/{id}', [BeritajakonController::class, 'beartikeljakoncreateupdate'])->middleware(['auth', 'can:super_admin'])->name('update.beartikeljakoncreateupdate');
Route::get('/beartikeljakon/create', [BeritajakonController::class, 'beartikeljakoncreate'])->middleware(['auth', 'can:super_admin'])->name('create.beartikeljakoncreate');
Route::post('/beartikeljakon/createnew', [BeritajakonController::class, 'beartikeljakoncreatenew'])->middleware(['auth', 'can:super_admin'])->name('create.beartikeljakoncreatenew');
Route::delete('/beartikeljakon/delete/{judulberita}', [BeritajakonController::class, 'beartikeljakondelete'])->middleware(['auth', 'can:super_admin']);
// ___________________________________________________________________________________________________________________________________


// ======================================= DATA JAKON BACKEND -------------------------------------------------------------
// ---------------------- MENU 01 BUJK KONSTRUKSI   -----------------------------------------------------
// ___________________________________________________________________________________________________________________________________
Route::get('/bebujkjakon', [BujkkontraktorController::class, 'bebujkjakon'])->middleware(['auth', 'can:super_admin']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 1 BUJK KONSTRUKSI   -----------------------------------------------------
// ___________________________________________________________________________________________________________________________________
Route::get('/bebujkkonstruksi', [BujkkontraktorController::class, 'bebujkkonstruksi'])->middleware(['auth', 'can:super_admin']);
Route::get('/bebujkkonstruksi/show/{namalengkap}', [BujkkontraktorController::class, 'bebujkkonstruksishow'])->middleware(['auth', 'can:super_admin']);
Route::get('/bebujkkonstruksi/showsubklasifikasi/{namalengkap}', [BujkkontraktorController::class, 'bebujkkonstruksiklasifikasi'])->middleware(['auth', 'can:super_admin'])->name('bebujkkonstruksi.showsubklasifikasi');

Route::get('/bebujkkonstruksi/createsubklasifikasi/{namalengkap}', [BujkkontraktorController::class, 'bebujkkonstruksicreateklasifikasi'])->middleware(['auth', 'can:super_admin'])->name('bebujkkonstruksi.createklasifikasi');
Route::post('/bebujkkonstruksi/createsubklasifikasi/create', [BujkkontraktorController::class, 'bebujkkonstruksicreateklasifikasicreate'])->middleware(['auth', 'can:super_admin'])->name('bebujkkonstruksi.createklasifikasicreate');

Route::get('/bebujkkonstruksi/update/{id}', [BujkkontraktorController::class, 'bebujkkonstruksiupdate'])->middleware(['auth', 'can:super_admin'])->name('update.bebujkkonstruksiupdate');
Route::post('/bebujkkonstruksi/updatecreate/{id}', [BujkkontraktorController::class, 'bebujkkonstruksicreateupdate'])->middleware(['auth', 'can:super_admin'])->name('update.bebujkkonstruksicreateupdate');
Route::get('/bebujkkonstruksi/create', [BujkkontraktorController::class, 'bebujkkonstruksicreate'])->middleware(['auth', 'can:super_admin'])->name('create.bebujkkonstruksicreate');
Route::post('/bebujkkonstruksi/createnew', [BujkkontraktorController::class, 'bebujkkonstruksicreatenew'])->middleware(['auth', 'can:super_admin'])->name('create.bebujkkonstruksicreatenew');

Route::delete('/bebujkkonstruksi/delete/{namalengkap}', [BujkkontraktorController::class, 'bebujkkonstruksidelete'])->middleware(['auth', 'can:super_admin']);
Route::delete('/bebujkkonstruksiklasifikasi/delete/{id}', [BujkkontraktorController::class, 'bebujkkonstruksiklasifikasidelete'])->middleware(['auth', 'can:super_admin'])->name('bebujkkonstruksiklasifikasi.delete');
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 2 BUJK KONSULTASI KONSTRUKSI   -----------------------------------------------------
// ___________________________________________________________________________________________________________________________________
Route::get('/bebujkkonsultan', [BujkkonsultanController::class, 'bebujkkonsultan'])->middleware(['auth', 'can:super_admin']);
Route::get('/bebujkkonsultan/show/{namalengkap}', [BujkkonsultanController::class, 'bebujkkonsultanshow'])->middleware(['auth', 'can:super_admin']);
Route::get('/bebujkkonsultan/showsubklasifikasi/{namalengkap}', [BujkkonsultanController::class, 'bebujkkonsultanshowklasifikasi'])->middleware(['auth', 'can:super_admin']);

Route::get('/bebujkkonsultan/createsubklasifikasi/{namalengkap}', [BujkkonsultanController::class, 'bebujkkonsultancreateklasifikasi'])->middleware(['auth', 'can:super_admin'])->name('bebujkkonsultan.createklasifikasi');
Route::post('/bebujkkonsultan/createsubklasifikasi/create', [BujkkonsultanController::class, 'bebujkkonsultancreateklasifikasicreate'])->middleware(['auth', 'can:super_admin'])->name('bebujkkonsultan.createklasifikasicreate');

Route::get('/bebujkkonsultan/update/{id}', [BujkkonsultanController::class, 'bebujkkonsultanupdate'])->middleware(['auth', 'can:super_admin'])->name('update.bebujkkonsultanupdate');
Route::post('/bebujkkonsultan/updatecreate/{id}', [BujkkonsultanController::class, 'bebujkkonsultancreateupdate'])->middleware(['auth', 'can:super_admin'])->name('update.bebujkkonsultancreate');
Route::get('/bebujkkonsultan/create', [BujkkonsultanController::class, 'bebujkkonsultancreate'])->middleware(['auth', 'can:super_admin'])->name('create.bebujkkonsultancreate');
Route::post('/bebujkkonsultan/createnew', [BujkkonsultanController::class, 'bebujkkonsultancreatenew'])->middleware(['auth', 'can:super_admin'])->name('create.bebujkkonsultancreatenew');

Route::delete('/bebujkkonsultan/delete/{namalengkap}', [BujkkonsultanController::class, 'bebujkkonsultanshowdelete'])->middleware(['auth', 'can:super_admin']);
Route::delete('/bebujkkonsultanklasifikasi/delete/{id}', [BujkkonsultanController::class, 'bebujkkonsultanshowklasifikasidelete'])->middleware(['auth', 'can:super_admin'])->name('bebujkkonsultanklasifikasi.delete');
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 3 DATA ASOSIASI JASA KONSTRUKSI   -----------------------------------------------------
// ___________________________________________________________________________________________________________________________________
Route::get('/beasosiasi', [BujkkontraktorController::class, 'beasosiasi'])->middleware(['auth', 'can:super_admin']);
Route::get('/beasosiasi/create', [BujkkontraktorController::class, 'beasosiasicreate'])->middleware(['auth', 'can:super_admin']);
Route::post('/beasosiasi/createnew', [BujkkontraktorController::class, 'beasosiasicreatenew'])->middleware(['auth', 'can:super_admin'])->name('create.asosiasimasjakicreatenew');
Route::get('/beasosiasi/show/{namaasosiasi}', [BujkkontraktorController::class, 'beasosiasishow'])->middleware(['auth', 'can:super_admin']);
Route::delete('/beasosiasi/delete/{namaasosiasi}', [BujkkontraktorController::class, 'beasosiasidelete'])->middleware(['auth', 'can:super_admin']);
Route::get('/beasosiasi/update/{id}', [BujkkontraktorController::class, 'beasosiasiupdate'])->middleware(['auth', 'can:super_admin'])->name('beasosiasiupdate');
Route::post('/beasosiasi/updatecreate/{id}', [BujkkontraktorController::class, 'beasosiasiupdatecreate'])->middleware(['auth', 'can:super_admin'])->name('beasosiasiupdatecreate');
// ___________________________________________________________________________________________________________________________________


// ---------------------- MENU 02 DATA SKK TENAGA KERJA DISELENGGARAKAN DPUPR KABUPATEN BLORA -----------------------------------------------------
// ________________________________________________________________________________________________________________
// ---------------------- MENU 1 DATA SKK TENAGA KERJA DISELENGGARAKAN DPUPR KABUPATEN BLORA -----------------------------------------------------
// ___________________________________________________________________________________________________________________________________
Route::get('/beskkdpupr', [SkktenagakerjabloraController::class, 'beskkdpupr'])->middleware(['auth', 'can:super_admin']);
Route::get('/beskkdpupr/show/{nama}', [SkktenagakerjabloraController::class, 'beskkdpuprshow'])->middleware(['auth', 'can:super_admin']);
Route::delete('/beskkdpupr/delete/{nama}', [SkktenagakerjabloraController::class, 'beskkdpuprdelete'])->middleware(['auth', 'can:super_admin']);
Route::get('/beskkdpupr/update/{nama}', [SkktenagakerjabloraController::class, 'beskkdpuprupdate'])->middleware(['auth', 'can:super_admin']);
Route::post('/beskkdpupr/updatecreate/{nama}', [SkktenagakerjabloraController::class, 'beskkdpuprupdatecreate'])->middleware(['auth', 'can:super_admin'])->name('update.beskkdpuprupdate');
// ___________________________________________________________________________________________________________________________________

// ________________________________________________________________________________________________________________
// ---------------------- MENU 2 DATA SEMUA SKK TENAGA KERJA KABUPATEN BLORA -----------------------------------------------------
// ___________________________________________________________________________________________________________________________________
Route::get('/beskkallblora', [SkktenagakerjabloraController::class, 'beskkall'])->middleware(['auth', 'can:super_admin']);
Route::get('/beskkallblora/show/{nama}', [SkktenagakerjabloraController::class, 'beskkallshow'])->middleware(['auth', 'can:super_admin']);
Route::delete('/beskkallblora/delete/{nama}', [SkktenagakerjabloraController::class, 'beskkalldelete'])->middleware(['auth', 'can:super_admin']);
Route::get('/beskkallblora/update/{nama}', [SkktenagakerjabloraController::class, 'beskkallbloraupdate'])->middleware(['auth', 'can:super_admin']);
Route::post('/beskkallblora/updatecreate/{id}', [SkktenagakerjabloraController::class, 'beskkallbloracreateupdate'])->middleware(['auth', 'can:super_admin'])->name('update.beallskkupdate');
Route::get('/beskkallblora/create', [SkktenagakerjabloraController::class, 'beskkallbloracreate'])->middleware(['auth', 'can:super_admin']);
Route::post('/beskkallblora/createnew', [SkktenagakerjabloraController::class, 'beskkallbloracreatenew'])->middleware(['auth', 'can:super_admin'])->name('create.beallskkcreate');
// ___________________________________________________________________________________________________________________________________

// ________________________________________________________________________________________________________________
// ---------------------- MENU 3 PROFIL PAKET PEKERJAAN -----------------------------------------------------
// ___________________________________________________________________________________________________________________________________
Route::get('/bepaketpekerjaan', [PaketpekerjaanmasjakiController::class, 'bepaketpekerjaan'])->middleware(['auth', 'can:super_admin']);
Route::get('/bepaketpekerjaan/showsurat/{id}', [PaketpekerjaanmasjakiController::class, 'bepaketpekerjaanshowsurat'])->middleware(['auth', 'can:super_admin']);


// BELUM DI BUATKAN
// Route::get('/bebujkkonstruksi/createsubklasifikasi/{namalengkap}', [BujkkontraktorController::class, 'bebujkkonstruksicreateklasifikasi'])->middleware('auth')->name('bebujkkonstruksi.createklasifikasi');
// Route::post('/bebujkkonstruksi/createsubklasifikasi/create', [BujkkontraktorController::class, 'bebujkkonstruksicreateklasifikasicreate'])->middleware('auth')->name('bebujkkonstruksi.createklasifikasicreate');

// HAK AKSES PRIBADI ATAU DINAS
Route::get('/bepaketpekerjaandinas', [PaketpekerjaanmasjakiController::class, 'bepaketpekerjaandinas'])->middleware(['auth', 'can:super_admin']);




Route::get('/bepaketpekerjaan/show/{namapekerjaan}', [PaketpekerjaanmasjakiController::class, 'bepaketpekerjaanshow'])->middleware(['auth', 'can:super_admin']);
Route::delete('/bepaketpekerjaan/delete/{namapekerjaan}', [PaketpekerjaanmasjakiController::class, 'bepaketpekerjaandelete'])->middleware(['auth', 'can:super_admin']);

// SURAT SURAT PROFIL PAKET PEKERJAAN
Route::get('/bepekerjaandetails/{id}', [PaketpekerjaanmasjakiController::class, 'bepekerjaandetails'])->middleware(['auth', 'can:super_admin']);

Route::get('/bedetailspekerjaan/{id}', [PaketpekerjaanmasjakiController::class, 'bepekerjaansurat2'])->middleware(['auth', 'can:super_admin']);

Route::get('/bedetailsspk/{id}', [PaketpekerjaanmasjakiController::class, 'bepekerjaansurat3'])->middleware(['auth', 'can:super_admin']);

Route::get('/bedetailsskk/{id}', [PaketpekerjaanmasjakiController::class, 'bepekerjaansurat4'])->middleware(['auth', 'can:super_admin']);

Route::get('/bedetailsuratperjanjianpekerjaan/{id}', [PaketpekerjaanmasjakiController::class, 'besuratperjanjianpekerjaansurat5'])->middleware(['auth', 'can:super_admin']);


// ___________________________________________________________________________________________________________________________________
Route::get('/bepengawasanbujk', [PengawasanbujkController::class, 'bepengawasanbujk'])->middleware(['auth', 'can:super_admin']);
Route::get('/bepengawasanbujk/show/{id}', [PengawasanbujkController::class, 'bepengawasanbujkshow'])->middleware(['auth', 'can:super_admin']);
Route::get('/bepengawasanbujk/update/{id}', [PengawasanbujkController::class, 'bepengawasanbujkupdatecreate'])->middleware(['auth', 'can:super_admin'])->name('updatepengwasanbujk');
Route::put('/bepengawasanbujk/updatecreate/{id}', [PengawasanbujkController::class, 'bepengawasanbujkupdatecreatenew'])->middleware(['auth', 'can:super_admin'])->name('updatepengwasanbujknew');


Route::get('/bepengawasanbujk/create', [PengawasanbujkController::class, 'bepengawasanbujkcreate'])->middleware(['auth', 'can:super_admin']);
Route::post('/bepengawasanbujk/createnew', [PengawasanbujkController::class, 'bepengawasanbujkcreatenew'])->middleware(['auth', 'can:super_admin'])->name('createpengawasanbujknew');
Route::delete('/bepengawasanbujk/delete/{id}', [PengawasanbujkController::class, 'bepengawasanbujkdelete'])->middleware(['auth', 'can:super_admin']);

// ======================================= MENU AGENDA PEMBINAAN  -------------------------------------------------------------
// ---------------------- MENU 01 AGENDA PELATIHAN   -----------------------------------------------------
// ___________________________________________________________________________________________________________________________________
Route::get('/beagendapelatihan', [PembinaanController::class, 'beagendapelatihan'])->middleware('auth');
Route::get('/beagendapelatihanpeserta/show/{id}', [PembinaanController::class, 'beagendapelatihanshowpeserta'])->middleware('auth');

Route::get('/beagendapelatihan/show/{namakegiatan}', [PembinaanController::class, 'beagendapelatihanshow'])->middleware('auth');
Route::delete('/beagendapelatihanpeserta/delete/{id}', [PembinaanController::class, 'beagendapelatihanpesertadelete'])->middleware('auth');
Route::delete('/beagendapelatihan/delete/{namakegiatan}', [PembinaanController::class, 'beagendapelatihandelete'])->middleware('auth');

Route::get('/beagendapelatihan/update/{namakegiatan}', [PembinaanController::class, 'beagendapelatihanupdate'])->middleware('auth')->name('beagendapelatihanupdate');
Route::post('/beagendapelatihan/updatecreate/{id}', [PembinaanController::class, 'beagendapelatihanupdatecreate'])->middleware('auth')->name('update.beagendapelatihancreate');

Route::get('/beagendapelatihan/create', [PembinaanController::class, 'beagendapelatihancreate'])->middleware('auth')->name('beagendapelatihancreate');
Route::post('/beagendapelatihan/createnew', [PembinaanController::class, 'beagendapelatihancreatenew'])->middleware('auth')->name('beagendapelatihancreatenew');

Route::get('/beagendapelatihanmateri/{id}', [PembinaanController::class, 'beagendapelatihanmateri'])->middleware('auth')->name('beagendapelatihanmateri');
Route::delete('/beagendapelatihanmateri/delete/{id}', [PembinaanController::class, 'beagendapelatihanmateridelete'])->middleware('auth')->name('beagendapelatihanmateridelete');

// ROUTE PENGAMBILAN DATA ID
Route::get('/beagendapelatihanmateri/createmateri/{id}', [PembinaanController::class, 'beagendapelatihanmatericreate'])->middleware('auth')->name('beagendapelatihanmatericreate');
Route::post('/beagendapelatihanmateri/createmateri/new', [PembinaanController::class, 'beagendapelatihanmatericreatenew'])->middleware('auth')->name('beagendapelatihanmatericreatenew');


// Route::get('/beagendapelatihanmateri', [PembinaanController::class, 'beagendapelatihanmateri'])->middleware('auth');


// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 02 PESERTA PELATIHAN   -----------------------------------------------------
// ___________________________________________________________________________________________________________________________________
Route::get('/bepesertapelatihanindex', [PesertapelatihanController::class, 'bepesertapelatihanindex'])->middleware('auth');
Route::get('/bepesertapelatihan', [PesertapelatihanController::class, 'bepesertapelatihan'])->middleware('auth');
Route::get('/bepesertapelatihan/show/{name}', [PesertapelatihanController::class, 'bepesertapelatihanshow'])->middleware('auth');
Route::delete('/bepesertapelatihan/delete/{id}', [PesertapelatihanController::class, 'bepesertapelatihandelete'])->middleware('auth');

// Route::get('/bepesertapelatihansertifikat/show/{id}', [PesertapelatihanController::class, 'bepesertapelatihansertifikat'])->middleware('auth')->name('bepesertauploadsertifikat.show');

Route::get('/bepesertapelatihansertifikat/show/{id}', [PesertapelatihanController::class, 'bepesertapelatihansertifikat'])
    ->middleware('auth')
    ->name('bepesertauploadsertifikat.show');

Route::get('/bepesertapuploadsertifikat/show/{id}', [PesertapelatihanController::class, 'bepesertauploadsertifikat'])->middleware('auth')->name('bepesertauploadsertifikat.show1');
Route::get('/bepesertapuploadsertifikatres/show/{id}', [PesertapelatihanController::class, 'bepesertauploadsertifikatandroid'])->name('bepesertauploadsertifikat.show2');

Route::post('/bepesertapuploadsertifikat/create/{id}', [PesertapelatihanController::class, 'bepesertauploadsertifikatupload'])->middleware('auth')->name('bepesertauploadsertifikatupload');

Route::get('/bepelatihanjampelajaran/{id}', [PesertapelatihanController::class, 'bepelatihanjampelajaran'])->middleware('auth')->name('bepelatihanjampelajaran');

Route::delete('/bepelatihanjampelajaran/delete/{id}', [PesertapelatihanController::class, 'bepelatihanjampelajarandelete'])->middleware('auth')->name('bepelatihanjampelajarandelete');

Route::get('/bepelatihanjampelajaran/createjam/{id}', [PesertapelatihanController::class, 'bepelatihanjampelajarancreate'])->middleware('auth')->name('bepelatihanjampelajarantenagakerja');
Route::post('/bepelatihanjampelajaran/createjam/create', [PesertapelatihanController::class, 'bepelatihanjampelajarancreatenew'])->middleware('auth')->name('bepelatihanjampelajarantenagakerjacreate');

// HAK AKSES AKUN LSP PENERBIT UNTUK PELATIHAN DAN SKK
Route::get('/beakseslsppenerbit', [PesertapelatihanController::class, 'beakseslsppenerbit'])->middleware('auth');

// HAK AKSES PESERTA UNTK DAFTAR

Route::get('/daftarpesertapelatihan/create/{id}', [PesertapelatihanController::class, 'daftarpesertapelatihan'])->name('daftarpesertapelatihan');
Route::post('/daftarpesertapelatihan/createmateri/new', [PesertapelatihanController::class, 'daftarpesertapelatihancreatenew'])->name('daftarpesertapelatihancreatenew');




// ___________________________________________________________________________________________________________________________________


// ---------------------- MENU 03 AGENDA SKK MAS JAKI BLORA JAWA TENGAH    -----------------------------------------------------
// ___________________________________________________________________________________________________________________________________
// Route::get('/beagendaskk', [PembinaanController::class, 'beagendaskk'])->middleware('auth');
// Route::get('/beagendaskkpeserta/show/{namakegiatan}', [PembinaanController::class, 'beagendaskkpeserta'])->middleware('auth');
// Route::get('/beagendaskk/show/{namakegiatan}', [PembinaanController::class, 'beagendaskkshow'])->middleware('auth');
// Route::delete('/beagendaskkpeserta/delete/{id}', [PembinaanController::class, 'beagendaskkdeletepeserta'])->middleware('auth');
// Route::delete('/beagendaskk/delete/{namakegiatan}', [PembinaanController::class, 'beagendaskkdelete'])->middleware('auth');
// ___________________________________________________________________________________________________________________________________

Route::get('/beagendaskk', [PembinaanController::class, 'beagendaskk'])->middleware('auth');
Route::get('/beagendaskkmateri/{id}', [PembinaanController::class, 'beagendaskkmateri'])->middleware('auth')->name('beagendaskkmateri');

Route::delete('/beagendaskkmateri/delete/{namakegiatan}', [PembinaanController::class, 'beagendaskkmateridelete'])->middleware('auth');
Route::delete('/beagendaskkpeserta/delete/{id}', [PembinaanController::class, 'beagendaskkpesertadelete'])->middleware('auth');

Route::get('/beagendaskk/show/{namakegiatan}', [PembinaanController::class, 'beagendaskkshow'])->middleware('auth');
Route::get('/beagendaskk/update/{namakegiatan}', [PembinaanController::class, 'beagendaskkupdate'])->middleware('auth')->name('beagendaskkupdate');

Route::post('/beagendaskk/updatecreate/{id}', [PembinaanController::class, 'beagendaskkupdatecreate'])->middleware('auth')->name('update.beagendaskkcreate');

Route::get('/beagendaskk/create', [PembinaanController::class, 'beagendaskkcreate'])->middleware('auth')->name('beagendaskkcreate');
Route::post('/beagendaskk/createnew', [PembinaanController::class, 'beagendaskkcreatenew'])->middleware('auth')->name('beagendaskkcreatenew');

Route::delete('/beagendaskkmateriskk/delete/{id}', [PembinaanController::class, 'beagendaskkmaterideleteskk'])->middleware('auth')->name('beagendaskkmaterideleteskk');

Route::get('/daftarpesertasertifikasiskk/create/{id}', [AgendaskkController::class, 'daftarpesertasertifikasiskknew'])->middleware('auth')->name('daftarpesertasertifikasiskk');
Route::post('/daftarpesertasertifikasiskk/createpeserta/new', [AgendaskkController::class, 'daftarpesertasertifikasiskkcreatenew'])->middleware('auth')->name('daftarpesertasertifikasiskkcreatenew');
Route::post('/daftarpesertasertifikasiskk2/createpeserta2/new', [AgendaskkController::class, 'daftarpesertasertifikasiskkcreatenew2'])->middleware('auth')->name('daftarpesertasertifikasiskkcreatenew2');

Route::post('/daftarpesertasertifikasiskkt/createmateri/new', [AgendaskkController::class, 'daftarpesertasertifikasiskkcreateskkt'])->middleware('auth')->name('daftarpesertasertifikasiskkawalan');



Route::get('/beagendaskkpeserta/show/{id}', [PembinaanController::class, 'beagendaskkpesertashow'])->middleware('auth');
Route::get('/bepesertaskkshowberkas/show/{id}', [PembinaanController::class, 'bepesertaskkshowberkas'])->middleware('auth');

// SERTIFIKAT SKK
Route::get('/besertifikatskk/{id}', [PembinaanController::class, 'besertifikatskk'])->middleware('auth');
Route::put('/besertifikatskkcreate/{id}', [PembinaanController::class, 'besertifikatskkputupdate'])->middleware('auth')->name('update.besertifikatskkputupdate');

Route::post('/peserta/downloadberkas/{id}', [PembinaanController::class, 'downloadSemuaBerkas'])->middleware('auth')->name('peserta.downloadSemua');

Route::get('/perbaikandataskk/{id}', [PembinaanController::class, 'perbaikandataskk'])->middleware('auth');
Route::post('/perbaikandataskk/createnew/{id}', [PembinaanController::class, 'perbaikandataskkupdate'])->middleware('auth')->name('berkasperbaikandatapeserta');



// DASHBOARD PESERTA
Route::get('/bepesertaskkshowberkas/show/{agenda_id}/{user_id}', [PembinaanController::class, 'bepesertaskkshowberkasakunpeserta'])->middleware('auth');


Route::get('/beagendaskkdatapeserta', [PembinaanController::class, 'beagendaskkdatapeserta'])->middleware('auth');

Route::get('/beskkdatapesertajumlah/show/{id}', [AgendaskkController::class, 'beskkdatapesertajumlah'])->middleware('auth')->name('beskkdatapesertasertifikatupload');


Route::get('/beakseslsppenerbitskk', [PembinaanController::class, 'beakseslsppenerbitskk'])->middleware('auth');

Route::get('/beagendaskkmateri/createmateri/{id}', [PembinaanController::class, 'beagendaskkmatericreate'])->middleware('auth')->name('beagendaskkmatericreate');
Route::post('/beagendaskkmateri/createmateri/new', [PembinaanController::class, 'beagendaskkmatericreatenew'])->middleware('auth')->name('beagendaskkmatericreatenew');

// HAK AKSES PEKERJA

Route::get('/hakaksespekerjaskk', [HakAksesController::class, 'agendaskkpeserta'])->middleware('auth');
Route::get('/hakaksespekerjaberkas', [HakAksesController::class, 'agendaskkpesertaberkas'])->middleware('auth');
Route::get('/downsertifikatskk', [HakAksesController::class, 'downsertifikatskk'])->middleware('auth');

Route::get('/hakaksespekerjaskkdaftar', [HakAksesController::class, 'hakaksespekerjaskkdaftar'])->middleware('auth');
// VERIFIKASI BERKAS PESERTA SKK
Route::put('/validasidokumenpesertaskk/{id}', [VerifikasiController::class, 'validasidokumenpesertaskk'])->middleware('auth')->name('validasidokumenpesertaskk');



// ROUTE UNTUK VERIFIKASI BOOLEADN

Route::put('/verifikasipesertapelatihan/{id}', [VerifikasiController::class, 'verifikasipesertapelatihan'])->middleware('auth')->name('verifikasi.updatepesertapelatihan');
Route::put('/verifikasikehadiran/{id}', [VerifikasiController::class, 'verifikasikehadiran'])->middleware('auth')->name('verifikasikehadiran');

Route::put('/verifikasipesertasertifikasi/{id}', [VerifikasiController::class, 'verifikasipesertasertifikasinew'])->middleware('auth')->name('verifikasipesertasertifikasi');


Route::post('/verifikasiktp/{id}', [VerifikasiController::class, 'verifikasiktp'])->middleware('auth')->name('validasi.ktp');

Route::put('/verifikasikehadiranlsp/{id}', [VerifikasiController::class, 'verifikasikehadiranlsp'])->name('verifikasilsp.update');

Route::put('/verifikasikehadiranlsphadir/{id}', [VerifikasiController::class, 'verifikasikehadiranlsphadir'])->name('verifikasikehadiranlsp');
Route::put('/terbitkansertifikat/{id}', [VerifikasiController::class, 'terbitkansertifikat'])->name('terbitkan.sertifikat');

Route::put('/verifikasipupesertaskk/{id}', [VerifikasiController::class, 'verifikasipupesertaskk'])->middleware('auth')->name('verifikasipupesertaskk');


// ---------------------- MENU PENGAWASAN TERTIB JAKON USAHA BACKEND    -----------------------------------------------------
// ___________________________________________________________________________________________________________________________________
Route::get('/betertibjakonusaha', [TertibjasakonstruksiController::class, 'betertibjakonusaha'])->middleware('auth')->name('bertertibjakonusaha');
Route::delete('/betertibjakonusaha/delete/{id}', [TertibjasakonstruksiController::class, 'betertibjakonusahadelete'])->middleware('auth');

Route::get('/betertibjakonusaha/create', [TertibjasakonstruksiController::class, 'betertibjakonusahacreate'])->middleware('auth')->name('betertibjakonusahacreate');
Route::post('/betertibjakonusaha/createnew', [TertibjasakonstruksiController::class, 'betertibjakonusahacreatenew'])->middleware('auth')->name('betertibjakonusahacreatenew');

Route::get('/betertibjakonusaha/update/{id}', [TertibjasakonstruksiController::class, 'betertibjakonusahaupdate'])->middleware('auth')->name('betertibjakonusahaupdate');
Route::post('/betertibjakonusaha/updatecreate/{id}', [TertibjasakonstruksiController::class, 'betertibjakonusahaupdatecreate'])->middleware('auth')->name('betertibjakonusahaupdatecreate');

Route::delete('/betertibjakonusahadel/delete/{id}', [TertibjasakonstruksiController::class, 'betertibjakonusahadeletejakonusaha'])->middleware('auth')->name('betertibjakonusahadeletejakonusaha');


// SURAT DUKUNG TERTIB JAKON USAHA
// Route::get('/betertibjakonusahasurat1/update/{id}', [TertibjasakonstruksiController::class, 'betertibjakonusahasurat1'])->middleware(['auth', 'can:super_admin'])->name('betertibjakonusahasurat1');

// PEMBUATAN SURAT 1
Route::get('/betertibjakonusahasurat1/create/{id}', [TertibjasakonstruksiController::class, 'betertibjakonusahasurat1'])->middleware('auth')->name('betertibjakonusahasurat1');

Route::get('/betertibjakonusahasuratpercobaan/create/{id}', [TertibjasakonstruksiController::class, 'betertibjakonusahasuratpercobaan'])->middleware('auth')->name('betertibjakonusahasurat1indexsurat');
Route::get('/betertibjakonusahasurat1/createnew/{id}', [TertibjasakonstruksiController::class, 'betertibjakonusahasuratnewberkas'])->middleware('auth')->name('betertibjakonusahasurat1');
// Route::post('/betertibjakonusahasurat1/updatecreate', [TertibjasakonstruksiController::class, 'betertibjakonusahasurat1create'])->middleware(['auth', 'can:super_admin'])->name('betertibjakonusahasurat1create');
Route::get('/betertibjakonusahasurat1/createberkas/{id}', [TertibjasakonstruksiController::class, 'betertibjakonusahasurat1createnew'])->middleware('auth')->name('betertibjakonusahasurat1newberkas');
Route::post('/betertibjakonusahasurat1/createberkasnew', [TertibjasakonstruksiController::class, 'betertibjakonusahasurat1createnewsurat'])->middleware('auth')->name('betertibjakonusahasurat1createnewsurat');

Route::get('/betertibjakonusahasurat1/update/{id}', [TertibjasakonstruksiController::class, 'betertibjakonusahasurat1updatenew'])->middleware('auth')->name('betertibjakonusahasurat1updatenew');


// SURAT DUKUNG TERTIB JAKON USAHA SURAT 2 SEGMENTASI PASAR
Route::get('/betertibjakonusahasegmentasipasar/index/{id}', [TertibjasakonstruksiController::class, 'betertibjakonusahasegmentasipasar'])->middleware('auth')->name('betertibjakonusahasurat2indexsurat');
Route::get('/betertibjakonusahasegmentasipasar/createberkas/{id}', [TertibjasakonstruksiController::class, 'betertibjakonusahasegmentasipasarcreateberkas'])->middleware('auth')->name('betertibjakonusahasegmentasipasarberkas');

Route::post('/betertibjakonusahasegmentasipasar/createberkasnew', [TertibjasakonstruksiController::class, 'betertibjakonusahasegmentasipasarcreatenewberkas'])->middleware('auth')->name('betertibjakonusahasegmentasipasarbuatberkas');

Route::delete('/betertibjakonusahasegmentasipasar/delete/{id}', [TertibjasakonstruksiController::class, 'betertibjakonusahasegmentasipasardelete'])->middleware('auth')->name('betertibjakonusahadeletesegmentasipasar');
Route::get('/betertibjakonusahasegmentasipasar/show/{id}', [TertibjasakonstruksiController::class, 'betertibjakonusahasegmentasipasarshow'])->middleware('auth')->name('betertibjakonusahasegmentasipasarshow');

// SURAT DUKUNG TERTIB JAKON USAHA SURAT 3 PEMENUHAN SYARAT
Route::get('/betertibjakonusahapemenuhansyarat/index/{id}', [TertibjasakonstruksiController::class, 'betertibjakonusahapemenuhansyarat'])->middleware('auth')->name('betertibjakonusahapemenuhansyaratindex');
Route::get('/betertibjakonusahapemenuhansyarat/show/{id}', [TertibjasakonstruksiController::class, 'betertibjakonusahapemenuhansyaratshow'])->middleware('auth')->name('betertibjakonusahapemenuhansyaratshow');

Route::get('/betertibjakonusahapemenuhansyarat/createberkas/{id}', [TertibjasakonstruksiController::class, 'betertibjakonusahapemenuhansyaratcreateberkas'])->middleware('auth')->name('betertibjakonusahapemenuhansyaratcreateberkas');
Route::post('/betertibjakonusahapemenuhansyarat/createberkasnew', [TertibjasakonstruksiController::class, 'betertibjakonusahapemenuhansyaratcreateberkasnew'])->middleware('auth')->name('betertibjakonusahapemenuhansyaratnewberkas');

Route::delete('/betertibjakonusahapemenuhansyaratdelete/delete/{id}', [TertibjasakonstruksiController::class, 'betertibjakonusahapemenuhansyaratdelete'])->middleware('auth')->name('betertibjakonusahapemenuhansyaratdelete');


// SURAT DUKUNG TERTIB JAKON USAHA 4 PELAKSANA PENGEMBANGAN USAHA
Route::get('/betertibjakonusahapelaksana/index/{id}', [TertibjasakonstruksiController::class, 'betertibjakonusahapelaksana'])->middleware('auth')->name('betertibjakonusahapelaksanaindex');
Route::get('/betertibjakonusahapelaksana/show/{id}', [TertibjasakonstruksiController::class, 'betertibjakonusahapelaksanashow'])->middleware('auth')->name('betertibjakonusahapelaksanashow');

Route::get('/betertibjakonusahapelaksana/createberkas/{id}', [TertibjasakonstruksiController::class, 'betertibjakonusahapelaksanacreateberkas'])->middleware('auth')->name('betertibjakonusahapelaksanacreateberkas');
Route::post('/betertibjakonusahapelaksana/createberkasnew', [TertibjasakonstruksiController::class, 'betertibjakonusahapelaksananewberkascreate'])->middleware('auth')->name('betertibjakonusahapelaksananewberkas');

Route::delete('/betertibjakonusahapelaksanadelete/delete/{id}', [TertibjasakonstruksiController::class, 'betertibjakonusahapelaksanadelete'])->middleware('auth')->name('betertibjakonusahapelaksanadelete');

// SURAT TERTIB JAKON PEMANFAATAN
Route::get('/betertibjakonpemanfaatan', [TertibjasakonstruksiController::class, 'betertibjakonpemanfaatan'])->middleware('auth')->name('betertibjakonpemanfaatanindexlist');

Route::get('/betertibjakonpemanfaatan/create', [TertibjasakonstruksiController::class, 'betertibjakonpemanfaatancreate'])->middleware('auth');
Route::post('/betertibjakonpemanfaatan/createnew', [TertibjasakonstruksiController::class, 'betertibjakonpemanfaatancreatenew'])->middleware('auth')->name('betertibjakonpemanfaatanupdatecreatenew');

Route::get('/betertibjakonpemanfaatan/update/{id}', [TertibjasakonstruksiController::class, 'betertibjakonpemanfaatanupdate'])->middleware('auth')->name('betertibjakonpemanfaatanupdate');
Route::post('/betertibjakonpemanfaatan/updatecreate/{id}', [TertibjasakonstruksiController::class, 'betertibjakonpemanfaatanupdatecreate'])->middleware('auth')->name('betertibjakonpemanfaatanupdatecreate');

// Route::delete('/betertibjakonpemanfaatandelete/delete/{id}', [TertibjasakonstruksiController::class, 'betertibjakonpemanfaatandeletedata'])->middleware('auth')->name('betertibjakonusahapemenuhansyaratdeletedata');
Route::delete('/betertibjakonpemanfaatandelete/delete/{id}', [TertibjasakonstruksiController::class, 'betertibjakonpemanfaatandeletedata'])->middleware('auth')->name('betertibjakonusahapemenuhansyaratdeletedata');

// SURAT JAKON PEMANFAATAAN 1
Route::get('/betertibjakonpemanfataanjakon/index/{id}', [TertibjasakonstruksiController::class, 'betertibjakonpemanfataanjakonindex'])->middleware('auth')->name('betertibjakonpemanfataansuratjasakonstruksiindex');

Route::get('/betertibjakonpemanfataanjakon/createberkas/{id}', [TertibjasakonstruksiController::class, 'betertibjakonpemanfataanjakoncreateberkas'])->middleware('auth')->name('betertibjakonpemanfataanjakoncreateberkas');
Route::post('/betertibjakonmanfaat1/createberkasnew', [TertibjasakonstruksiController::class, 'betertibjakonmanfaatcreateberkasnew'])->middleware('auth')->name('betertibjakonmanfaat1');

// Route::get('/betertibjakonmanfaat1/show/{id}', [TertibjasakonstruksiController::class, 'betertibjakonmanfaat1showdata'])->middleware(['auth', 'can:super_admin'])->name('betertibjakonmanfaat1show');
Route::get('/betertibjakonmanfaat1showberkassurat/show/{id}', [TertibjasakonstruksiController::class, 'betertibjakonmanfaat1showberkas'])->middleware('auth')->name('betertibjakonmanfaat1showberkas');
Route::delete('/betertibjakonmanfaat1delete/delete/{id}', [TertibjasakonstruksiController::class, 'betertibjakonmanfaat1deleteberkas'])->middleware('auth')->name('betertibjakonmanfaat1deleteberkas');


// SURAT JAKON PEMANFAATAAN 2
Route::get('/betertibjakonpemanfataansurat2/index/{id}', [TertibjasakonstruksiController::class, 'betertibjakonpemanfataansurat2index'])->middleware('auth')->name('betertibjakonpemanfataansurat2index');
Route::get('/betertibjakonpemanfataansurat2/createberkas/{id}', [TertibjasakonstruksiController::class, 'betertibjakonpemanfataansurat2createberkas'])->middleware('auth')->name('betertibjakonpemanfataansurat2createberkas');

Route::post('/betertibjakonmanfaat2/createberkasnew', [TertibjasakonstruksiController::class, 'betertibjakonmanfaat2createberkasnew'])->middleware('auth')->name('betertibjakonmanfaat2');

Route::delete('/betertibjakonmanfaat2delete/delete/{id}', [TertibjasakonstruksiController::class, 'betertibjakonmanfaat2deleteberkas'])->middleware('auth')->name('betertibjakonmanfaat2deleteberkas');

// SURAT JAKON PEMANFAATAN 3
Route::get('/betertibjakonpemanfataansurat3/index/{id}', [TertibjasakonstruksiController::class, 'betertibjakonpemanfataansurat3index'])->middleware('auth')->name('betertibjakonpemanfataansurat3index');

Route::get('/betertibjakonpemanfataansurat3/createberkas/{id}', [TertibjasakonstruksiController::class, 'betertibjakonpemanfataansurat3createberkas'])->middleware('auth')->name('betertibjakonpemanfataansurat3createberkas');
Route::post('/betertibjakonmanfaat3/createberkasnew', [TertibjasakonstruksiController::class, 'betertibjakonmanfaat3createberkasnew'])->middleware('auth')->name('betertibjakonmanfaat3createsurat');

Route::delete('/betertibjakonmanfaat3delete/delete/{id}', [TertibjasakonstruksiController::class, 'betertibjakonmanfaat3deleteberkas'])->middleware('auth')->name('betertibjakonmanfaat3deleteberkas');

Route::get('/buktidukung/create/{id}', [TertibjasakonstruksiController::class, 'buktidukungcreate'])->middleware('auth');
Route::post('/buktidukung/createnew', [TertibjasakonstruksiController::class, 'buktidukungcreateupload'])->middleware('auth')->name('create.uploadpemanfaaatantertib');

Route::get('/buktidukungindex/index/{id}', [TertibjasakonstruksiController::class, 'buktidukungindexsurat'])->middleware('auth')->name('betertibjakonpemanfataansurat3index');
Route::delete('/buktidukungindex/delete/{id}', [TertibjasakonstruksiController::class, 'buktidukungindexdelete'])->middleware('auth');


// TERTIB JAKON PENYELENGGARAAN
Route::get('/betertibjakonpenyelenggaraan', [TertibjasakonstruksiController::class, 'betertibjakonpenyelenggaraanindex'])->middleware('auth')->name('betertibjakonpenyelenggaraanindexlist');

Route::get('/betertibjakonpenyelenggaraan/create', [TertibjasakonstruksiController::class, 'betertibjakonpenyelenggaraancreate'])->middleware('auth');
Route::post('/betertibjakonpenyelenggaraan/createnew', [TertibjasakonstruksiController::class, 'betertibjakonpenyelenggaraancreatenew'])->middleware('auth')->name('betertibjakonpenyelenggaraancreatenewupdate');

Route::delete('/betertibjakonpenyelenggaraandelete/delete/{id}', [TertibjasakonstruksiController::class, 'betertibjakonpenyelenggaraandeletedata'])->middleware('auth')->name('betertibjakonpenyelenggaraandeletedata');

Route::get('/betertibjakonpenyelenggaraan/update/{id}', [TertibjasakonstruksiController::class, 'betertibjakonpenyelenggaraanupdate'])->middleware('auth')->name('betertibjakonpenyelenggaraanupdate');
Route::post('/betertibjakonpenyelenggaraan/updatecreate/{id}', [TertibjasakonstruksiController::class, 'betertibjakonpenyelenggaraanupdatecreate'])->middleware('auth')->name('betertibjakonpenyelenggaraancreatenupdate');


// SURAT JAKON PENYELENGGARAN  INFORMASI PEKERJAAN
Route::get('/betertibjakonpenyelenggaraan/index/{id}', [TertibjasakonstruksiController::class, 'betertibjakonpenyelenggaraanindexlist'])->middleware('auth')->name('betertibjakonpenyelenggaraanindexinformasi');

Route::get('/betertibjakonpenyelenggaraan/createberkas/{id}', [TertibjasakonstruksiController::class, 'betertibjakonpenyelenggaraancreateberkas'])->middleware('auth')->name('betertibjakonpenyelenggaraancreateberkas');
Route::post('/betertibjakonpenyelenggaraan/createberkasnew', [TertibjasakonstruksiController::class, 'betertibjakonpenyelenggaraaninformasi'])->middleware('auth')->name('betertibjakonpenyelenggaraaninformasi');









// ---------------------- MENU SHST KABUPATEN BLORA -----------------------------------------------------
Route::get('/beshstkabblora', [ShstbloraController::class, 'beshstkabblora'])->middleware(['auth', 'can:super_admin'])->name('beshstkabblora');
Route::get('/beshstkabblora/update/{id}', [ShstbloraController::class, 'beshstkabbloraupdate'])->middleware(['auth', 'can:super_admin'])->name('beshstkabbloraupdate');
Route::put('/beshstkabblora/updatenew/{id}', [ShstbloraController::class, 'beshstkabbloraupdatenew'])->middleware(['auth', 'can:super_admin'])->name('beshstkabbloraupdatenew');
// ___________________________________________________________________________________________________________________________________





// MENU DATA BACKEND SATUAN HARGA DASAR MATERIAL
Route::get('/besatuanhargamaterial', [SatuanhargamaterialController::class, 'besatuanhargamaterial'])->middleware(['auth', 'can:super_admin']);
Route::delete('/satuanhargamaterial/delete/{id}', [SatuanhargamaterialController::class, 'besatuanhargamaterialdelete'])->middleware(['auth', 'can:super_admin']);

Route::get('/besatuanhargamaterial/create', [SatuanhargamaterialController::class, 'satuanhargamaterialcreate'])->middleware(['auth', 'can:super_admin']);
Route::post('/besatuanhargamaterial/createnew', [SatuanhargamaterialController::class, 'satuanhargamaterialcreatenew'])->middleware(['auth', 'can:super_admin'])->name('create.satuanhargamaterialcreatenew');

Route::get('/besatuanhargamaterial/update/{id}', [SatuanhargamaterialController::class, 'besatuanhargamaterialupdate'])->middleware(['auth', 'can:super_admin']);
Route::post('/besatuanhargamaterial/updatecreate/{id}', [SatuanhargamaterialController::class, 'besatuanhargamaterialupdatecreate'])->middleware(['auth', 'can:super_admin'])->name('update.besatuanhargamaterialcreateupdate');



Route::get('/besatuanhargaupahpekerjaan', [SatuanhargamaterialController::class, 'besatuanhargaupahpekerjaan'])->middleware(['auth', 'can:super_admin']);
Route::delete('/besatuanhargaupahpekerjaan/delete/{id}', [SatuanhargamaterialController::class, 'besatuanhargaupahpekerjaandelete'])->middleware(['auth', 'can:super_admin']);

Route::get('/besatuanhargaupahpekerjaan/create', [SatuanhargamaterialController::class, 'besatuanhargaupahpekerjaancreate'])->middleware(['auth', 'can:super_admin']);
Route::post('/besatuanhargaupahpekerjaan/createnew', [SatuanhargamaterialController::class, 'besatuanhargaupahpekerjaancreatenew'])->middleware(['auth', 'can:super_admin'])->name('create.besatuanhargaupahpekerjaancreatenew');

Route::get('/besatuanhargaupahpekerjaan/update/{id}', [SatuanhargamaterialController::class, 'besatuanhargaupahpekerjaanupdate'])->middleware(['auth', 'can:super_admin']);
Route::post('/besatuanhargaupahpekerjaan/updatecreate/{id}', [SatuanhargamaterialController::class, 'besatuanhargaupahpekerjaanupdatecreate'])->middleware(['auth', 'can:super_admin'])->name('update.besatuanhargaupahpekerjaanupdatecreate');

// be profile pekerja
Route::get('/beprofile', [LoginController::class, 'beprofileindex'])->middleware('auth');
Route::get('/beprofile/update/{id}', [LoginController::class, 'beprofileupdate'])->middleware('auth');
Route::put('/beprofile/updatecreate/{id}', [LoginController::class, 'beprofileupdatecreate'])->middleware('auth')->name('admin.profile.update');

Route::get('/besatuanhargaperalatan', [SatuanhargamaterialController::class, 'besatuanhargaperalatan'])->middleware(['auth', 'can:super_admin']);
Route::delete('/besatuanhargaperalatan/delete/{id}', [SatuanhargamaterialController::class, 'besatuanhargaperalatandelete'])->middleware(['auth', 'can:super_admin']);

Route::get('/besatuanhargaperalatan/create', [SatuanhargamaterialController::class, 'besatuanhargaperalatancreate'])->middleware(['auth', 'can:super_admin']);
Route::post('/besatuanhargaperalatan/createnew', [SatuanhargamaterialController::class, 'besatuanhargaperalatancreatenew'])->middleware(['auth', 'can:super_admin'])->name('create.besatuanhargaperalatancreatenew');

Route::get('/besatuanhargaperalatan/update/{id}', [SatuanhargamaterialController::class, 'besatuanhargaperalatanupdate'])->middleware(['auth', 'can:super_admin']);
Route::post('/besatuanhargaperalatan/updatecreate/{id}', [SatuanhargamaterialController::class, 'besatuanhargaperalatanupdatecreate'])->middleware(['auth', 'can:super_admin'])->name('update.besatuanhargaperalatanupdatecreate');

// Route::get('/besatuanhargaupahpekerjaan', [SatuanhargamaterialController::class, 'besatuanhargaupahpekerjaan'])->middleware('auth');
// Route::delete('/besatuanhargaupahpekerjaan/delete/{id}', [SatuanhargamaterialController::class, 'besatuanhargaupahpekerjaandelete'])->middleware('auth');


// AKUN PERSONAL PRIBADI AKUN PEKERJA


// MENU PENGAWASAN TERTIB JAKON PEMANFAATAN
// PEKERJAANINI
// ROUTE UNTUK DAFTAR AKUN

Route::get('/allakun', [LoginController::class, 'allakun'])->middleware(['auth', 'can:super_admin']);
Route::delete('/allsemuaakun/delete/{name}', [LoginController::class, 'allsemuaakun'])->middleware(['auth', 'can:super_admin']);
Route::get('/akuncreate', [LoginController::class, 'akuncreate'])->middleware(['auth', 'can:super_admin']);

Route::post('/akuncreatenew/createnew', [LoginController::class, 'akuncreatenew'])->middleware(['auth', 'can:super_admin'])->name('akuncreatenew');

Route::get('/allsuperadmin', [LoginController::class, 'allsuperadmin'])->middleware(['auth', 'can:super_admin']);

Route::get('/alladmin', [LoginController::class, 'alladmin'])->middleware(['auth', 'can:super_admin']);

Route::get('/allpekerja', [LoginController::class, 'allpekerja'])->middleware(['auth', 'can:super_admin']);

Route::get('/allsupppabrik', [LoginController::class, 'allsupppabrik'])->middleware(['auth', 'can:super_admin']);

Route::get('/allsuppperalatan', [LoginController::class, 'allsuppperalatan'])->middleware(['auth', 'can:super_admin']);

Route::get('/allsupptokobangunan', [LoginController::class, 'allsupptokobangunan'])->middleware(['auth', 'can:super_admin']);

Route::get('/alllsppenerbit', [LoginController::class, 'alllsppenerbit'])->middleware(['auth', 'can:super_admin']);

Route::get('/alldinas', [LoginController::class, 'alldinas'])->middleware(['auth', 'can:super_admin']);


// DATA PENGATURAN DATABASE DATA ALL

Route::get('/settingssekolah', [SettingDataController::class, 'settingssekolah'])->middleware(['auth', 'can:super_admin']);
Route::get('/settingssekolah/create', [SettingDataController::class, 'settingssekolahcreate'])->middleware(['auth', 'can:super_admin']);
Route::post('/settingssekolah/createnew', [SettingDataController::class, 'settingssekolahcreatenew'])->middleware(['auth', 'can:super_admin'])->name('create.settingssekolah');
Route::delete('/settingssekolah/delete/{namasekolah}', [SettingDataController::class, 'settingssekolahdelete'])->middleware(['auth', 'can:super_admin']);

// DATA PENGATURAN TANDA TANGAN
Route::get('/settingstandatangan', [SettingDataController::class, 'settingstandatangan'])->middleware(['auth', 'can:super_admin']);
Route::get('/settingstandatangan/create', [SettingDataController::class, 'settingstandatangancreate'])->middleware(['auth', 'can:super_admin']);
Route::post('/settingstandatangan/createnew', [SettingDataController::class, 'settingstandatangancreatenew'])->middleware(['auth', 'can:super_admin'])->name('create.settingstandatangan');
Route::delete('/settingstandatangan/delete/{id}', [SettingDataController::class, 'settingstandatangandelete'])->middleware(['auth', 'can:super_admin']);



// ------------------- BACKEND BAGIAN HIMBAUAN DINAS ---------------------------

// -------- BAGIAN 01 BACKEND PROFIL ---------------------------------p
Route::get('/struktur', [StrukturController::class, 'index'])->middleware(['auth', 'can:super_admin']);
Route::get('/struktur/update/{judul}', [StrukturController::class, 'updatestruktur'])->middleware(['auth', 'can:super_admin'])->name('update.struktur');
// Route::post('/struktur/updatecreate/{judul}', [StrukturController::class, 'updatestrukturcreate'])->middleware('auth')->name('update.strukturcreatebaru');
// Route::post('/struktur/updatecreate/{judul}', [StrukturController::class, 'updatestrukturcreate'])->middleware('auth')->name('update.strukturcreate');
Route::put('/struktur/updatecreate/{judul}', [StrukturController::class, 'updatestrukturcreate'])->middleware(['auth', 'can:super_admin'])->name('update.strukturcreatebaru');


Route::post('/struktur/{judul}', [StrukturController::class, 'createupdatestruktur'])->middleware(['auth', 'can:super_admin'])->name('updatestore.struktur');

Route::get('/renstra', [StrukturController::class, 'renstra'])->middleware('auth');
Route::get('/renstra/update/{judul}', [StrukturController::class, 'updaterenstra'])->middleware(['auth', 'can:super_admin'])->name('update.renstra');
Route::post('/renstra/{judul}', [StrukturController::class, 'createupdaterenstra'])->middleware(['auth', 'can:super_admin'])->name('updatestore.renstra');

Route::get('/tupoksi', [StrukturController::class, 'tupoksi'])->middleware('auth');
Route::get('/tupoksi/update/{judul}', [StrukturController::class, 'updatetupoksi'])->middleware(['auth', 'can:super_admin'])->name('update.tupoksi');
Route::post('/tupoksi/{judul}', [StrukturController::class, 'createupdatetupoksi'])->middleware(['auth', 'can:super_admin'])->name('updatestore.tupoksi');

// ----------------------------------- STANDAR BIAYA UMUM
Route::get('/standarbiayaumum', [StrukturController::class, 'standarbiayaumum'])->middleware('auth');
Route::get('/standarbiayaumum/{judul}', [StrukturController::class, 'standarbiayaumumshowbyjudul'])->middleware('auth');
Route::get('/standarbiayaumum/update/{judul}', [StrukturController::class, 'updatestandarbiayaumum'])->middleware('auth')->name('update.standarbiayaumum');
Route::post('/standarbiayaumum/{judul}', [StrukturController::class, 'createupdatestandarbiayaumum'])->middleware('auth')->name('updatestore.standarbiayaumum');
Route::get('/standarbiayaumumcreate', [StrukturController::class, 'createstandarbiayaumum'])->middleware('auth');
Route::post('/standarbiayaumumstore', [StrukturController::class, 'createstorestandarbiayaumum'])->middleware('auth')->name('create.standarbiayaumum');

Route::post('/standarbiayaumumdelete/{judul}', [StrukturController::class, 'deletestandarbiayaumum'])
->middleware('auth')
->name('delete.standarbiayaumum');


// SBU LAMPIRAN 1
Route::get('/sbulampiran1', [StrukturController::class, 'sbulampiran1'])->middleware('auth');
Route::get('/sbulampiran1/{judul}', [StrukturController::class, 'sbulampiran1showbyjudul'])->middleware('auth');

// SBU LAMPIRAN 2
Route::get('/sbulampiran2', [StrukturController::class, 'sbulampiran2'])->middleware('auth');
Route::get('/sbulampiran2/{judul}', [StrukturController::class, 'sbulampiran2showbyjudul'])->middleware('auth');

// SBU LAMPIRAN 3
Route::get('/sbulampiran3', [StrukturController::class, 'sbulampiran3'])->middleware('auth');
Route::get('/sbulampiran3/{judul}', [StrukturController::class, 'sbulampiran3showbyjudul'])->middleware('auth');


// -------- BAGIAN 14 BACKEND PERATURAN UNDANGUNDANG ---------------------------------
Route::get('/peruud', [PeraturanController::class, 'undangundang'])->middleware('auth')->name('peruud.index');
Route::get('/peruud/{judul}', [PeraturanController::class, 'updateundangundang'])->middleware('auth')->name('peruud.show');
Route::post('/peruud/{judul}', [PeraturanController::class, 'createupdateundangundang'])->middleware('auth')->name('peruud.update');


Route::get('/perpemerintah', [PeraturanController ::class, 'pemerintah'])->middleware('auth');
Route::get('/perpemerintah/{judul}', [PeraturanController::class, 'updateperpemerintah'])->middleware('auth')->name('peruud.showperpemerintah');
Route::post('/perpemerintah/{judul}', [PeraturanController::class, 'createupdateperpemerintah'])->middleware('auth')->name('peruud.updateperpemerintah');


Route::get('/perpresiden', [PeraturanController::class, 'presiden'])->middleware('auth');
Route::get('/perpresiden/{judul}', [PeraturanController::class, 'updateperpresiden'])->middleware('auth')->name('peruud.showperpresiden');
Route::post('/perpresiden/{judul}', [PeraturanController::class, 'createupdateperpresiden'])->middleware('auth')->name('peruud.updateperpresiden');

// PERATURAN MENTERI
Route::get('/permenteri', [PeraturanController::class, 'menteri'])->middleware('auth');
Route::get('/permenteri/{judul}', [PeraturanController::class, 'menterishowByJudul'])->middleware('auth');
Route::get('/permenteri/update/{judul}', [PeraturanController::class, 'updateshowpermenteri'])->middleware('auth')->name('peruud.showpermenteri');
Route::post('/permenteri/{judul}', [PeraturanController::class, 'createupdatepermenteri'])->middleware('auth')->name('peruud.updatepermenteri');
// CREATE DATA PER MENTERI
Route::get('/permentericreate', [PeraturanController::class, 'createpermenteri'])->middleware('auth');
Route::post('/permenteristore', [PeraturanController::class, 'createstorepermenteri'])->middleware('auth')->name('peruud.createpermenteri');
Route::post('/permenteridelete/{judul}', [PeraturanController::class, 'deleterpermenteri'])
->middleware('auth')
->name('peruud.deletepermenteri');

// SURAT KEPUTUSAN MENTERI
Route::get('/skmenteri', [PeraturanController::class, 'skmenteri'])->middleware('auth');
Route::get('/skmenteri/{judul}', [PeraturanController::class, 'skmenterishowByJudul'])->middleware('auth');
Route::get('/skmenteri/update/{judul}', [PeraturanController::class, 'updateshowskmenteri'])->middleware('auth')->name('peruud.showskmenteri');
Route::post('/skmenteri/{judul}', [PeraturanController::class, 'createupdateskmenteri'])->middleware('auth')->name('peruud.updateskmenteri');
Route::get('/skmentericreate', [PeraturanController::class, 'createskmenteri'])->middleware('auth');
Route::post('/skmenteristore', [PeraturanController::class, 'createstoreskmenteri'])->middleware('auth')->name('peruud.createskmenteri');
Route::post('/skmenteridelete/{judul}', [PeraturanController::class, 'deleteskmenteri'])
->middleware('auth')
->name('peruud.deleteskmenteri');

// SURAT EDARAN MENTERI
Route::get('/suratedaran', [PeraturanController::class, 'suratedaran'])->middleware('auth');
Route::get('/suratedaran/{judul}', [PeraturanController::class, 'suratedaranshowByJudul'])->middleware('auth');
Route::get('/suratedaran/update/{judul}', [PeraturanController::class, 'updateshowsuratedaran'])->middleware('auth')->name('peruud.showsuratedaran');
Route::post('/suratedaran/{judul}', [PeraturanController::class, 'createupdatesuratedaran'])->middleware('auth')->name('peruud.updatesuratedaran');
Route::get('/suratedarancreate', [PeraturanController::class, 'createsuratedaran'])->middleware('auth');
Route::post('/suratedaranstore', [PeraturanController::class, 'createstoresuratedaran'])->middleware('auth')->name('peruud.createsuratedaran');
Route::post('/suratedarandelete/{judul}', [PeraturanController::class, 'deletesuratedaran'])
->middleware('auth')
->name('peruud.deletesuratedaran');

Route::get('/referensi', [PeraturanController::class, 'referensi'])->middleware('auth')->name('peruud.referensi');
Route::get('/referensi/{judul}', [PeraturanController::class, 'updatereferensi'])->middleware('auth')->name('peruud.showreferensi');
Route::post('/referensi/{judul}', [PeraturanController::class, 'createupdatereferensi'])->middleware('auth')->name('peruud.updatereferensi');

// SURAT PERATURAN DAERAH
Route::get('/perdaerah', [PeraturanController::class, 'suratperdaerah'])->middleware('auth');
Route::get('/perdaerah/{judul}', [PeraturanController::class, 'suratperdaerahshowByJudul'])->middleware('auth');
Route::get('/perdaerah/update/{judul}', [PeraturanController::class, 'updateshowperdaerah'])->middleware('auth')->name('peruud.showperdaerah');
Route::post('/perdaerah/{judul}', [PeraturanController::class, 'createupdateperdaerah'])->middleware('auth')->name('peruud.updateperdaerah');
Route::get('/perdaerahcreate', [PeraturanController::class, 'createperdaerah'])->middleware('auth');
Route::post('/perdaerahstore', [PeraturanController::class, 'createstoreperdaerah'])->middleware('auth')->name('peruud.createperdaerah');
Route::post('/perdaerahdelete/{judul}', [PeraturanController::class, 'deleteperdaerah'])
->middleware('auth')
->name('peruud.deleteperdaerah');

// SURAT PERATURAN GUBERNUR
Route::get('/pergubernur', [PeraturanController::class, 'suratpergubernur'])->middleware('auth');
Route::get('/pergubernur/{judul}', [PeraturanController::class, 'pergubernurshowByJudul'])->middleware('auth');
Route::get('/pergubernur/update/{judul}', [PeraturanController::class, 'updateshowpergubernur'])->middleware('auth')->name('peruud.showpergubernur');
Route::post('/pergubernur/{judul}', [PeraturanController::class, 'createupdatepergubernur'])->middleware('auth')->name('peruud.updatepergubernur');
Route::get('/pergubernurcreate', [PeraturanController::class, 'createpergubernur'])->middleware('auth');
Route::post('/pergubernurstore', [PeraturanController::class, 'createstorepergubernur'])->middleware('auth')->name('peruud.createpergubernur');
Route::post('/pergubernurdelete/{judul}', [PeraturanController::class, 'deletepergubernur'])
->middleware('auth')
->name('peruud.deletepergubernur');


// SURAT PERATURAN GUBERNUR
Route::get('/perwalikotabupati', [PeraturanController::class, 'suratperwalikotabupati'])->middleware('auth');
Route::get('/perwalikotabupati/{judul}', [PeraturanController::class, 'perwalikotabupatishowByJudul'])->middleware('auth');
Route::get('/perwalikotabupati/update/{judul}', [PeraturanController::class, 'updateshowperwalikotabupati'])->middleware('auth')->name('peruud.showperwalikotabupati');
Route::post('/perwalikotabupati/{judul}', [PeraturanController::class, 'createupdateperwalikotabupati'])->middleware('auth')->name('peruud.updateperwalikotabupati');
Route::get('/perwalikotabupaticreate', [PeraturanController::class, 'createperwalikotabupati'])->middleware('auth');
Route::post('/perwalikotabupatistore', [PeraturanController::class, 'createstoreperwalikotabupati'])->middleware('auth')->name('peruud.createperwalikotabupati');
Route::post('/perwalikotabupatidelete/{judul}', [PeraturanController::class, 'deleteperwalikotabupati'])
->middleware('auth')
->name('peruud.deleteperwalikotabupati');

// SURAT KEPUTUSAN TENTANG JASA KONSTRUKSI
Route::get('/keputusan', [PeraturanController::class, 'keputusan'])->middleware('auth');
Route::get('/keputusanbaru/{judul}', [PeraturanController::class, 'keputusanshowbyjudul'])->middleware('auth');
Route::get('/keputusan/update/{judul}', [PeraturanController::class, 'updateshowkeputusan'])->middleware('auth')->name('peruud.showkeputusan');
Route::post('/keputusan/{judul}', [PeraturanController::class, 'createupdatekeputusan'])->middleware('auth')->name('peruud.updatekeputusan');
Route::get('/keputusancreate', [PeraturanController::class, 'createkeputusan'])->middleware('auth');
Route::post('/keputusanstore', [PeraturanController::class, 'createstorekeputusan'])->middleware('auth')->name('peruud.createkeputusan');
Route::post('/keputusandelete/{judul}', [PeraturanController::class, 'deletekeputusan'])
->middleware('auth')
->name('peruud.deletekeputusan');

// ====================================== ====================================== ====================================== ======================================
// BAGIAN 15 ADMINISTRATOR MENU BACKEND
// ====================================== =====================================bac= ====================================== ======================================
// SURAT KEPUTUSAN TENTANG JASA KONSTRUKSI
Route::get('/administrator', [AdministratorController::class, 'index'])->middleware('auth');
Route::get('/administrator/{name}', [AdministratorController::class, 'administratorshowbyname'])->middleware('auth');
Route::get('/administrator/update/{name}', [AdministratorController::class, 'updateadministrator'])->middleware('auth')->name('updateshow.administrator');
Route::put('/administrator/{name}', [AdministratorController::class, 'createupdateadministrator'])
->middleware('auth')
->name('update.dataadministrator');

Route::post('/administrator/{name}', [AdministratorController::class, 'deleteadministrator'])
->middleware('auth')
->name('administrator.deleteadministrator');


// KATEGORI ADMIN
Route::get('/kategoriadmin', [AdministratorController::class, 'kategoriadmin'])->middleware('auth');
Route::get('/kategoriadmincreate', [AdministratorController::class, 'createkategoriadmin'])->middleware('auth');
Route::post('/kategoriadminstore', [AdministratorController::class, 'createstorekategoriadmin'])->middleware('auth')->name('create.kategoriadmin');

Route::post('/kategoriadmin/{id}', [AdministratorController::class, 'deletekategoriadmin'])
->middleware('auth')
->name('delete.deletekategoriadmin');

// -------------------------- ROUTE UNTUK SETTINGS DATA MENU JASA KONSTRUKSI ============================================
Route::get('/settingsalldata', [SettingmenuController::class, 'alldata'])->middleware('auth');

// 01 SETTINGS MENU STATUS ADMIN
Route::get('/settingstatusadmin', [SettingmenuController::class, 'statusadmin'])->middleware('auth');
Route::get('/settingstatusadmincreate', [SettingmenuController::class, 'createstatusadmin'])->middleware('auth');
Route::post('/settingstatusadminstore', [SettingmenuController::class, 'createstorestatusadmin'])->middleware('auth')->name('create.statusadminnewbaru');
Route::post('/settingstatusadmin/{id}', [SettingmenuController::class, 'deletestatusadmin'])
->middleware('auth')
->name('delete.statusadmin');

Route::get('/daftar', [LoginController::class, 'register'])->name('login')->middleware('guest');
Route::post('/daftarnew', [LoginController::class, 'registernew'])->name('login');
Route::get('/forgotpassword', [LoginController::class, 'forgotpassword'])->name('login')->middleware('guest');

Route::get('/login', [LoginController::class, 'loginmasuk'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);




// CONTROLLER DOWNLOAD
Route::get('/asosiasi/export', [DownloadExcelController::class, 'exportasosiasi'])->name('asosiasi.export');

require __DIR__.'/auth.php';




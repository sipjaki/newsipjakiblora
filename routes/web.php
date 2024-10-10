<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\DatajakonController;
use App\Http\Controllers\FedashboardController;
use App\Http\Controllers\GiskbbController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PelatihanController;
use App\Http\Controllers\PeraturanController;
use App\Http\Controllers\SkktenagakerjaController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\UijkController;
use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\SettingmenuController;
use App\Http\Controllers\UndangundangController;
use Database\Factories\DatajakonFactory;
use Database\Factories\SkktenagakerjaFactory;
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

// ------------------------- FRONTEND HALAMAN UTAMA SIPJAKI BANDUNG BARAT --------------------------

Route::get('/', [FedashboardController::class, 'index']);  
// Route::post('/qapertanyaanstore', [FedashboardController::class, 'createbarustorepertanyaan'])->middleware('auth')->name('create.storeqapertanyaanbaru');
// Route::post('/qapertanyaanstorebaru', [FedashboardController::class, 'createstorepertanyaanpublik'])->middleware('auth')->name('createpertanyaanstorebaru');
// Route::post('/qapertanyaanstorebaru', [AdministratorController::class, 'createstorepertanyaanpublik'])->name('createpertanyaanstorebaru');




// Route::get('/portalberita', function () {
//     // return view('welcome');
//     return view('portalberita', [
//         'title' => 'Portal Berita',
//     ]);
// });


Route::get('/404', function () {
    // return view('welcome');
    return view('404', [
        'title' => 'Under Constructions',
    ]);
});

Route::get('/bahan2', function () {
    // return view('welcome');
    return view('frontend.00_full.bahan2');
});

// ---------------------- 01 PROFIL FRONTEND SIPJAKI KBB -----------------------//
// -------- BAGIAN 1 ---------------------------------
Route::get('/profil/struktur', [StrukturController::class, 'strukturpuprbandungbarat']); 

// =============================================================================================
// -------- BAGIAN 2 ---------------------------------
Route::get('/profil/rencanastrategis', [StrukturController::class, 'rencanastrategispuprbandungbarat']); 

// =============================================================================================
// -------- BAGIAN 3 ---------------------------------
Route::get('/profil/tupoksi', [StrukturController::class, 'tupoksifekbb']); 


// ------------------------- 02 BAGIAN BERITA SIPJAKI KBB --------------------------
// -------- BAGIAN 1 TAMPILAN BERITA ---------------------------------
Route::get('/berita', [FedashboardController::class, 'navbarberita']);
Route::get('/portalberita/{judul}', [FedashboardController::class, 'portalberitashowByJudul']);

// -------- BAGIAN 2 KEGIATAN SERTIFIKASI SIPJAKI KABUPATEN BANDUNG BARAT ---------------------------------
Route::get('/kegiatansertifikasi', [FedashboardController::class, 'kegiatansertifikasi']);  
Route::get('/kegiatansertifikasi/{judul_kegiatan}', [FedashboardController::class, 'kegiatansertifikasishowByJudul']);
Route::get('/detailskegiatan/{jabatan}', [FedashboardController::class, 'detailskegiatanshowByJudul']);

// -------- BAGIAN 3 AGENDA SERTIFIKASI ---------------------------------
Route::get('/feagendasertifikasi', [FedashboardController::class, 'feagendasertifikasipekerja']);

// ---------------------- 03 DATA JAKON -----------------------//
// -------- BAGIAN 01 PENGAWASAN DAN KETERTIBAN  ---------------------------------
Route::get('/datajakon/pengawasan', [DatajakonController::class, 'pengawasan']); 
// Route::get('/jakonpengwasandanketertiban', [DatajakonController::class, 'fepengawasandanketertiban']); 

// -------- BAGIAN 02 DATA ASOSIASI PENGUSAHA  ---------------------------------
Route::get('/datajakon/asosiasi', [DatajakonController::class, 'asosiasi']); 
Route::get('/datajakon/asosiasi/{nama_asosiasi}', [DatajakonController::class, 'asosiasishowfrontend']); 

// -------- BAGIAN 03 STANDAR BIAYA UMUM JASA KONSTRUKSI  ---------------------------------
Route::get('/datajakon/standarbiayaumum', [DatajakonController::class, 'standarbiayaumum']); 
Route::get('/datajakon/standarbiayaumum/{judul}', [DatajakonController::class, 'standarbiayaumumshowbyjudulfe']); 

Route::get('/datajakon/fesbulampiran3', [DatajakonController::class, 'fesbulampiran3']); 
Route::get('/datajakon/fesbulampiran3/{judul}', [DatajakonController::class, 'fesbulampiran3showbyjudulfe']); 

Route::get('/datajakon/fesbulampiran2', [DatajakonController::class, 'fesbulampiran2']); 
Route::get('/datajakon/fesbulampiran2/{judul}', [DatajakonController::class, 'fesbulampiran2showbyjudulfe']); 

Route::get('/datajakon/fesbulampiran1', [DatajakonController::class, 'fesbulampiran1']); 
Route::get('/datajakon/fesbulampiran1/{judul}', [DatajakonController::class, 'fesbulampiran1showbyjudulfe']); 


// -------- BAGIAN 04 PROGRESS PAKET PEKERJAAN ---------------------------------
Route::get('/datajakon/paketpekerjaan', [DatajakonController::class, 'paketpekerjaan']); 


// ---------------------- 04 TENAGA KERJA -----------------------//
// -------- BAGIAN 01 ---------------------------------
Route::get('/tenagakerja/skaskt', [SkktenagakerjaController::class, 'feskktenagakerja']);  
Route::get('/tenagakerja/skaskt/{nama}', [SkktenagakerjaController::class, 'feskktenagakerjashowByName']);
Route::get('/tenagakerja/showskaskt/{nama}', [SkktenagakerjaController::class, 'feskktenagakerjadokumentasishowByName']);

// RUTE UNTUK MENCARI BERDASARKAN KECAMATAN KOTA
Route::get('/skk/kecamatan', [SkktenagakerjaController::class, 'listkecamatan']);  
Route::get('/tenagakerja/kecamatan', [SkktenagakerjaController::class, 'feskktenagakerjakecamatanshowBykecamatan']);

// RUTE BERDASARKAN DESA
Route::get('/skk/desa', [SkktenagakerjaController::class, 'listdesa']); 
Route::get('/tenagakerja/desa', [SkktenagakerjaController::class, 'feskktenagakerjadesashowBydesa']);

// RUTE BERDASARKAN KETERAMPILAN PARA PEKERJA
Route::get('/skk/keterampilan', [SkktenagakerjaController::class, 'listketerampilan']); 
Route::get('/tenagakerja/keterampilan', [SkktenagakerjaController::class, 'feskktenagakerjaketerampilanshowByketerampilan']);

// RUTE BERDASARKAN TAHUN BIMBINGAN TEKNIS PARA PEKERJA KONSTRUKSI 
Route::get('/skk/register', [SkktenagakerjaController::class, 'listregister']); 
Route::get('/tenagakerja/bimtek', [SkktenagakerjaController::class, 'feskktenagakerjabimtekshowBybimtek']);

// RUTE UNTUK MENCARI DATA BERDASARKAN STATISTIKA 
Route::get('/skk/statistika', [SkktenagakerjaController::class, 'liststatistika']); 
Route::get('/skkchart/keterampilan', [SkktenagakerjaController::class, 'chartketerampilan']); 
Route::get('/skkskkchart/kecamatan', [SkktenagakerjaController::class, 'chartkecamatan']); 
Route::get('/skkchart/desa', [SkktenagakerjaController::class, 'chartdesa']); 
Route::get('/skkchart/register', [SkktenagakerjaController::class, 'chartregister']); 

// -------- BAGIAN 02 ---------------------------------
// RUTE UNTUK MEMETAKAN LOKASI PETA WILAYAH KABUPATEN BANDUNG BARAT 
Route::get('/giskbb', [GiskbbController::class, 'index']); 
Route::get('/giskbb/{nama_kecamatan}', [GiskbbController::class, 'namakecamatanshowBykecamatan']);


// -------- BAGIAN 03 ---------------------------------
// RUTE UNTUK MENJALANKAN PENANGGUNG JAWAB TEKNIS
Route::get('/tenagakerja/pjt', [SkktenagakerjaController::class, 'penanggungjawabteknis']);     
Route::get('/tenagakerja/timpembina', [SkktenagakerjaController::class, 'timpembinajasakonstruksi']); 

// ---------------------- 05 INFORMASI SPM -----------------------//
// -------- BAGIAN 1 ---------------------------------
Route::get('/spm/informasispm', function () {
    // return view('welcome');
    return view('frontend.05_spm.01_informasispm', [
        'title' => 'Standar Penetapan Kemampuan'
    ]);
});

// ---------------------- 08 UIJK -----------------------//
// -------- BAGIAN 08 ---------------------------------
Route::get('/ijinusahajasakonstruksi', [UijkController::class, 'index']);  
Route::get('/uijk/{nama_perusahaan}', [UijkController::class, 'feuijkshowByName']);
Route::get('/uijkpt', [UijkController::class, 'uijkpt']);
Route::get('/uijkcv', [UijkController::class, 'uijkcv']);
Route::get('/2020', [UijkController::class, '2020']);

Route::get('/ijinusahajasakonstruksi/katperusahaan', [UijkController::class, 'kategoriperusahaan']);  
Route::get('/iujk/katperusahaan', [UijkController::class, 'kategoriperusahaanfebyname']);  

Route::get('/ijinusahajasakonstruksi/bidangusaha', [UijkController::class, 'bidangusaha']);  
Route::get('/iujk/bidangusaha', [UijkController::class, 'bidangusahafebyname']);  

Route::get('/ijinusahajasakonstruksi/tahunregistrasi', [UijkController::class, 'tahunregistrasi']);  
Route::get('/iujk/tahunregistrasi', [UijkController::class, 'tahunregistrasifebyname']);  

Route::get('/ijinusahajasakonstruksi/statistika', [UijkController::class, 'iujkstatistika']);  
// Route::get('/iujk/tahunregistrasi', [UijkController::class, 'tahunregistrasifebyname']);  



// ---------------------- 09 TDUP -----------------------//
// -------- BAGIAN 1 ---------------------------------
Route::get('/tdup', function () {
    // return view('welcome');
    return view('frontend.09_tdup.01_tdup', [
        'title' => 'Tanda Daftar Usaha Perseroan'
    ]);
});


// ---------------------- 10 PELATIHAN -----------------------//
// -------- BAGIAN 1 ---------------------------------
Route::get('/pelatihan/kecelakaan', [PelatihanController::class, 'index']);  

// ---------------------- 11 PERATURAN PERATURAN -----------------------//
// -------- BAGIAN 1 ---------------------------------
Route::get('/peraturan/undangundang', [PeraturanController::class, 'feundangundang']);  

// -------- BAGIAN 2 ---------------------------------
Route::get('/peraturan/pemerintah', [PeraturanController::class, 'fepemerintah']);  

// -------- BAGIAN 3 ---------------------------------
Route::get('/peraturan/presiden', [PeraturanController::class, 'fepresiden']);  

// -------- BAGIAN 4 ---------------------------------
Route::get('/peraturan/menteri', [PeraturanController::class, 'fementeri']);  
Route::get('/peraturan/menteri/{judul}', [PeraturanController::class, 'fementerishowByJudul']);

// -------- BAGIAN 5 ---------------------------------
Route::get('/peraturan/keputusanmenteri', [PeraturanController::class, 'feskmenteri']);  
Route::get('/peraturan/keputusanmenteri/{judul}', [PeraturanController::class, 'feskmenterishowByJudul']);

// -------- BAGIAN 6 ---------------------------------
Route::get('/peraturan/suratedaranmenteri', [PeraturanController::class, 'suratedaranmenteri']);  
Route::get('/peraturan/suratedaranmenteri/{judul}', [PeraturanController::class, 'suratedaranmenterishowByJudul']);

// -------- BAGIAN 7 ---------------------------------
Route::get('/peraturan/referensi', [PeraturanController::class, 'fereferensi']);  

// -------- BAGIAN 8 ---------------------------------
Route::get('/peraturan/daerah', [PeraturanController::class, 'feperdaerah']);  
Route::get('/peraturan/daerah/{judul}', [PeraturanController::class, 'feperdaerahshowByJudul']);

// -------- BAGIAN 9 ---------------------------------
Route::get('/peraturan/gubernur', [PeraturanController::class, 'fegubernur']);  

// -------- BAGIAN 10 ---------------------------------
Route::get('/peraturan/walikotadanbupati', [PeraturanController::class, 'feperbupatiwalikota']);  
Route::get('/peraturan/walikotadanbupati/{judul}', [PeraturanController::class, 'feperbupatiwalikotashowByJudul']);

// -------- BAGIAN 11 ---------------------------------
Route::get('/peraturan/suratkeputusan', [PeraturanController::class, 'fesuratkeputusan']);  
Route::get('/peraturan/suratkeputusan/{judul}', [PeraturanController::class, 'fesuratkeputusanshowByJudul']);


// ================================================================================================================================================
// ================================================================================================================================================
// ================================================================================================================================================

Route::get('/dashboard', [AdminDashboardController::class, 'index'])->middleware('auth');  

// ------------------- BACKEND QA PERTANYAAN --------------------------- 

// KATEGORI ADMIN  
Route::get('/qapertanyaan', [AdministratorController::class, 'qapertanyaan'])->middleware('auth');  
Route::get('/qapertanyaancreate', [AdministratorController::class, 'createqapertanyaan'])->middleware('auth');
Route::post('/qapertanyaanstore', [AdministratorController::class, 'createstoreqapertanyaan'])->middleware('auth')->name('create.qapertanyaan');
Route::post('/qapertanyaan/{id}', [AdministratorController::class, 'deleteqapertanyaan'])
->middleware('auth')
->name('delete.qapertanyaan');

// ------------------- BACKEND BAGIAN HIMBAUAN DINAS --------------------------- 

// KATEGORI HIMBAUAN DINAS
Route::get('/himbauandinas', [AdministratorController::class, 'himbauandinas'])->middleware('auth');  
Route::get('/himbauandinas/{nama_lengkap}', [AdministratorController::class, 'himbauandinasshowbyname'])->middleware('auth');
Route::get('/himbauandinas/update/{nama_lengkap}', [AdministratorController::class, 'updatehimbauandinas'])->middleware('auth')->name('updateshow.himbauandinas');
Route::post('/himbauandinas/{nama_lengkap}', [AdministratorController::class, 'createupdatehimbauandinas'])->middleware('auth')->name('update.himbauandinas');

// -------- BAGIAN 01 BACKEND PROFIL ---------------------------------
Route::get('/struktur', [StrukturController::class, 'index'])->middleware('auth');  
Route::get('/struktur/update/{judul}', [StrukturController::class, 'updatestruktur'])->middleware('auth')->name('update.struktur');
Route::post('/struktur/{judul}', [StrukturController::class, 'createupdatestruktur'])->middleware('auth')->name('updatestore.struktur');

Route::get('/renstra', [StrukturController::class, 'renstra'])->middleware('auth');  
Route::get('/renstra/update/{judul}', [StrukturController::class, 'updaterenstra'])->middleware('auth')->name('update.renstra');
Route::post('/renstra/{judul}', [StrukturController::class, 'createupdaterenstra'])->middleware('auth')->name('updatestore.renstra');

Route::get('/tupoksi', [StrukturController::class, 'tupoksi'])->middleware('auth');  
Route::get('/tupoksi/update/{judul}', [StrukturController::class, 'updatetupoksi'])->middleware('auth')->name('update.tupoksi');
Route::post('/tupoksi/{judul}', [StrukturController::class, 'createupdatetupoksi'])->middleware('auth')->name('updatestore.tupoksi');


// -------- BAGIAN 02 BACKEND DATA BERITA JASA KONSTRUKSI  ---------------------------------
//  -------------- DATA BERITA UNTUK BACKEND JASA KONSTRUKSI =-------------------------------------
Route::get('/databerita', [BeritaController::class, 'databerita'])->middleware('auth');  
Route::get('/databerita/{judul}', [BeritaController::class, 'databeritashowbyjudul'])->middleware('auth');
Route::get('/databerita/update/{judul}', [BeritaController::class, 'updatedataberita'])->middleware('auth')->name('updateshow.databerita');
Route::post('/databeritaupdatestore/{judul}', [BeritaController::class, 'createupdatedataberita'])->middleware('auth')->name('update.databeritanews');
Route::get('/databeritacreate', [BeritaController::class, 'createnewdataberita'])->middleware('auth');
Route::post('/databeritastore', [BeritaController::class, 'createnewstoredataberita'])->middleware('auth')->name('create.databerita');

Route::post('/databerita/{judul}', [BeritaController::class, 'deletedataberita'])
->middleware('auth')
->name('delete.databerita');

//  -------------- DATA BERITA AGENDA BACKEND JASA KONSTRUKSI =-------------------------------------
Route::get('/beritaagenda', [BeritaController::class, 'beritaagenda'])->middleware('auth');  
Route::get('/beritaagenda/{nama_agenda}', [BeritaController::class, 'beritaagendashowbyjudul'])->middleware('auth');
Route::get('/beritaagenda/update/{nama_agenda}', [BeritaController::class, 'updateberitaagenda'])->middleware('auth')->name('updateshow.beritaagenda');
Route::post('/beritaagendaupdatestore/{nama_agenda}', [BeritaController::class, 'createupdateberitaagenda'])->middleware('auth')->name('update.beritaagenda');
Route::get('/beritaagendacreate', [BeritaController::class, 'createnewberitaagenda'])->middleware('auth');
Route::post('/beritaagendastore', [BeritaController::class, 'createnewstoreberitaagenda'])->middleware('auth')->name('create.beritaagenda');

Route::post('/beritaagenda/{id}', [BeritaController::class, 'deleteberitaagenda'])
->middleware('auth')
->name('delete.newsberitaagenda');

//  -------------- DOKUMENTASI PELATIHAN TENTANG JASA KONSTRUKSI =-------------------------------------
Route::get('/dokumentasipelatihan', [BeritaController::class, 'dokumentasipelatihan'])->middleware('auth');  
Route::get('/dokumentasipelatihan/{judul_kegiatan}', [BeritaController::class, 'dokumentasipelatihanshowbyjudul'])->middleware('auth');
Route::get('/dokumentasipelatihan/update/{judul_kegiatan}', [BeritaController::class, 'updatedokumentasipelatihan'])->middleware('auth')->name('updateshow.dokumentasipelatihan');
Route::post('/dokumentasipelatihanstore/{judul_kegiatan}', [BeritaController::class, 'createupdatedokumentasipelatihan'])->middleware('auth')->name('update.dokumentasipelatihan');
Route::get('/dokumentasipelatihancreate', [BeritaController::class, 'createdokumentasipelatihan'])->middleware('auth');
Route::post('/dokumentasipelatihancreatestore', [BeritaController::class, 'createstoredokumentasipelatihan'])->middleware('auth')->name('newcreatestore.dokumentasipelatihan');

Route::post('/dokumentasipelatihan/{id}', [BeritaController::class, 'deletedokumentasipelatihan'])
->middleware('auth')
->name('delete.dokumentasipelatihan');

//  -------------- ACARA PELATIHAN TENTANG JASA KONSTRUKSI =-------------------------------------
Route::get('/acarapelatihan', [BeritaController::class, 'acarapelatihan'])->middleware('auth');  
Route::get('/acarapelatihan/{judul_kegiatan}', [BeritaController::class, 'acarapelatihanshowbyjudul'])->middleware('auth');
Route::get('/acarapelatihandetails/{judul_kegiatan}', [BeritaController::class, 'acarapelatihandetailsshowbyjudul'])->middleware('auth');
Route::get('/acarapelatihanupdate/{judul_kegiatan}', [BeritaController::class, 'updateacarapelatihandetails'])->middleware('auth')->name('updateshow.acarapelatihan');
Route::post('/acarapelatihanstore/{judul_kegiatan}', [BeritaController::class, 'createupdateacarapelatihan'])->middleware('auth')->name('update.acarapelatihan');
Route::get('/acarapelatihancreate', [BeritaController::class, 'createacarapelatihan'])->middleware('auth');
Route::post('/acarapelatihancreatestore', [BeritaController::class, 'createstoreacarapelatihan'])->middleware('auth')->name('newcreatestore.acarapelatihan');

Route::post('/acarapelatihandelete/{judul_kegiatan}', [BeritaController::class, 'deletedetailsacarapelatihannew'])
->middleware('auth')
->name('delete.acaradetailspelatihandetailsnew');

// -------- BAGIAN 03 BACKEND DATA JASA KONSTRUKSI BANGUNAN GEDUNG PUPR ---------------------------------

// KETERTIBAN DAN PENGAWASAN 
// =-====================================================================================================
Route::get('/pengawasandanketertiban', [DatajakonController::class, 'pengawasandanketertiban'])->middleware('auth');  
Route::get('/pengawasandanketertiban/{judul}', [DatajakonController::class, 'pengawasandanketertibanshowbyjudul'])->middleware('auth');
Route::get('/pengawasandanketertiban/update/{judul}', [DatajakonController::class, 'updatepengawasandanketertiban'])->middleware('auth')->name('update.pengawasandanketertiban');
Route::post('/pengawasandanketertiban/{judul}', [DatajakonController::class, 'createupdatepengawasandanketertiban'])->middleware('auth')->name('updatestore.pengawasandanketertiban');
Route::get('/pengawasandanketertibancreate', [DatajakonController::class, 'createpengawasandanketertiban'])->middleware('auth');
Route::post('/pengawasandanketertibanstore', [DatajakonController::class, 'createstorepengawasandanketertiban'])->middleware('auth')->name('create.pengawasandanketertiban');

Route::post('/pengawasandanketertibandelete/{id}', [DatajakonController::class, 'deletepengawasandanketertiban'])
->middleware('auth')
->name('delete.pengawasandanketertiban');

// --- ASOSIASI PENGUSAHA BACKEND JASA KONSTRUKSI ----------------------------
Route::get('/asosiasipengusaha', [DatajakonController::class, 'asosiasipengusaha'])->middleware('auth');  
Route::get('/asosiasipengusaha/{nama_asosiasi}', [DatajakonController::class, 'asosiasipengusahashowbyjudul'])->middleware('auth');
Route::get('/asosiasipengusaha/update/{nama_asosiasi}', [DatajakonController::class, 'updateasosiasipengusaha'])->middleware('auth')->name('update.asosiasipengusaha');
Route::post('/asosiasipengusaha/{nama_asosiasi}', [DatajakonController::class, 'createupdateasosiasipengusaha'])->middleware('auth')->name('updatestore.newasosiasipengusaha');
Route::get('/asosiasipengusahacreate', [DatajakonController::class, 'createasosiasipengusaha'])->middleware('auth');
Route::post('/asosiasipengusahastore', [DatajakonController::class, 'createstoreasosiasipengusaha'])->middleware('auth')->name('create.asosiasipengusaha');

Route::post('/asosiasipengusahadelete/{judul}', [DatajakonController::class, 'deleteasosiasipengusaha'])
->middleware('auth')
->name('delete.asosiasipengusaha');

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

// ----------------------------------- PAKET PEKERJAAN ---------------------------------
Route::get('/paketpekerjaan', [DatajakonController::class, 'bepaketpekerjaan'])->middleware('auth');  
Route::get('/paketpekerjaan/{instansi}', [DatajakonController::class, 'paketpekerjaanshowbyjudul'])->middleware('auth');
Route::get('/paketpekerjaan/update/{instansi}', [DatajakonController::class, 'updatepaketpekerjaan'])->middleware('auth')->name('update.paketpekerjaan');
Route::post('/paketpekerjaan/{instansi}', [DatajakonController::class, 'createupdatepaketpekerjaan'])->middleware('auth')->name('updatestore.paketpekerjaan');
Route::get('/paketpekerjaancreate', [DatajakonController::class, 'createpaketpekerjaan'])->middleware('auth');
Route::post('/paketpekerjaanstore', [DatajakonController::class, 'createstorepaketpekerjaan'])->middleware('auth')->name('create.paketpekerjaan');

Route::post('/paketpekerjaandelete/{judul}', [DatajakonController::class, 'deletepaketpekerjaan'])
->middleware('auth')
->name('delete.paketpekerjaan');


// SBU LAMPIRAN 1
Route::get('/sbulampiran1', [StrukturController::class, 'sbulampiran1'])->middleware('auth');  
Route::get('/sbulampiran1/{judul}', [StrukturController::class, 'sbulampiran1showbyjudul'])->middleware('auth');

// SBU LAMPIRAN 2
Route::get('/sbulampiran2', [StrukturController::class, 'sbulampiran2'])->middleware('auth');  
Route::get('/sbulampiran2/{judul}', [StrukturController::class, 'sbulampiran2showbyjudul'])->middleware('auth');

// SBU LAMPIRAN 3
Route::get('/sbulampiran3', [StrukturController::class, 'sbulampiran3'])->middleware('auth');  
Route::get('/sbulampiran3/{judul}', [StrukturController::class, 'sbulampiran3showbyjudul'])->middleware('auth');


// ------------------------ BAGIAN 03 BACKEND TENAGA KERJA -------------------
// ================================ TENAGA KERJA ============================================================================
Route::get('/beskktenagakerja', [SkktenagakerjaController::class, 'index'])->middleware('auth');  
Route::get('/skktenagakerja/{nama}', [SkktenagakerjaController::class, 'showByName'])->name('skktenagakerja.show');
Route::get('/showtenagakerja/{nama}', [SkktenagakerjaController::class, 'showkegiatanshowByName'])->name('skktenagakerjakegiatan.show');

Route::get('/newtenagakerja/update/{nama}', [SkktenagakerjaController::class, 'updatetenagakerja'])->middleware('auth')->name('update.tenagakerja');
Route::post('/newtenagakerja/{nama}', [SkktenagakerjaController::class, 'createupdatetenagakerja'])->middleware('auth')->name('updatestore.tenagakerja');
Route::get('/newtenagakerjacreate', [SkktenagakerjaController::class, 'createtenagakerja'])->middleware('auth');
Route::post('/newtenagakerjastore', [SkktenagakerjaController::class, 'createstoretenagakerja'])->middleware('auth')->name('create.tenagakerja');

Route::post('/newtenagakerjadelete/{nama}', [SkktenagakerjaController::class, 'deletetenagakerja'])
->middleware('auth')
->name('delete.tenagakerja');

// ======================================== PENANGGUNG JAWAB TEKNIS ====================================================================
Route::get('/datapjt', [SkktenagakerjaController::class, 'datapjt'])->middleware('auth');  
Route::get('/datapjt/{nama_lengkap}', [SkktenagakerjaController::class, 'datapjtshowByName'])->name('datapjt.show');
Route::get('/datapjt/update/{nama_lengkap}', [SkktenagakerjaController::class, 'updatedatapjt'])->middleware('auth')->name('update.datapjt');
Route::post('/datapjtupdatestore/{id}', [SkktenagakerjaController::class, 'createupdatedatapjtnew'])->middleware('auth')->name('updatestore.datapjt');
Route::get('/datapjtcreate', [SkktenagakerjaController::class, 'createdatapjt'])->middleware('auth');
Route::post('/datapjtstorenewdata', [SkktenagakerjaController::class, 'createstoredatapjt'])->middleware('auth')->name('create.datapjt');

Route::post('/datapjt/{nama_lengkap}', [SkktenagakerjaController::class, 'deletedatapjt'])
->middleware('auth')
->name('delete.datapjt');

// ======================================== TIMPEMBINA JASA KONSTRUKSI ====================================================================
Route::get('/timpembina', [SkktenagakerjaController::class, 'timpembina'])->middleware('auth');  
// Route::get('/timpembina/{nama_lengkap}', [SkktenagakerjaController::class, 'timpembinashowByName'])->name('timpembina.show');
Route::get('/timpembina/update/{nama_lengkap}', [SkktenagakerjaController::class, 'updatedatatimpembina'])->middleware('auth')->name('update.timpembina');
Route::post('/timpembinaupdatestore/{nama_lengkap}', [SkktenagakerjaController::class, 'createupdatetimpembina'])->middleware('auth')->name('updatestore.timpembina');
Route::get('/timpembinacreate', [SkktenagakerjaController::class, 'createtimpembina'])->middleware('auth');
Route::post('/timpembinastore', [SkktenagakerjaController::class, 'createstoretimpembina'])->middleware('auth')->name('create.timpembina');

Route::post('/timpembina/{nama_lengkap}', [SkktenagakerjaController::class, 'deletedatatimpembina'])
->middleware('auth')
->name('delete.timpembina');

// ======================================== DATA IUJK JASA KONSTRUKSI ====================================================================
Route::get('/dataiujk', [UijkController::class, 'dataiujk'])->middleware('auth');  
Route::get('/dataiujk/{nama_perusahaan}', [UijkController::class, 'dataiujkshowByName'])->name('dataiujk.show');
Route::get('/dataiujk/update/{nama_perusahaan}', [UijkController::class, 'updatedatadataiujk'])->middleware('auth')->name('update.dataiujk');
Route::post('/dataiujkupdatestore/{nama_perusahaan}', [UijkController::class, 'createupdatedataiujk'])->middleware('auth')->name('updatestore.dataiujk');
Route::get('/dataiujkcreate', [UijkController::class, 'createdataiujk'])->middleware('auth');
Route::post('/dataiujkstore', [UijkController::class, 'createstoredataiujk'])->middleware('auth')->name('create.dataiujk');

Route::post('/dataiujk/{nama_perusahaan}', [UijkController::class, 'deletedatadataiujk'])
->middleware('auth')
->name('delete.dataiujk');


// -------- BAGIAN 04 BACKEND ---------------------------------


Route::post('/paketpekerjaandelete/{judul}', [DatajakonController::class, 'deletepaketpekerjaan'])
->middleware('auth')
->name('delete.paketpekerjaan');

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

// Route::get('/skktenagakerja/{nama}', [SkktenagakerjaController::class, 'showByName'])->name('skktenagakerja.show');
// Route::get('/skktenagakerja/{nama}', [SkktenagakerjaController::class, 'showByName'])->name('skktenagakerja.show');

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

// Route::get('/skktenagakerja/{nama}', [SkktenagakerjaController::class, 'showByName'])->name('skktenagakerja.show');
// Route::get('/skktenagakerja/{nama}', [SkktenagakerjaController::class, 'showByName'])->name('skktenagakerja.show');

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
// ====================================== ====================================== ====================================== ======================================
// SURAT KEPUTUSAN TENTANG JASA KONSTRUKSI  
Route::get('/administrator', [AdministratorController::class, 'index'])->middleware('auth');  
Route::get('/administrator/{name}', [AdministratorController::class, 'administratorshowbyname'])->middleware('auth');
Route::get('/administrator/update/{name}', [AdministratorController::class, 'updateadministrator'])->middleware('auth')->name('updateshow.administrator');
Route::put('/administrator/{name}', [AdministratorController::class, 'createupdateadministrator'])
->middleware('auth')
->name('update.dataadministrator');

// Route::put('/administrator/{name}', [AdministratorController::class, 'createupdateadministrator'])->middleware('auth')->name('update.dataadministrator');
// Route::post('/administrator/{name}', [AdministratorController::class, 'createupdateadministrator'])->middleware('auth')->name('update.dataadministrator');
// Route::get('/keputusancreate', [PeraturanController::class, 'createkeputusan'])->middleware('auth');
// Route::post('/keputusanstore', [PeraturanController::class, 'createstorekeputusan'])->middleware('auth')->name('peruud.createkeputusan');
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

// 02 SETTINGS MENU PENGWASAN LOKASI KECAMATAN KOTA
Route::get('/settingkecamatan', [SettingmenuController::class, 'settingkecamatan'])->middleware('auth');  
Route::get('/settingkecamatancreate', [SettingmenuController::class, 'createsettingkecamatan'])->middleware('auth');
Route::post('/settingkecamatanstore', [SettingmenuController::class, 'createstoresettingkecamatan'])->middleware('auth')->name('create.settingkecamatan');
Route::post('/settingkecamatan/{id}', [SettingmenuController::class, 'deletesettingkecamatan'])
->middleware('auth')
->name('delete.settingkecamatan');

// 03 SETTINGS MENU QA SEBAGAI
Route::get('/settingqasebagai', [SettingmenuController::class, 'settingqasebagai'])->middleware('auth');  
Route::get('/settingqasebagaicreate', [SettingmenuController::class, 'createsettingqasebagai'])->middleware('auth');
Route::post('/settingqasebagaistore', [SettingmenuController::class, 'createstoresettingqasebagai'])->middleware('auth')->name('create.settingqasebagai');
Route::post('/settingqasebagai/{id}', [SettingmenuController::class, 'deletesettingqasebagai'])
->middleware('auth')
->name('delete.settingqasebagai');

// 04 SETTINGS MENU QA PERTANYAAN
Route::get('/settingqapertanyaan', [SettingmenuController::class, 'settingqapertanyaan'])->middleware('auth');  
Route::get('/settingqapertanyaancreate', [SettingmenuController::class, 'createsettingqapertanyaan'])->middleware('auth');
Route::post('/settingqapertanyaanstore', [SettingmenuController::class, 'createstoresettingqapertanyaan'])->middleware('auth')->name('create.settingqapertanyaan');
Route::post('/settingqapertanyaan/{id}', [SettingmenuController::class, 'deletesettingqapertanyaan'])
->middleware('auth')
->name('delete.settingqapertanyaan');

// 05 SETTINGS MENU METODE PENGADAAN
Route::get('/settingmetodepengadaan', [SettingmenuController::class, 'settingmetodepengadaan'])->middleware('auth');  
Route::get('/settingmetodepengadaancreate', [SettingmenuController::class, 'createsettingmetodepengadaan'])->middleware('auth');
Route::post('/settingmetodepengadaanstore', [SettingmenuController::class, 'createstoresettingmetodepengadaan'])->middleware('auth')->name('create.settingmetodepengadaan');
Route::post('/settingmetodepengadaan/{id}', [SettingmenuController::class, 'deletesettingmetodepengadaan'])
->middleware('auth')
->name('delete.settingmetodepengadaan');

// 06 SETTINGS MENU PENGAWASAN BANGUNAN GEDUNG 
Route::get('/settingpengawasanbangunangedung', [SettingmenuController::class, 'settingpengawasanbangunangedung'])->middleware('auth');  
Route::get('/settingpengawasanbangunangedungcreate', [SettingmenuController::class, 'createsettingpengawasanbangunangedung'])->middleware('auth');
Route::post('/settingpengawasanbangunangedungstore', [SettingmenuController::class, 'createstoresettingpengawasanbangunangedung'])->middleware('auth')->name('create.settingpengawasanbangunangedung');
Route::post('/settingpengawasanbangunangedung/{id}', [SettingmenuController::class, 'deletesettingpengawasanbangunangedung'])
->middleware('auth')
->name('delete.settingpengawasanbangunangedung');

// 07 SETTINGS MENU PENGAWASAN STATUS 
Route::get('/settingpengawasanstatus', [SettingmenuController::class, 'settingpengawasanstatus'])->middleware('auth');  
Route::get('/settingpengawasanstatuscreate', [SettingmenuController::class, 'createsettingpengawasanstatus'])->middleware('auth');
Route::post('/settingpengawasanstatusstore', [SettingmenuController::class, 'createstoresettingpengawasanstatus'])->middleware('auth')->name('create.settingpengawasanstatus');
Route::post('/settingpengawasanstatus/{id}', [SettingmenuController::class, 'deletesettingpengawasanstatus'])
->middleware('auth')
->name('delete.settingpengawasanstatus');

// 08 SETTINGS MENU PENGAWASAN TINDAKAN 
Route::get('/settingpengawasantindakan', [SettingmenuController::class, 'settingpengawasantindakan'])->middleware('auth');  
Route::get('/settingpengawasantindakancreate', [SettingmenuController::class, 'createsettingpengawasantindakan'])->middleware('auth');
Route::post('/settingpengawasantindakanstore', [SettingmenuController::class, 'createstoresettingpengawasantindakan'])->middleware('auth')->name('create.settingpengawasantindakan');
Route::post('/settingpengawasantindakan/{id}', [SettingmenuController::class, 'deletesettingpengawasantindakan'])
->middleware('auth')
->name('delete.settingpengawasantindakan');

// 09 SETTINGS MENU AGENDA STATUS 
Route::get('/settingagendastatus', [SettingmenuController::class, 'settingagendastatus'])->middleware('auth');  
Route::get('/settingagendastatuscreate', [SettingmenuController::class, 'createsettingagendastatus'])->middleware('auth');
Route::post('/settingagendastatusstore', [SettingmenuController::class, 'createstoresettingagendastatus'])->middleware('auth')->name('create.settingagendastatus');
Route::post('/settingagendastatus/{id}', [SettingmenuController::class, 'deletesettingagendastatus'])
->middleware('auth')
->name('delete.settingagendastatus');

// 10 SETTINGS MENU KETERAMPILAN PEKERJA 
Route::get('/settingketerampilanpekerja', [SettingmenuController::class, 'settingketerampilanpekerja'])->middleware('auth');  
Route::get('/settingketerampilanpekerjacreate', [SettingmenuController::class, 'createsettingketerampilanpekerja'])->middleware('auth');
Route::post('/settingketerampilanpekerjastore', [SettingmenuController::class, 'createstoresettingketerampilanpekerja'])->middleware('auth')->name('create.settingketerampilanpekerja');
Route::post('/settingketerampilanpekerja/{id}', [SettingmenuController::class, 'deletesettingketerampilanpekerja'])
->middleware('auth')
->name('delete.settingketerampilanpekerja');

// 11 SETTINGS MENU TAHUN PILIHAN 
Route::get('/settingtahunpilihan', [SettingmenuController::class, 'settingtahunpilihan'])->middleware('auth');  
Route::get('/settingtahunpilihancreate', [SettingmenuController::class, 'createsettingtahunpilihan'])->middleware('auth');
Route::post('/settingtahunpilihanstore', [SettingmenuController::class, 'createstoresettingtahunpilihan'])->middleware('auth')->name('create.settingtahunpilihan');
Route::post('/settingtahunpilihan/{id}', [SettingmenuController::class, 'deletesettingtahunpilihan'])
->middleware('auth')
->name('delete.settingtahunpilihan');


// Route::get('/$login', function () {
//     // return view('welcome');
//     return view('login.index',
//         'title' => 'Halaman Login'
//     ]);
// });

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');  
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';

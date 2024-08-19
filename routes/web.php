<?php

use App\Http\Controllers\FedashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PeraturanController;
use App\Http\Controllers\SkktenagakerjaController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\UijkController;
use App\Http\Controllers\UndangundangController;
use Database\Factories\SkktenagakerjaFactory;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [FedashboardController::class, 'index']);  
Route::get('/portalberita/{judul}', [FedashboardController::class, 'portalberitashowByJudul']);
Route::get('/berita', [FedashboardController::class, 'navbarberita']);  

Route::get('/kegiatansertifikasi', [FedashboardController::class, 'kegiatansertifikasi']);  
Route::get('/kegiatansertifikasi/{judul_kegiatan}', [FedashboardController::class, 'kegiatansertifikasishowByJudul']);
Route::get('/detailskegiatan/{jabatan}', [FedashboardController::class, 'detailskegiatanshowByJudul']);


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

// ---------------------- 01 PROFIL-----------------------//
// -------- BAGIAN 1 ---------------------------------
Route::get('/profil/struktur', function () {
    // return view('welcome');
    return view('frontend.01_profil.01_struktur', [
        'title' => 'Struktur Kedinasan'
    ]);
});

Route::get('/profil/rencanastrategis', function () {
    // return view('welcome');
    return view('frontend.01_profil.02_rencanastrategis', [
        'title' => 'Rencana Strategis'
        ]);
});

Route::get('/profil/tupoksi', function () {
    // return view('welcome');
    return view('frontend.01_profil.03_tupoksi', [
        'title' => 'Tupoksi Program & Jasa Konstruksi'
    ]);
});

// ---------------------- 03 DATA JAKON -----------------------//
// -------- BAGIAN 1 ---------------------------------
Route::get('/datajakon/asosiasi', function () {
    // return view('welcome');
    return view('frontend.03_datajakon.01_asosiasi', [
        'title' => 'Asosiasi Pengusaha'
    ]);
});

Route::get('/datajakon/standarbiayaumum', function () {
    // return view('welcome');
    return view('frontend.03_datajakon.02_standarbiayaumum', [
        'title' => 'Standar Biaya Umum'
    ]);
});

Route::get('/datajakon/paketpekerjaan', function () {
    // return view('welcome');
    return view('frontend.03_datajakon.03_paketpekerjaan', [
        'title' => 'Paket Pekerjaan KBB'
    ]);
});


// ---------------------- 04 TENAGA KERJA -----------------------//
// -------- BAGIAN 1 ---------------------------------
Route::get('/tenagakerja/skaskt', [SkktenagakerjaController::class, 'feskktenagakerja']);  
Route::get('/tenagakerja/skaskt/{judul}', [SkktenagakerjaController::class, 'feskktenagakerjashowByName']);
// Rute untuk menangani parameter kecamatan
Route::get('/skk/kecamatan', [SkktenagakerjaController::class, 'listkecamatan']);  
Route::get('/tenagakerja/kecamatan', [SkktenagakerjaController::class, 'feskktenagakerjakecamatanshowBykecamatan']);

Route::get('/skk/desa', [SkktenagakerjaController::class, 'listdesa']); 
 

Route::get('/tenagakerja/pjt', function () {
    // return view('welcome');
    return view('frontend.04_tenagakerja.02_pjt', [
        'title' => 'Penanggung Jawab Teknis'
    ]);
});

Route::get('/tenagakerja/timpembina', function () {
    // return view('welcome');
    return view('frontend.04_tenagakerja.03_timpembina', [
        'title' => 'Tim Pembina Jasa Konstruksi'
    ]);
});


// ---------------------- 05 INFORMASI SPM -----------------------//
// -------- BAGIAN 1 ---------------------------------
Route::get('/spm/informasispm', function () {
    // return view('welcome');
    return view('frontend.05_spm.01_informasispm', [
        'title' => 'Standar Penetapan Kemampuan'
    ]);
});

// ---------------------- 08 UIJK -----------------------//
// -------- BAGIAN 1 ---------------------------------
Route::get('/uijk', [UijkController::class, 'index']);  
Route::get('/uijk/{nama_perusahaan}', [UijkController::class, 'feuijkshowByName']);
Route::get('/uijkpt', [UijkController::class, 'uijkpt']);
Route::get('/uijkcv', [UijkController::class, 'uijkcv']);
Route::get('/2020', [UijkController::class, '2020']);



// ---------------------- 09 TDUP -----------------------//
// -------- BAGIAN 1 ---------------------------------
Route::get('/tdup', function () {
    // return view('welcome');
    return view('frontend.09_tdup.01_tdup', [
        'title' => 'Tanda Daftar Usaha Perseroan'
    ]);
});

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

Route::get('/dashboard', function () {
    // return view('welcome');
    return view('backend.00_dashboard.index',[
        'title' => 'Admin Dashboard Sipjaki KBB'
    ]);
})->middleware('auth');

// -------- BAGIAN 01 BACKEND PROFIL ---------------------------------
Route::get('/struktur', [StrukturController::class, 'index'])->middleware('auth');  
// Route::get('/skktenagakerja/{nama}', [SkktenagakerjaController::class, 'showByName'])->name('skktenagakerja.show');
// Route::get('/skktenagakerja/{nama}', [SkktenagakerjaController::class, 'showByName'])->name('skktenagakerja.show');
// Route::get('/skktenagakerja/{nama}', [SkktenagakerjaController::class, 'showByName'])->name('skktenagakerja.show');

Route::get('/renstra', [StrukturController::class, 'renstra'])->middleware('auth');  
// Route::get('/skktenagakerja/{nama}', [SkktenagakerjaController::class, 'showByName'])->name('skktenagakerja.show');
// Route::get('/skktenagakerja/{nama}', [SkktenagakerjaController::class, 'showByName'])->name('skktenagakerja.show');
// Route::get('/skktenagakerja/{nama}', [SkktenagakerjaController::class, 'showByName'])->name('skktenagakerja.show');

Route::get('/tupoksi', [StrukturController::class, 'tupoksi'])->middleware('auth');  
// Route::get('/skktenagakerja/{nama}', [SkktenagakerjaController::class, 'showByName'])->name('skktenagakerja.show');
// Route::get('/skktenagakerja/{nama}', [SkktenagakerjaController::class, 'showByName'])->name('skktenagakerja.show');
// Route::get('/skktenagakerja/{nama}', [SkktenagakerjaController::class, 'showByName'])->name('skktenagakerja.show');




// -------- BAGIAN 14 BACKEND PERATURAN UNDANGUNDANG ---------------------------------
Route::get('/peruud', [PeraturanController::class, 'undangundang'])->middleware('auth');  
// Route::get('/skktenagakerja/{nama}', [SkktenagakerjaController::class, 'showByName'])->name('skktenagakerja.show');
// Route::get('/skktenagakerja/{nama}', [SkktenagakerjaController::class, 'showByName'])->name('skktenagakerja.show');
// Route::get('/skktenagakerja/{nama}', [SkktenagakerjaController::class, 'showByName'])->name('skktenagakerja.show');

Route::get('/perpemerintah', [PeraturanController ::class, 'pemerintah'])->middleware('auth');  
// Route::get('/skktenagakerja/{nama}', [SkktenagakerjaController::class, 'showByName'])->name('skktenagakerja.show');
// Route::get('/skktenagakerja/{nama}', [SkktenagakerjaController::class, 'showByName'])->name('skktenagakerja.show');
// Route::get('/skktenagakerja/{nama}', [SkktenagakerjaController::class, 'showByName'])->name('skktenagakerja.show');

Route::get('/perpresiden', [PeraturanController::class, 'presiden'])->middleware('auth');  
// Route::get('/skktenagakerja/{nama}', [SkktenagakerjaController::class, 'showByName'])->name('skktenagakerja.show');
// Route::get('/skktenagakerja/{nama}', [SkktenagakerjaController::class, 'showByName'])->name('skktenagakerja.show');
// Route::get('/skktenagakerja/{nama}', [SkktenagakerjaController::class, 'showByName'])->name('skktenagakerja.show');

Route::get('/permenteri', [PeraturanController::class, 'menteri'])->middleware('auth');  
Route::get('/permenteri/{judul}', [PeraturanController::class, 'menterishowByJudul'])->middleware('auth');
// Route::get('/skktenagakerja/{nama}', [SkktenagakerjaController::class, 'showByName'])->name('skktenagakerja.show');
// Route::get('/skktenagakerja/{nama}', [SkktenagakerjaController::class, 'showByName'])->name('skktenagakerja.show');

Route::get('/skmenteri', [PeraturanController::class, 'skmenteri'])->middleware('auth');  
Route::get('/skmenteri/{judul}', [PeraturanController::class, 'skmenterishowByJudul'])->middleware('auth');
// Route::get('/skktenagakerja/{nama}', [SkktenagakerjaController::class, 'showByName'])->name('skktenagakerja.show');
// Route::get('/skktenagakerja/{nama}', [SkktenagakerjaController::class, 'showByName'])->name('skktenagakerja.show');



// -------- BAGIAN 04 BACKEND ---------------------------------
Route::get('/beskktenagakerja', [SkktenagakerjaController::class, 'index'])->middleware('auth');  
Route::get('/skktenagakerja/{nama}', [SkktenagakerjaController::class, 'showByName'])->name('skktenagakerja.show');



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

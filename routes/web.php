<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    // return view('welcome');
    return view('frontend.00_full.index');
});

Route::get('/404', function () {
    // return view('welcome');
    return view('404');
});

Route::get('/bahan2', function () {
    // return view('welcome');
    return view('frontend.00_full.bahan2');
});

// ---------------------- 01 PROFIL-----------------------//
// -------- BAGIAN 1 ---------------------------------
Route::get('/profil/struktur', function () {
    // return view('welcome');
    return view('frontend.01_profil.01_struktur');
});

Route::get('/profil/rencanastrategis', function () {
    // return view('welcome');
    return view('frontend.01_profil.02_rencanastrategis');
});

Route::get('/profil/tupoksi', function () {
    // return view('welcome');
    return view('frontend.01_profil.03_tupoksi');
});

// ---------------------- 03 DATA JAKON -----------------------//
// -------- BAGIAN 1 ---------------------------------
Route::get('/datajakon/standarbiayaumum', function () {
    // return view('welcome');
    return view('frontend.03_datajakon.02_standarbiayaumum');
});

Route::get('/datajakon/paketpekerjaan', function () {
    // return view('welcome');
    return view('frontend.03_datajakon.03_paketpekerjaan');
});


// ---------------------- 04 TENAGA KERJA -----------------------//
// -------- BAGIAN 1 ---------------------------------
Route::get('/tenagakerja/skaskt', function () {
    // return view('welcome');
    return view('frontend.04_tenagakerja.01_skaskt');
});

Route::get('/tenagakerja/pjt', function () {
    // return view('welcome');
    return view('frontend.04_tenagakerja.02_pjt');
});

Route::get('/tenagakerja/timpembina', function () {
    // return view('welcome');
    return view('frontend.04_tenagakerja.03_timpembina');
});


// ---------------------- 05 INFORMASI SPM -----------------------//
// -------- BAGIAN 1 ---------------------------------
Route::get('/spm/informasispm', function () {
    // return view('welcome');
    return view('frontend.05_spm.01_informasispm');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

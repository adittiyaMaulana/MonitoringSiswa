<?php

use App\Http\Controllers\AdminController\AdminController;
use App\Http\Controllers\GuruController\GuruController;
use App\Http\Controllers\OrangTuaController\OrangTuaController;
use Database\Seeders\OrangTuaSeeder;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// =============================================================================================================================
// ============================================== OrangTua ===============================================================
// ==========================================================================================================================
Route::get('/homepage', [OrangTuaController::class, 'homepage']);
Route::get('/jadwalKelas', [OrangTuaController::class, 'jadwalKelas']);
Route::get('/jadwalNonAkademik', [OrangTuaController::class, 'jadwalNonAkademik']);
Route::get('/finansial', [OrangTuaController::class, 'finansial']);
Route::get('/berita', [OrangTuaController::class, 'berita']);
Route::get('/nilai', [OrangTuaController::class, 'nilai']);
Route::get('/kehadiran', [OrangTuaController::class, 'kehadiran']);
Route::get('/fiturBantuan', [OrangTuaController::class, 'fiturBantuan']);
Route::get('/tentangSekolah', [OrangTuaController::class, 'tentangSekolah']);
Route::get('/pesan', [OrangTuaController::class, 'pesan']);
Route::get('/pusatBantuan', [OrangTuaController::class, 'pusatBantuan']);


// *%*%*%*%*%**%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%%*%*%*%%*%*%%*%*%*%%*%*%*%%*%*%*%%*%*%**%*%**%*%*%**%*%*%*%**%*%*%*%*
// *%*%*%*%*%**%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%%*%*%*%%*%*%%*%*%*%%*%*%*%%*%*%*%%*%*%**%*%**%*%*%**%*%*%*%**%*%*%*%*
// *%*%*%*%*%**%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%%*%*%*%%*%*%%*%*%*%%*%*%*%%*%*%*%%*%*%**%*%**%*%*%**%*%*%*%**%*%*%*%*

// =============================================================================================================================
// ============================================== Guru ===============================================================
// ==========================================================================================================================

Route::get('/homepageGuru', [GuruController::class, 'homepageGuru']);
Route::get('/nilaiSiswa', [GuruController::class, 'nilaiSiswa']);
Route::get('/kehadiranSiswa', [GuruController::class, 'kehadiranSiswa']);
Route::get('/pusatBantuanGuru', [GuruController::class, 'pusatBantuanGuru']);

// *%*%*%*%*%**%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%%*%*%*%%*%*%%*%*%*%%*%*%*%%*%*%*%%*%*%**%*%**%*%*%**%*%*%*%**%*%*%*%*
// *%*%*%*%*%**%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%%*%*%*%%*%*%%*%*%*%%*%*%*%%*%*%*%%*%*%**%*%**%*%*%**%*%*%*%**%*%*%*%*
// *%*%*%*%*%**%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%%*%*%*%%*%*%%*%*%*%%*%*%*%%*%*%*%%*%*%**%*%**%*%*%**%*%*%*%**%*%*%*%*

// =============================================================================================================================
// ============================================== Admin ===============================================================
// ==========================================================================================================================

Route::get('/homepageAdmin', [AdminController::class, 'homepageAdmin']);

// jadwal
// jadwal kelas
Route::get('/jadwalKelasSiswa', [AdminController::class, 'jadwalKelasSiswa']);
Route::get('/formKelasSiswa', [AdminController::class, 'formKelasSiswa']);

// jadwal non
Route::get('/jadwalNonAkademikSiswa', [AdminController::class, 'jadwalNonAkademikSiswa']);
Route::get('/formNonAkademikSiswa', [AdminController::class, 'formNonAkademikSiswa']);

// Finansial
Route::get('/finansialSiswa', [AdminController::class, 'finansialSiswa']);
Route::get('/formFinansial', [AdminController::class, 'formFinansial']);

// berita
Route::get('/beritaAdmin', [AdminController::class, 'beritaAdmin']);
Route::get('/formBerita', [AdminController::class, 'formBerita']);

// data siswa
Route::get('/data', [AdminController::class, 'data']);
Route::get('/formData', [AdminController::class, 'formData']);

// fitur bantuan
Route::get('/dokumenFiturBantuan', [AdminController::class, 'dokumenFiturBantuan']);
Route::get('/formFiturBantuan', [AdminController::class, 'formFiturBantuan']);




// *%*%*%*%*%**%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%%*%*%*%%*%*%%*%*%*%%*%*%*%%*%*%*%%*%*%**%*%**%*%*%**%*%*%*%**%*%*%*%*
// *%*%*%*%*%**%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%%*%*%*%%*%*%%*%*%*%%*%*%*%%*%*%*%%*%*%**%*%**%*%*%**%*%*%*%**%*%*%*%*
// *%*%*%*%*%**%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%%*%*%*%%*%*%%*%*%*%%*%*%*%%*%*%*%%*%*%**%*%**%*%*%**%*%*%*%**%*%*%*%*
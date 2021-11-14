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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// =============================================================================================================================
// ============================================== OrangTua ===============================================================
// ==========================================================================================================================
Route::get('/homepage', [OrangTuaController::class, 'homepage']);
Route::get('/jadwalKelas', [OrangTuaController::class, 'jadwalKelas']);
Route::get('/jadwalNonAkademik', [OrangTuaController::class, 'jadwalNonAkademik']);

// finansial
Route::get('/finansial', [OrangTuaController::class, 'finansial']);

// berita
Route::get('/berita', [OrangTuaController::class, 'berita']);
Route::get('/beritaDetail', [OrangTuaController::class, 'beritaDetail']);

// nilai
Route::get('/nilai', [OrangTuaController::class, 'nilai']);

// kehadiran
Route::get('/kehadiran', [OrangTuaController::class, 'kehadiran']);

// fitur bantuan
Route::get('/fiturBantuan', [OrangTuaController::class, 'fiturBantuan']);

// tentang
Route::get('/tentangSekolah', [OrangTuaController::class, 'tentangSekolah']);

// pesan
Route::get('/pesan', [OrangTuaController::class, 'pesan']);

// pusat bantuan
Route::get('/pusatBantuan', [OrangTuaController::class, 'pusatBantuan']);


// *%*%*%*%*%**%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%%*%*%*%%*%*%%*%*%*%%*%*%*%%*%*%*%%*%*%**%*%**%*%*%**%*%*%*%**%*%*%*%*
// *%*%*%*%*%**%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%%*%*%*%%*%*%%*%*%*%%*%*%*%%*%*%*%%*%*%**%*%**%*%*%**%*%*%*%**%*%*%*%*
// *%*%*%*%*%**%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%%*%*%*%%*%*%%*%*%*%%*%*%*%%*%*%*%%*%*%**%*%**%*%*%**%*%*%*%**%*%*%*%*

// =============================================================================================================================
// ============================================== Guru ===============================================================
// ==========================================================================================================================

Route::get('/homepageGuru', [GuruController::class, 'homepageGuru']);

// nilai siswa
Route::get('/nilaiSiswa', [GuruController::class, 'nilaiSiswa']);
Route::get('/updateNilaiSiswa', [GuruController::class, 'updateNilaiSiswa']);

// kehadiran siswa
Route::get('/kehadiranSiswa', [GuruController::class, 'kehadiranSiswa']);
Route::get('/updatekehadiranSiswa', [GuruController::class, 'updatekehadiranSiswa']);


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
Route::get('/formUpdateKelasSiswa', [AdminController::class, 'formUpdateKelasSiswa']);

// jadwal non
Route::get('/jadwalNonAkademikSiswa', [AdminController::class, 'jadwalNonAkademikSiswa']);
Route::get('/formNonAkademikSiswa', [AdminController::class, 'formNonAkademikSiswa']);
Route::get('/formUpdateJadwalNonAkademik', [AdminController::class, 'formUpdateJadwalNonAkademik']);

// Finansial
Route::get('/finansialSiswa', [AdminController::class, 'finansialSiswa']);
Route::get('/formFinansial', [AdminController::class, 'formFinansial']);
Route::get('/formUpdateFinansial', [AdminController::class, 'formUpdateFinansial']);

// berita
Route::get('/beritaAdmin', [AdminController::class, 'beritaAdmin']);
Route::get('/formBerita', [AdminController::class, 'formBerita']);
Route::get('/formUpdateBerita', [AdminController::class, 'formUpdateBerita']);

// data siswa
Route::get('/data', [AdminController::class, 'data']);
Route::get('/formData', [AdminController::class, 'formData']);
Route::get('/formUpdateData', [AdminController::class, 'formUpdateData']);

// fitur bantuan
Route::get('/dokumenFiturBantuan', [AdminController::class, 'dokumenFiturBantuan']);
Route::get('/formFiturBantuan', [AdminController::class, 'formFiturBantuan']);
Route::get('/formUpdateFiturBantuan', [AdminController::class, 'formUpdateFiturBantuan']);

// tentang sekolah
Route::get('/tentangSekolahAdmin', [AdminController::class, 'tentangSekolahAdmin']);




// *%*%*%*%*%**%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%%*%*%*%%*%*%%*%*%*%%*%*%*%%*%*%*%%*%*%**%*%**%*%*%**%*%*%*%**%*%*%*%*
// *%*%*%*%*%**%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%%*%*%*%%*%*%%*%*%*%%*%*%*%%*%*%*%%*%*%**%*%**%*%*%**%*%*%*%**%*%*%*%*
// *%*%*%*%*%**%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%*%%*%*%*%%*%*%%*%*%*%%*%*%*%%*%*%*%%*%*%**%*%**%*%*%**%*%*%*%**%*%*%*%*
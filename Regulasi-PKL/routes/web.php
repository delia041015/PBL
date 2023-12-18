<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\InstansiController;
use App\Http\Controllers\KelompokController;
use App\Http\Controllers\SuratController;
use App\Models\Instansi;
use App\Models\Kelompok;

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




Route::middleware(['auth'])->group(function () {
  


    Route::middleware(['admin'])->group(function () {
        Route::get('/', [AuthController::class, 'dashboard']);

        Route::get('dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');

        
        // Data User
        Route::get('/data-user', [AdminController::class, 'dataUser'])->name('data-user');

        Route::get('data-user', [AdminController::class, 'dataUser'])->name('data-user');
        Route::post('/user-adm', [AdminController::class, 'store'])->name('user');
        Route::get('/user/edit/{id}', [AdminController::class,'edit'])->name('edit-user');
        Route::post('/user/edit/{id}', [AdminController::class,'update'])->name('update-user');
        Route::post('/user/delete/{id}', [AdminController::class,'destroy'])->name('delete-user');

        // Route::get('data-user', [AdminController::class, 'dataUser'])->name('data-user');
        // Route::post('/user-adm', [AdminController::class, 'store'])->name('user.store');
    

        Route::get('data-user', [AdminController::class, 'dataUser'])->name('data-user');
        Route::get('logout-admin', [AuthController::class, 'destroyAdmin'])->name('logout-admin');

        // Mahasiswa
        Route::get('/mahasiswa-adm', [MahasiswaController::class, 'Mahasiswa'])->name('data-mahasiswa');
        Route::post('/mahasiswa-adm', [MahasiswaController::class, 'store'])->name('mahasiswa');
        Route::get('/mahasiswa/edit/{id_mhs}', [MahasiswaController::class,'edit'])->name('edit-mahasiswa');
        Route::post('/mahasiswa/edit/{id_mhs}', [MahasiswaController::class,'update'])->name('update-mahasiswa');
        Route::post('/mahasiswa/delete/{id_mhs}', [MahasiswaController::class,'destroy'])->name('delete-mahasiswa');
    
        // Dosen
        Route::get('/dosen-adm', [DosenController::class, 'Dosen'])->name('data-dosen');
        Route::post('/dosen-adm', [DosenController::class, 'store'])->name('dosen');
        Route::get('/dosen/edit/{id_dosen}', [DosenController::class,'edit'])->name('edit-dosen');
        Route::post('/dosen/edit/{id_dosen}', [DosenController::class,'update'])->name('update-dosen');
        Route::post('/dosen/delete/{id_dosen}', [DosenController::class,'destroy'])->name('delete-dosen');
    

        // Instansi
        Route::get('/instansi-adm', [InstansiController::class, 'Instansi'])->name('data-instansi');
        Route::post('/instansi-adm', [InstansiController::class, 'store'])->name('instansi');
        Route::get('/instansi/edit/{id_instansi}', [InstansiController::class,'edit'])->name('edit-instansi');
        Route::post('/instansi/edit/{id_instansi}', [InstansiController::class,'update'])->name('update-instansi');
        Route::post('/instansi/delete/{id_instansi}', [InstansiController::class,'destroy'])->name('delete-instansi');

        // Kelompok
        Route::get('/kelompok-adm', [KelompokController::class, 'Kelompok_adm'])->name('data-kelompok-adm');
        Route::post('/kelompok-adm', [KelompokController::class, 'store'])->name('kelompok');
        Route::get('/kelompok/edit/{id_kelompok}', [KelompokController::class,'edit'])->name('edit-kelompok');
        Route::post('/kelompok/edit/{id_kelompok}', [KelompokController::class,'update'])->name('update-kelompok');
        Route::post('/kelompok/delete/{id_kelompok}', [KelompokController::class,'destroy'])->name('delete-kelompok');
    
        // Surat
        Route::get('/surat-adm', [SuratController::class, 'index_adm'])->name('data-surat');
        Route::post('/surat/validasi/{id}', 'SuratController@validasi')->name('surat-validasi');
        Route::get('surat/{id}/download', [SuratController::class, 'download'])->name('surat.download');
    });

    Route::middleware(['dosen'])->group(function () {
        Route::get('dashboard_dosen', function () {
            return view('dosen.dashboard');
        })->name('dashboard_dosen');

        Route::get('logout-dosen', [AuthController::class, 'destroyDosen'])->name('logout-dosen');

        Route::get('/dosen-dosen', [DosenController::class, 'Dosen2'])->name('data-dosen');

        Route::get('/mahasiswa-dosen', [DosenController::class, 'Mahasiswa'])->name('data-mahasiswa');

        Route::get('/instansi-dosen', [DosenController::class, 'Instansi'])->name('data-instansi');

        Route::get('/kelompok-dosen', [KelompokController::class, 'Kelompok_dosen'])->name('data-kelompok-adm');
    });

    Route::middleware(['mahasiswa'])->group(function () {
        Route::get('dashboard_mahasiswa', function () {
            return view('mahasiswa.dashboard');
        })->name('dashboard_mahasiswa');

        // Route::get('sidebar_mahasiswa', function () {
        //     return view('layouts.sidebar_mahasiswa');
        // })->name('sidebar_mahasiswa');

        Route::get('logout-mahasiswa', [AuthController::class, 'destroyMahasiswa'])->name('logout-mahasiswa');

        Route::get('/instansi-mhs', [MahasiswaController::class, 'Instansi'])->name('data-instansi');

        Route::get('/kelompok-mhs', [KelompokController::class, 'Kelompok'])->name('data-kelompok');
        Route::post('/kelompok-mhs', [KelompokController::class, 'store2'])->name('kelompok');

        Route::get('/edit/profile/{id}', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::post('/edit/profile/{id}', [ProfileController::class, 'update'])->name('profile.update');
    
        // Surat
        Route::get('/surat-mhs', [SuratController::class, 'index'])->name('data-surat');
        Route::post('/surat-mhs', [SuratController::class, 'store'])->name('surat');
        Route::get('surat/{id}/download', [SuratController::class, 'download'])->name('surat.download');
    });

    
});



Route::group(['middleware' => 'guest'], function () {
    Route::get('signUp', [AuthController::class, 'signUp'])-> name('signUp');
    Route::get('signIn', [AuthController::class, 'signIn'])-> name('signIn');
    Route::post('login', [AuthController::class, 'login'])->name('login');
    Route::post('register', [AuthController::class, 'register'])->name('register');
    
});
Route::get('/', function () {
    return view('auth.login');
});

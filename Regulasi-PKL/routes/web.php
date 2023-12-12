<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\InstansiController;

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

        

        Route::get('data-user', [AdminController::class, 'dataUser'])->name('data-user');

        Route::get('data-user', [AdminController::class, 'dataUser'])->name('data-user');
        Route::get('logout-admin', [AuthController::class, 'destroyAdmin'])->name('logout-admin');

        Route::get('mahasiswa', [MahasiswaController::class, 'Mahasiswa'])->name('data-mahasiswa');
        Route::post('dashboard', [MahasiswaController::class, 'store'])->name('dashboard');
        
        // Edit Profile
        // Route::get('/edit/profile/{id}', [ProfileController::class, 'edit'])->name('profile.edit');
        // Route::post('/edit/profile/{id}', [ProfileController::class, 'update'])->name('profile.update');
        // dari DEL
        // Route::get('index-mahasiswa', [MahasiswaController::class, 'index'])->name('index-mahasiswa');
        // Route::get('create-mahasiswa', [MahasiswaController::class, 'create'])->name('create-mahasiswa');
        // Route::post('store-mahasiswa', [MahasiswaController::class, 'store'])->name('store-mahasiswa');
        Route::get('/mahasiswa/edit/{id_mhs}', [MahasiswaController::class,'edit'])->name('edit-mahasiswa');
        Route::post('/mahasiswa/edit/{id_mhs}', [MahasiswaController::class,'update'])->name('update-mahasiswa');
        Route::post('/mahasiswa/delete/{id_mhs}', [MahasiswaController::class,'destroy'])->name('delete-mahasiswa');
    
        Route::get('index-dosen', [DosenController::class, 'index'])->name('index-dosen');
        Route::get('create-dosen', [DosenController::class, 'create'])->name('create-dosen');
        Route::post('store-dosen', [DosenController::class, 'store'])->name('store-dosen');
        Route::get('/dosen/edit/{id_dosen}', [DosenController::class,'edit'])->name('edit-dosen');
        Route::post('/dosen/edit/{id_dosen}', [DosenController::class,'update'])->name('update-dosen');
        Route::post('/dosen/delete/{id_dosen}', [DosenController::class,'destroy'])->name('delete-dosen');
    });

    Route::middleware(['dosen'])->group(function () {
        Route::get('dashboard_dosen', function () {
            return view('dosen.dashboard');
        })->name('dashboard_dosen');

        Route::get('logout-dosen', [AuthController::class, 'destroyDosen'])->name('logout-dosen');
    });

    Route::middleware(['mahasiswa'])->group(function () {
        Route::get('dashboard_mahasiswa', function () {
            return view('mahasiswa.dashboard');
        })->name('dashboard_mahasiswa');

        Route::get('sidebar_mahasiswa', function () {
            return view('layouts.sidebar_mahasiswa');
        })->name('sidebar_mahasiswa');

        Route::get('logout-mahasiswa', [AuthController::class, 'destroyMahasiswa'])->name('logout-mahasiswa');

        Route::get('/edit/profile/{id}', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::post('/edit/profile/{id}', [ProfileController::class, 'update'])->name('profile.update');
    });

    
});

// Route::get('index-mahasiswa', [MahasiswaController::class, 'index'])->name('index-mahasiswa');
// Route::get('create-mahasiswa', [MahasiswaController::class, 'create'])->name('create-mahasiswa');
// Route::post('store-mahasiswa', [MahasiswaController::class, 'store'])->name('store-mahasiswa');
// Route::get('/mahasiswa/edit/{id_mhs}', [MahasiswaController::class,'edit'])->name('edit-mahasiswa');
// Route::post('/mahasiswa/edit/{id_mhs}', [MahasiswaController::class,'update'])->name('update-mahasiswa');
// Route::post('/mahasiswa/delete/{id_mhs}', [MahasiswaController::class,'destroy'])->name('delete-mahasiswa');

//Dosen
Route::get('index-dosen', [DosenController::class, 'index'])->name('index-dosen');
Route::get('create-dosen', [DosenController::class, 'create'])->name('create-dosen');
Route::post('store-dosen', [DosenController::class, 'store'])->name('store-dosen');
Route::get('/dosen/edit/{id_dosen}', [DosenController::class,'edit'])->name('edit-dosen');
Route::post('/dosen/edit/{id_dosen}', [DosenController::class,'update'])->name('update-dosen');
Route::post('/dosen/delete/{id_dosen}', [DosenController::class,'destroy'])->name('delete-dosen');

//Instansi
Route::get('index-instansi', [InstansiController::class, 'index'])->name('index-instansi');
Route::get('create-instansi', [InstansiController::class, 'create'])->name('create-instansi');
Route::post('store-instansi', [InstansiController::class, 'store'])->name('store-instansi');
Route::get('/instansi/edit/{id_instansi}', [InstansiController::class,'edit'])->name('edit-instansi');
Route::post('/instansi/edit/{id_instansi}', [InstansiController::class,'update'])->name('update-instansi');
Route::post('/instansi/delete/{id_instansi}', [InstansiController::class,'destroy'])->name('delete-instansi');

Route::group(['middleware' => 'guest'], function () {
    Route::get('signUp', [AuthController::class, 'signUp'])-> name('signUp');
    Route::get('signIn', [AuthController::class, 'signIn'])-> name('signIn');
    Route::post('login', [AuthController::class, 'login'])->name('login');
    Route::post('register', [AuthController::class, 'register'])->name('register');
    
});
Route::get('/', function () {
    return view('auth.login');
});

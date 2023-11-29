<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MahasiswaController;


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

        Route::get('logout-admin', [AuthController::class, 'destroyAdmin'])->name('logout-admin');

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

        Route::get('logout-mahasiswa', [AuthController::class, 'destroyMahasiswa'])->name('logout-mahasiswa');

        
    });

    
});

Route::get('index-mahasiswa', [MahasiswaController::class, 'index'])->name('index-mahasiswa');
Route::get('create-mahasiswa', [MahasiswaController::class, 'create'])->name('create-mahasiswa');
Route::post('store-mahasiswa', [MahasiswaController::class, 'store'])->name('store-mahasiswa');
Route::get('/mahasiswa/edit/{id_mhs}', [MahasiswaController::class,'edit'])->name('edit-mahasiswa');
Route::post('/mahasiswa/edit/{id_mhs}', [MahasiswaController::class,'update'])->name('update-mahasiswa');
Route::post('/mahasiswa/delete/{id_mhs}', [MahasiswaController::class,'destroy'])->name('delete-mahasiswa');




Route::group(['middleware' => 'guest'], function () {
    Route::get('signUp', [AuthController::class, 'signUp'])-> name('signUp');
    Route::get('signIn', [AuthController::class, 'signIn'])-> name('signIn');
    Route::post('login', [AuthController::class, 'login'])->name('login');
    Route::post('register', [AuthController::class, 'register'])->name('register');
    
});
Route::get('/', function () {
    return view('auth.login');
});

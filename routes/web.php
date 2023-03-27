<?php

use App\Http\Controllers\AlgoritmaController;
use App\Http\Controllers\BasisController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\DataPasienController;
use App\Http\Controllers\GejalaController;
use App\Http\Controllers\IdentifikasiController;
use App\Http\Controllers\KataSandiController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MasukController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PenyakitController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\UserController;
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

Route::middleware('guest')->group(function () {
    Route::get('masuk', [MasukController::class, 'index'])->name('login');
    Route::post('autentikasi', [MasukController::class, 'authenticate'])->name('authenticate');
    Route::get('daftar', [DaftarController::class, 'index'])->name('daftar');
    Route::post('daftar', [DaftarController::class, 'store'])->name('daftar');
});
Route::middleware('auth')->group(function () {
    Route::get('keluar', [MasukController::class, 'logout'])->name('logout');
    Route::controller(BerandaController::class)->group(function () {
        Route::get('/', [BerandaController::class, 'index'])->name('index');
        Route::post('/pdf/{pasien}', [BerandaController::class, 'pdf'])->name('pdf');
    });
    Route::get('/data-pasien', DataPasienController::class);
    Route::get('algoritma', [AlgoritmaController::class, 'index'])->name('algoritma.index');
    Route::controller(RegistrasiController::class)->group(function () {
        Route::get('registrasi', 'index')->name('registrasi.index');
        Route::post('registrasi', 'store')->name('registrasi.store');
    });
    Route::controller(IdentifikasiController::class)->group(function () {
        Route::get('identifikasi', 'index')->name('identifikasi.index');
        Route::post('pertanyaan', 'pertanyaan')->name('identifikasi.pertanyaan');
    });
    Route::controller(KataSandiController::class)->group(function () {
        Route::get('kata-sandi', 'index')->name('kata-sandi.index');
        Route::get('kata-sandi/{user}/edit', 'edit')->name('kata-sandi.edit');
        Route::put('kata-sandi/{user}', 'update')->name('kata-sandi.update');
    });
    Route::resource('user', UserController::class)
        ->except([
            'create',
            'store',
            'show',
        ]);
    Route::resource('gejala', GejalaController::class)
        ->except([
            'create',
            'show'
        ]);
    Route::resource('kategori', KategoriController::class)
        ->except([
            'create',
            'show'
        ]);
    Route::resource('penyakit', PenyakitController::class)
        ->except([
            'create',
            'show'
        ]);
    Route::resource('pasien', PasienController::class)
        ->except([
            'create',
            'show'
        ]);
    Route::resource('basis', BasisController::class)
        ->except([
            'create',
            'show'
        ])
        ->parameters([
            'basis' => 'basis',
        ]);
});

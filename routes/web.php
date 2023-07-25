<?php

use App\Http\Controllers\DashboardPelangganController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IsiUlangController;
use App\Http\Controllers\KontrakController;
use App\Http\Controllers\TawaranController;

use App\Http\Controllers\DashboardPekerjaController;
use App\Http\Controllers\ProfilePekerjaController;


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
Route::get('/coba', function () {
    return view('coba.modal');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pilihrole', function () {
    return view('pilihrole');
});

// user melihat dashboard
Route::get('/pelanggan/dashboard', [DashboardPelangganController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

// user melihat profil
Route::get('/pelanggan/profil', function () {
    return view('pelanggan.profilpelanggan');
})->middleware(['auth', 'verified'])->name('profil');

// user melakukan edit profil
Route::middleware('auth:pekerja')->group(function () {
    Route::get('/pelanggan/profile', [ProfileController::class, 'edit'])->name('pelanggan.profile.edit');
    Route::patch('/pelanggan/profile', [ProfileController::class, 'update'])->name('pelanggan.profile.update');
    Route::delete('/pelanggan/profile', [ProfileController::class, 'destroy'])->name('pelanggan.profile.destroy');
});

// user melihat laman isi ulang
Route::get('/pelanggan/isiulang', function () {
    return view('pelanggan.IsiUlang');
})->middleware(['auth', 'verified'])->name('isiulang');

// user melakukan isi ulang
Route::post('/pelanggan/isiulang', [IsiUlangController::class, 'isiulang'])->middleware(['auth', 'verified'])->name('pelanggan.isiulang');

// user melakukan cari pekerja
Route::get('/pelanggan/caripekerja', [KontrakController::class, 'cari'])->middleware(['auth', 'verified'])->name('pelanggan.caripekerja');

// user melihat detail pekerja
Route::get('/pelanggan/detailpekerja/{id}', [KontrakController::class, 'detail'])->middleware(['auth', 'verified'])->name('pelanggan.detailpekerja.{id}');

//user melihat laman untuk mengirim tawaran kontrak
Route::get('/pelanggan/pilihpekerja/{id}', [KontrakController::class, 'index'])->middleware(['auth', 'verified']);

// user mengirim tawaran kontrak kepada pekerja
Route::post('/pilihpekerja', [
    KontrakController::class, 'store'
])->name('pilihpekerja')->middleware(['auth', 'verified']);

// user melihat laman pekerja anda
Route::get('/pelanggan/pekerjaanda', function () {
    return view('pelanggan.pekerjaAnda');
})->middleware(['auth', 'verified'])->name('pekerjaanda');

// user melihat daftar tawaran
Route::get('/pelanggan/pekerjaanda', [KontrakController::class, 'list'])->middleware(['auth', 'verified'])->name('pelanggan.pekerjaanda');

Route::get('/status', [KontrakController::class, 'status'])->middleware(['auth', 'verified'])->name('pelanggan.pekerjaanda');

//user melihat detail pekerja sekarang
Route::get('/pelanggan/pekerjasekarang/{id}', [
    KontrakController::class, 'detailPekerjaSekarang'
])->middleware(['auth', 'verified'])->name('pelanggan.pekerjasekarang.{id}');

//user melihat detail status pemesanan
Route::get('/pelanggan/statuspemesanan/{id}', [
    KontrakController::class, 'detailStatusPemesanan'
])->middleware(['auth', 'verified'])->name('pelanggan.statuspemesanan.{id}');

// User melakukan pembayaran
Route::get('/pembayaran/{id}', [KontrakController::class, 'lamanbayar'])->middleware(['auth', 'verified'])->name('pembayaran.{id}');
Route::post('/pembayaranterverifikasi/{id}', [KontrakController::class, 'bayar'])->middleware(['auth', 'verified'])->name('pembayaran');

require __DIR__ . '/auth.php';

// pekerja melakukan view dashboard
Route::get('/pekerja/dashboard', [DashboardPekerjaController::class, 'index'])->middleware(['auth:pekerja', 'verified'])->name('pekerja.dashboard');


// pekerja melakukan view profile
Route::get('/pekerja/profil', function () {
    return view('pekerja.profilpekerja');
})->middleware(['auth:pekerja', 'verified'])->name('pekerja.profilpekerja');

// pekerja melakukan edit profile
Route::middleware('auth:pekerja')->group(function () {
    Route::get('/pekerja/profile', [ProfilePekerjaController::class, 'edit'])->name('pekerja.profile.edit');
    Route::patch('/pekerja/profile', [ProfilePekerjaController::class, 'update'])->name('pekerja.profile.update');
    Route::delete('/pekerja/profile', [ProfilePekerjaController::class, 'destroy'])->name('pekerja.profile.destroy');
});

//pekerja melihat tawaran kontrak yang dikirim user
Route::get('/pekerja/tawaran', [TawaranController::class, 'index'])->middleware(['auth:pekerja', 'verified'])->name('pekerja.tawaran');

//pekerja konfirmasi tawaran kontrak
Route::post('/konfirmasitawaran/{id}', [TawaranController::class, 'konfirmasi'])->middleware(['auth:pekerja', 'verified'])->name('konfirmasi');

// pekerja melihat kontrak anda
Route::get('/pekerja/kontrakanda', [TawaranController::class, 'kontrak'])->middleware(['auth:pekerja', 'verified'])->name('kontrakanda');

require __DIR__ . '/pekerjaauth.php';

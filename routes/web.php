<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\Admin\KaryawanController;
use App\Http\Controllers\Admin\ProdusenController;

use App\Http\Controllers\Admin_PegawaiGudang\LaporanController;
use App\Http\Controllers\Admin_PegawaiGudang\LaporanStockController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AuthController::class, 'showAuthPage'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

// Lupa Password
Route::get('/forgot-password', [AuthController::class, 'showForgotPasswordPage'])->name('password.request');
Route::post('/forgot-password/process', [AuthController::class, 'processForgotPassword'])->name('password.process');


// ADMIN
Route::prefix('/admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {return view('admin.dashboard');})->name('dashboard');

Route::prefix('/karyawan')->name('karyawan.')->group(function () {
        Route::get('/', [KaryawanController::class, 'index'])->name('index');
        Route::get('/tambah', [KaryawanController::class, 'tambah'])->name('tambah');
        Route::get('/absensi', [KaryawanController::class, 'absensi'])->name('absensi');
        Route::get('/biaya', [KaryawanController::class, 'biaya'])->name('biaya');
        
        Route::prefix('/penggajian')->name('penggajian.')->group(function () {
            Route::get('/', [KaryawanController::class, 'penggajian'])->name('index');
            Route::get('/daftar-tunjangan', [KaryawanController::class, 'daftarTunjangan'])->name('daftar-tunjangan');
            Route::get('/daftar-pengaturan-gaji', [KaryawanController::class, 'daftarPengaturanGaji'])->name('daftar-pengaturan-gaji');
            Route::get('/atur-gaji-karyawan', [KaryawanController::class, 'aturGajiKaryawan'])->name('atur-gaji-karyawan');
            Route::get('/slip-gaji', [KaryawanController::class, 'slipGaji'])->name('slip-gaji');
            Route::get('/pembayaran-gaji', [KaryawanController::class, 'pembayaranGaji'])->name('pembayaran-gaji');
        });
    });

    Route::prefix('/produsen')->name('produsen.')->group(function () {
        Route::get('/daftar-produsen', [ProdusenController::class, 'index'])->name('index');
        Route::get('/bank-produsen', [ProdusenController::class, 'bank'])->name('bank');
    });
});


// ADMIN - PEGAWAI GUDANG
Route::prefix('/laporan')->name('admin_pegawaiGudang.laporan.')->group(function () {
    Route::get('/penjualan', [LaporanController::class, 'laporanPenjualan'])->name('penjualan');
    Route::get('/retur-penjualan', [LaporanController::class, 'laporanReturPenjualan'])->name('retur-penjualan');
    Route::get('/pembelian', [LaporanController::class, 'laporanPembelian'])->name('pembelian');
});
    
Route::prefix('/laporan-stok')->name('admin_pegawaiGudang.laporan-stok.')->group(function () {
    Route::get('/', [LaporanStockController::class, 'laporanStock'])->name('index');
    Route::get('/batch-stok', [LaporanStockController::class, 'laporanBatchStock'])->name('batch-stok');
});


// PEGAWAI GUDANG
Route::prefix('/gudang')->name('gudang.')->group(function () {
    Route::get('/dashboard', function () {return view('gudang.dashboard');})->name('dashboard');
});



// APOTEKER
Route::get('/apoteker/dashboard', function () {return view('apoteker.dashboard');})->name('apoteker.dashboard');
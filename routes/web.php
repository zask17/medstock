<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\Admin\KaryawanController;
use App\Http\Controllers\Admin\ProdusenController;

use App\Http\Controllers\Admin_PegawaiGudang\LaporanController;
use App\Http\Controllers\Admin_PegawaiGudang\LaporanStockController;

use App\Http\Controllers\PegawaiGudang\PembelianController;
use App\Http\Controllers\PegawaiGudang\ProdukController;

use App\Http\Controllers\Apoteker\DispenserController;

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
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

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
    Route::get('/dashboard', function () {
        return view('gudang.dashboard');
    })->name('dashboard');
Route::prefix('/pembelian')->name('pembelian.')->group(function () {
        Route::get('/daftar-pembelian', [PembelianController::class, 'daftarPembelian'])->name('daftar-pembelian');
        Route::get('/tambah-pembelian', [PembelianController::class, 'tambahPembelian'])->name('tambah');
        Route::get('/invoice/{id}', [PembelianController::class, 'invoicePembelian'])->name('invoice');
        Route::get('/pembayaran', [PembelianController::class, 'pembayaran'])->name('pembayaran');
        Route::get('/retur-pembelian', [PembelianController::class, 'returPembelian'])->name('retur-pembelian');
        Route::get('/tambah-retur', [PembelianController::class, 'tambahRetur'])->name('tambah-retur');
        Route::get('/terima-retur', [PembelianController::class, 'terimaRetur'])->name('terima-retur');
    });

    // Manajemen Produk
    Route::prefix('/produk')->name('produk.')->group(function () {
        Route::get('/', [ProdukController::class, 'index'])->name('index'); // index.blade.php
        Route::get('/daftar-produk', [ProdukController::class, 'daftarProduk'])->name('daftar-produk');
        Route::get('/kerusakan-produk', [ProdukController::class, 'kerusakanProduk'])->name('kerusakan-produk');
    });
});



// APOTEKER
Route::prefix('apoteker')->name('apoteker.')->group(function () {
    
    // Dashboard Apoteker
    Route::get('/dashboard', function () {return view('apoteker.dashboard');})->name('dashboard');

    // Manajemen Penjualan
    Route::prefix('dispenser')->name('dispenser.')->group(function () {
        Route::get('/daftar-penjualan', [DispenserController::class, 'daftarPenjualan'])->name('daftar-penjualan');
        Route::get('/kasir', [DispenserController::class, 'kasir'])->name('kasir');
        Route::get('/penagihan', [DispenserController::class, 'penagihan'])->name('penagihan');
        Route::get('/retur-penjualan', [DispenserController::class, 'returPenjualan'])->name('retur-penjualan');
    });
});
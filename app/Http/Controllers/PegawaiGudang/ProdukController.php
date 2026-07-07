<?php

namespace App\Http\Controllers\PegawaiGudang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    // Menampilkan halaman utama produk (index.blade.php)
    public function index()
    {
        return view('gudang.produk.index');
    }

    // Menampilkan daftar produk (daftar-produk.blade.php)
    public function daftarProduk()
    {
        return view('gudang.produk.daftar-produk');
    }

    // Menampilkan halaman kerusakan produk (kerusakan-produk.blade.php)
    public function kerusakanProduk()
    {
        return view('gudang.produk.kerusakan-produk');
    }
}
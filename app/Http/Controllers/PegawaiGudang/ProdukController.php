<?php

namespace App\Http\Controllers\PegawaiGudang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function daftarProduk()
    {
        return view('gudang.produk.daftar-produk.daftar-produk');
    }

    public function kelolaKategori()
    {
        return view('gudang.produk.daftar-produk.kelola-kategori');
    }

    public function kelolaMerk()
    {
        return view('gudang.produk.daftar-produk.kelola-merk');
    }

    public function kelolaRakProduk()
    {
        return view('gudang.produk.daftar-produk.kelola-rak-produk');
    }

    public function kelolaTipeProduk()
    {
        return view('gudang.produk.daftar-produk.kelola-tipe-produk');
    }

    public function kerusakanProduk()
    {
        return view('gudang.produk.kerusakan-produk');
    }
}
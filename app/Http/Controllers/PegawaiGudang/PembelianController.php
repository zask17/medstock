<?php

namespace App\Http\Controllers\PegawaiGudang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    public function daftarPembelian()
    {
        return view('gudang.pembelian.daftar-pembelian');
    }

    public function tambahPembelian()
    {
        return view('gudang.pembelian.tambah-pembelian');
    }

    public function invoicePembelian($id)
    {
        return view('gudang.pembelian.invoice', compact('id'));
    }

    public function pembayaran()
    {
        return view('gudang.pembelian.pembayaran');
    }

    public function returPembelian()
{
    return view('gudang.pembelian.retur-pembelian');
}

public function tambahRetur()
{
    return view('gudang.pembelian.tambah-retur');
}

    public function terimaRetur()
    {
        return view('gudang.pembelian.terima-retur');
    }
}
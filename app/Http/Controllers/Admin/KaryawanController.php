<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    // --- MANAJEMEN KARYAWAN ---

    public function index()
    {
        return view('admin.karyawan.index');
    }

    public function tambah()
    {
        return view('admin.karyawan.tambah-karyawan');
    }

    public function absensi()
    {
        return view('admin.karyawan.absensi');
    }

    public function biaya()
    {
        return view('admin.karyawan.biaya');
    }

    // --- MANAJEMEN PENGGAJIAN ---

    public function penggajian()
    {
        return view('admin.karyawan.penggajian.index');
    }
    public function daftarTunjangan()
    {
        return view('admin.karyawan.penggajian.daftar-tunjangan');
    }

    public function daftarPengaturanGaji()
    {
        return view('admin.karyawan.penggajian.daftar-pengaturan-gaji');
    }

    public function aturGajiKaryawan()
    {
        return view('admin.karyawan.penggajian.atur-gaji-karyawan');
    }

    public function slipGaji()
    {
        return view('admin.karyawan.penggajian.slip-gaji');
    }

    public function pembayaranGaji()
    {
        return view('admin.karyawan.penggajian.pembayaran-gaji');
    }
}
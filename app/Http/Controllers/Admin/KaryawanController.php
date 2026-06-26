<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class KaryawanController extends Controller
{
    private function getLayout()
    {
        if (!session()->has('user_role')) {
            return redirect()->route('login')->send();
        }

        $role = session('user_role');

        if ($role === 'Admin System') {
            return 'layouts.admin.main';
        }
        abort(403, 'Anda tidak memiliki hak akses untuk halaman ini.');
    }
    // --- MANAJEMEN KARYAWAN ---

    public function index()
    {
        $layout = $this->getLayout();
        return view('admin.karyawan.index', compact('layout'));
    }

    public function tambah()
    {
        $layout = $this->getLayout();
        return view('admin.karyawan.tambah-karyawan', compact('layout'));
    }

    public function absensi()
    {
        $layout = $this->getLayout();
        return view('admin.karyawan.absensi', compact('layout'));
    }

    public function biaya()
    {
        $layout = $this->getLayout();
        return view('admin.karyawan.biaya', compact('layout'));
    }

    // --- MANAJEMEN PENGGAJIAN ---

    public function penggajian()
    {
        $layout = $this->getLayout();
        return view('admin.karyawan.penggajian.index', compact('layout'));
    }

    public function daftarTunjangan()
    {
        $layout = $this->getLayout();
        return view('admin.karyawan.penggajian.daftar-tunjangan', compact('layout'));
    }

    public function daftarPengaturanGaji()
    {
        $layout = $this->getLayout();
        return view('admin.karyawan.penggajian.daftar-pengaturan-gaji', compact('layout'));
    }

    public function aturGajiKaryawan()
    {
        $layout = $this->getLayout();
        return view('admin.karyawan.penggajian.atur-gaji-karyawan', compact('layout'));
    }

    public function slipGaji()
    {
        $layout = $this->getLayout();
        return view('admin.karyawan.penggajian.slip-gaji', compact('layout'));
    }

    public function pembayaranGaji()
    {
        $layout = $this->getLayout();
        return view('admin.karyawan.penggajian.pembayaran-gaji', compact('layout'));
    }
}

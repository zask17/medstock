<?php

namespace App\Http\Controllers\Admin_PegawaiGudang;

use App\Http\Controllers\Controller;

class LaporanController extends Controller
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

        if ($role === 'Pegawai Gudang') {
            return 'layouts.gudang.main';
        }

        abort(403, 'Anda tidak memiliki hak akses untuk halaman laporan ini.');
    }
    
    public function laporanPenjualan()
    {
        return view('admin_pegawaiGudang.laporan.penjualan', [
            'layout' => $this->getLayout()
        ]);
    }

    public function laporanReturPenjualan()
    {
        return view('admin_pegawaiGudang.laporan.retur-penjualan', [
            'layout' => $this->getLayout()
        ]);
    }

    public function laporanPembelian()
    {
        return view('admin_pegawaiGudang.laporan.pembelian', [
            'layout' => $this->getLayout()
        ]);
    }
}
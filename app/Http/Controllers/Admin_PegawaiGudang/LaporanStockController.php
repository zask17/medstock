<?php

namespace App\Http\Controllers\Admin_PegawaiGudang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LaporanStockController extends Controller
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

        abort(403, 'Anda tidak memiliki hak akses untuk halaman laporan stok ini.');
    }

    public function laporanStock()
    {
        return view('admin_pegawaiGudang.laporan-stok.index', [
            'layout' => $this->getLayout()
        ]);
    }

    public function laporanBatchStock()
    {
        return view('admin_pegawaiGudang.laporan-stok.batch-stok', [
            'layout' => $this->getLayout()
        ]);
    }
}
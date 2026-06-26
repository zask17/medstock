<?php
// app/Http/Controllers/Apoteker/DispenserController.php

namespace App\Http\Controllers\Apoteker;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DispenserController extends Controller
{
    /**
     * Mengambil layout berdasarkan role session user
     */
    private function getLayout()
    {
        if (!session()->has('user_role')) {
            return redirect()->route('login')->send();
        }

        $role = session('user_role');

        if ($role === 'Apoteker') {
            return 'layouts.apoteker.main';
        }

        if ($role === 'Asisten Apoteker') {
            return 'layouts.apoteker.main';
        }

        abort(403, 'Anda tidak memiliki hak akses untuk halaman laporan ini.');
    }


    public function daftarPenjualan()
    {
        $layout = $this->getLayout();
        return view('apoteker.dispenser.daftar-penjualan', compact('layout'));
    }

    public function kasir()
    {
        $layout = $this->getLayout();
        return view('apoteker.dispenser.kasir', compact('layout'));
    }

    public function penagihan()
    {
        $layout = $this->getLayout();
        return view('apoteker.dispenser.penagihan', compact('layout'));
    }

    public function returPenjualan()
    {
        $layout = $this->getLayout();
        return view('apoteker.dispenser.retur-penjualan', compact('layout'));
    }
}
<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class ProdusenController extends Controller
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
        abort(403, 'Anda tidak memiliki hak akses untuk halaman laporan ini.');
    }
    public function index()
    {
        $layout = $this->getLayout();
        return view('admin.produsen.daftar-produsen', compact('layout'));
    }

    public function bank()
    {
        $layout = $this->getLayout();
        return view('admin.produsen.bank-produsen', compact('layout'));
    }
}

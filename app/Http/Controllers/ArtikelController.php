<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelController extends Controller
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

        if ($role === 'Apoteker') {
            return 'layouts.apoteker.main';
        }

        if ($role === 'Asisten Apoteker') {
            return 'layouts.apoteker.main';
        }

        return 'layouts.admin.main';
    }

    public function index()
    {
        $layout = $this->getLayout();
        return view('artikel.index', compact('layout'));
    }

    public function detailCms($id)
    {
        $layout = $this->getLayout();
        return view('artikel.detail-cms', compact('layout', 'id'));
    }

    public function kelolaArtikel()
    {
        if (session('user_role') !== 'Admin System') {
            abort(403, 'Anda tidak memiliki hak akses untuk mengelola artikel.');
        }

        $layout = $this->getLayout();
        return view('artikel.kelola-artikel', compact('layout'));
    }

    public function tambahArtikel()
    {
        if (session('user_role') !== 'Admin System') {
            abort(403, 'Anda tidak memiliki hak akses untuk menambah artikel.');
        }

        $layout = $this->getLayout();
        return view('artikel.tambah-artikel', compact('layout'));
    }

    public function artikelLedger()
    {
        if (session('user_role') !== 'Admin System') {
            abort(403, 'Anda tidak memiliki hak akses untuk melihat buku besar artikel.');
        }

        $layout = $this->getLayout();
        return view('artikel.artikel-ledger', compact('layout'));
    }
}
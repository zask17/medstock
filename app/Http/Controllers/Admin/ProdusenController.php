<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProdusenController extends Controller
{
    public function index()
    {
        return view('admin.produsen.daftar-produsen');
    }

    public function bank()
    {
        return view('admin.produsen.bank-produsen');
    }
}
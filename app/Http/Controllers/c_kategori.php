<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategori;

class c_kategori extends Controller
{
    public function __construct()
    {
        $this->kategori = new kategori();
    }

    public function index()
    {
        $data = ['kategori' => $this->kategori->allData(),];
        return view('kategori.index', $data);
    }

    public function create()
    {
        return view('mitra.akun.create');
    }
}

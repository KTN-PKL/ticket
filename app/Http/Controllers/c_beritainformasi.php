<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\berita_informasi;

class c_beritainformasi extends Controller
{
    public function __construct()
    {
        $this->berita_informasi = new berita_informasi();
    }
    public function index()
    {
        $data = ['berinfo' => $this->berita_informasi->allData(),];
        return view('berinfo.index', $data);
    }
    public function create()
    {
        return view('berinfo.create');
    }
    public function store(Request $request)
    {
        $data = ['berinfo' => $this->berita_informasi->allData(),];
        return view('berinfo.index', $data);
    }
}

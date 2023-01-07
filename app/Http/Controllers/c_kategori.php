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
        return view('kategori.create');
    }

    public function store(Request $request)
    {
        $data = ['kategori' => $request->kategori,];
        $this->kategori->addData($data);
        return redirect()->route('datamaster.kategori')->with('create', 'Mitra Berhasil Dibuat');
    }

    public function edit($id_kategori)
    {
        $data = ['kategori' => $this->kategori->detailData($id_kategori),];
        return view('kategori.edit', $data);
    }

    public function update(Request $request, $id_kategori)
    {
        $data = ['kategori' => $request->kategori,];
        $this->kategori->editData($id_kategori, $data);
        return redirect()->route('datamaster.kategori')->with('create', 'Mitra Berhasil Dibuat');
    }

    public function destroy($id_kategori)
    {
        $this->kategori->deleteData($id_kategori);
        return redirect()->route('datamaster.kategori')->with('create', 'Mitra Berhasil Dibuat');
    }
}

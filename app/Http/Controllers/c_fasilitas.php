<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\fasilitas;

class c_fasilitas extends Controller
{
    public function __construct()
    {
        $this->fasilitas = new fasilitas();
    }

    public function index()
    {
        $data = ['fasilitas' => $this->fasilitas->allData(),];
        return view('fasilitas.index', $data);
    }

    public function create()
    {
        return view('fasilitas.create');
    }

    public function store(Request $request)
    {
        $data = ['fasilitas' => $request->fasilitas,];
        $this->fasilitas->addData($data);
        return redirect()->route('datamaster.fasilitas')->with('create', 'Mitra Berhasil Dibuat');
    }

    public function edit($id_fasilitas)
    {
        $data = ['fasilitas' => $this->fasilitas->detailData($id_fasilitas),];
        return view('fasilitas.edit', $data);
    }

    public function update(Request $request, $id_fasilitas)
    {
        $data = ['fasilitas' => $request->fasilitas,];
        $this->fasilitas->editData($id_fasilitas, $data);
        return redirect()->route('datamaster.fasilitas')->with('create', 'Mitra Berhasil Dibuat');
    }

    public function destroy($id_fasilitas)
    {
        $this->fasilitas->deleteData($id_fasilitas);
        return redirect()->route('datamaster.fasilitas')->with('create', 'Mitra Berhasil Dibuat');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\discount;
use App\Models\wisata;
use App\Models\paket;
use App\Models\kategori;

class c_discount extends Controller
{
    public function __construct()
    {
        $this->discount = new discount();
        $this->wisata = new wisata();
        $this->kategori = new kategori();
        $this->paket = new paket();
    }
    public function index()
    {
        $data = ['discount' => $this->discount->allData(),];
        return view('discount.index', $data);
    }

    public function create()
    {
        return view('discount.create');
    }

    public function store(Request $request)
    {
        $data = ['discount' => $request->discount,];
        $this->discount->addData($data);
        return redirect()->route('datamaster.discount')->with('success', 'discount Berhasil Dibuat');
    }

    public function edit($id_discount)
    {
        $data = ['discount' => $this->discount->detailData($id_discount),];
        return view('discount.edit', $data);
    }

    public function update(Request $request, $id_discount)
    {
        $data = ['discount' => $request->discount,];
        $this->discount->editData($id_discount, $data);
        return redirect()->route('datamaster.discount')->with('success', 'discount Berhasil Diupdate');
    }

    public function destroy($id_discount)
    {
        $this->discount->deleteData($id_discount);
        return redirect()->route('datamaster.discount')->with('success', 'discount Berhasil Dihapus');
    }
}

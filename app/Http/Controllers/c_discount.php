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
        $data = ['kategori' => $this->kategori->allData(),];
        return view('discount.create', $data);
    }

    public function cwisata($id)
    {
        $data = ['wisata' => $this->wisata->kategoriData($id),];
        return view('discount.cwisata', $data);
    }
    public function cpaket($id)
    {
        $data = ['paket' => $this->paket->wisataData($id),];
        return view('discount.cpaket', $data);
    }

    public function store(Request $request)
    {
        $data = [
            'id_paket' => $request->id_paket,
            'jenis' => $request->jenis,
            'discount' => $request->discount,
            'aktif' => "aktif",];
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
        $data = ['jenis' => $request->jenis,
            'discount' => $request->discount,];
        $this->discount->editData($id_discount, $data);
        return redirect()->route('datamaster.discount')->with('success', 'discount Berhasil Diupdate');
    }

    public function aktif($id_discount)
    {
        $data = ['aktif' => "aktif"];
        $this->discount->editData($id_discount, $data);
        return redirect()->route('datamaster.discount')->with('success', 'discount Berhasil Diupdate');
    }

    public function inaktif($id_discount)
    {
        $data = ['aktif' => "inaktif"];
        $this->discount->editData($id_discount, $data);
        return redirect()->route('datamaster.discount')->with('success', 'discount Berhasil Diupdate');
    }

    public function destroy($id_discount)
    {
        $this->discount->deleteData($id_discount);
        return redirect()->route('datamaster.discount')->with('success', 'discount Berhasil Dihapus');
    }
}

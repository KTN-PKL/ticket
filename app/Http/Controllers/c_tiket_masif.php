<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pesan_masif;
use App\Models\kategori;

class c_tiket_masif extends Controller
{
    public function __construct()
    {
        $this->kategori = new kategori();
        $this->pesan_masif = new pesan_masif();
    }
    public function index()
    {
        $data = ['masif' => $this->pesan_masif->allData(),];
        return view('masif.index', $data);
    }
    public function edit($id_masif)
    {
        $data = ['masif' => $this->pesan_masif->detailData($id_masif),
                 'kategori' => $this->kategori->allData(),];
        
        return view('masif.edit', $data);
    }
    public function update(Request $request, $id_masif)
    {
        $data = [
            'nik' => $request->nik,
            'id_paket' => $request->id_paket,
            'waktu_kunjungan' => $request->waktu_kunjungan,
            'qty' => $request->qty,
            'harga' => $request->harga,
        ];
        $this->pesan_masif->editData($id_masif, $data);
        return redirect()->route('masif.index');
    }
}

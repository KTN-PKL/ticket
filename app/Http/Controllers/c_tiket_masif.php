<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pesan_masif;
use App\Models\kategori;
use App\Models\wisata;
use App\Models\paket;

class c_tiket_masif extends Controller
{
    public function __construct()
    {
        $this->paket = new paket();
        $this->pesan_masif = new pesan_masif();
        $this->kategori = new kategori();
        $this->wisata = new wisata();
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
    public function wisata($id_kategori, $id_masif)
    {
        $data = ['masif' => $this->pesan_masif->detailData($id_masif),
            'wisata' => $this->wisata->kategoriData($id_kategori),];
        
        return view('masif.wisata', $data);
    }
    public function paket($id_wisata, $id_masif)
    {
        $data = ['masif' => $this->pesan_masif->detailData($id_masif),
            'paket' => $this->paket->wisataData($id_wisata),];
        
        return view('masif.paket', $data);
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

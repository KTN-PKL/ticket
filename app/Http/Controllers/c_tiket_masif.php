<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pesan_masif;
use App\Models\kategori;
use App\Models\wisata;
use App\Models\paket;
use App\Models\pembayaran;

class c_tiket_masif extends Controller
{
    public function __construct()
    {
        $this->paket = new paket();
        $this->pesan_masif = new pesan_masif();
        $this->kategori = new kategori();
        $this->wisata = new wisata();
        $this->pembayaran = new pembayaran();
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
    public function harga($id_paket, $tgl)
    {
        $paket = $this->paket->detailData($id_paket);
        if ($tgl == "Saturday" || $tgl == "Sunday") {
            $harga = $paket->harga_wend;
        } else {
            $harga = $paket->harga_wday;
        }
        
        date_default_timezone_set("Asia/Jakarta");
        $t = date("Y-m-d");
        if ($paket->discount <> null && $t >= $paket->dari && $t <= $paket->sampai) {
            if ($paket->jenis == "persen") {
                $discount = ($paket->discount * $harga)/100;
            } else {
                $discount = $paket->discount;
            }
            $hasil = $harga -$discount;
        } else {
            $hasil = $harga;
        }
        return $hasil;
    }
    public function update(Request $request, $id_masif)
    {
        $data = [
            'nik' => $request->nik,
            'id_paket' => $request->id_paket,
            'waktu_kunjungan' => $request->waktu_kunjungan,
            'qty' => $request->qty,
            'harga' => $request->harga,
            'stat'=> 'process',
        ];
        $this->pesan_masif->editData($id_masif, $data);
        return redirect()->route('masif');
    }

    public function detail($id_masif)
    {
        $data = ['masif' => $this->pesan_masif->detailData($id_masif),
                ];
        
        return view ('masif.detail', $data);
    }

    public function invoice($id_masif)
    {
        $data = ['masif' => $this->pesan_masif->detailData($id_masif),
                 'kategori' => $this->kategori->allData(),];
        
        return view ('masif.invoice', $data);
    }

    public function hubungi($id_masif)
    {
        $data = ['masif' => $this->pesan_masif->hubungiData($id_masif),
                ];
        
        return view ('masif.hubungi', $data);
    }

     public function terima($id_masif)
    {
        $data = ['stat' => "process"];
        $this->pesan_masif->editData($id_masif, $data);
        return redirect()->route('masif')->with('success', 'Pesanan Tiket Masif Telah Diterima');
    }

    // public function hapusInvoice($id_pembayaran)
    // {
    //     $this->pembayaran->deleteData($id_pembayaran);
    //     return  redirect()->route('masif')->with('success', 'Invoice Berhasil dihapus');
    // }
}

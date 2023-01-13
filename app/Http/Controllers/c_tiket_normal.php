<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pesan_tiket;
use App\Models\kategori;
use App\Models\wisata;
use App\Models\paket;
use App\Models\pembayaran;
use App\Models\pengguna;

class c_tiket_normal extends Controller
{
    public function __construct()
    {
        $this->pesan_tiket = new pesan_tiket();
        $this->kategori = new kategori();
        $this->paket = new paket();
        $this->kategori = new kategori();
        $this->wisata = new wisata();
        $this->pembayaran = new pembayaran();
        $this->pengguna = new pengguna();
    }
    public function index()
    {
        $data = ['pesan_tiket' => $this->pesan_tiket->allData(),];
        return view('tiketnormal.index', $data);
    }

    public function create()
    {
        $data = [
            'wisata' => $this->wisata->allData(),
            'pengguna'=>$this->pengguna->allData(),
        ];
        return view('tiketnormal.create', $data);
    }

    public function paket($id_wisata)
    {
        $data = [
            'paket' => $this->paket->wisataData($id_wisata),];
        
        return view('tiketnormal.paket', $data);
    }
    public function invoice($id_pemesanan)
    {
        $data = ['tiket' => $this->pesan_tiket->detailData($id_pemesanan),
                 'kategori' => $this->kategori->allData(),];
        
        return view ('masif.invoice', $data);
    }


    public function store(Request $request)
    {
        $email=$this->pesan_tiket->detailData($request->id_pengguna);
        $id = $this->pembayaran->id();
        $id_pembayaran = $id + 1;
        $jumlah=$request->jumlah;

        $paket = $this->pesan_tiket->detailPaket($request->id_paket);
        $d = strtotime($request->waktu_kunjungan);
        $N = date('l' ,$d);
        if ($N == "Saturday" || $N == "Sunday") {
            $harga = $paket->harga_wend;
        } else {
            $harga = $paket->harga_wday;
        }
        $total_harga=$harga * $jumlah;

        for ($i=0; $i < $request->jumlah; $i++) { 
            $data = [
                'atas_nama' => $request->{"atas_nama".$i},
                'waktu_kunjungan'=> $request->waktu_kunjungan,
                'whatsapp' => $request->whatsapp,
                'id_paket'=>$request->id_paket,
                'id_pembayaran'=>$id_pembayaran,
            ];
            $this->pesan_tiket->addData($data);
        }  
        $data = [
            'id_paket'=>$request->id_paket,
            'id_pembayaran'=>$id_pembayaran,
            'id_pengguna'=>$request->id_pengguna,
            'qty'=>$jumlah,
            'total_harga'=> $total_harga,
            'email'=>$email->email,
            'status'=>"tertunda",
        ];
        $this->pembayaran->addData($data);

        return redirect()->route('tiketnormal')->with('success', 'Tiket berhasil dibuat');
        
    }

    public function edit()
    {
        $data = [
            'wisata' => $this->wisata->allData(),
            'pengguna'=>$this->pengguna->allData(),
        ];
        return view('tiketnormal.edit', $data);
    }

   
    

        
     

}
    


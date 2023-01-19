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

    public function edit($id_pembayaran)
    {
        $data = [
            'wisata' => $this->wisata->allData(),
            'pengguna'=>$this->pengguna->allData(),
            'pesan_tiket'=>$this->pesan_tiket->detailPembayaran($id_pembayaran),
            'pengunjung'=>$this->pesan_tiket->detailPemesanan($id_pembayaran),
        ];
        return view('tiketnormal.edit', $data);
    }

    public function paket($id_wisata)
    {
        $data = [
            'paket' => $this->paket->wisataData($id_wisata),];
        
        return view('tiketnormal.paket', $data);
    }
    public function invoice($id_pembayaran)
    {
        $data = ['pemesanan' => $this->pesan_tiket->detailPemesanan($id_pembayaran),
                 'pembayaran' => $this->pesan_tiket->detailPembayaran($id_pembayaran),
                 'pengunjung' => $this->pesan_tiket->dataPengunjung($id_pembayaran),
                 'kategori' => $this->kategori->allData(),];
        return view ('tiketnormal.invoice', $data);
    }


    public function store(Request $request)
    {
        $email=$this->pesan_tiket->detailData($request->id_pengguna);
        $id = $this->pembayaran->id();
        $id_pem = $id + 1;
        $jumlah=$request->jumlah;
        $id_pembayaran = "B".$id_pem;
        $paket = $this->pesan_tiket->detailPaket($request->id_paket);
        $d = strtotime($request->waktu_kunjungan);
        $N = date('l' ,$d);
        if ($N == "Saturday" || $N == "Sunday") {
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
        $total_harga=$hasil * $jumlah;

        for ($i=0; $i < $request->jumlah; $i++) { 
            $data = [
                'atas_nama' => $request->{"atas_nama".$i},
                'waktu_kunjungan'=> $request->waktu_kunjungan,
                'whatsapp' => $request->whatsapp,
                'id_paket'=>$request->id_paket,
                'id_pembayaran'=>$id_pembayaran,
                'harga' =>$hasil,
            ];
            $this->pesan_tiket->addData($data);
        }  
        $data = [
            'id_paket'=>$request->id_paket,
            'id_pembayaran'=>$id_pembayaran,
            'id_pengguna'=>$request->id_pengguna,
            'qty'=>$jumlah,
            'total_harga'=> $total_harga,
            'jenis' => "personal",
            'email'=>$email->email,
            'status'=>"tertunda",
        ];
        $this->pembayaran->addData($data);

        return redirect()->route('tiketnormal')->with('success', 'Tiket berhasil dibuat');
        
    }



   
    

        
     

}
    


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pesan_masif;
use App\Models\pembayaran;

class c_pembayaran extends Controller
{
    public function __construct()
    {
        $this->masif = new pesan_masif();
        $this->pembayaran = new pembayaran();
    }

    public function store($id_pembayaran){
        $pembayaran = $this->masif->detailData($id_pembayaran);
        $total_harga= $pembayaran->harga * $pembayaran->qty;
        $data = [
            'id_pengguna' => $pembayaran->id_pengguna,
            'id_paket' => $pembayaran->id_paket,
            'email' => $pembayaran->email,
            'qty' => $pembayaran->qty,
            'total_harga' => $total_harga,
            'status'=>"tertunda",
        ];
        $this->pembayaran->addData($data);

        $data = [
            'stat' => "accepted",
        ];
        $this->masif->editData($id_pembayaran, $data);
        return redirect()->route('masif')->with('success', 'Pembayaran Sukses');
        
    }

}

<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pesan_masif;
use App\Models\pengguna;

class c_pesan_masif extends Controller
{
    public function __construct()
    {
        $this->pesan_masif = new pesan_masif();
        $this->pengguna = new pengguna();
    }
    public function create($id)
    {
        $user = $this->pengguna->detailData($id);
        $data = [
            'nama' => $user->name,
            'whatsapp' => $user->kontak,
            'email' => $user->email,
        ];
        return response()->json(['data' => $data]);
    }
    public function store(Request $request)
    {
        $data = [
            'id_pengguna' => $request->id_pengguna,
            'id_paket' => $request->id_paket,
            'nik' => $request->nik,
            'waktu_kunjungan' => $request->waktu_kunjungan,
            'qty' => $request->qty,
            'stat' => "request",
        ];
        $this->pesan_masif->addData($data);
        $pesan = "Pesanan Anda Telah dikirim dan akan Masuk ke Waiting List Silakan Tunggu Balasan dari Admin";
        return response()->json(['data' => $pesan]);
    }
}

<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tiket;
use App\Models\mitra;

class c_chekin extends Controller
{
    public function __construct()
    {
        $this->mitra = new mitra();
        $this->tiket = new tiket();
    }
    public function chekin(Request $request)
    {
        $tiket = $this->tiket->detailData($request->kode_tiket);
        if ($tiket->status <> "available") {
            $respon = "Tiket Tidak Dapat Digunakan!";
        } else {
            $data = [
                'status' => "check-in",
            ];
            $this->tiket->editData($request->kode_tiket, $data);
            $mitra = $this->mitra->detailData($tiket->id_mitra);
            $balance = $mitra->balance + $tiket->harga;
            $chekin = $mitra->jumlahchekin + 1;
            $data = [
                'balance' => $balance,
                'jumlahchekin' => $chekin,
            ];
            
            $mitra = $this->mitra->editMitra($tiket->id_mitra, $data);
            $respon = "Success";
        }
        return response()->json(['data' => $respon]);
    }
}

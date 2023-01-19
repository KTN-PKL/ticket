<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tiket;
use App\Models\mitra;
use App\Models\hharian;

class c_chekin extends Controller
{
    public function __construct()
    {
        $this->mitra = new mitra();
        $this->tiket = new tiket();
        $this->hharian = new hharian();
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
            date_default_timezone_set("Asia/Jakarta");
            $t = date("Y-m-d");
            $kode = $tiket->id_mitra."-".$t;
            $cek = $this->hharian->chek($kode);
            if ($cek == 0) {
                $data = [
                    'id_mitra' => $tiket->id_mitra,
                    'kode_harian' => $kode,
                    'harbalance' => $tiket->harga,
                    'harchekin' => 1,
                    'tanggal' => $t,
                ];
                $this->hharian->addData($data);
            } else {
                $harian = $this->hharian->detailData($kode);
                if ($harian->id_balance <> null) {
                    $data = [
                    'id_mitra' => $tiket->id_mitra,
                    'kode_harian' => $kode,
                    'harbalance' => $tiket->harga,
                    'harchekin' => 1,
                    'tanggal' => $t,
                ];
                $this->hharian->addData($data);
                } else {
                    $harbalance = $harian->harbalance + $tiket->harga;
                    $harchekin = $harian->harchekin + 1;
                    $data = [
                        'harbalance' => $harbalance,
                        'harchekin' => $harchekin,
                    ];
                    $this->hharian->editData($kode,$data);
                }
            }
            $respon = "Success";
        }
        return response()->json(['data' => $respon]);
    }
}

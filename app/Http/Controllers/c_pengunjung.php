<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pengunjung;
use App\Models\mitra;
use App\Models\hbalance;

class c_pengunjung extends Controller
{
    public function __construct()
    {
        $this->hbalance = new hbalance();
        $this->pengunjung = new pengunjung();
        $this->mitra = new mitra();
    }

    public function index()
    {
        $data = ['mitra' => $this->mitra->allData(),];
        return view('pengunjung.index', $data);
    }

    public function pengunjung($id_mitra)
    {
        $data = ['pengunjung' => $this->pengunjung->mitraData($id_mitra),
                 'mitra' => $this->mitra->detailData($id_mitra)];
        return view('pengunjung.pengunjung', $data);
    }
    public function detail($kode_tiket)
    {
        $data = ['pengunjung' => $this->pengunjung->detailData($kode_tiket),];
        return view('pengunjung.detail', $data);
    }
    public function histori($id_mitra)
    {
        $data = ['histori' => $this->hbalance->mitraData($id_mitra),];
        return view('pengunjung.history', $data);
    }
    public function detailhistori($id_balance)
    {
        $data =  $this->hbalance->detailData($id_balance);
        return $data->buktibalance;
    }
    public function bayar(Request $request, $id_mitra)
    {
        date_default_timezone_set("Asia/Jakarta");
        $d = date("j");
        $m = date("F");
        $y = date("Y");
        if ($d < 7) {
            $h = 1;
        } elseif ($d < 14) {
            $h = 2;
        } elseif ($d < 21) {
            $h = 3;
        } elseif ($d < 28) {
            $h = 4;
        } else {
            $h = 5;
        }
        $t = date("Y-m-d");
        $mitra = $this->mitra->detailData($id_mitra);
        $file  = $request->bukti;
        $filename = $mitra->username.'-'.$t.'.'.$file->extension();
        $file->move(public_path('bukti'),$filename);
        $k = "Minggu Ke-".$h.", ".$m." ".$y;
        $data = [
            'id_mitra' => $id_mitra,
            'jadwal_pembayaran' => $k,
            'tanggal_pembayaran' => $t,
            'hbalance' => $mitra->balance,
            'buktibalance' => $filename,
        ];
        $this->hbalance->addData($data);
        $data = ['balance' => 0,];
        $this->mitra->editMitra($id_mitra, $data);
        return redirect()->route('pengunjung');
    }

}

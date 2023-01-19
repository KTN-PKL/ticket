<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pengunjung;
use App\Models\mitra;
use App\Models\hbalance;
use App\Models\hharian;

class c_pengunjung extends Controller
{
    public function __construct()
    {
        $this->hharian = new hharian();
        $this->pengunjung = new pengunjung();
        $this->mitra = new mitra();
        $this->hbalance = new hbalance();
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
        $t = date("Y-m-d");
        $mitra = $this->mitra->detailData($id_mitra);
        $file  = $request->bukti;
        $filename = $mitra->username.'-'.$t.'.'.$file->extension();
        $file->move(public_path('bukti'),$filename);
        $id = $this->hbalance->id($id_mitra);
        $id_balance = $id + 1;
        $data = ['id_balance' => $id_balance,];
        $this->hharian->editData2($id_mitra, $data);
        $data = [
            'id_balance' => $id_balance,
            'id_mitra' => $id_mitra,
            'hjumlahchekin' => $mitra->jumlahchekin,
            'tanggal_pembayaran' => $t,
            'hbalance' => $mitra->balance,
            'buktibalance' => $filename,
        ];
        $this->hbalance->addData($data);
        $data = ['balance' => 0,
                 'jumlahchekin' => 0,];
        $this->mitra->editMitra($id_mitra, $data);
        return redirect()->route('pengunjung');
    }
}

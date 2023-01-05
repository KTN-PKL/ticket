<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pembatalan;

class c_pembatalan extends Controller
{
    public function __construct()
    {
        $this->pembatalan = new pembatalan();
    }

    public function index()
    {
        $data = ['pembatalan' => $this->pembatalan->allData(),];
        return view('pembatalan.index', $data);
    }
    public function batalkan($kode_tiket)
    {
        $file  = $request->bukti;
        $filename = $kode_tiket.'.'.$file->extension();
        $file->move(public_path('bukti'),$filename);
        $data = [
            'status' => "refund",
            'bukti' => "filename",
        ];
        $this->pembatalan->editData($kode_tiket, $data);
    }
    public function detail($kode_tiket)
    {
        $data = [ 'pembatalan' => $this->pembatalan->detailData($kode_tiket),];
        return view('pembatalan.detail', $data);
    }
    public function bukti($kode_tiket)
    {
        $data = [ 'pembatalan' => $this->pembatalan->detailData($kode_tiket),];
        return view('pembatalan.bukti', $data);
    }
}

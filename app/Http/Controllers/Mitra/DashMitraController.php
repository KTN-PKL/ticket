<?php

namespace App\Http\Controllers\Mitra;

use App\Http\Controllers\Controller;
use App\Models\mitra;
use App\Models\wisata;
use Illuminate\Http\Request;

class DashMitraController extends Controller
{
    public function __construct()
    {

        $this->wisata = new wisata();
        $this->mitra = new mitra();
    }

    public function index()
    {
        $data = mitra::all();
        // return response()->json(['data' => $data, 200]);
        // return DashMitraResouce::collection($data);
    }


    //funciton dashboard mitra
    public function mitra($id_mitra)
    {

        $mit = new mitra;
        $detailmitra = $mit->detailData($id_mitra);
        $dm = [
            'nama' => $detailmitra->name,
            'balance' => $detailmitra->balance,
            'pengunjung' => $detailmitra->jumlahchekin,
            'postingan' => count($this->wisata->mitraData($id_mitra))
        ];
        // return new DashMitraResouce($detailmitra);
        return response()->json(['data' => $dm, 200]);
    }

    // public function postingan($id_mitra)
    // {
    //     $tes = count($this->wisata->mitraData($id_mitra));
    //     // $data = [
    //     //     'wisata' => $this->wisata->mitraData($id_mitra),
    //     //     'mitra' => $this->mitra->detailData($id_mitra),
    //     // ];
    //     return response()->json(['data' => $tes, 200]);
    // }
}

// get estimasi pendapatan
// get postingan 
// get petugas

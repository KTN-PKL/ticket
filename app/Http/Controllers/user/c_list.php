<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\kategori;
use App\Models\wisata;
use App\Models\paket;

class c_list extends Controller
{
    public function __construct()
    {
        $this->kategori = new kategori();
        $this->wisata = new wisata();
        $this->paket = new paket();
    }
    public function kategori()
    {
        $data = ['kategori' => $this->kategori->allData(),];
        return response()->json(['data' => $data]);
    }
    public function wisata($id)
    {
        $data = ['wisata' => $this->wisata->listwisata($id)];
        return response()->json(['data' => $data]);
    }
    public function paket($id)
    {
        $data = ['paket' => $this->paket->listpaket($id)];
        return response()->json(['data' => $data]);
    }
}

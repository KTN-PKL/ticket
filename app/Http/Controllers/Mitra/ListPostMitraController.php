<?php

namespace App\Http\Controllers\Mitra;

use App\Http\Controllers\Controller;
use App\Models\wisata;
use Illuminate\Http\Request;

class ListPostMitraController extends Controller
{
    public function __construct()
    {

        $this->wisata = new wisata();
    }
    public function listpost($id_wisata)
    {

        $data = ['mitra' => $this->wisata->allData(),];
        return response()->json(['data' => $data]);
    }
}

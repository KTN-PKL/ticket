<?php

namespace App\Http\Controllers\Mitra;

use App\Http\Controllers\Controller;
use App\Models\mitra;
use App\Models\wisata;

use Illuminate\Http\Request;

class ProfileMitraController extends Controller
{
    public function __construct()
    {

        $this->mitra = new mitra();
        $this->ws = new wisata();
    }

    public function profile($id_mitra)
    {
        $mit = new mitra;
        $detailmitra = $mit->detailData($id_mitra);
        $prof = [
            'nama' => $detailmitra->name,
            'notlp' => $detailmitra->kontak,
            'email' => $detailmitra->email,
            // 'deskripsi' => $this->ws->desc($id_mitra),
            'foto' => $detailmitra->foto,
        ];
        return response()->json(['data' => $prof]);
    }
}

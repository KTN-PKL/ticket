<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class pengunjung extends Model
{
    use HasFactory;

    public function mitraData($id_mitra)
    {
        return DB::table('tikets')->join('pakets', 'tikets.id_paket', '=', 'pakets.id_paket')->join('wisatas', 'pakets.id_wisata', '=', 'wisatas.id_wisata')->where('wisata.id_mitra', $id_mitra)->get();
    }
    public function detailData($kode_tiket)
    {
        return DB::table('tikets')->join('pakets', 'tikets.id_paket', '=', 'pakets.id_paket')->join('wisatas', 'pakets.id_wisata', '=', 'wisatas.id_wisata')->where('kode_tiket', $kode_tiket)->first();
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class pesan_tiket extends Model
{
    use HasFactory;

    public function allData()
    {
        return DB::table('pemesanans')->join('pakets', 'pemesanans.id_paket', '=', 'pakets.id_paket')->join('wisatas', 'pakets.id_wisata', '=', 'wisatas.id_wisata')->get();
    }
    public function addData($data)
    {
        DB::table('pemesanans')->insert($data);
    }
    public function detailData($id_pengguna)
    {
        return DB::table('users')->join('penggunas', 'users.id', '=', 'penggunas.id_pengguna')->where('id_pengguna', $id_pengguna)->first();
    }

    public function detailPaket($id_paket)
    {
        return DB::table('pakets')->where('id_paket', $id_paket)->first();
    }
   
}

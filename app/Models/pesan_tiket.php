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
   
}

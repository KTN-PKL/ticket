<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class pesan_masif extends Model
{
    use HasFactory;

    public function allData()
    {
        return DB::table('pesan_masifs')->join('pakets', 'pesan_masifs.id_paket', '=', 'pakets.id_paket')->join('wisatas', 'pakets.id_wisata', '=', 'wisatas.id_wisata')->join('users', 'pesan_masifs.id_pengguna', '=', 'users.id')->get();
    }
    public function detailData($id_masif)
    {
        return DB::table('pesan_masifs')->join('pakets', 'pesan_masifs.id_paket', '=', 'pakets.id_paket')->join('wisatas', 'pakets.id_wisata', '=', 'wisatas.id_wisata')->join('users', 'pesan_masifs.id_pengguna', '=', 'users.id')->where('id_masif', $id_masif)->first();
    }
    public function editlData($id_masif, $data)
    {
        DB::table('pesan_masifs')->where('id_masif', $id_masif)->updatet($data);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class tiket extends Model
{
    use HasFactory;

    public function addData($data)
    {
        DB::table('tikets')->insert($data);
    }
    public function editData($id, $data)
    {
        DB::table('tikets')->where('kode_tiket', $id)->update($data);
    }
    public function detailData($id)
    {
        return DB::table('tikets')->join('pakets', 'tikets.id_paket', '=' ,'pakets.id_paket')->join('wisatas', 'pakets.id_wisata', '=' ,'wisatas.id_wisata')->where('kode_tiket', $id)->first();
    }
}

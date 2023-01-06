<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class jam_buka extends Model
{
    use HasFactory;

    public function wisataData($id_wisata)
    {
        return DB::table('jam_bukas')->where('id_wisata', $id_wisata)->get();
    }

    public function addData($data)
    {
        DB::table('jam_bukas')->insert($data);
    }
    public function deleteData($id_wisata)
    {
        DB::table('jam_bukas')->where('id_wisata', $id_wisata)->delete();
    }
    public function editData($id_jambuka, $data)
    {
        DB::table('jam_bukas')->where('id_buka', $id_jambuka)->update($data);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class jam_buka extends Model
{
    use HasFactory;

    public function wisataData($id_wsiata)
    {
        return DB::table('jam_bukas')->where('id_wsiata', $id_wsiata)->get();
    }

    public function addData($data)
    {
        DB::table('jam_bukas')->insert($data);
    }
    public function deleteData($id_jambuka)
    {
        DB::table('jam_bukas')->where('id_jambuka', $id_jambuka)->delete();
    }
    public function editData($id_jambuka, $data)
    {
        DB::table('jam_bukas')->where('id_jambuka', $id_jambuka)->update($data);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class berita_informasi extends Model
{
    use HasFactory;
    public function allData()
    {
        return DB::table('berita_informasis')->get();
    }
    public function addData($data)
    {
        DB::table('berita_informasis')->insert($data);
    }
    public function detailData($id_beritainformasi)
    {
        return DB::table('berita_informasis')->where('id_beritainformasi', $id_beritainformasi)->first();
    }
    public function editData($id_beritainformasi, $data)
    {
        DB::table('berita_informasis')->where('id_beritainformasi', $id_beritainformasi)->edit($data);
    }
    public function deleteData($id_beritainformasi)
    {
        DB::table('berita_informasis')->where('id_beritainformasi', $id_beritainformasi)->delete();
    }
}

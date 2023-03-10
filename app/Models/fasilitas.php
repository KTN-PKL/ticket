<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class fasilitas extends Model
{
    use HasFactory;

    public function allData()
    {
        return DB::table('fasilitas')->get();
    }
    public function addData($data)
    {
        DB::table('fasilitas')->insert($data);
    }
    public function deleteData($id_fasilitas)
    {
        DB::table('fasilitas')->where('id_fasilitas', $id_fasilitas)->delete();
    }
    public function editData($id_fasilitas, $data)
    {
        DB::table('fasilitas')->where('id_fasilitas', $id_fasilitas)->update($data);
    }
    public function detailData($id_fasilitas)
    {
        return DB::table('fasilitas')->where('id_fasilitas', $id_fasilitas)->first();
    }
}

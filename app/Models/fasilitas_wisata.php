<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class fasilitas_wisata extends Model
{
    use HasFactory;

    public function wisataData($id_wsiata)
    {
        return DB::table('fasilitas_wisatas')->join('fasilitass', 'fasilitas_wisatas.id_fasilitas', '=', 'fasilitass.id_fasilitas')->where('id_wsiata', $id_wsiata)->get();
    }

    public function addData($data)
    {
        DB::table('fasilitas_wisatas')->insert($data);
    }
    public function deleteData($id_fw)
    {
        DB::table('fasilitas_wisatas')->where('id_fw', $id_fw)->delete();
    }
    public function editData($id_fw, $data)
    {
        DB::table('fasilitas_wisatas')->where('id_fw', $id_fw)->update($data);
    }
    
}

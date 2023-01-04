<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class fasilitas_wisata extends Model
{
    use HasFactory;

    public function wisataData($id_wisata)
    {
        return DB::table('fasilitas_wisatas')->join('fasilitas', 'fasilitas_wisatas.id_fasilitas', '=', 'fasilitas.id_fasilitas')->where('id_wisata', $id_wisata)->get();
    }

    public function addData($data)
    {
        DB::table('fasilitas_wisatas')->insert($data);
    }
    public function deleteData($id_wisata)
    {
        DB::table('fasilitas_wisatas')->where('id_wisata', $id_wisata)->delete();
    }
    
}

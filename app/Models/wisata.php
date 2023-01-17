<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class wisata extends Model
{
    use HasFactory;

    public function allData()
    {
        return DB::table('wisatas')->join('kategoris', 'wisatas.id_kategori', '=', 'kategoris.id_kategori')->get();
    }
    public function jumlahData()
    {
        return DB::table('wisatas')->count();
    }
    public function mitraData($id_mitra)
    {
        return DB::table('wisatas')->join('kategoris', 'wisatas.id_kategori', '=', 'kategoris.id_kategori')->where('id_mitra', $id_mitra)->get();
    }
    public function kategoriData($id_kategori)
    {
        return DB::table('wisatas')->where('id_kategori', $id_kategori)->get();
    }
    public function detailData($id_wisata)
    {
        return DB::table('wisatas')->join('kategoris', 'wisatas.id_kategori', '=', 'kategoris.id_kategori')->where('id_wisata', $id_wisata)->first();
    }
    public function addData($data)
    {
        DB::table('wisatas')->insert($data);
    }
    public function deleteData($id_wisata)
    {
        DB::table('wisatas')->where('id_wisata', $id_wisata)->delete();
    }
    public function editData($id_wisata, $data)
    {
        DB::table('wisatas')->where('id_wisata', $id_wisata)->update($data);
    }

    public function desc($id_wisata)
    {
        DB::table('wisatas')->where('id_wisata', $id_wisata)->get();
    }
}

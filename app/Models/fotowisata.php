<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class fotowisata extends Model
{
    use HasFactory;

    public function wisataData($id_wisata)
    {
        return DB::table('fotowisatas')->where('id_wisata', $id_wisata)->get();
    }

    public function addData($data)
    {
        DB::table('fotowisatas')->insert($data);
    }
    public function deleteData($id_wisata)
    {
        DB::table('fotowisatas')->where('id_wisata', $id_wisata)->delete();
    }

}

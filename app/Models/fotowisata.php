<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class fotowisata extends Model
{
    use HasFactory;

    public function wisataData($id_wsiata)
    {
        return DB::table('fotowisatas')->where('id_wsiata', $id_wsiata)->get();
    }

    public function addData($data)
    {
        DB::table('fotowisatas')->insert($data);
    }
    public function deleteData($id_fotow)
    {
        DB::table('fotowisatas')->where('id_fotow', $id_fotow)->delete();
    }
    public function editData($id_fotow, $data)
    {
        DB::table('fotowisatas')->where('id_fotow', $id_fotow)->update($data);
    }

}

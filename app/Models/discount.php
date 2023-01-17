<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class discount extends Model
{
    use HasFactory;

    public function allData()
    {
        return DB::table('discounts')->join('pakets', 'discounts.id_paket', '=', 'pakets.id_paket')->join('wisatas', 'pakets.id_wisata', '=', 'wisatas.id_wisata')->get();
    }
    public function addData($data)
    {
        DB::table('discounts')->insert($data);
    }
    public function detailData($id_discount)
    {
        return DB::table('discounts')->where('id_discount', $id_discount)->first();
    }
    public function editData($id_discount, $data)
    {
        DB::table('discounts')->where('id_discount', $id_discount)->update($data);
    }
    public function deleteData($id_discount)
    {
        DB::table('discounts')->where('id_discount', $id_discount)->delete();
    }
}

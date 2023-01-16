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
        return DB::table('dicounts')-join('pakets', 'discounts.id_paket', '=', 'pakets.id_paket')->join('wisatas', 'pakets.')->get();
    }
    public function addData($data)
    {
        DB::table('dicounts')->insert($data);
    }
    public function detailData($id_discount)
    {
        return DB::table('dicounts')->where('id_discount', $id_discount)->first();
    }
    public function editData($id_discount, $data)
    {
        DB::table('dicounts')->where('id_discount', $id_discount)->update($data);
    }
    public function deleteData($id_discount)
    {
        DB::table('dicounts')->where('id_discount', $id_discount)->delete();
    }
}

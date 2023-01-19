<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class hharian extends Model
{
    use HasFactory;

    public function historiData($id)
    {
        return DB::table('hharians')->where('id_balance', $id)->get();
    }
    public function chek($id)
    {
        return DB::table('hharians')->where('kode_harian', $id)->count();
    }
    public function addData($data)
    {
        DB::table('hharians')->insert($data);
    }
    public function detailData($id)
    {
        return DB::table('hharians')->where('kode_harian', $id)->first();
    }
    public function editData($id, $data)
    {
        DB::table('hharians')->where('kode_harian', $id)->where('id_balance', null)->update($data);
    }
    public function editData2($id, $data)
    {
        DB::table('hharians')->where('id_mitra', $id)->where('id_balance', null)->update($data);
    }
}

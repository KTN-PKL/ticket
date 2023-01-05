<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class hbalance extends Model
{
    use HasFactory;
    
    public function mitraData($id_mitra)
    {
        return DB::table('hbalances')->where('id_mitra', $id_mitra)->get();
    }
    public function detailData($id_balance)
    {
        return DB::table('hbalances')->where('id_balance', $id_balance)->first();
    }
    public function addData($data)
    {
        DB::table('hbalances')->insert($data);
    }
}

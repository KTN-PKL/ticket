<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class pembayaran extends Model
{
    use HasFactory;
    public function addData($data)
    {
        DB::table('pembayarans')->insert($data);
    }

    public function id()
    {
        return DB::table('pembayarans')->count();
    }
    // public function deleteData($id_pembayaran)
    // {
    //     DB::table('pembayarans')->where('id_pembayaran', $id_pembayaran)->delete();
    // }
}

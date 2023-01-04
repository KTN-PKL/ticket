<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class pembatalan extends Model
{
    use HasFactory;

    public function allData()
    {
        return DB::table('tikets')->where('satus', "Process Refund")->orwhere('satus', "Refund")->get();
    }
    public function editData($kode_tiket, $data)
    {
        DB::table('tikets')->where('kode_tiket', $kode_tiket)->update($data);
    }
    public function detailData($kode_tiket)
    {
        return DB::table('tikets')->where('kode_tiket', $kode_tiket)->first();
    }
}

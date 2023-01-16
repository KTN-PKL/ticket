<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class pesan_tiket extends Model
{
    use HasFactory;

    public function allData()
    {
        return DB::table('pembayarans')->join('pakets', 'pembayarans.id_paket', '=', 'pakets.id_paket')->join('wisatas', 'pakets.id_wisata', '=', 'wisatas.id_wisata')->get();
    }
    public function addData($data)
    {
        DB::table('pemesanans')->insert($data);
    }
    public function detailData($id_pengguna)
    {
        return DB::table('users')->join('penggunas', 'users.id', '=', 'penggunas.id_pengguna')->where('id_pengguna', $id_pengguna)->first();
    }

    public function detailPaket($id_paket)
    {
        return DB::table('pakets')->where('id_paket', $id_paket)->first();
    }

    public function detailPemesanan($id_pembayaran)
    {
        return DB::table('pemesanans')->where('id_pembayaran', $id_pembayaran)->first();
    }
    public function detailPembayaran($id_pembayaran)
    {
        return DB::table('pembayarans')->join('pakets', 'pembayarans.id_paket', '=', 'pakets.id_paket')->join('wisatas', 'pakets.id_wisata', '=', 'wisatas.id_wisata')->join('users', 'pembayarans.id_pengguna', '=', 'users.id')->where('id_pembayaran', $id_pembayaran)->first();
    }

    public function dataPengunjung($id_pembayaran)
    {
        return DB::table('pemesanans')->where('id_pembayaran', $id_pembayaran)->get();
    }
   
}

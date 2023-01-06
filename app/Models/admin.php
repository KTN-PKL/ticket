<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class admin extends Model
{
    use HasFactory;
    public function id($email)
    {
        return DB::table('users')->where('email', $email)->first();
    }
    public function allData()
    {
        return DB::table('users')->join('penggunas', 'users.id', '=', 'penggunas.id_pengguna')->get();
    }
    public function addDataUser($data)
    {
        DB::table('users')->insert($data);
    }
    public function addDatapengguna($data)
    {
        DB::table('penggunas')->insert($data);
    }
    public function detailData($id_admin)
    {
        return DB::table('users')->join('admins', 'users.id', '=', 'admins.id_admin')->where('id_admin', $id_admin)->first();
    }
    public function deleteUser($id)
    {
        DB::table('users')->where('id', $id)->delete();
    }
    public function deletepengguna($id_pengguna)
    {
        DB::table('penggunas')->where('id_pengguna', $id_pengguna)->delete();
    }
    public function editProfil($id, $data)
    {
        DB::table('users')->where('id', $id)->update($data);
    }
    public function editPosisi($id, $data2)
    {
        DB::table('admins')->where('id_admin', $id)->update($data2);
    }
    public function editpengguna($id_pengguna, $data)
    {
        DB::table('penggunas')->where('id_pengguna', $id_pengguna)->update($data);
    }
}

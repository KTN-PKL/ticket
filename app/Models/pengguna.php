<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class pengguna extends Model
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
    public function detailData($id_pengguna)
    {
        return DB::table('users')->join('penggunas', 'users.id', '=', 'penggunas.id_pengguna')->where('id_pengguna', $id_pengguna)->first();
    }
    public function deleteUser($id)
    {
        DB::table('users')->where('id', $id)->delete();
    }
    public function deletepengguna($id_pengguna)
    {
        DB::table('penggunas')->where('id_pengguna', $id_pengguna)->delete();
    }
    public function editUser($id, $data)
    {
        DB::table('users')->where('id', $id)->update($data);
    }
    public function editpengguna($id_pengguna, $data)
    {
        DB::table('penggunas')->where('id_pengguna', $id_pengguna)->update($data);
    }
}

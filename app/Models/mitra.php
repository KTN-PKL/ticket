<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class mitra extends Model
{
    use HasFactory;

    public function id($email)
    {
        return DB::table('users')->where('email', $email)->first();
    }
    public function allData()
    {
        return DB::table('users')->join('mitras', 'users.id', '=', 'mitras.id_mitra')->get();
    }
    public function addDataUser($data)
    {
        DB::table('users')->insert($data);
    }
    public function addDataMitra($data)
    {
        DB::table('mitras')->insert($data);
    }
    public function detailData($id_mitra)
    {
        return DB::table('users')->join('mitras', 'users.id', '=', 'mitras.id_mitra')->where('id_mitra', $id_mitra)->first();
    }
    public function deleteUser($id)
    {
        DB::table('users')->where('id', $id)->delete();
    }
    public function deleteMitra($id_mitra)
    {
        DB::table('mitras')->where('id_mitra', $id_mitra)->delete();
    }
    public function editUser($id, $data)
    {
        DB::table('users')->where('id', $id)->update($data);
    }
    public function editMitra($id_mitra, $data)
    {
        DB::table('mitras')->where('id_mitra', $id_mitra)->update($data);
    }
}

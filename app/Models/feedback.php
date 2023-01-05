<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class feedback extends Model
{
    use HasFactory;

    public function feedbackData()
    {
        return DB::table('feedback')->join('penggunas','feedback.id_pengguna', '=','penggunas.id_pengguna')->join('users','penggunas.id_pengguna','=','users.id')->get();
    }

    public function detailData($id_feedback)
    {
        return DB::table('feedback')->join('penggunas','feedback.id_pengguna', '=','penggunas.id_pengguna')->join('users','penggunas.id_pengguna','=','users.id')->where('id_feedback', $id_feedback)->first();
    }

    public function editData($id_feedback, $data)
    {
        DB::table('feedback')->where('id_feedback', $id_feedback)->update($data);
    }
}

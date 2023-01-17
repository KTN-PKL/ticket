<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class tiket extends Model
{
    use HasFactory;

    public function addData($data)
    {
        DB::table('tikets')->insert($data);
    }
}

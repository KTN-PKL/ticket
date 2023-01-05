<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hbalances', function (Blueprint $table) {
            $table->id('id_balance');
            $table->string('id_mitra');
            $table->string('jadwal_pembayaran');
            $table->date('tanggal_pembayaran');
            $table->string('hbalance');
            $table->string('buktibalance');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hbalances');
    }
};

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
        Schema::create('pesan_masifs', function (Blueprint $table) {
            $table->id('id_masif');
            $table->string('id_pengguna');
            $table->string('nik');
            $table->string('id_paket');
            $table->string('id_pembayaran');
            $table->date('waktu_kunjungan');
            $table->string('qty');
            $table->string('harga')->nullabel();
            $table->string('stat');
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
        Schema::dropIfExists('pesan_masifs');
    }
};

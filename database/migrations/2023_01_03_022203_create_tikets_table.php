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
        Schema::create('tikets', function (Blueprint $table) {
            $table->string('kode_tiket')->primary();
            $table->string('atas_nama');
            $table->string('whatsapp');
            $table->string('id_wisata');
            $table->string('qty');
            $table->string('status');
            $table->date('waktu_kunjungan');
            $table->string('id_paket');
            $table->string('id_user');
            $table->string('harga');
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
        Schema::dropIfExists('tikets');
    }
};

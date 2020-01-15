<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMitraLokalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mitra_lokals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreign('instansi_id')->references('id')->on('instansis');
            $table->string('pembiayaan');
            $table->date('durasi_awal');
            $table->date('durasi_akhir');
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
        Schema::dropIfExists('mitra_lokals');
    }
}

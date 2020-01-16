<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuestBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guest_books', function (Blueprint $table) {
            $table->bigIncrements('id');
           $table->unsignedBigInteger('id_tenaga');
            // $table->foreign('id_tenaga')->references('id')->on('master_tenaga_asings');
            $table->unsignedBigInteger('tujuan_id');
            // $table->foreign('tujuan_id')->references('id')->on('tujuans');
            $table->unsignedBigInteger('kegiatan_id');
            //$table->foreign('kegiatan_id')->references('id')->on('master_kegiatans');
            $table->date('tgl_awal');
            $table->date('tgl_akhir');
            $table->string('jadwal');
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
        Schema::dropIfExists('guest_books');
    }
}

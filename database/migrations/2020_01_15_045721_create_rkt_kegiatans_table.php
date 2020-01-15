<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRktKegiatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rkt_kegiatans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreign('id_rkt')->references('id')->on('rkts');
            $table->foreign('id_kegiatan')->references('id')->on('master_kegiatans');
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
        Schema::dropIfExists('rkt_kegiatans');
    }
}

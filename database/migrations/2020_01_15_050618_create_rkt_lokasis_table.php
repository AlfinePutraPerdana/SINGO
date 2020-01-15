<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRktLokasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rkt_lokasis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreign('id_rkt')->references('id')->on('rkts');
            $table->foreign('id_lokasi')->references('id')->on('master_kotas');
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
        Schema::dropIfExists('rkt_lokasis');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRktSasaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rkt_sasarans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreign('id_rkt')->references('id')->on('rkts');
            $table->foreign('id_sasaran')->references('id')->on('sasarans');
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
        Schema::dropIfExists('rkt_sasarans');
    }
}

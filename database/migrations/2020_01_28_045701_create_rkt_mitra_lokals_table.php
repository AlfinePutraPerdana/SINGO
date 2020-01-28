<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRktMitraLokalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rkt_mitra_lokals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_rkt');//
            $table->unsignedInteger('id_instansi');//
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
        Schema::dropIfExists('rkt_mitra_lokals');
    }
}

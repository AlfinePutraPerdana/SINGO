<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRktsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rkts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('pendahuluan');
            $table->string('hasil_yang_diharapkan');
            $table->string('peran_ketiga');
            $table->string('kelompok_sasaran');
            $table->float('nominal_biaya');
            $table->foreign('mata_uang_id')->references('id')->on('mata_uang');
            $table->date('jadwal_awal');
            $table->date('jadwal_akhir');
            $table->text('penutup');
            $table->string('lampiran');
            $table->string('bap');
            $table->foreign('id_program')->references('id')->on('master_program');


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
        Schema::dropIfExists('rkts');
    }
}

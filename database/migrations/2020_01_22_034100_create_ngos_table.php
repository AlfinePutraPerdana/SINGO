<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNgosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ngos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_instansi');
            $table->string('no_telp',15);
            $table->string('fax',10);
            $table->string('email');
            $table->string('website');
            $table->string('bidang_kerja');
            $table->date('mulai_beroperasi');
            $table->date('tgl_ttd_msp');
            $table->string('lokasi_kerja_sama');
            $table->string('country_director');
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
        Schema::dropIfExists('ngos');
    }
}

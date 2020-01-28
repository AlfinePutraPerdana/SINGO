<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaporanKeuangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan_keuangans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->unsignedBigInteger('id_instansi');
            $table->unsignedBigInteger('id_rik');//belom
            $table->unsignedBigInteger('id_rkt');//belom
            $table->decimal('nominal_lokal',19,2);
            $table->decimal('nominal_asing',19,2);
            $table->unsignedBigInteger('mata_uang');
            $table->string('rincian');
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
        Schema::dropIfExists('laporan_keuangans');
    }
}

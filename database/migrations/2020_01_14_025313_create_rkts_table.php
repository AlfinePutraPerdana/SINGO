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
            $table->unsignedBigInteger('id_ngo')->nullable();
            $table->string('judul');
            $table->text('pendahuluan');
            $table->string('hasil_yang_diharapkan');
            $table->string('peran_ketiga');
            $table->string('kelompok_sasaran');
            $table->text('tujuan');
            $table->string('tenaga_lokal');
            $table->string('tenaga_asing');
            $table->integer('jumlah_ta');
            $table->decimal('nominal_biaya',8,2);
            $table->unsignedBigInteger('mata_uang_id');
            $table->text('lokasi');
            //$table->foreign('mata_uang_id')->references('id')->on('mata_uangs');
            $table->date('jadwal_awal');
            $table->date('jadwal_akhir');
            $table->text('penutup');
            $table->string('lampiran');
            $table->string('filename_lampiran');
            $table->string('bap')->nullable();
            $table->string('filename_bap')->nullable();
            $table->unsignedBigInteger('id_program');
            $table->integer('status');
            $table->text('catatan');
            //$table->foreign('id_program')->references('id')->on('master_programs');


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

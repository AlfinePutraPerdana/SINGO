<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_instansi');
            $table->string('id_rkt');
            $table->string('judul');
            $table->text('pendahuluan');
            $table->text('capaian');
            $table->string('peran_serta');
            $table->text('sasaran');
            $table->text('tujuan');
            $table->decimal('nominal_biaya',19,2);
            $table->unsignedBigInteger('matauang_id');
            $table->text('permasalahan');
            $table->text('upaya_pemecahan');
            $table->text('penutup');
            $table->string('lampiran');
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
        Schema::dropIfExists('reports');
    }
}

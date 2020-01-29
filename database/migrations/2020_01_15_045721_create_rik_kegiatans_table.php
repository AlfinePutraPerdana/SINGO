<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRikKegiatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rik_kegiatans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_program');
            $table->string('name');
            $table->text('detail_kegiatan');
            $table->text('penerima_manfaat');
            $table->text('indikator_outcome');
            $table->text('lokasi');
            $table->year('tahun_awal');
            $table->year('tahun_akhir');
            $table->text('mitra_kemendagri');
            $table->text('mitra_lapangan');
            $table->text('mitra_kerja');
            $table->decimal('nominal_lokal',19,2);
            $table->decimal('nominal_asing',19,2);
            $table->unsignedBigInteger('mata_uang');
            $table->text('sumber_dana');
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
        Schema::dropIfExists('rik_kegiatans');
    }
}

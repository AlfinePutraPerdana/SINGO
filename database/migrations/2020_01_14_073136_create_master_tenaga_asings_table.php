<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasterTenagaAsingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_tenaga_asings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('kewarganegaraan');
            $table->string('no_passport');
            $table->date('tgl_berlaku_awal');
            $table->date('tgl_berlaku_akhir');
            $table->unsignedBigInteger('id_instansi');
            //$table->foreign('id_instansi')->references('id')->on('instansis');
            $table->string('jabatan');
            $table->string('foto');
            $table->string('upload_passpor');
            $table->string('cv_resume');
            $table->string('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('kategori');
            $table->text('tujuan');
            $table->text('kegiatan');
            $table->date('tgl_awal');
            $table->date('tgl_akhir');
            $table->string('jobdesc');
            $table->string('dokumen_pendukung');
            $table->integer('status');
            $table->text('catatan');
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
        Schema::dropIfExists('master_tenaga_asings');
    }
}

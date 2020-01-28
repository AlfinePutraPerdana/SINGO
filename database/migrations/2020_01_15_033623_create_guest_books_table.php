<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuestBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guest_books', function (Blueprint $table) {
            $table->bigIncrements('id');
           $table->unsignedBigInteger('id_tenaga');
            //
            $table->unsignedBigInteger('tujuan_id');
            //
            $table->unsignedBigInteger('kegiatan_id');
            //
            $table->date('tgl_awal');
            $table->date('tgl_akhir');
            $table->string('jadwal');
            $table->string('dokumen_pendukung');
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
        Schema::dropIfExists('guest_books');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstansisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instansis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('negara');
            $table->string('kota');
            $table->string('alamat');
            $table->unsignedBigInteger('id_kategori');
           // $table->foreign('id_kategori')->references('id')->on('kategori_instansis');
            $table->string('parent_id')->nullable();
            $table->string('no_regis_izin');
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
        Schema::dropIfExists('instansis');
    }
}

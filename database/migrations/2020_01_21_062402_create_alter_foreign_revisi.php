<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlterForeignRevisi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //adding foreign keys to all table
        Schema::table('laporan_keuangans', function (Blueprint $table) {
            $table->foreign('id_instansi')->references('id')->on('instansis');

        });

        Schema::table('pembebasan_pajaks', function (Blueprint $table) {
            $table->foreign('id_instansi')->references('id')->on('instansis');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alter_foreign_revisi');
    }
}

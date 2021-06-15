<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignAll extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //adding foreign keys to all table
        Schema::table('rkts', function (Blueprint $table) {
            $table->foreign('mata_uang_id')->references('id')->on('mata_uangs');
            $table->foreign('id_program')->references('id')->on('master_programs');
        });

        Schema::table('rkt_tenagaasings', function (Blueprint $table) {
            $table->foreign('id_rkt')->references('id')->on('rkts');

            $table->foreign('id_tenagaasing')->references('id')->on('master_tenaga_asings');


        });

        Schema::table('master_tenaga_asings', function (Blueprint $table) {
            $table->foreign('id_instansi')->references('id')->on('instansis');

        });

        Schema::table('sasarans', function (Blueprint $table) {
            $table->foreign('instansi_id')->references('id')->on('instansis');

        });

        Schema::table('tujuans', function (Blueprint $table) {
            $table->foreign('instansi_id')->references('id')->on('instansis');

        });


        Schema::table('mata_uangs', function (Blueprint $table) {
            $table->foreign('id_instansi')->references('id')->on('instansis');

        });

        Schema::table('instansis', function (Blueprint $table) {
            $table->foreign('id_kategori')->references('id')->on('kategori_instansis');
        });

        Schema::table('monevs', function (Blueprint $table) {
            $table->foreign('city_id')->references('id')->on('master_kotas');
        });

        Schema::table('mitra_lokals', function (Blueprint $table) {
            $table->foreign('instansi_id')->references('id')->on('instansis');
        });

        Schema::table('rik_kegiatans', function (Blueprint $table) {
            $table->foreign('id_program')->references('id')->on('master_programs');
            $table->foreign('mata_uang')->references('id')->on('mata_uangs');
        });

        Schema::table('rik_lokasis', function (Blueprint $table) {
            $table->foreign('id_rkt')->references('id')->on('rkts');
            $table->foreign('id_city')->references('id')->on('master_kotas');
        });

        Schema::table('laporan_keuangans', function (Blueprint $table) {
            $table->foreign('id_instansi')->references('id')->on('instansis');
            //$table->foreign('id_rik')->references('id')->on('riks');
            $table->foreign('id_rkt')->references('id')->on('rkts');
            $table->foreign('mata_uang')->references('id')->on('mata_uangs');
        });

        Schema::table('pembebasan_pajaks', function (Blueprint $table) {
            $table->foreign('id_instansi')->references('id')->on('instansis');

        });

        Schema::table('ngos', function (Blueprint $table) {
            $table->foreign('id_instansi')->references('id')->on('instansis');

        });

        Schema::table('rkt_mitra_lokals', function (Blueprint $table) {
            $table->foreign('id_rkt')->references('id')->on('rkts');
            $table->foreign('id_instansi')->references('id')->on('instansis');

        });

        Schema::table('users', function (Blueprint $table) {
            $table->foreign('id_instansi')->references('id')->on('instansis');

        });

        Schema::table('rkts', function (Blueprint $table) {
            $table->foreign('id_ngo')->references('id')->on('instansis');

        });

        Schema::table('master_programs', function (Blueprint $table) {
            $table->foreign('id_instansi')->references('id')->on('instansis');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

}

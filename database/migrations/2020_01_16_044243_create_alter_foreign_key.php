<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlterForeignKey extends Migration
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

        Schema::table('rkt_sasarans', function (Blueprint $table) {
            $table->foreign('id_rkt')->references('id')->on('rkts');
            $table->foreign('id_sasaran')->references('id')->on('sasarans');
            
        });

        Schema::table('mata_uangs', function (Blueprint $table) {
            $table->foreign('id_instansi')->references('id')->on('instansis');
            
        });

        Schema::table('master_kegiatans', function (Blueprint $table) {
            $table->foreign('instansi_id')->references('id')->on('instansis');
            
        });

        Schema::table('report_kegiatans', function (Blueprint $table) {
            $table->foreign('kegiatan_id')->references('id')->on('master_kegiatans');
            $table->foreign('report_id')->references('id')->on('reports');
        });

        Schema::table('guest_books', function (Blueprint $table) {
            $table->foreign('id_tenaga')->references('id')->on('master_tenaga_asings');
            $table->foreign('tujuan_id')->references('id')->on('tujuans');
            $table->foreign('kegiatan_id')->references('id')->on('master_kegiatans');
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

        Schema::table('rkt_kegiatans', function (Blueprint $table) {
            $table->foreign('id_rkt')->references('id')->on('rkts');
            $table->foreign('id_kegiatan')->references('id')->on('master_kegiatans');
        });

        Schema::table('rkt_lokasis', function (Blueprint $table) {
            $table->foreign('id_rkt')->references('id')->on('rkts');
            $table->foreign('id_lokasi')->references('id')->on('master_kotas');
        });

        Schema::table('rkt_tujuans', function (Blueprint $table) {
            $table->foreign('id_rkt')->references('id')->on('rkts');
            $table->foreign('id_tujuan')->references('id')->on('tujuans');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
  
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRktTenagaasingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rkt_tenagaasings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreign('id_rkt')->references('id')->on('rkts');
            $table->foreign('id_tenagaasing')->references('id')->on('master_tenaga_asings');
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
        Schema::dropIfExists('rkt_tenagaasings');
    }
}

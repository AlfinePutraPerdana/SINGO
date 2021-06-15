<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMataUangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mata_uangs', function (Blueprint $table) {
            $table->bigIncrements('id');
            
        $table->string('name');
        $table->unsignedBigInteger('id_instansi')->nullable();
        // $table->foreign('id_instansi')->references('id')->on('instansis');
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
        Schema::dropIfExists('mata_uangs');
    }
}

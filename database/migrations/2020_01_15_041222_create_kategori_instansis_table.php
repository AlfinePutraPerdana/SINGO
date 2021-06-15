<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKategoriInstansisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategori_instansis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
        });

        DB::table('kategori_instansis')->insert(
            array(
                'id' => 1,
                'name' => 'NGO'
            )
        );

        DB::table('kategori_instansis')->insert(
            array(
                'id' => 2,
                'name' => 'Mitra lokal'
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kategori_instansis');
    }
}

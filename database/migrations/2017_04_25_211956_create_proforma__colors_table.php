<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProformaColorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proforma__colores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cantidad');
            $table->integer('numero');
            $table->integer('id_proforma')->unsigned();
            $table->integer('id_color')->unsigned();
            $table->timestamps();

            $table->foreign('id_proforma')->references('id')->on('proformas');
            $table->foreign('id_color')->references('id')->on('colores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proforma__colores');
    }
}

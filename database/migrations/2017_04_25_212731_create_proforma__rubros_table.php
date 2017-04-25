<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProformaRubrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proforma__rubros', function (Blueprint $table) {
            $table->increments('id');
            $table->double('costo');
            $table->double('volumen');
            $table->integer('numero');
            $table->integer('pag_unit');
            $table->integer('id_rubro')->unsigned();
            $table->integer('id_proforma')->unsigned();
            $table->timestamps();


            $table->foreign('id_rubro')->references('id')->on('rubros');
            $table->foreign('id_proforma')->references('id')->on('proformas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proforma__rubros');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProformasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proformas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('num_pag');
            $table->string('solicitante', 100);
            $table->integer('caras');
            $table->integer('volumen');
            $table->double('subtotal');
            $table->double('gastos');
            $table->double('costo_total');
            $table->double('utilidad_bruta');
            $table->double('valor_venta');
            $table->double('precio_venta');
            $table->double('descuento');
            $table->double('iva');
            $table->double('fecha');
            $table->enum('tipo',['hecha','completada']);
            $table->enum('estado',['activo','inactivo']);
            $table->integer('id_producto')->unsigned();
            $table->integer('id_formato')->unsigned();
            $table->integer('id_cliente')->unsigned();
            $table->integer('id_usuario')->unsigned();
            $table->timestamps();

            $table->foreign('id_producto')->references('id')->on('productos');
            $table->foreign('id_formato')->references('id')->on('formatos');
            $table->foreign('id_cliente')->references('id')->on('clientes');
            $table->foreign('id_usuario')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proformas');
    }
}

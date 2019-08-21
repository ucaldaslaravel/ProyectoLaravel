<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->bigIncrements('id_venta');
            $table->date('fecha_venta')->default(date('Y-m-d'));
            $table->integer('total_credito')->default(0);
            $table->integer('total_contado')->default(0);
            $table->bigInteger('id_cliente');
            $table->bigInteger('id_vendedor');
            $table->foreign('id_vendedor')->references('id')->on('personal')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_cliente')->references('id_cliente')->on('clientes')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('ventas');
    }
}

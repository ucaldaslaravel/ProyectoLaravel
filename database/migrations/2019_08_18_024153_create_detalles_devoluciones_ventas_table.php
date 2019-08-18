<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallesDevolucionesVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles_devoluciones_ventas', function (Blueprint $table) {
            $table->bigIncrements('id_detalle_devolucion_venta');
            $table->integer('id_devolucion_venta');
            $table->integer('id_producto');
            $table->integer('cantidad')->default(0);
            $table->foreign('id_devolucion_venta')->references('id_devolucion_venta')->on('devoluciones_ventas')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('detalles_devoluciones_ventas');
    }
}

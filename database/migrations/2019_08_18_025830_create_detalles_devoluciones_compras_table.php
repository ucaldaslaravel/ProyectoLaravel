<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallesDevolucionesComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles_devoluciones_compras', function (Blueprint $table) {
            $table->bigIncrements('id_detalle_devolucion_compra');
            $table->integer('id_devolucion_compra');
            $table->integer('id_producto');
            $table->integer('cantidad')->default(0);
            $table->foreign('id_devolucion_compra')->references('id_devolucion_compra')->on('devoluciones_compras')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('detalles_devoluciones_compras');
    }
}

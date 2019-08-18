<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallesComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles_compras', function (Blueprint $table) {
            $table->bigIncrements('id_detalle_compra');
            $table->integer('cantidad_pedida')->default(0);
            $table->integer('cantidad_recibida')->default(0);
            $table->integer('valor_producto')->default(0);
            $table->integer('iva')->default(0);
            $table->integer('id_compra');
            $table->integer('id_producto');
            $table->foreign('id_compra')->references('id_compra')->on('compras')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_producto')->references('id_producto')->on('productos')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('detalles_compras');
    }
}

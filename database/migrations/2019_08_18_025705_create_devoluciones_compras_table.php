<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevolucionesComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devoluciones_compras', function (Blueprint $table) {
            $table->bigIncrements('id_devolucion_compra');
            $table->integer('id_compra');
            $table->date('fecha_devolucion');
            $table->foreign('id_compra')->references('id_compra')->on('compras')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('devoluciones_compras');
    }
}

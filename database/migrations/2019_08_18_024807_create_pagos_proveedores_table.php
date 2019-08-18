<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagosProveedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos_proveedores', function (Blueprint $table) {
            $table->bigIncrements('id_pago_proveedor');
            $table->string('id_proveedor');
            $table->integer('valor_pago');
            $table->date('fecha_pago');
            $table->foreign('id_proveedor')->references('id_proveedor')->on('proveedores')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('pagos_proveedores');
    }
}

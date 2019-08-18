<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBajasProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bajas_productos', function (Blueprint $table) {
            $table->bigIncrements('id_baja_producto');
            $table->string('tipo_baja');
            $table->date('fecha');
            $table->decimal('cantidad')->default(0);
            $table->integer('precio')->default(0);
            $table->integer('id_producto');
           
            $table->foreign('id_producto')->references('id_producto')->on('productos');
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
        Schema::dropIfExists('bajas_productos');
    }
}

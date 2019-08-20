<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id_producto');
            $table->string('nombre');
            $table->decimal('precio')->default(0);
            $table->decimal('iva')->default(0.0);
            $table->integer('cantidad_disponible')->default(0);
            $table->integer('cantidad_minima')->default(1);
            $table->integer('cantidad_maxima')->default(1);
            $table->bigInteger('id_presentacion_producto');
            $table->bigInteger('id_categoria_producto');
           
            $table->foreign('id_presentacion_producto')->references('id_presentacion_producto')->on('presentaciones_productos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_categoria_producto')->references('id_categoria_producto')->on('categorias_productos')->onDelete('cascade')->onUpdate('cascade');


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
        Schema::dropIfExists('productos');
    }
}

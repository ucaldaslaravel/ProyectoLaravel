<?php

use Illuminate\Database\Seeder;
use App\PresentacionesProductos;

class PresentacionesProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        PresentacionesProductos::truncate();

        PresentacionesProductos::create([
            'descripcion' => 'Bolsa x 1000 cc'
        ]);

        PresentacionesProductos::create([
            'descripcion' => 'Bolsa x 12 unidades'
        ]);



        PresentacionesProductos::create([
            'descripcion' => 'Bolsa x 500 gramos'
        ]);



        PresentacionesProductos::create([
            'descripcion' => 'Bolsa x 1 kg'
        ]);



        PresentacionesProductos::create([
            'descripcion' => 'Botella no retornable x 2.5 lt.'
        ]);



        PresentacionesProductos::create([
            'descripcion' => 'Botella no retornable x 1 lt.'
        ]);



        PresentacionesProductos::create([
            'descripcion' => 'Botella no retornable x 600 ml.'
        ]);



        PresentacionesProductos::create([
            'descripcion' => 'Bolsa x 5 kg. aprox.'
        ]);



        PresentacionesProductos::create([
            'descripcion' => 'Unidad'
        ]);



        PresentacionesProductos::create([
            'descripcion' => 'Caja x 250 gramos'
        ]);



        PresentacionesProductos::create([
            'descripcion' => 'Caja x 500 gramos'
        ]);



        PresentacionesProductos::create([
            'descripcion' => 'Paquete x 3 Unidades'
        ]);



        PresentacionesProductos::create([
            'descripcion' => 'Caja'
        ]);
    }
}

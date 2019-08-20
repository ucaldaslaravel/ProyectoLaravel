<?php

use Illuminate\Database\Seeder;
use App\CategoriasProductos;

class CategoriasProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoriasProductos::truncate();

        CategoriasProductos::create([
            'nombre' => 'Lacteos'
        ]);



        CategoriasProductos::create([
            'nombre' => 'Cárnicos'
        ]);



        CategoriasProductos::create([
            'nombre' => 'Frutas'
        ]);



        CategoriasProductos::create([
            'nombre' => 'Verduras'
        ]);



        CategoriasProductos::create([
            'nombre' => 'Cereales'
        ]);



        CategoriasProductos::create([
            'nombre' => 'Aseo personal'
        ]);



        CategoriasProductos::create([
            'nombre' => 'Aseo del hogar'
        ]);



        CategoriasProductos::create([
            'nombre' => 'Condimentos'
        ]);



        CategoriasProductos::create([
            'nombre' => 'Bebidas'
        ]);



        CategoriasProductos::create([
            'nombre' => 'Licores'
        ]);
    }
}

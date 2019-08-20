<?php

use Illuminate\Database\Seeder;
use App\Proveedores;

class ProveedoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Proveedores::truncate();

        Proveedores::create([

            'nombre' => 'Distribuidora Donde Pancho',
            'telefono' => '7852212',
            'correo' => 'dondepancho@gmail.com'
        ]);



        Proveedores::create([

            'nombre' => 'Distribuidora Nuevo Sol',
            'telefono' => '7852546',
            'correo' => 'nuevosol@gmail.com'
        ]);



        Proveedores::create([

            'nombre' => 'Lacteos Doña Vaca',
            'telefono' => '7852345',
            'correo' => 'vaca12@gmail.com'
        ]);



        Proveedores::create([

            'nombre' => 'Granos La Cosecha',
            'telefono' => '7852897',
            'correo' => 'cose@gmail.com'
        ]);



        Proveedores::create([

            'nombre' => 'Embutidos Don Chorizo',
            'telefono' => '7652431',
            'correo' => 'donchorizo@gmail.com'
        ]);



        Proveedores::create([

            'nombre' => 'Fruteria Su Media Naranja',
            'telefono' => '7552431',
            'correo' => 'mimedianaranja@gmail.com'
        ]);



        Proveedores::create([

            'nombre' => 'Productos y Productos SA',
            'telefono' => '7752431',
            'correo' => 'elproducto@gmail.com'
        ]);



        Proveedores::create([

            'nombre' => 'Distribuidora ComaRico',
            'telefono' => '7152431',
            'correo' => 'comaricobien@gmail.com'
        ]);



        Proveedores::create([

            'nombre' => 'Jader Raúl Gomez',
            'telefono' => '8783400',
            'correo' => 'jadergomez@gmail.com'
        ]);



        Proveedores::create([

            'nombre' => 'Juan Carmona',
            'telefono' => '8926241',
            'correo' => 'juancarmona@gmail.com'
        ]);



        Proveedores::create([

            'nombre' => 'Juan Diego Castaño',
            'telefono' => '8451201',
            'correo' => 'diegocastño@gmail.com'
        ]);



        Proveedores::create([

            'nombre' => 'Juliana Reyes',
            'telefono' => '8120167',
            'correo' => 'julianareyes@gmail.com'
        ]);



        Proveedores::create([

            'nombre' => 'Andres Calamaro',
            'telefono' => '8791203',
            'correo' => 'andrescalamaro@gmail.com'
        ]);



        Proveedores::create([

            'nombre' => 'Jaime Soto',
            'telefono' => '8916060',
            'correo' => 'jaimesoto@gmail.com'
        ]);
    }
}

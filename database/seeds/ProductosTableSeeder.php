<?php

use Illuminate\Database\Seeder;
use App\Productos;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Productos::truncate();

        Productos::create([
            'nombre' => 'Leche Colanta',
            'precio' => 2000,
            'imagen' => 'lechecolanta.jpg',
            'cantidad_disponible' => 19,
            'cantidad_minima' => 3,
            'cantidad_maxima' => 20,
            'id_presentacion_producto' => 1,
            'id_categoria_producto' => 1
        ]);



        Productos::create([
            'nombre' => 'Lecha entera Celema',
            'precio' => 1900,
            'imagen' => 'lechecelema.jpg',
            'cantidad_disponible' => 150,
            'cantidad_minima' => 2,
            'cantidad_maxima' => 15,
            'id_presentacion_producto' => 1,
            'id_categoria_producto' => 1
        ]);



        Productos::create([
            'nombre' => 'Mandarinas',
            'precio' => 3000,
            'imagen' => 'mandarina.jpg',
            'cantidad_disponible' => 90,
            'cantidad_minima' => 3,
            'cantidad_maxima' => 10,
            'id_presentacion_producto' => 2,
            'id_categoria_producto' => 3
        ]);



        Productos::create([
            'nombre' => 'Lentejas',
            'precio' => 1000,
            'imagen' => 'lentejas.jpg',
            'cantidad_disponible' => 15,
            'cantidad_minima' => 5,
            'cantidad_maxima' => 30,
            'id_presentacion_producto' => 3,
            'id_categoria_producto' => 5
        ]);



        Productos::create([
            'nombre' => 'Arroz Doña Pepa',
            'precio' => 1200,
            'imagen' => 'arrozpepa.png',
            'cantidad_disponible' => 80,
            'cantidad_minima' => 5,
            'cantidad_maxima' => 25,
            'id_presentacion_producto' => 3,
            'id_categoria_producto' => 5
        ]);



        Productos::create([
            'nombre' => 'Maíz trillado',
            'precio' => 900,
            'imagen' => 'maiztrillado.jpg',
            'cantidad_disponible' => 69,
            'cantidad_minima' => 3,
            'cantidad_maxima' => 10,
            'id_presentacion_producto' => 4,
            'id_categoria_producto' => 5
        ]);



        Productos::create([
            'nombre' => 'Lechuga',
            'precio' => 1500,
            'imagen' => 'lechuga.png',
            'cantidad_disponible' => 79,
            'cantidad_minima' => 3,
            'cantidad_maxima' => 10,
            'id_presentacion_producto' => 3,
            'id_categoria_producto' => 4
        ]);



        Productos::create([
            'nombre' => 'Kiwi',
            'precio' => 2000,
            'imagen' => 'kiwi.png',
            'cantidad_disponible' => 39,
            'cantidad_minima' => 2,
            'cantidad_maxima' => 9,
            'id_presentacion_producto' => 12,
            'id_categoria_producto' => 3
        ]);



        Productos::create([
            'nombre' => 'Maracuya',
            'precio' => 3000,
            'imagen' => 'maracuya.jpg',
            'cantidad_disponible' => 180,
            'cantidad_minima' => 3,
            'cantidad_maxima' => 10,
            'id_presentacion_producto' => 12,
            'id_categoria_producto' => 3
        ]);



        Productos::create([
            'nombre' => 'Cereal Madagascar',
            'precio' => 3000,
            'imagen' => 'cerealmadagascar.png',
            'cantidad_disponible' => 90,
            'cantidad_minima' => 3,
            'cantidad_maxima' => 10,
            'id_presentacion_producto' => 3,
            'id_categoria_producto' => 5
        ]);



        Productos::create([
            'nombre' => 'Cafe Monumental',
            'imagen' => 'cafe.jpg',
            'precio' => 4500,
            'cantidad_disponible' => 29,
            'cantidad_minima' => 5,
            'cantidad_maxima' => 10,
            'id_presentacion_producto' => 3,
            'id_categoria_producto' => 4
        ]);



        Productos::create([
            'nombre' => 'Mantequilla Colanta',
            'precio' => 3800,
            'imagen' => 'mantequillacolanta.png',
            'cantidad_disponible' => 55,
            'cantidad_minima' => 3,
            'cantidad_maxima' => 10,
            'id_presentacion_producto' => 9,
            'id_categoria_producto' => 4
        ]);



        Productos::create([
            'nombre' => 'Jabon Ariel',
            'precio' => 7800,
            'imagen' => 'jabonariel.png',
            'cantidad_disponible' => 210,
            'cantidad_minima' => 3,
            'cantidad_maxima' => 15,
            'id_presentacion_producto' => 4,
            'id_categoria_producto' => 7
        ]);



        Productos::create([
            'nombre' => 'Manzanas',
            'precio' => 4500,
            'imagen' => 'manzanas.png',
            'cantidad_disponible' => 39,
            'cantidad_minima' => 3,
            'cantidad_maxima' => 15,
            'id_presentacion_producto' => 12,
            'id_categoria_producto' => 3
        ]);



        Productos::create([
            'nombre' => 'Arroz Diana',
            'precio' => 1500,
            'imagen' => 'arrozdiana.jpg',
            'cantidad_disponible' => 70,
            'cantidad_minima' => 10,
            'cantidad_maxima' => 30,
            'id_presentacion_producto' => 3,
            'id_categoria_producto' => 5
        ]);



        Productos::create([
            'nombre' => 'Frijol del Costal',
            'precio' => 1500,
            'imagen' => 'frijolcostal.png',
            'cantidad_disponible' => 29,
            'cantidad_minima' => 5,
            'cantidad_maxima' => 20,
            'id_presentacion_producto' => 3,
            'id_categoria_producto' => 5
        ]);



        Productos::create([
            'nombre' => 'Mantequilla don Oleo',
            'precio' => 3500,
            'imagen' => 'mantequillaoleo.jpg',
            'cantidad_disponible' => 50,
            'cantidad_minima' => 10,
            'cantidad_maxima' => 20,
            'id_presentacion_producto' => 9,
            'id_categoria_producto' => 4
        ]);



        Productos::create([
            'nombre' => 'Crema de leche Colanta',
            'precio' => 2200,
            'imagen' => 'cremalechecol.png',
            'cantidad_disponible' => 19,
            'cantidad_minima' => 10,
            'cantidad_maxima' => 40,
            'id_presentacion_producto' => 3,
            'id_categoria_producto' => 1
        ]);



        Productos::create([
            'nombre' => 'Jabon en polvo Josefina',
            'precio' => 4000,
            'imagen' => 'jabonpolvo.jpg',
            'cantidad_disponible' => 30,
            'cantidad_minima' => 5,
            'cantidad_maxima' => 20,
            'id_presentacion_producto' => 4,
            'id_categoria_producto' => 7
        ]);



        Productos::create([
            'nombre' => 'Crema dental Colgate',
            'precio' => 1800,
            'imagen' => 'colgate.jpg',
            'cantidad_disponible' => 19,
            'cantidad_minima' => 10,
            'cantidad_maxima' => 20,
            'id_presentacion_producto' => 9,
            'id_categoria_producto' => 6
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Clientes;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Clientes::truncate();

        Clientes::create([

            'nombre' => 'Juan José Hernández Hernández',
            'telefonos' => '8760001',
            'direccion' => 'Calle 10 # 11-11',
            'con_credito' => true
        ]);



        Clientes::create([

            'nombre' => 'Miguel Angel García García',
            'telefonos' => '8760002',
            'direccion' => 'Calle 11 # 11-12',
            'con_credito' => true
        ]);



        Clientes::create([

            'nombre' => 'Juan Sebastián García García',
            'telefonos' => '8760003',
            'direccion' => 'Calle 12 # 11-13',
            'con_credito' => true
        ]);



        Clientes::create([

            'nombre' => 'Juan David García Hernández',
            'telefonos' => '8760004',
            'direccion' => 'Calle 13 # 11-14',
            'con_credito' => false
        ]);



        Clientes::create([

            'nombre' => 'Samuel David García García',
            'telefonos' => '8760005',
            'direccion' => 'Calle 13 # 12-14',
            'con_credito' => false
        ]);



        Clientes::create([

            'nombre' => 'Juan Pablo García García',
            'telefonos' => '8760006',
            'direccion' => 'Calle 13 # 12-15',
            'con_credito' => false
        ]);



        Clientes::create([

            'nombre' => 'Andrés Felipe García Martínez',
            'telefonos' => '8760007',
            'direccion' => 'Calle 10 # 12-15',
            'con_credito' => true
        ]);



        Clientes::create([

            'nombre' => 'Juan Esteban Hernández Hernández',
            'telefonos' => '8760008',
            'direccion' => 'Calle 12 # 11-15',
            'con_credito' => false
        ]);



        Clientes::create([

            'nombre' => 'Juan Diego Flores García',
            'telefonos' => '8760009',
            'direccion' => 'Calle 10 # 11-15',
            'con_credito' => false
        ]);



        Clientes::create([

            'nombre' => 'Angel David García Hernández',
            'telefonos' => '8760010',
            'direccion' => 'Calle 9 # 11-15',
            'con_credito' => false
        ]);



        Clientes::create([

            'nombre' => 'Francisco Diaz Diaz',
            'telefonos' => '8530000',
            'direccion' => 'Cra. 4 #18-32',
            'con_credito' => true
        ]);



        Clientes::create([

            'nombre' => 'Luciana Garcia Jimenez',
            'telefonos' => '8534523',
            'direccion' => 'Cra. 1#13-18',
            'con_credito' => true
        ]);



        Clientes::create([

            'nombre' => 'Sofia Lopez Trejos',
            'telefonos' => '8532310',
            'direccion' => 'Cra. 5 #16-52',
            'con_credito' => true
        ]);



        Clientes::create([

            'nombre' => 'Melissa Mesa Marin',
            'telefonos' => '8538975',
            'direccion' => 'Cra. 7 #20-25',
            'con_credito' => true
        ]);



        Clientes::create([

            'nombre' => 'Nicole Torres Marin',
            'telefonos' => '8539632',
            'direccion' => 'Cra. 6 #18-41',
            'con_credito' => true
        ]);



        Clientes::create([

            'nombre' => 'Sol Carvajal Mejia',
            'telefonos' => '8530000',
            'direccion' => 'Cra.1 #13-20',
            'con_credito' => true
        ]);
    }
}

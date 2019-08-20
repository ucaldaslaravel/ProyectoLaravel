<?php

use Illuminate\Database\Seeder;
use App\Personal;

class PersonalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Personal::truncate();

        Personal::create([

            'nombre' => 'Jorge Pérez',
            'telefono' => '8530001',
            'direccion' => 'Cra.3#10-34',
            'perfil' => 'Administrador',
            'password' => 123
        ]);



        Personal::create([

            'nombre' => 'Valeria Mejia Zapata',
            'telefono' => '8536345',
            'direccion' => 'Cra.5#19-37',
            'perfil' => 'Vendedor',
            'password' => 123
        ]);



        Personal::create([

            'nombre' => 'Juan Bermudez Duque',
            'telefono' => '8531235',
            'direccion' => 'Cra.1#11-23',
            'perfil' => 'Vendedor',
            'password' => 123
        ]);



        Personal::create([

            'nombre' => 'Carlos Franco',
            'telefono' => '3237059840',
            'direccion' => 'Calle 15 #30-17',
            'perfil' => 'Administrador',
            'password' => 123
        ]);



        Personal::create([

            'nombre' => 'Edgar Velez',
            'telefono' => '3157059840',
            'direccion' => 'Calle 25 #32-17',
            'perfil' => 'Vendedor',
            'password' => 123
        ]);



        Personal::create([

            'nombre' => 'Cristian Aristi',
            'telefono' => '3183059840',
            'direccion' => 'Calle 95 #90-17',
            'perfil' => 'Vendedor',
            'password' => 123
        ]);



        Personal::create([

            'nombre' => 'Jose Londoño',
            'telefono' => '3111059840',
            'direccion' => 'Calle 65 #10-27',
            'perfil' => 'Vendedor',
            'password' => 123
        ]);



        Personal::create([

            'nombre' => 'Juan Duran',
            'telefono' => '3104059840',
            'direccion' => 'Calle 65 #50-57',
            'perfil' => 'Vendedor',
            'password' => 123
        ]);



        Personal::create([

            'nombre' => 'Maria Gomez',
            'telefono' => '3110059840',
            'direccion' => 'Calle 65 #30-10',
            'perfil' => 'Vendedor',
            'password' => 123
        ]);



        Personal::create([

            'nombre' => 'Liliana Franco',
            'telefono' => '3112059840',
            'direccion' => 'Calle 65 #30-40',
            'perfil' => 'Administrador',
            'password' => 123
        ]);



        Personal::create([

            'nombre' => 'Ana Solarte',
            'telefono' => '3135459840',
            'direccion' => 'Calle 65 #12-11',
            'perfil' => 'Vendedor',
            'password' => 123
        ]);



        Personal::create([

            'nombre' => 'Josefa Franco',
            'telefono' => '3106059840',
            'direccion' => 'Calle 65 #20-17',
            'perfil' => 'Vendedor',
            'password' => 123
        ]);



        Personal::create([

            'nombre' => 'Jenny Franco',
            'telefono' => '3114059840',
            'direccion' => 'Calle 65 #10-17',
            'perfil' => 'Administrador',
            'password' => 123
        ]);
    }
}

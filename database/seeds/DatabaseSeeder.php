<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PersonalTableSeeder::class,
            ClientesTableSeeder::class,
            CategoriasProductosTableSeeder::class,
            PresentacionesProductosTableSeeder::class,
            ProductosTableSeeder::class,
            ProveedoresTableSeeder::class,
        ]);
    }
}

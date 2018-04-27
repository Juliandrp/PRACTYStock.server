<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(RolSeeder::class);
        $this->call(BodegaSeeder::class);
        $this->call(ProductosSeeder::class);
        $this->call(MarcaSeeder::class);
        $this->call(ModeloSeeder::class);
        $this->call(CompradorSeeder::class);
        $this->call(VentaSeeder::class);
        // $this->call(UsersTableSeeder::class);
    }
}

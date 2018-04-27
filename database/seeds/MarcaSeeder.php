<?php

use Illuminate\Database\Seeder;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $marcas = [
            '0' => [
                'nombre' => 'Samsung'
            ],
            '1' => [
                'nombre' => 'Alcatel' 
            ],   
            '2' => [
                'nombre' => 'Avvio'
            ],
            '3' => [
                'nombre' => 'Huawei'
            ],
            '4' => [
                'nombre' => 'LG'
            ],
            '5' => [
                'nombre' => 'Motorola'
            ]     
        ];
        DB::table('marcas')->insert($marcas);
    }
}

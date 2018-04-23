<?php

use Illuminate\Database\Seeder;

class BodegaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $bodegas = [
            '0' => [
                'nombre' => 'La 14 de Calima',
                'direccion' => 'Cll 70 # 1A - 788',
                'user_id' => 1
            ],
            '1' => [
                'nombre' => 'CC Chipichape',
                'direccion' => 'Av 6N # 37 - 455',
                'user_id' => 1
            ],
            '2' => [
                'nombre' => 'Drogas la rebaja cetro',
                'direccion' => 'Cll 15 # 21 - 45',
                'user_id' => 1
            ]
        ];
        DB::table('bodegas')->insert($bodegas);
    }
}

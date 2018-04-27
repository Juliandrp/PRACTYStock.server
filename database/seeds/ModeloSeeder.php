<?php

use Illuminate\Database\Seeder;

class ModeloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $modelos = [
            '0' => [
                'desc' => 'Galaxy S7',
                'precio' => 699999
            ],
            '1' => [
                'desc' => 'J7 Plus',
                'precio' => 780000
            ],
            '2' => [
                'desc' => 'Idol 4',
                'precio' => 800000
            ],
            '3' => [
                'desc' => 'U3',
                'precio' => 589000
            ],
            '4' => [
                'desc' => '776',
                'precio' => 470000
            ],
            '5' => [
                'desc' => 'A300',
                'precio' => 650000
            ],
            '6' => [
                'desc' => 'CAM Y6 II',
                'precio' => 894561
            ],
            '7' => [
                'desc' => 'K 10',
                'precio' => 845212
            ],
            '8' => [
                'desc' => 'Moto C',
                'precio' => 693000
            ]
        ];
        DB::table('modelos')->insert($modelos);
    }
}

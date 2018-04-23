<?php

use Illuminate\Database\Seeder;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $productos = [
            '0' => [
                'marca' => 'Samsung',
                'nodelo' => 'J7',
                'imei' => '986516546887654',
                'iccid' => '6584984951321',
                'msisdn' => '65498625136546',
                'niu' => '5569868464',
                'estado' => 3, //Vendido
                'bodega_id' => 1
            ],
            '1' => [
                'marca' => 'Samsung',
                'nodelo' => 'J7 Plus',
                'imei' => '995465495589849',
                'iccid' => '6584984951321',
                'msisdn' => '65498625136546',
                'niu' => '5569868464',
                'estado' => 3, //Vendido
                'bodega_id' => 1
            ],
        ];
    }
}

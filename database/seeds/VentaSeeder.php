<?php

use Illuminate\Database\Seeder;

class VentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $ventas = [
            '0' => [
                'numero_factura' => 13254650,
                'precio_factura' => 750000,
                'bodega_id' => 1,
                'comprador_id' => 2,
                'producto_id' => 1,
                'user_id' => 3
            ],
            '1' => [
                'numero_factura' => 65498494,
                'precio_factura' => 650000,
                'bodega_id' => 1,
                'comprador_id' => 1,
                'producto_id' => 2,
                'user_id' => 3
            ],
            '2' => [
                'numero_factura' => 84654658,
                'precio_factura' => 580000,
                'bodega_id' => 2,
                'comprador_id' => 1,
                'producto_id' => 3,
                'user_id' => 2
            ],
            '3' => [
                'numero_factura' => 48651686,
                'precio_factura' => 690000,
                'bodega_id' => 2,
                'comprador_id' => 3,
                'producto_id' => 4,
                'user_id' => 2
            ],
            '4' => [
                'numero_factura' => 10561485,
                'precio_factura' => 680000,
                'bodega_id' => 3,
                'comprador_id' => 3,
                'producto_id' => 5,
                'user_id' => 1
            ],
            '5' => [
                'numero_factura' => 78946548,
                'precio_factura' => 794000,
                'bodega_id' => 3,
                'comprador_id' => 2,
                'producto_id' => 6,
                'user_id' => 1
            ]
        ];
        DB::table('ventas')->insert($ventas);
    }
}

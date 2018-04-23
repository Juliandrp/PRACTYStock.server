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
                'modelo' => 'J7',
                'imei' => '255242837793211',
                'iccid' => '193520394839460',
                'msisdn' => '65498625136546',
                'niu' => '429752292462324',
                'estado' => 3, //En Bodega
                'bodega_id' => 1
            ],
            '1' => [
                'marca' => 'Samsung',
                'modelo' => 'J7 Plus',
                'imei' => '995465495589849',
                'iccid' => '213859250974109',
                'msisdn' => '638458631894799',
                'niu' => '992005204708127',
                'estado' => 3, //En Bodega
                'bodega_id' => 1
            ],
            '2' => [
                'marca' => 'Alcatel',
                'modelo' => 'Idol',
                'imei' => '324654651651654',
                'iccid' => '696658867421439',
                'msisdn' => '485799281881660',
                'niu' => '921878080520171',
                'estado' => 3, //En Bodega
                'bodega_id' => 1
            ],
            '3' => [
                'marca' => 'Alcatel',
                'modelo' => 'U3',
                'imei' => '654136511265446',
                'iccid' => '597167253772586',
                'msisdn' => '496776419848894',
                'niu' => '473813809647712',
                'estado' => 3, //En Bodega
                'bodega_id' => 2
            ],
            '4' => [
                'marca' => 'Avvio',
                'modelo' => '776',
                'imei' => '321651651654668',
                'iccid' => '631117045148505',
                'msisdn' => '748084043682042',
                'niu' => '215623612044057',
                'estado' => 3, //En Bodega
                'bodega_id' => 2
            ],
            '5' => [
                'marca' => 'Avvio',
                'modelo' => 'A300',
                'imei' => '786516546887654',
                'iccid' => '416258455350325',
                'msisdn' => '205414809348134',
                'niu' => '946214088563056',
                'estado' => 3, //Vendido
                'bodega_id' => 2
            ],
            '6' => [
                'marca' => 'Huawei',
                'modelo' => 'CAM Y6 II',
                'imei' => '348804414603800',
                'iccid' => '921101797683588',
                'msisdn' => '728874223727998',
                'niu' => '571582834285039',
                'estado' => 3, //Vendido
                'bodega_id' => 3
            ],
            '7' => [
                'marca' => 'LG',
                'modelo' => 'K 10',
                'imei' => '123541458006414',
                'iccid' => '332266791553928',
                'msisdn' => '416542331121761',
                'niu' => '342484594738795',
                'estado' => 3, //Vendido
                'bodega_id' => 3
            ],
            '8' => [
                'marca' => 'Motorola',
                'modelo' => 'Moto C',
                'imei' => '338212038568971',
                'iccid' => '577555469909215',
                'msisdn' => '561182891837012',
                'niu' => '306226439925796',
                'estado' => 3, //Vendido
                'bodega_id' => 3
            ]
        ];

        DB::table('productos')->insert($productos);
    }
}

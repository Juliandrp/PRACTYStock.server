<?php

use Illuminate\Database\Seeder;

class CompradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $compradores = [
            '0' => [
                'cedula' => 1234567890,
                'nombre_completo' => 'Juan Camilo Rodriguez',
                'telefono' => '3586546',
                'email' => 'jan@gmail.com',
                'direccion' => 'Cra 45 # 45 - 44',
                'barrio' => 'Chipichape',
                'ciudad' => 'Cali',
                'departamento' => 'Valle del Cauca'
            ],
            '1' => [
                'cedula' => 987654321,
                'nombre_completo' => 'Jhony Aasdnlaf',
                'telefono' => '3586546',
                'email' => 'jan@gmail.com',
                'direccion' => 'Cra 45 # 45 - 44',
                'barrio' => 'La Flora',
                'ciudad' => 'Cali',
                'departamento' => 'Valle del Cauca'
            ],
            '2' => [
                'cedula' => 135790246,
                'nombre_completo' => 'Ana Marìa Ramirez',
                'telefono' => '3586546',
                'email' => 'ana@gmaicom',
                'direccion' => 'Cra 78 # 55A - 70',
                'barrio' => 'San Luis',
                'ciudad' => 'Cali',
                'departamento' => 'Valle del Cauca'
            ]
        ];

        DB::table('compradors')->insert($compradores);
    }
}

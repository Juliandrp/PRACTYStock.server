<?php

use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $roles = [
            '0' => [
                'desc' => 'Supervisor'
            ],
            '1' => [
                'desc' => 'Vendedor'
            ]
            ];
        DB::table('rols')->insert($roles);
    }
}

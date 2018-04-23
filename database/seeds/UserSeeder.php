<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = [
            '0' => [
                'cedula' => 106180769,
                'nombre_completo' =>'Victor Manuel Arenas Lopez',
                'email' => 'victormalsx@gmail.com',
                'password' => bcrypt('1234567'),
                'rol_id' => 2
            ],
            '1' => [
                'cedula' => 321654789,
                'nombre_completo' =>'Jhoan Sebastian Bocanegra',
                'email' => 'jhoan@gmail.com',
                'password' => bcrypt('1234567'),
                'rol_id' => 2
            ],
            '2' => [
                'cedula' => 654321987,
                'nombre_completo' =>'Beyman Mcgregor Lopez',
                'email' => 'beyman@gmail.com',
                'password' => bcrypt('1234567'),
                'rol_id' => 2
            ],
            '3' => [
                'cedula' => 843157953,
                'nombre_completo' =>'Julian Rodriguez',
                'email' => 'juliandrp@gmail.com',
                'password' => bcrypt('1234567'),
                'rol_id' => 1
            ],
        ];
        DB::table('users')->insert($users);
    }
}

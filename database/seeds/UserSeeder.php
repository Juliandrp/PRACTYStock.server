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
            ]
        ];
        DB::table('users')->insert($users);
    }
}

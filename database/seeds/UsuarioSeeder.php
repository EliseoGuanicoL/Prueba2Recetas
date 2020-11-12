<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'       => 'Eliseo',
            'email'      => 'correo@correo.com',
            'password'   => Hash::make('12345678'),
            'url'        => 'http://www.cheo.com',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'name'       => 'Jose',
            'email'      => 'correosdemexico@correo.com',
            'password'   => Hash::make('12345678'),
            'url'        => 'http://www.holas.com',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

    }
}

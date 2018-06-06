<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            '0' => [
                'name' => 'Miguel Vasco Macamo',
                'username' => 'mvmmacamo',
                'email' => 'misaelvasco@gmail.com',
                'password' => Hash::make('123456'),
                'nivelacesso' => 'Administrador',
            ],
            '1' => [
                'name' => 'Leonardo Huo',
                'username' => 'leo',
                'email' => 'leo@gmail.com',
                'password' => Hash::make('123456'),
                'nivelacesso' => 'Normal',
            ],

            '2' => [
                'name' => 'Denilson Mavie',
                'username' => 'denilson',
                'email' => 'denilson@gmail.com',
                'password' => Hash::make('123456'),
                'nivelacesso' => 'Administrador',
            ]
            ,

            '3' => [
                'name' => 'Costa alberto Tangune',
                'username' => 'tangune',
                'email' => 'costaalbertotagune@gmail.com',
                'password' => Hash::make('123456'),
                'nivelacesso' => 'Normal',
            ],

            '4' => [
                'name' => 'Ercilio Marques',
                'username' => 'Mars',
                'email' => 'erciliomanhica@gmail.com',
                'password' => Hash::make('123456'),
                'nivelacesso' => 'Normal',
            ],

            '5' => [
                'name' => 'Jose Eugenio Seie',
                'username' => 'jose',
                'email' => 'joseseie@gmail.com',
                'password' => Hash::make('123456'),
                'nivelacesso' => 'Normal',
            ],

            '6' => [
                'name' => 'Claudio Raul Sumburane',
                'username' => 'sumburane',
                'email' => 'claudio@gmail.com',
                'password' => Hash::make('123456'),
                'nivelacesso' => 'Normal',
            ],

            '7' => [
                'name' => 'Herquiloide Hele',
                'username' => 'hele',
                'email' => 'hele@gmail.com',
                'password' => Hash::make('123456'),
                'nivelacesso' => 'Normal',
            ],

            '8' => [
                'name' => 'Ivan Bila',
                'username' => 'bila',
                'email' => 'ivanbila@gmail.com',
                'password' => Hash::make('123456'),
                'nivelacesso' => 'Normal',
            ],

            '9' => [
                'name' => 'Alfredo Sebastiao',
                'username' => 'alfredo',
                'email' => 'alfredo@gmail.com',
                'password' => Hash::make('123456'),
                'nivelacesso' => 'Normal',
            ]
        ]);
    }
}

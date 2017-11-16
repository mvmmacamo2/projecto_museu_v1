<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
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

        ]);



        DB::table('escolas')->insert([
            'nome' => 'Escola Secundaria de Laulane',
            'nivel' => 'Medio',
            'endereco' => 'Mahotas Perto da 14 esquadra',
            'nome_responsavel' => 'Ezilda',
            'contacto' => '845030902',
            'email' => 'laulane2@gmail.com',
            'senha' => Hash::make('123456'),

        ]);

    }
}

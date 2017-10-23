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
                'password' => '123456',
                'nivelacesso' => 'Administrador',
            ],
            '1' => [
                'name' => 'Denilson Nelio Mavie',
                'username' => 'nelio',
                'email' => 'denmelmavie@gmail.com',
                'password' => '123456',
                'nivelacesso' => 'Administrador',
            ],
            '2' => ['name' => 'Leonardo De Jesus Huo',
                'username' => 'leonardo',
                'email' => 'leonardohuo@gmail.com',
                'password' => '123456',
                'nivelacesso' => 'Normal',
            ]

        ]);


        DB::table('escolas')->insert([
            '0' => [
                'nome' => 'Escola Secundaria de Laulane',
                'nivel' => 'Medio',
                'endereco' => 'Mahotas Perto da 14 esquadra',
                'nome_responsavel' => 'Ezilda',
                'contacto' => '845030902',
                'email' => 'laulane@gmail.com',
                'senha' => '123456',
            ],
            '0' => [
                'nome' => 'Escola Secundaria de Malhazine',
                'nivel' => 'Medio',
                'endereco' => 'Mahotas Perto da 14 esquadra',
                'nome_responsavel' => 'Orlando Matusse',
                'contacto' => '845030902',
                'email' => 'malhazine@gmail.com',
                'senha' => '123456',
            ],

        ]);

    }
}

<?php

use Illuminate\Database\Seeder;

class EscolasTableSeeder extends Seeder
{

    public function run()
    {

        DB::table('escolas')->insert([
            '0' => [
                'nome' => 'Escola Secundaria de Laulane',
                'nivel' => 'Medio',
                'endereco' => 'Mahotas Perto da 14 esquadra',
                'nome_responsavel' => 'Ezilda',
                'contacto' => '845030902',
                'email' => 'laulane@gmail.com',
            ],
            '1' => [
                'nome' => 'Escola Secundaria de Forca do Povo',
                'nivel' => 'Medio',
                'endereco' => 'Bairro de Hulene perto de expresso',
                'nome_responsavel' => 'Dionisio Macamo',
                'contacto' => '8425478501',
                'email' => 'macdion@gmail.com',
            ],
            '3' => [
                'nome' => 'Escola Secundaria de Malhazine',
                'nivel' => 'Medio',
                'endereco' => 'Bairro de Malhazine',
                'nome_responsavel' => 'Custodio cumbane',
                'contacto' => '8414789560',
                'email' => 'cumbane@gmail.com',
            ],
        ]);
    }
}

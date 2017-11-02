<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Escola extends Authenticatable
{

	protected $fillable=[

		'nome', 'nivel', 'endereco','nome_responsavel','contacto', 'email', 'senha'
	];	







}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Apatio extends Model
{

	protected $fillable =[

		'descricao','data', 'hora','estado','usuario_id'
	];

	public function pedidos()
	{
		return $this->hasMany(User::class);
	}
}

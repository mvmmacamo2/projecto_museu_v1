<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class relatio_pedido extends Model
{
	protected $fillable= [
		'nomeservico','user_id','descricao','created_at', 'updated_at'

	];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\ComtarioExposicao;

class LikeExposicao extends Model
{

	protected $fillable=[

		'like','exposicao_id','usuario_id'
	];

	public function likeexposicao()
	{
		return $this->hasMany(User::class);
	}

	public function comentarioexposicao()
	{
		return $this->hasMany(ComtarioExposicao::class);
	}
}

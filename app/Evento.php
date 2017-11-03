<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\ComtarioEvento;
class Evento extends Model
{

	public function eventos()
	{
		return $this->hasMany(User::class);
	}

    public function likeeventos()
    {
        return $this->hasMany(User::class);
    }

    public function comentarioeventos()
    {
        return $this->hasMany(ComtarioEvento::class);
    }



	protected $fillable = [
		'descricao', 'publico', 'imagem', 'data', 'hora', 'id_usuario', 'estado'
	];
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LikeExposicao;
use App\User;
use App\Exposicao;

class LikeExposicaoController extends Controller
{


	public function salvar(Request $request)
	{
		$usuario =User::all();
		$exposicao= Exposicao::all();
		$likeexposicao= LikeExposicao::all();
		
		$salvar = LikeExposicao::create($request->all());
		
		


	}

}

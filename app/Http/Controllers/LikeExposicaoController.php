<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LikeExposicao;

class LikeExposicaoController extends Controller
{


	public function salvar(Request $request)
	{
		//dd($request);
		$salvar = LikeExposicao::create($request->all());
	}

}

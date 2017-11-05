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
		if (condition) {
       	# code...
		}

		$salvar = LikeExposicao::create($request->all());
	}

}

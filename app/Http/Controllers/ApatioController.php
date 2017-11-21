<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apatio;

class ApatioController extends Controller
{
	public function create(Request $request)
	{
		$patio = Apatio::create($request->all());

		$m='Pedido Feito Com Sucesso!';
		$mf= 'Falha ao Mandar o Pedido';

		if ($patio ) {
			return redirect('/servicos/patio')->with('message',$m);
		}else{
			return redirect('/servicos/patio')->with('message',$mf);
		}

		
	}
}

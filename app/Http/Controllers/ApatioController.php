<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apatio;
use DB;

class ApatioController extends Controller

{

	public function index()
	{
		$user_id= Auth()->user()->id;
		$pedidos=DB::select("call pr_pedidos_patio($user_id)");

		return view('servicos.patio', compact('pedidos'));
	}




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

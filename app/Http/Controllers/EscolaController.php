<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evento;

class EscolaController extends Controller
{

	public function index()
	{
		//return 'exibe os dados de escola';

		$eventos = Evento::all();
		return view('escola.index', compact('eventos'));
	}

	public function login()
	{
		//return 'Faz o Login da dados de escola';

		//return view('auth.logn-escola');
	}


	public function postlogin(Request $request)
	{
		//return ' depois de Login  existe dados de escola';
		dd($request->all());
		$validator = validate();
	}
}

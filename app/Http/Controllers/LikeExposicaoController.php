<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LikeExposicao;
use App\likeevento;
use DB;

class LikeExposicaoController extends Controller
{


	public function salvar(Request $request)
	{
		//dd($request);
		$salvar = LikeExposicao::create($request->all());
	}
	public function storelikeevento(Request $request)
    {
        if ($request->ajax()) {
            $likeevento = likeevento::create($request->all());
            return response()->json(['data' => $likeevento], 200);
        }
    }

    public function likeEventosNumber()
    {
        $likesexposicao =count(DB::table('likeeventos')->where('evento_id', 1)->get());

        return response()->json(['data' => $likesexposicao], 200);
    }

    public function Eventos()
    {
        $eventos = DB::table('likeeventos')
            ->join('eventos', 'likeeventos.evento_id', '=', 'eventos.id')
            ->select('eventos.*', 'likeeventos.*')
            ->get();

        return response()->json(['data' => $eventos], 200);


    }

}

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
		
		// empty(auth()->user()->id){

		// }else{
		// 	$user = auth()->user()->id;
		// 	foreach ($likeexposicao as $like) {
		// 		foreach ($exposicao as $ex) {
		// 			if (($user=$like->usuario_id) AND ($ex->id=$like->exposicao_id) ) {
		// 				return redirect('/');
		// 			}else{
		// 				$salvar = LikeExposicao::create($request->all());
		// 			}
		// 		}
		
		// 	}
		
		// }

		// foreach ($usuario as $u) {
		// 	foreach ($exposicao as $ex) {
		// 		foreach ($likeexposicao as $like) {
		// 			if (($u->id=$like->usuario_id) and ($ex->id=$like->exposicao_id)) {

		// 				return redirect('/');
		// 			}else{
		// 				$salvar = LikeExposicao::create($request->all());
		// 			}


		// 		}
		// 	}

		// }


	}

}

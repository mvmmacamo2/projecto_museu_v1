<?php

namespace App\Http\Controllers;

use App\Escola;
use App\RespostaVisitaUser;
use App\User;
use Illuminate\Http\Request;
use App\V_visitag_singular;
use DB;

class ServicosController extends Controller
{
    public function escola()
    {
        $escola = Escola::all();
        $users = User::all();
        $escolas = array();
        foreach ($escola as $e){
            $escolas[] =  $e;
        }

        return view('servicos.escola', compact('escolas'));
    }

    public function patio()
    {
        $user_id= Auth()->user()->id;
        $pedidos=DB::select("call pr_pedidos_patio($user_id)");

        return view('servicos.patio', compact('pedidos'));
       // return view('servicos.patio');
    }

    public function individual()
    {
     $user_id= Auth()->user()->id;
     $pedidos=DB::select("call pr_pedidos_visitas($user_id)");

        $p = DB::table('resposta_visita_users')
            ->join('visita_gusers', 'resposta_visita_users.pedido_id', '=', 'visita_gusers.id')
            ->join('users', 'resposta_visita_users.user_id', '=', 'users.id')
            ->where('to', Auth()->user()->email)
            ->orderBy('resposta_visita_users.id', 'desc')
            ->select('resposta_visita_users.*', 'visita_gusers.*', 'users.name', 'resposta_visita_users.descricao as messagem' , 'resposta_visita_users.id as id_r')
            ->get();

       // return $p;
     $task = DB::table('visita_gusers')->where('usuario_id',$user_id)->get();
     // $user = DB::table('users')->where('name', 'John')->first();
    // return view('servicos.patio', compact('pedidos'));
     $respostas  = RespostaVisitaUser::orderBy('id', 'desc')
         ->where('to', Auth()->user()->email)
         ->get();
     return view('servicos.individual', compact('pedidos'), compact('task'))->with('respostas', $p);
 }

 public function save(Request $request)
 {
    $save = V_visitag_singular::create($request->all());
    return redirect('servicos.individual');
}

public function SavePadidoEscola(Request $request)
{
    return response()->json($request->all());
}
}

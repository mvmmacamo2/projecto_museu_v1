<?php

namespace App\Http\Controllers;

use App\Escola;
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

     $task = DB::table('visita_gusers')->where('usuario_id',$user_id)->get();
     // $user = DB::table('users')->where('name', 'John')->first();
    // return view('servicos.patio', compact('pedidos'));
     return view('servicos.individual', compact('pedidos'), compact('task'));
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

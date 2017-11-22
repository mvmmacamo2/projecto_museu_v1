<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\V_visitag_singular;
use DB;

class ServicosController extends Controller
{
    public function escola()
    {
        return view('servicos.escola');
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
        return view('servicos.individual');
    }

    public function save(Request $request)
    {
        $save = V_visitag_singular::create($request->all());
        return redirect('servicos.individual');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\V_visitag_escola;

class VisitaGEscolasController extends Controller
{
    public function visitaguiadaescolar()

    {

        // $pedidos= DB::table('v_visitag_escolas')->get();
//
//       // dd($pedidos);
//        return view('visitasg.escola', compact('pedidos'));


        $pedidos = V_visitag_escola::all();

        //dd($pedidos);
        //  return view('visitasg.escola', compact('pedidos'));

        return view('admins.pedidos.visitasgescolas', compact('pedidos'));
    }
}

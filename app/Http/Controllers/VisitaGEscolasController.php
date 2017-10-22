<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitaGEscolasController extends Controller
{
    public function visitaguiadaescolar()

    {

        $pedidos= DB::table('view_visitasgescolas')->get();
//
//       // dd($pedidos);
//        return view('visitasg.escola', compact('pedidos'));


        $pedidos= Vvisita::all();

        //dd($pedidos);
      //  return view('visitasg.escola', compact('pedidos'));

        return view('admins.pedidos.visitasgescolas');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Authenticatable;
use Illuminate\Http\Request;
use App\V_visitag_singular;
use App\V_Patio;
use App\VisitaGuser;

class VisitaGSingularController extends Controller
{

    public function visitaguiadasingular()
    {
        //$pedidos=DB::table('v_visitag_singulars')->get();

        $pedidos = V_visitag_singular::all();

        return view('admins.pedidos.visitasgsingulares', compact('pedidos'));

    }

    // acrescentado o metodo renda do patio no controller de Visiatas guiadas Singulares


    public function prenda()
    {
        $pedidosp = V_Patio::all();
        return view('admins.pedidos.patio', compact('pedidosp'));
    }


    public function salvar(Request $request)
    {
     $v= VisitaGuser::create($request->all());



     $m='Pedido Feito Com Sucesso!';
     $mf= 'Falha ao Mandar o Pedido';

     if ($v ) {
        return redirect('/servicos/individual')->with('message',$m);
    }else{
        return redirect('/servicos/individual')->with('message',$mf);
    }


   // return redirect('servicos/individual' ,compact('msg2'));

}
}

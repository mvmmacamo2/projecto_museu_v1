<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\V_visitag_singular;

class ServicosController extends Controller
{
    public function escola()
    {
        return view('servicos.escola');
    }

    public function patio()
    {
        return view('servicos.patio');
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

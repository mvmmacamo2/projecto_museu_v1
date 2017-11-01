<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ExposicaoGaleria;

class GaleriaController extends Controller
{
    public function index($id)
    {
    	$galerias = ExposicaoGaleria::whereExposicao_id($id) -> get();
        // $galerias =ExposicaoGaleria::all();
        
 		// dd($galerias);

        return view('galerias.index', compact('galerias'));

    }
}

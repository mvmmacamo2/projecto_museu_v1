<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exposicao;
use File;

class ExposicaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exposicaos = Exposicao::all();
        return view('/exposicoes.index', compact('exposicaos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/exposicoes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->imagem){
            $imagem = $request -> imagem;
            $extension =  $imagem -> getClientOriginalExtension();
            if($extension!='png' && $extension!='jpg'){
                return back() -> with('erro', 'Erro: Este ficheiro não é imagem..!');
            }
        }

        $exposicao = new Exposicao;

        $exposicao -> nome      = $request -> nome;
        $exposicao -> descricao     = $request -> descricao;
        $exposicao -> imagem     = "";
        $exposicao -> estado    = $request -> estado;
        $exposicao -> save();

        if($request->imagem)
        {
            File::move($imagem, public_path().'/expo-upload/expo-id-'.$exposicao->id.'.'.$extension);

            $exposicao -> imagem = 'expo-id_'.$exposicao->id.'.'.$extension;

            $exposicao -> save();
        }

        
        return redirect('/exposicoes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

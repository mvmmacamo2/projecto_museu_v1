<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exposicao;
use File;

class Exposicao_adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $exposicaos = Exposicao::all();
        return view('admins.exposicoes.index', compact('exposicaos'));
    }

    // public function index_admin()
    // {
    //     $exposicaos = Exposicao::all();
    //     return view('/admin/exposicoes.index-admin', compact('exposicaos'));
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admins/exposicoes.create');
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

            $exposicao -> imagem = 'expo-id-'.$exposicao->id.'.'.$extension;

            $exposicao -> save();
        }

        
        return redirect('/admin/exposicoes/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $exposicao = Exposicao::findOrFail($id);
        return view('/admin.exposicoes.edit', compact('exposicao'));
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

        if($request->imagem){
            $imagem = $request -> imagem;
            $extension =  $imagem -> getClientOriginalExtension();
            if($extension!='png' && $extension!='jpg'){
                return back() -> with('erro', 'Erro: Este ficheiro não é imagem..!');
            }
        }

        $exposicao = new Exposicao;

        $exposicao = Exposicao::find($id);

        $this->validate(request(), [
          'nome' => 'required',
          'descricao' => 'required',
          'imagem' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          'estado' => 'required'
        ]);
        $exposicao->nome = $request->get('nome');
        $exposicao->descricao = $request->get('descricao');
        $exposicao->estado = $request->get('estado');

        if($request->imagem)
        {
            File::move($imagem, public_path().'/expo-upload/expo-id-'.$exposicao->id.'.'.$extension);

            $exposicao -> imagem = 'expo-id-'.$exposicao->id.'.'.$extension;
        }

        
        $exposicao->save();

        return redirect('/admin/exposicoes/index')->with('success','Exposicao has been updated');
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

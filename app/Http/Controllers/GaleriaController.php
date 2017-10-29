<?php

namespace App\Http\Controllers;

use App\ExposicaoGaleria;
use App\GaleriaExposicao;
use Illuminate\Http\Request;
use App\Exposicao;
use File;
use App\Vgaleria;


class GaleriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exposicao = Exposicao::all();
        $galeria =ExposicaoGaleria::all();
        $vgaleria = Vgaleria::all();
         dd($vgaleria);
        //return view('admins.galeria.index', compact('exposicao'), compact('galeria'), compact('vgaleria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $exposicao = Exposicao::all();

        return view('admins.galeria.create', compact('exposicao'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

//        dd($request->all());
//

        if ($request->imagem) {
            $imagem = $request->imagem;
            $extension = $imagem->getClientOriginalExtension();
            if ($extension != 'png' && $extension != 'jpg') {
                return back()->with('erro', 'Erro: Este ficheiro não é imagem..!');
            } else {
                $galeria = ExposicaoGaleria::create($request->all());

                if ($request->imagem) {
                    File::move($imagem, public_path() . '/galeria/expo-id-' . $galeria->id . '.' . $extension);

                    $galeria->imagem = 'expo-id-' . $galeria->id . '.' . $extension;

                    $galeria->save();
                    if ($galeria->save()) {
                        return redirect('/admins/galerias');
                    }
                }

            }
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
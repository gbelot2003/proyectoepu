<?php

namespace App\Http\Controllers;

use App\Calificacion;
use App\Country;
use App\Recomendation;
use App\Right;
use Illuminate\Http\Request;
use App\Typeofrecomendations;
use App\Http\Requests;

class RecomendationController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recom = Recomendation::orderBy('id', 'DESC')->paginate(9);
        $pais = Country::all();
        $tipo = Right::all();
        $trec = Typeofrecomendations::all();
        $search = false;
        return View('material.recomendaciones.index', compact('recom', 'pais', 'tipo', 'trec', 'search'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recom = Recomendation::findOrFail($id);
        $calificaciones = Calificacion::where('recomendacion_id', '=', $id)
                                        ->where('status', '=', 1)->paginate(5);
        return View('material.recomendaciones.show', compact('recom', 'calificaciones'));
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


    public function search(Request $request)
    {
        $query = Recomendation::orderBy('id', 'DESC');

        if($request->has('trec')){
            $tecs = $request->input('trec');
            $query->where('typeofrecomendations_id', 'LIKE' , '%' . $tecs . '%');
        }

        if($request->has('name')){
            $name = $request->input('name');
            $query->where('name', 'LIKE' , '%' . $name . '%');
        }

        if($request->has('pais')){
            $pais = $request->input('pais');
            $query->where('country_id', '=', $pais);
        }

        if($request->has('tipo')){
            $tipo = $request->input('tipo');
            $query->whereHas('derechos', function($q) use ($tipo){
                $q->where('id', '=', $tipo);
            });
        }

        $recom = $query->get();

        $trec = Typeofrecomendations::all();
        $pais = Country::all();
        $tipo = Right::all();
        $search = true;

        return View('material.recomendaciones.search', compact('recom', 'pais', 'tipo', 'request', 'trec', 'search'));
    }

}

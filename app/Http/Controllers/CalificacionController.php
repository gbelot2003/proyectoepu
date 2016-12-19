<?php

namespace App\Http\Controllers;

use App\Calificacion;
use App\Http\Requests\CalificacionesRequest;
use App\Recomendation;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class CalificacionController extends Controller
{



    public function califica($id)
    {

        $user = Auth::user()->id;

        /**
         * TODO: Agregar espacio de tiempos en donde se hara la busqueda
         *
         */
        $calificaciones = Calificacion::where('user_id', '=', $user)->where('recomendacion_id', '=', $id)->get();
        if($calificaciones->count()){
            flash('Ya has calificado esta recomendación en este periodo', 'info');
            return redirect()->back();
        }


        $recom = Recomendation::findOrFail($id);

        $califica = [
            '1' => 1, '2' => 2, '3' => 3, '4' => 4, '5' => 5,
        ];
        return View('material.calificaciones.create', compact('recom', 'califica'));
    }

    /**
     * Display the specified calificacion detail.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        $calificacion = Calificacion::findOrFail($id);
        $recom = $calificacion->recomendacion;

        return View('material.calificaciones.show', compact('recom', 'calificacion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CalificacionesRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CalificacionesRequest $request)
    {
        $request['user_id'] = Auth::id();

        if ($request->hasFile('documento')):
            $document = $request['documento']->getClientOriginalName();
            $request['documento_url'] = $document;
            $request['documento']->move(base_path() . '/public/documents/', $document);
        endif;

        Calificacion::create($request->all());
        return redirect('recomendaciones');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $calificacion = Calificacion::findOrFail($id);

        if(!Auth::user()->hasRole(['super', 'admin']) && $calificacion->user_id !== Auth::user()->id){
                flash('Esta entrada no fue creada por tu perfil', 'info');
                return redirect()->back();
        }

        $recom = Recomendation::findOrFail($calificacion->recomendacion_id);

        $califica = [
            '1' => 1, '2' => 2, '3' => 3, '4' => 4, '5' => 5,
        ];
        return View('material.calificaciones.edit', compact('recom', 'califica', 'calificacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(CalificacionesRequest $request, $id)
    {
        //dd($request->all());
        $calificacion = Calificacion::findOrFail($id);

        $request['user_id'] = Auth::id();

        if($request->hasFile('documento')){
            $document = $request['documento']->getClientOriginalName();
            $request['documento_url'] = $document;
            $request['documento']->move(base_path() . '/public/documents/', $document);
            unset($request['documento']);
        }

        $calificacion->update($request->all());

        return redirect('recomendaciones');
    }

}

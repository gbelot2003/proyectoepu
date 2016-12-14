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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        if ($request->has('documento')):
            $document = $request['documento']->getClientOriginalname();
            $request['documento_url'] = $document;
            $request['documento']->move(base_path() . '/public/documents/', $document);
        endif;

        Calificacion::create($request->all());
        return redirect('recomendaciones');
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
        $calificacion = Calificacion::findOrFail($id);

        if(!Auth::user()->hasRole(['super', 'admin'])){
            if($calificacion->user_id =! Auth::user()->id){
                flash('Esta entrada no fue creada por tu perfil', 'info');
                return redirect()->back();
            }
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
    public function update(Request $request, $id)
    {
        $calificacion = Calificacion::findOrFail($id);

        $request['user_id'] = Auth::id();
        if($request->input('documento')){
            $document = $request['documento']->getClientOriginalname();
            $request['documento_url'] = $document;
            $request['documento']->move(base_path() . '/public/documents/', $document);
        }

        $calificacion->update($request->all());

        return redirect('recomendaciones');
    }

}

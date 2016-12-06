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
        $califica = [
            '1' => 1,
            '2' => 2,
            '3' => 3,
            '4' => 4,
            '5' => 5,
        ];

        $recom = Recomendation::findOrFail($id);
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
        $document = $request['documento']->getClientOriginalname();
        $request['documento_url'] = $document;
        $request['documento']->move(base_path() . '/public/documents/', $document);
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

}

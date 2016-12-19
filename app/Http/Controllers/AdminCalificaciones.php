<?php

namespace App\Http\Controllers;

use App\Calificacion;
use App\Recomendation;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class AdminCalificaciones extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
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

        $status = [
            '0' => "Sin Activar",
            '1' => "Activo"
        ];

        return View('material.admin.calificaciones.edit', compact('recom', 'califica', 'calificacion', 'status'));
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
        $calificacion = Calificacion::findOrFail($id);

        $request['user_id'] = Auth::id();

        if($request->hasFile('documento')){
            $document = $request['documento']->getClientOriginalName();
            $request['documento_url'] = $document;
            $request['documento']->move(base_path() . '/public/documents/', $document);
            unset($request['documento']);
        }

        $calificacion->update($request->all());


        return redirect('home');

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

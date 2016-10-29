<?php

namespace App\Http\Controllers;

use App\Country;
use App\Http\Requests\RecomendacionesRequest;
use App\Institution;
use App\Recomendation;
use App\Right;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminRecomendacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recom = Recomendation::orderBy('id', 'DESC')->paginate(10);
        return View('admin.recomendaciones.index', compact('recom'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $country = Country::lists('name', 'id');
        $instit = Institution::lists('name', 'id');
        $right = Right::lists('name', 'id');
        return View('admin.recomendaciones.create', compact('rec', 'country', 'instit', 'right'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param RecomendacionesRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(RecomendacionesRequest $request)
    {
        $recomendacion = $this->createRecomendacion($request);
        $this->synckRecom($recomendacion, $request->input('institution_list'), $request->input('derechos_list'));
        flash('La recomendación a sido creada', 'info');
        return redirect('admin/recomendaciones');
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
        $recomendation = Recomendation::findOrFail($id);
        $country = Country::lists('name', 'id');
        $instit = Institution::lists('name', 'id');
        $right = Right::lists('name', 'id');
        return View('admin.recomendaciones.edit', compact('recomendation', 'country', 'instit', 'right'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param RecomendacionesRequest|Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(RecomendacionesRequest $request, $id)
    {
        $recom = Recomendation::findOrFail($id);
        $this->synckRecom($recom, $request->input('institution_list'), $request->input('derechos_list'));
        $recom->update($request->all());
        flash('La recomendación a sido editada', 'info');
        return redirect('admin/recomendaciones');

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

    /**
     * @param Recomendation $recom
     * @param array $institution
     * @param array $derechos
     */
    public function synckRecom(Recomendation $recom, array $institution, array $derechos)
    {
        $recom->institutions()->sync($institution);
        $recom->derechos()->sync($derechos);
    }

    /**
     * @param RecomendacionesRequest|Request $request
     * @return static
     */
    public function createRecomendacion(RecomendacionesRequest $request)
    {
        $recomendacion = Recomendation::create($request->all());
        return $recomendacion;
    }



}

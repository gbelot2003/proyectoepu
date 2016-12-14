<?php

namespace App\Http\Controllers;

use App\Country;
use App\Http\Requests\RecomendacionesRequest;
use App\Institution;
use App\Recomendation;
use App\Right;
use App\Typeofrecomendations;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminRecomendacionesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recom = Recomendation::orderBy('id', 'DESC')->paginate(8);
        return View('material.admin.recomendaciones.index', compact('recom'));
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
        $trec = Typeofrecomendations::lists('name', 'id');
        return View('material.admin.recomendaciones.create', compact('rec', 'country', 'instit', 'right', 'trec'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param RecomendacionesRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(RecomendacionesRequest $request)
    {
        $recomendacion = Recomendation::create($request->all());

        if($request->has('institution_list')):
            $this->synckRecom($recomendacion, $request->input('institution_list'));
        endif;

        if($request->has('derechos_list')):
            $this->synckDerechos($recomendacion, $request->input('derechos_list'));
        endif;

        flash('La recomendación a sido creada', 'info');
        return redirect()->to('material.admin.recomendaciones.index');
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
        $trec = Typeofrecomendations::lists('name', 'id');
        return View('material.admin.recomendaciones.edit', compact('recomendation', 'country', 'instit', 'right', 'trec'));
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

        if($request->has('institution_list')):
            $this->synckRecom($recomendacion, $request->input('institution_list'));
        endif;

        if($request->has('derechos_list')):
            $this->synckDerechos($recomendacion, $request->input('derechos_list'));
        endif;

        $recom->update($request->all());
        flash('La recomendación a sido editada', 'info');
        return redirect('admin/recomendaciones');

    }

    /**
     * @param Recomendation $recom
     * @param array $institution
     * @param array $derechos
     */
    public function synckRecom(Recomendation $recom, array $institution)
    {
        $recom->institutions()->sync($institution);
    }

    /**
     * @param Recomendation $recom
     * @param array $derechos
     */
    public function synckDerechos(Recomendation $recom, array $derechos)
    {
        $recom->derechos()->sync($derechos);
    }

    public function search(Request $request)
    {
        $query = Recomendation::orderBy('id', 'DESC');

        if(!$request->has('name')){
            return redirect()->back();
        }
        $name = $request->input('name');
        $query->where('name', 'LIKE' , '%' . $name . '%');
        $recom = $query->paginate();

        return View('material.admin.recomendaciones.index', compact('recom'));
    }


}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrganizacionesRequest;
use App\Organizacion;
use Illuminate\Http\Request;

use App\Http\Requests;

class OrganizacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Organizacion::paginate(15);
        return View('admin.organizaciones.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('admin.organizaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrganizacionesRequest $request)
    {
        Organizacion::create($request->all());
        flash('La Organización a sido creada', 'info');
        return redirect('admin/organizaciones');
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
        $organizacion = Organizacion::findOrFail($id);
        return View('admin.organizaciones.edit', compact('organizacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OrganizacionesRequest $request, $id)
    {
        $recom = Organizacion::findOrFail($id);
        $recom->update($request->all());
        flash('La Organización a sido editada', 'info');
        return redirect('admin/organizaciones');
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

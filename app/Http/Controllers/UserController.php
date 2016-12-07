<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserFormRequest;
use App\Organizacion;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = \App\User::paginate(15);
        return View('material.admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::lists('name', 'id');
        $organiza = Organizacion::lists('name', 'id');
        $estado = [
            1 => 'Activo',
            2 => 'Desactivado'
        ];
        return View('material.admin.users.create', compact('organiza', 'roles', 'estado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserFormRequest $request)
    {
        //
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
        $user = User::findOrFail($id);
        $roles = Role::lists('name', 'id');
        $organiza = Organizacion::lists('name', 'id');
        $estado = [
            1 => 'Activo',
            2 => 'Desactivado'
        ];
        return View('material.admin.users.edit', compact('user', 'roles', 'organiza', 'estado'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserFormRequest $request, $id)
    {
        $user = User::findOrFail($id);

        if($request->input('password')):
            $request['password'] = bcrypt($request->input('password'));
            unset($request['password_confirmation']);
        else:
            unset($request['password']);
            unset($request['password_confirmation']);
        endif;

        $user->update($request->all());

        $user->roles()->sync($request->input('roles_lists'));
        flash('El usuario a sido editada', 'info');
        return redirect('admin/users');
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

    public function search(Request $request){
        $query = User::orderBy('id', 'DESC');

        if(!$request->has('name')){
            return redirect()->back();
        }
        $name = $request->input('name');
        $query->where('name', 'LIKE' , '%' . $name . '%');
        $users = $query->paginate();

        return View('material.admin.users.index', compact('users'));
    }
}

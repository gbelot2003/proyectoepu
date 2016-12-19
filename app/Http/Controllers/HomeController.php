<?php

namespace App\Http\Controllers;

use App\Calificacion;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $califica = Calificacion::where('user_id', '=' , Auth::user()->id)->paginate(5);

        $acalifica = Calificacion::paginate(5);

        return view('material.pages.home', compact('califica', 'acalifica'));
    }
}

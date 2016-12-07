<?php

namespace App\Http\Controllers;

use App\Recomendation;
use Illuminate\Http\Request;

use App\Http\Requests;

class ApiRecomendacionesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }


    public function search($term = null)
    {
        $recom = Recomendation::all();

        return $recom;
    }

    public function index()
    {
        $recom = Recomendation::with('countries')->paginate(15);
        return $recom;
    }

    public function edit($id)
    {
        $recom = Recomendation::with('countries')->findOrFail($id);
        return $recom;
    }

    public function show($id)
    {
        $recom = Recomendation::with('countries')->findOrFail($id);
        return $recom;
    }

    public function store(Request $request)
    {
        return $request;
    }

}

<?php

namespace App\Http\Controllers;

use App\Recomendation;
use Illuminate\Http\Request;

use App\Http\Requests;

class ApiRecomendacionesController extends Controller
{
    public function search($term = null)
    {
        $recom = Recomendation::all();

        return $recom;
    }
}

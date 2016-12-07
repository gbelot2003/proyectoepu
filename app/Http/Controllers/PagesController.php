<?php

namespace App\Http\Controllers;

use App\Institution;
use App\Organizacion;
use App\Typeofright;
use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function index()
    {
        $type = Typeofright::all();
        return View('material.pages.welcome', compact('type'));
    }

    public function instituciones()
    {
        $items = Institution::orderBy('id', 'DESC')->paginate(10);
        return View('material.pages.instituciones', compact('items'));
    }

    public function organizaciones()
    {
        $items = Organizacion::orderBy('id', 'DESC')->paginate(10);
        return View('material.pages.organizaciones', compact('items'));
    }

}

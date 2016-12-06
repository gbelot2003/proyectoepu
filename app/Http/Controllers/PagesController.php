<?php

namespace App\Http\Controllers;

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
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Typeofright extends Model
{
    public $timestamp = false;

    public function derechos()
    {
        return $this->hasMany(Right::class, 'typeofright_id', 'id')->get();
    }

    public function getCountRelAttribute()
    {
        $contador = Right::where('typeofright_id', '=', $this->id)->get()->count();

        return $contador;
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Typeofright extends Model
{
    public $timestamp = false;

    public function recomendacion()
    {
        return $this->belongsTo(Rigth::class);
    }
}

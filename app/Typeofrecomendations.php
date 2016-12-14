<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Typeofrecomendations extends Model
{
    public function recomendaciones()
    {
        return $this->hasMany(Recomendation::class, 'typeofrecomendations_id', 'id')->get();
    }
}

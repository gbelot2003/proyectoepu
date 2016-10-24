<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Right extends Model
{
    public $timestamps = false;

    public function type()
    {
        return $this->hasOne(Typeofright::class);
    }

    public function recomendacion()
    {
        return $this->belongsToMany(Recomendation::class);
    }
}

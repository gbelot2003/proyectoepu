<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public $timestamps = false;

    public $table = 'countries';

    public function recomendacion()
    {
        return $this->belongsTo(Recomendation::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    public $timestamps = false;

    public function recomendations()
    {
        return $this->belongsToMany(Recomendation::class, 'recomendations_id', 'id');
    }
}



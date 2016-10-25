<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recomendation extends Model
{
    public function Rights()
    {
        return $this->belongsToMany(Rights::class);
    }

    public function institutions()
    {
        return $this->belongsToMany(Institution::class);
    }

    public function countries()
    {
        return $this->belongsTo(Country::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recomendation extends Model
{
    public function derechos()
    {
        return $this->belongsToMany(Right::class);
    }

    public function institutions()
    {
        return $this->belongsToMany(Institution::class);
    }

    public function countries()
    {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }

    public function getInstitutionListAttribute()
    {
        return $this->institutions->lists('id')->all();
    }

    public function getDerechosListAttribute()
    {
        return $this->derechos->lists('id')->all();
    }
}

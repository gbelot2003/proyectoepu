<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Right extends Model
{
    public $timestamps = false;

    public function type()
    {
        return $this->BelongsTo(Typeofright::class);
    }

    public function recomendacion()
    {
        return $this->belongsToMany(Recomendation::class);
    }

    public function getCountRecomAttibute()
    {
        return Recomendation::where('recomendacion_id', '=', $this->id)->get()->count();
    }


}

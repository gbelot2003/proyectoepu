<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
    protected $fillable = ['recomendacion_id', 'documento_url', 'calificacion', 'details', 'user_id'];

    public function recomendacion()
    {
        return $this->belongsTo(Recomendation::class, 'recomendacion_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}

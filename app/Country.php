<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public $timestamps = false;

    public $table = 'countries';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function recomendacion()
    {
        return $this->hasOne(Recomendation::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organizacion extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'name', 'details', 'url'
    ];


}

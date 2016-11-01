<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable
{

    use EntrustUserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'status', 'organizacion_id', 'password_confirmation'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function organizacion()
    {
        return $this->belongsTo(Organizacion::class, 'organizacion_id', 'id');
    }

    /**
     * Devolver listado de roles por usuario
     * @return mixed
     */
    public function getRolesListsAttribute()
    {
        return $this->roles->lists('id')->all();
    }

}

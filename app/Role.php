<?php

namespace App;

use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'display_name', 'description'];

    /**
     * @return mixed
     */
    public function getPermsListsAttribute()
    {
        return $this->perms->lists('id')->all();
    }

}

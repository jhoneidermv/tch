<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'email', 'password', 'rol', 'edad', 'altura', 'peso',
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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function juegos(){
        return $this->hasMany('App\Juego');
    }

    /**
     * @param $query
     * @param $criterio
     * @return mixed
     */
    public function scopeSearch($query, $criterio)
    {
        return $query->where('name', 'LIKE', "%$criterio%")->orWhere('email', 'LIKE',
            "%$criterio%");
    }


}



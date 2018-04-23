<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    //Atributos
    protected $fillable = [
        'id',
        'desc'
    ];

    /**
     * Relacion entre User y Rol
     * @return Illuminate\Database\Eloquent\Model
     */
    public function users()
    {
        return $this->hasOne(User::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turno extends Model
{
    //Atributos
    protected $fillable = [
        'id',
        'localizacion_inicio',
        'localizacion_fin',
        'user_id'
    ];

    /**
     * Relacion entre Turno y Usuarios
     */
    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comprador extends Model
{
    //Atributos
    protected $fillable = [
        'id',
        'cedula',
        'nombre_completo',
        'telefono',
        'email',
        'direccion',
        'barrio',
        'ciudad',
        'departamento'
    ];
}

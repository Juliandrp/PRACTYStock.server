<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    //
    protected $fillable = [
        'id',
        'nombre'
    ];

    /**
     * Relacion Departamento Municipio
     */
    public function municipios()
    {
        return $this->hasMany(Municipio::class);
    }
}

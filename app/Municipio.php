<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    //
    protected $fillable = [
        'id',
        'estado',
        'nombre',
        'departamento_id'
    ];

    /**
     * Relacion Municipio Departamento
     */
    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }
}

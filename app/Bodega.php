<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bodega extends Model
{
    //Atributos
    protected $fillable = [
        'id',
        'nombre',
        'direccion',
        'user_id'
    ];

    /**
     * Relacion entre Bodega y Producto
     * @return Illuminate\Database\Eloquent\Model
     */
    public function productos()
    {
        return $this->hasMany(User::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    //
    protected $fillable = [
        'id',
        'desc'
    ];

    /**
     * Relacion Modelo Productos
     */
    public function productos()
    {
        return $this->hasMany(Producto::class);
    }
}

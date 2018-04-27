<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    //
    protected $fillable = [
        'id',
        'nombre'
    ];

    /**
     * Relacion Marca producto
     */
    public function productos()
    {
        return $this->hasMany(Producto::class);
    }

    public function modelos($id)
    {
        $modelos = Producto::where();
    }
}

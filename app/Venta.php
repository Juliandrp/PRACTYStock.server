<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    //Atributo
    protected $fillable = [
        'id',
        'numero_factura',
        'bodega_id',
        'comprador_id',
        'producto_id',
        'user_id'
    ];

    /**
     * Relacion Venta y Bodega
     * 
     * @return Illuminate\Database\Eloquent\Model
     */
    public function bodega()
    {
        return $this->belongsTo(Bodega::class);
    }

    /**
     * Relacion Venta y Comprador
     * 
     * @return Illuminate\Database\Eloquent\Model
     */
    public function comprador()
    {
        return $this->belongsTo(Comprador::class);
    }

    /**
     * Relacion Venta y Producto
     * 
     * @return Illuminate\Database\Eloquent\Model
     */
    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }

    /**
     * Relacion Venta y Usuario
     * 
     * @return Illuminate\Database\Eloquent\Model
     */
    public function user()
    {
        return $this->belongsTo(User::class);

    }
}

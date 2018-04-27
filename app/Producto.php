<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //Atributos
    protected $fillable = [
        'id',
        'marca',
        'modelo',
        'imei',
        'iccid',
        'msisdn',
        'niu',
        'bodega_id'
    ];

    /**
     * Relacion entre Producto y Bodega
     * @return Illuminate\Database\Eloquent\Model
     */
    public function bodega()
    {
       return $this->belongsTo(Bodega::class);
    }

    /**
     * Relacion Producto Marca
     */
    public function marca()
    {
        return $this->belongsTo(Marca::class);    
    }

    /**
     * Relacion Producto Modelo 
     */
    public function modelo()
    {
        return $this->belongsTo(Modelo::class);
    }

}

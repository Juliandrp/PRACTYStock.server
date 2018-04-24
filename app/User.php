<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cedula', 
        'email', 
        'password',
        'nombre_completo', 
        'rol_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Relacion entre User y Rol
     * @return Illuminate\Database\Eloquent\Model
     */
    public function rol()
    {
        return $this->belongsTo(Rol::class);
    }

    /**
     * Relacion entre Usuario y Turno
     * @return Illuminate\Database\Eloquent\Model
     */
    public function turnos()
    {
       return $this->hasMany(Turno::class);
    }

    /**
     * Relacion Usuario y Bodega
     */
    public function bodega()
    {
        return $this->belongsTo(Bodega::class);
    }

    /**
     * Relacion entre Usuario y venta
     */
    public function ventas()
    {
        return $this->hasMany(Venta::class);
    }
}

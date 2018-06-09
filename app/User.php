<?php

namespace Inelco;

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
    protected $table = 'users';
    protected $fillable = [
        'name', 
        'email', 
        'password',
        'razon_social',
        'rfc',
        'nombre_comercial',
        'contribuyente',
        'calle',
        'no_exterior', 
        'no_interior',
        'colonia',
        'ciudad',
        'cp',
        'pais',
        'estado',
        'telefono',
        'correo_facturacion'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function compras()
    {
        return $this->hasMany(Ventas::class);
    }

}

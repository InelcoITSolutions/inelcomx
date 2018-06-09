<?php

namespace Inelco\Modelos;

use Illuminate\Database\Eloquent\Model;

class Reservacion extends Model
{
    protected $table = 'reservaciones';
    protected $primarykey ='id';

    protected $fillable =[
        'nombre',
        'apellidos',
        'empresa',
        'telefono',
        'email',
        'evento',
        'no_reservacion'
    ];

    
}

<?php

namespace Inelco\Modelos;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Inelco\Notifications\emailAdmin as ResetPasswordNotification;


class Administrador extends Authenticatable
{   

    use Notifiable;

    protected $table = 'administrador';
    /*protected $primarykey ='id';*/
    protected $fillable = [
        'nombre', 'apellidos', 'telefono','email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }

}

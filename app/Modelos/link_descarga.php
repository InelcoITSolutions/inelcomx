<?php

namespace Inelco\Modelos;

use Illuminate\Database\Eloquent\Model;

class link_descarga extends Model
{
	protected $table='link_descarga';
    protected $fillable =[
        'nombre_software',
        'link_software'
    ];

    public function downloads(){
        return $this->hasMany(Descargas::class);
    }

}

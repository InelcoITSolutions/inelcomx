<?php

namespace Inelco\Modelos;

use Illuminate\Database\Eloquent\Model;

class Descargas extends Model
{
    protected $fillable =[
        'email_usuario',
        'razon_social',
        'nombre_comercial',
        'rfc',
        'contribuyente',
        'telefono',
        'link_descarga_id'
    ];

    public function linkDescargado(){
        return $this->belongsTo(link_descarga::class);
    }

}

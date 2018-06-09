<?php

namespace Inelco\Modelos;

use Illuminate\Database\Eloquent\Model;

class Landing extends Model
{
    protected $table = 'landing';
    protected $primarykey ='id';

    protected $fillable =[
    	'id',
    	'id_calendario',
        'logo_coanfitrion',
        'estilos',
        'img_producto_banner',
        'img_producto',
        'parrafo1',
        'parrafo2',
        'link_temario',
        'frase',
        'dirigido1',
        'dirigido2',
        'dirigido3',
        'dirigido4',
        'img_dirigido',
        'title_desc1',
        'img_desc1',
        'cont_desc1',
        'title_desc2',
        'img_desc2',
        'cont_desc2',
        'title_desc3',
        'img_desc3',
        'cont_desc3',
        'codigo_mapa',
        'img_lugar_logo',
        'link_webinar'
    ];

    public function CalendarEvent(){
        return $this->belongsTo(Calendario::class,'id_calendario');
    }
}

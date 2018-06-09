<?php

namespace Inelco\Modelos;

use Illuminate\Database\Eloquent\Model;

class Calendario extends Model
{
    protected $table='calendario';
    protected $primarykey ='id';

    protected $fillable =[
        'id',
        'id_categoria',
    	'nombre_evento',
    	'descripcion_evento',
    	'numero_dias_evento',
    	'nombre_dias_evento',
    	'horario_evento',
    	'link_landing_evento',
        'duracion_evento',
        'cantidad_cupo',
        'expositor',
        'producto',
        'habilitado',
        'mes',
        'anio',
        'etiqueta_url',
        'precio_evento',
        'estado',
        'ciudad',
        'lugar',
        'direccion',
        'cp_evento'
    ];

    public function categoriaEvento(){
        return $this->belongsTo(CategoriaEventos::class,'id_categoria');
    }

    public function landingEvent(){
        return $this->hasOne(Landing::class, 'id_calendario');
    }
}

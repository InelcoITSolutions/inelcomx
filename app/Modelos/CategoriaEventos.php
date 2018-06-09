<?php

namespace Inelco\Modelos;

use Illuminate\Database\Eloquent\Model;

class CategoriaEventos extends Model
{
    protected $table = 'categorias_eventos';
    protected $primarykey ='id';
    protected $fillable =[
    	'id',
    	'evento_categoria'
    ];

    public function calendarEvents(){
        return $this->hasMany(Calendario::class,'id_categoria');
    }

}

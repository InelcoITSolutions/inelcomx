<?php

namespace Inelco\Modelos;

use Illuminate\Database\Eloquent\Model;

class Kit extends Model
{
    protected $table='kit';
    protected $primarykey ='id';

    protected $fillable =[
        'id',
        'nombre_kit',
    	'descripcion_kit',
        'precio'
    ];


    public function articulos()
    {
        return $this->hasMany(KitArticulos::class);
    }

    public function kitProdsVendidos(){
        return $this->belongsTo(VentasArticulos::class);
    }
    
}

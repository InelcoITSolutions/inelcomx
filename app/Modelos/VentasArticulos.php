<?php

namespace Inelco\Modelos;

use Illuminate\Database\Eloquent\Model;

class VentasArticulos extends Model
{
    protected $table='ventas_articulos';
    protected $primarykey ='id';
    
    protected $fillable =[
        'id',
        'ventas_id',
        'id_producto',
        'id_kit',
        'cantidad',
    	'precio'
    ];

    public function productoVendido(){
        return $this->hasOne(Productos::class, 'id', 'id_producto');
    }

    public function venta()
    {
        return $this->belongsTo(Ventas::class, 'ventas_id');
    }

    public function kitVendido(){
        return $this->hasOne(Kit::class);
    }

    

}

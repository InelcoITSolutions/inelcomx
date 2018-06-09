<?php

namespace Inelco\Modelos;

use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    protected $table='ventas';
    protected $primarykey ='id';

    protected $fillable =[
        'user_id',
    	'total',
        'estado_venta'
    ];

    public function articulosVendidos()
    {
        return $this->hasMany(VentasArticulos::class,'ventas_id','id');
    }

    public function compra()
    {
        return $this->belongsTo(User::class);
    }

    
    
    
}

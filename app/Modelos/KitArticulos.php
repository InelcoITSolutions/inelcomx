<?php

namespace Inelco\Modelos;

use Illuminate\Database\Eloquent\Model;

class KitArticulos extends Model
{
    protected $table='kit_articulos';
    protected $primarykey ='id';

    protected $fillable =[
    	'id',
        'id_kit',
    	'id_producto',
        'cantidad'
    ];

    public function productoKit(){
        return $this->hasOne(Productos::class);
    }

    public function kit()
    {
        return $this->belongsTo(Kit::class);
    }

}

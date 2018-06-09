<?php

namespace Inelco\Modelos;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $table='productos';
    protected $primarykey ='id';

    protected $fillable =[
        'id',
        'clave',
    	'clave_proveedor',
    	'nombre_prod',
    	'descripcion_prod',
        'incluye_prod',
    	'marca',
    	'link_prod',
    	'tipo',
        'precio_prod',
        'logo_prod',
        'img1_prod',
        'img2_prod',
        'img3_prod',
        'img4_prod',
        'img5_prod',
        'flyer_prod'
    ];

    public function articuloVendido(){
        return $this->belongsTo(VentasArticulos::class,'id_producto');
    }

    public function articuloKit(){
        return $this->belongsTo(KitArticulos::class);
    }

    

}

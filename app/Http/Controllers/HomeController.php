<?php

namespace Inelco\Http\Controllers;

use Illuminate\Http\Request;
use Inelco\User;
use Inelco\Modelos\Descargas;
use Inelco\Modelos\Ventas;
use Inelco\Modelos\Reservacion;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $compras=Ventas::with('articulosVendidos','articulosVendidos.productoVendido')->where('user_id' , \Auth::user()->id)->get();
        /*$compras=Ventas::join('ventas_articulos', 'ventas.id','=','ventas_articulos.ventas_id')
                         ->select('ventas.*','ventas_articulos.nombre_software as nom_soft')
                         ->where('user_id' , \Auth::user()->id)
                         ->get();*/
        //dd($compras);
        $descargas=Descargas::join('link_descarga', 'descargas.link_descarga_id','=','link_descarga.id')
                        ->select('descargas.*','link_descarga.nombre_software as nom_soft')
                        ->where('email_usuario',Auth::User()->email)
                        ->orWhere('email_usuario',Auth::User()->correo_facturacion)  
                        ->get();

        $reservations=Reservacion::where('email',Auth::User()->email)
                        ->orWhere('email',Auth::User()->correo_facturacion)  
                        ->get();

        return view('home', compact('descargas','compras','reservations'));
    }
}

<?php

namespace Inelco\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Inelco\Http\Requests;
use Inelco\Http\Controllers\Controller;
use Inelco\Modelos\Calendario;
use Inelco\Modelos\CategoriaEventos;

class CalendarioController extends Controller
{


    /*function __construct(){
        $this->middleware('auth:admin');
    }*/
    
   public function index(){
        $eventos=Calendario::
            //select('calendario.*','categorias_eventos.evento_categoria as tipo_evento')
        //->join('categorias_eventos', 'calendario.id','=','categorias_eventos.id')
            join('categorias_eventos', 'calendario.id_categoria','=','categorias_eventos.id')
            ->select('calendario.*','categorias_eventos.evento_categoria as tipo_evento')
            ->paginate(10);

        return view('admin.calendario.index',['eventos' =>$eventos]);
    }

    public function create()
    {
        //$category=CategoriaEventos::lists('evento_categoria','id')->prepend('Seleccione categoría');
        $category=CategoriaEventos::pluck('evento_categoria','id');
        return view('admin.calendario.create')->with('category',$category);
    }

    public function store(Request $request){
        $this->validate($request, [
            'id_categoria'=> 'required',
            'nombre_evento' => 'required|max:255',
            'descripcion_evento'=>'required',
            'numero_dias_evento' => 'required|max:30',
            'nombre_dias_evento' => 'required|max:255',
            'horario_evento' => 'required|max:30',
            'link_landing_evento' => 'required|max:100',
            'duracion_evento' => 'required|max:15',
            'cantidad_cupo' => 'required|max:4',
            'expositor' => 'max:255',
            'producto' => 'required|max:255',
            'habilitado' => 'required|max:2',
            'mes' => 'required',
            'anio' => 'required|max:4',
            'etiqueta_url' => 'required|max:30',
            'precio_evento' => 'required|max:8',
            'estado' => 'max:100',
            'ciudad' => 'max:100',
            'lugar' => 'max:100',
            'direccion' => 'max:255',
            'cp_evento' => 'max:5'
        ]);

        Calendario::create($request->all());
        return redirect('admin/calendario')->with('mensaje','Se ha agregado el evento de manera exitosa');
    }


    public function edit(Calendario $calendario){
        $category=CategoriaEventos::pluck('evento_categoria','id');
        return view('admin.calendario.editar', array('calendario'=>$calendario, 'category'=>$category));
    }


    public function update(Request $request, Calendario $calendario){
        $this->validate($request, [
            'id_categoria'=> 'required',
            'nombre_evento' => 'required|max:255',
            'descripcion_evento'=>'required',
            'numero_dias_evento' => 'required|max:30',
            'nombre_dias_evento' => 'required|max:255',
            'horario_evento' => 'required|max:30',
            'link_landing_evento' => 'required|max:100',
            'duracion_evento' => 'required|max:15',
            'cantidad_cupo' => 'required|max:4',
            'expositor' => 'max:255',
            'producto' => 'required|max:255',
            'habilitado' => 'required|max:2',
            'mes' => 'required',
            'anio' => 'required|max:4',
            'etiqueta_url' => 'required|max:30',
            'precio_evento' => 'required|max:8',
            'estado' => 'max:100',
            'ciudad' => 'max:100',
            'lugar' => 'max:100',
            'direccion' => 'max:255',
            'cp_evento' => 'max:5'
        ]);

        $calendario->update($request->all());
        return redirect('admin/calendario')->with('mensaje', 'Se ha actualizado el evento de manera exitosa');
    }


    public function destroy(Calendario $calendario){
        $calendario->delete();
        return redirect('admin/calendario')->with('mensaje', 'Se ha elmininado el evento de manera exitosa');
    }
}

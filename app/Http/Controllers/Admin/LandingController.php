<?php

namespace Inelco\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Inelco\Http\Requests;
use Inelco\Http\Controllers\Controller;
use Inelco\Modelos\Calendario;
use Inelco\Modelos\Landing;
use DB;

class LandingController extends Controller
{
   public function index(){
        $landing=Landing::
            join('calendario', 'landing.id_calendario','=','calendario.id')
            ->select('landing.*','calendario.nombre_evento')
            ->paginate(7);

        return view('admin.landing.index',['landing' =>$landing]);
    }

    public function create()
    {   
        $calendarEv=DB::table('calendario')
            ->whereNotExists(function ($query) {
                $query->select(DB::raw('id'))
                      ->from('landing')
                      ->whereRaw('landing.id_calendario = calendario.id');
            })
            ->pluck('nombre_evento','id');


        /*$calendarEv = DB::table('calendario')
                ->whereNotIn('calendario.id', function($query)
                {
                    $query->select(DB::raw('id'))
                          ->from('landing')
                          ->whereRaw('landing.id_calendario = calendario.id');
                })
                ->pluck('nombre_evento','id');*/
                
        //$calendarEv=Calendario::pluck('nombre_evento','id');
        return view('admin.landing.create')->with('calendarEv',$calendarEv);
    }

    public function store(Request $request){
        $this->validate($request, [
            'id_calendario'=> 'required',
            'logo_coanfitrion' => 'max:255',
            'img_producto_banner'=>'required|max:100',
            'img_producto' => 'required|max:100',
            'parrafo1' => 'required',
            'link_temario' => 'max:255',
            'dirigido1' => 'required|max:255',
            'dirigido2' => 'required|max:255',
            'dirigido3' => 'required|max:255',
            'dirigido4' => 'max:255',
            'frase' => 'max:255',
            'title_desc1'=>'max:255',
            'img_desc1'=>'max:255',
            'title_desc2'=>'max:255',
            'img_desc2'=>'max:255',
            'title_desc3'=>'max:255',
            'img_desc3'=>'max:255',
            'link_webinar'=>'max:255'
            //'codigo_mapa' => 'required'
        ]);

        Landing::create($request->all());
        return redirect('admin/landing')->with('mensaje','Se ha agregado la landing page de manera exitosa');
    }


    public function edit(Landing $landing){
        $calendarEv=landing::with('CalendarEvent','CalendarEvent.categoriaEvento')
                    ->where('id',$landing->id)
                    ->first();
        //dd($calendarEv);

    	//$calendarEv=Calendario::pluck('nombre_evento','id');

        return view('admin.landing.editar', array('landing'=>$calendarEv));
    }


    public function update(Request $request, Landing $landing){
        $this->validate($request, [
            //'id_calendario'=> 'required',
            'logo_coanfitrion' => 'max:255',
            'img_producto_banner'=>'required|max:100',
            'img_producto' => 'required|max:100',
            'parrafo1' => 'required',
            'link_temario' => 'max:255',
            'dirigido1' => 'required|max:255',
            'dirigido2' => 'required|max:255',
            'dirigido3' => 'max:255',
            'dirigido4' => 'max:255',
            'frase' => 'max:255',
            'title_desc1'=>'max:255',
            'img_desc1'=>'max:255',
            'title_desc2'=>'max:255',
            'img_desc2'=>'max:255',
            'title_desc3'=>'max:255',
            'img_desc3'=>'max:255',
            'link_webinar'=>'max:255'
            //'codigo_mapa' => 'required'
        ]);

        $landing->update($request->all());
        return redirect('admin/landing')->with('mensaje', 'Se ha actualizado la landing del evento de manera exitosa');
    }


    public function destroy(Landing $landing){
        $landing->delete();
        return redirect('admin/landing')->with('mensaje', 'Se ha eliminado la landing del evento de manera exitosa');
    }
}

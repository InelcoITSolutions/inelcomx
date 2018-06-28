<?php

namespace Inelco\Http\Controllers;
use Illuminate\Http\Request;
use Inelco\Http\Requests;
use Inelco\Modelos\Landing;
use Inelco\Modelos\Calendario;
use Inelco\Modelos\Reservacion;
use Inelco\Modelos\Descargas;
use Inelco\Modelos\link_descarga;
use Inelco\Modelos\Productos;
use Mail;

use Illuminate\Support\Facades\Input;

class MyController extends Controller{

    public function index(){
    	return view('index'); 
    }

    // public function servicios(){
    //     return view('servicios');
    // }

    public function promocionsaebanco(){
        return view('promociones.promocion-sae-banco');
    }

    public function promocioncoinoi(){
        return view('promociones.promocion-coi-noi');
    }
    public function promocioncoibanco(){
        return view('promociones.promocion-coi-banco');
    }

    public function promocionsaecoinoibanco(){
        return view('promociones.promocion-sae-coi-noi-banco');
    }
/*  ===========================
        Servicios Inelco Beta
    ===========================  */

    public function servicios(){
        return view('servicios.servicios');
    }

    public function implementacion(){
        return view('servicios.implementacion.implementacion');
    }

    public function asesoria(){
        return view('servicios.asesoria.asesoria');
    }

    public function consultoria(){
        return view('servicios.consultoria.consultoria');
    }

    public function capacitacion(){
        return view('servicios.capacitacion.capacitacion');
    }

    public function soporte(){
        return view('servicios.soporte.soporte');
    }

    public function seguridad(){
        return view('servicios.seguridad.seguridad');
    }

    public function seguridad_informatica(){
        return view('servicios.seguridad.seguridad-informatica');
    }

    public function promociones(){
        return view('promociones.promociones');
    }
/*  ===========================
        Controllers Actuales
    ===========================  */
    public function calendario(){
       
                 $calendario=Calendario::join('categorias_eventos', 'calendario.id_categoria','=','categorias_eventos.id')
                    ->select('calendario.*','categorias_eventos.evento_categoria as tipo_evento')
                    ->where('habilitado','SI')
                    ->where('estado','NUEVO LEON')
                    ->orderBy('anio','asc')
                    ->orderBy('mes','asc')
                    ->orderBy('numero_dias_evento','asc')            
                    ->get();
                    return view('calendario',['calendario' =>$calendario]);
    }

/*las funciones son para los botones de seleccion de los calendarios de INELCO */
    

/*calendario Webinar Inelco*/
    public function calendarioWebinar(){
       
                 $calendarioWebinar=Calendario::join('categorias_eventos', 'calendario.id_categoria','=','categorias_eventos.id')
                    ->select('calendario.*','categorias_eventos.evento_categoria as tipo_evento')
                    ->where('habilitado','SI')
                    ->where('id_categoria','7')
                    ->orderBy('anio','asc')
                    ->orderBy('mes','asc')
                    ->orderBy('numero_dias_evento','asc')            
                    ->get();
                    return view('calendarios-inelco.calendario-webinar',['calendarioWebinar' =>$calendarioWebinar]);
    }

/*calendario Talleres Inelco*/
    public function calendarioTalleres(){
       
                 $calendarioTalleres=Calendario::join('categorias_eventos', 'calendario.id_categoria','=','categorias_eventos.id')
                    ->select('calendario.*','categorias_eventos.evento_categoria as tipo_evento')
                    ->where('habilitado','SI')
                    ->where('id_categoria','6')
                    ->orderBy('anio','asc')
                    ->orderBy('mes','asc')
                    ->orderBy('numero_dias_evento','asc')            
                    ->get();
                    return view('calendarios-inelco.calendario-talleres',['calendarioTalleres' =>$calendarioTalleres]);
    }

/*calendario Cursos Inelco*/
    public function calendarioCursos(){
       
                 $calendarioCursos=Calendario::join('categorias_eventos', 'calendario.id_categoria','=','categorias_eventos.id')
                    ->select('calendario.*','categorias_eventos.evento_categoria as tipo_evento')
                    ->where('habilitado','SI')
                    ->where('estado','NUEVO LEON')
                    ->where('id_categoria','5')
                    ->orderBy('anio','asc')
                    ->orderBy('mes','asc')
                    ->orderBy('numero_dias_evento','asc')            
                    ->get();
                    return view('calendarios-inelco.calendario-cursos',['calendarioCursos' =>$calendarioCursos]);
    }

/*calendario Presentacion Inelco*/
    public function calendarioPresentaciones(){
       
                 $calendarioPresentaciones=Calendario::join('categorias_eventos', 'calendario.id_categoria','=','categorias_eventos.id')
                    ->select('calendario.*','categorias_eventos.evento_categoria as tipo_evento')
                    ->where('habilitado','SI')
                    ->where('id_categoria','4')
                    ->orderBy('anio','asc')
                    ->orderBy('mes','asc')
                    ->orderBy('numero_dias_evento','asc')            
                    ->get();
                    return view('calendarios-inelco.calendario-presentaciones',['calendarioPresentaciones' =>$calendarioPresentaciones]);
    }

/*calendario Conferencias Inelco*/
    public function calendarioConferencias(){
       
                 $calendarioConferencias=Calendario::join('categorias_eventos', 'calendario.id_categoria','=','categorias_eventos.id')
                    ->select('calendario.*','categorias_eventos.evento_categoria as tipo_evento')
                    ->where('habilitado','SI')
                    ->where('id_categoria','8')
                    ->orderBy('anio','asc')
                    ->orderBy('mes','asc')
                    ->orderBy('numero_dias_evento','asc')            
                    ->get();
                    return view('calendarios-inelco.calendario-conferencias',['calendarioConferencias' =>$calendarioConferencias]);
    }

/*aqui empieza los filtros del calendario de aspel soluciones*/

/*funcion del calendario de aspel soluciones*/
     public function calendario1(){
        $calendario1=Calendario::join('categorias_eventos', 'calendario.id_categoria','=','categorias_eventos.id')
            ->select('calendario.*','categorias_eventos.evento_categoria as tipo_evento')
            ->where('habilitado','SI')

            ->orderBy('anio','asc')
            ->orderBy('mes','asc')
            ->orderBy('numero_dias_evento','asc')            
            ->get();
        return view('aspelsoluciones-calendario',['calendario1' =>$calendario1]);

    }

/*calendario Webinar aspel*/
    public function aspelWebinar(){
       
                 $aspelWebinar=Calendario::join('categorias_eventos', 'calendario.id_categoria','=','categorias_eventos.id')
                    ->select('calendario.*','categorias_eventos.evento_categoria as tipo_evento')
                    ->where('habilitado','SI')
                    ->where('id_categoria','7')
                    ->orderBy('anio','asc')
                    ->orderBy('mes','asc')
                    ->orderBy('numero_dias_evento','asc')            
                    ->get();
                    return view('calendarios-aspelsoluciones.calendario-webinar',['aspelWebinar' =>$aspelWebinar]);
    }

/*calendario Talleres aspel*/
    public function aspelTalleres(){
       
                 $aspelTalleres=Calendario::join('categorias_eventos', 'calendario.id_categoria','=','categorias_eventos.id')
                    ->select('calendario.*','categorias_eventos.evento_categoria as tipo_evento')
                    ->where('habilitado','SI')
                    ->where('id_categoria','6')
                    ->orderBy('anio','asc')
                    ->orderBy('mes','asc')
                    ->orderBy('numero_dias_evento','asc')            
                    ->get();
                    return view('calendarios-aspelsoluciones.calendario-talleres',['aspelTalleres' =>$aspelTalleres]);
    }

/*calendario Cursos aspel*/
    public function aspelCursos(){
       
                 $aspelCursos=Calendario::join('categorias_eventos', 'calendario.id_categoria','=','categorias_eventos.id')
                    ->select('calendario.*','categorias_eventos.evento_categoria as tipo_evento')
                    ->where('habilitado','SI')
                    ->where('id_categoria','5')
                    ->orderBy('anio','asc')
                    ->orderBy('mes','asc')
                    ->orderBy('numero_dias_evento','asc')            
                    ->get();
                    return view('calendarios-aspelsoluciones.calendario-cursos',['aspelCursos' =>$aspelCursos]);
    }

/*calendario Presentacion aspel*/
    public function aspelPresentaciones(){
       
                 $aspelPresentaciones=Calendario::join('categorias_eventos', 'calendario.id_categoria','=','categorias_eventos.id')
                    ->select('calendario.*','categorias_eventos.evento_categoria as tipo_evento')
                    ->where('habilitado','SI')
                    ->where('id_categoria','4')
                    ->orderBy('anio','asc')
                    ->orderBy('mes','asc')
                    ->orderBy('numero_dias_evento','asc')            
                    ->get();
                    return view('calendarios-aspelsoluciones.calendario-presentaciones',['aspelPresentaciones' =>$aspelPresentaciones]);
    }

/*calendario Conferencias aspel*/
    public function aspelConferencias(){
       
                 $aspelConferencias=Calendario::join('categorias_eventos', 'calendario.id_categoria','=','categorias_eventos.id')
                    ->select('calendario.*','categorias_eventos.evento_categoria as tipo_evento')
                    ->where('habilitado','SI')
                    ->where('id_categoria','8')
                    ->orderBy('anio','asc')
                    ->orderBy('mes','asc')
                    ->orderBy('numero_dias_evento','asc')            
                    ->get();
                    return view('calendarios-aspelsoluciones.calendario-conferencias',['aspelConferencias' =>$aspelConferencias]);
    }


/*calendario de syca*/
    public function calendario2(){
        $calendario2=Calendario::join('categorias_eventos', 'calendario.id_categoria','=','categorias_eventos.id')
            ->select('calendario.*','categorias_eventos.evento_categoria as tipo_evento')
            ->where('habilitado','SI')
            ->where('estado', 'SAN LUIS POTOSI')
            ->orderBy('anio','asc')
            ->orderBy('mes','asc')
            ->orderBy('numero_dias_evento','asc')            
            ->get();
        return view('syca-calendario',['calendario2' =>$calendario2]);

    }

/*calendario syca con filtro de webinar*/
    
    public function sycaWebinar(){
        
         $sycaWebinar=Calendario::join('categorias_eventos', 'calendario.id_categoria','=','categorias_eventos.id')
                    ->select('calendario.*','categorias_eventos.evento_categoria as tipo_evento')
                    ->where('habilitado','SI')
                    ->where('id_categoria','7')
                    ->orderBy('anio','asc')
                    ->orderBy('mes','asc')
                    ->orderBy('numero_dias_evento','asc')            
                    ->get();
                    return view('calendarios-syca.calendario-webinar',['sycaWebinar' =>$sycaWebinar]);
    }

/*calendario syca con filtro de talleres*/
    public function sycaTalleres(){

        $sycaTalleres=Calendario::join('categorias_eventos', 'calendario.id_categoria','=','categorias_eventos.id')
                    ->select('calendario.*','categorias_eventos.evento_categoria as tipo_evento')
                    ->where('habilitado','SI')
                    ->where('id_categoria','6')
                    ->where('estado', 'SAN LUIS POTOSI')
                    ->orderBy('anio','asc')
                    ->orderBy('mes','asc')
                    ->orderBy('numero_dias_evento','asc')            
                    ->get();
                    return view('calendarios-syca.calendario-talleres',['sycaTalleres' =>$sycaTalleres]);
    }




/*calendario syca con filtro de presentaciones*/
    public function sycaPresentaciones(){

        $sycaPresentaciones=Calendario::join('categorias_eventos', 'calendario.id_categoria','=','categorias_eventos.id')
                    ->select('calendario.*','categorias_eventos.evento_categoria as tipo_evento')
                    ->where('habilitado','SI')
                    ->where('id_categoria','4')
                    ->where('estado', 'SAN LUIS POTOSI')
                    ->orderBy('anio','asc')
                    ->orderBy('mes','asc')
                    ->orderBy('numero_dias_evento','asc')            
                    ->get();
                    return view('calendarios-syca.calendario-presentaciones',['sycaPresentaciones' =>$sycaPresentaciones]);
    }

    /*calendario syca con filtro de cursos*/
    public function sycaCursos(){

        $sycaCursos=Calendario::join('categorias_eventos', 'calendario.id_categoria','=','categorias_eventos.id')
                    ->select('calendario.*','categorias_eventos.evento_categoria as tipo_evento')
                    ->where('habilitado','SI')
                    ->where('id_categoria','5')
                    ->where('estado', 'SAN LUIS POTOSI')
                    ->orderBy('anio','asc')
                    ->orderBy('mes','asc')
                    ->orderBy('numero_dias_evento','asc')            
                    ->get();
                    return view('calendarios-syca.calendario-cursos',['sycaCursos' =>$sycaCursos]);
    }

 /*calendario syca con filtro de cursos*/
    public function sycaConferencias(){

        $sycaConferencias=Calendario::join('categorias_eventos', 'calendario.id_categoria','=','categorias_eventos.id')
                    ->select('calendario.*','categorias_eventos.evento_categoria as tipo_evento')
                    ->where('habilitado','SI')
                    ->where('id_categoria','8')
                    ->where('estado', 'SAN LUIS POTOSI')
                    ->orderBy('anio','asc')
                    ->orderBy('mes','asc')
                    ->orderBy('numero_dias_evento','asc')            
                    ->get();
                    return view('calendarios-syca.calendario-conferencias',['sycaConferencias' =>$sycaConferencias]);
    }

/*================ CALENDARIO SOLUCIONESPARARESTAURANTES ============================
 -+-+-+-+-+-+-+-+-+-+-+-+-+-+- I N I C I O -+-+-+-+-+-+-+-+-+-+-+-++-+-+--+-+-*/

/* Landing principal */
    public function calendariorestaurantes(){
        $calendariorestaurantes=Calendario::join('categorias_eventos', 'calendario.id_categoria','=','categorias_eventos.id')
            ->select('calendario.*','categorias_eventos.evento_categoria as tipo_evento')
            ->where('habilitado','SI')
            // ->where('estado', 'SAN LUIS POTOSI')
            ->orderBy('anio','asc')
            ->orderBy('mes','asc')
            ->orderBy('numero_dias_evento','asc')            
            ->get();
        return view('solucionespararestaurantes-calendario',['calendariorestaurantes' =>$calendariorestaurantes]);

    }

    /*calendario spr con filtro de webinar*/
    
    public function sprWebinar(){
        
         $sprWebinar=Calendario::join('categorias_eventos', 'calendario.id_categoria','=','categorias_eventos.id')
                    ->select('calendario.*','categorias_eventos.evento_categoria as tipo_evento')
                    ->where('habilitado','SI')
                    ->where('id_categoria','7')
                    ->orderBy('anio','asc')
                    ->orderBy('mes','asc')
                    ->orderBy('numero_dias_evento','asc')            
                    ->get();
                    return view('calendarios-spr.calendario-webinar',['sprWebinar' =>$sprWebinar]);
    }

/*calendario spr con filtro de talleres*/
    public function sprTalleres(){

        $sprTalleres=Calendario::join('categorias_eventos', 'calendario.id_categoria','=','categorias_eventos.id')
                    ->select('calendario.*','categorias_eventos.evento_categoria as tipo_evento')
                    ->where('habilitado','SI')
                    ->where('id_categoria','6')
                    //->where('estado', 'SAN LUIS POTOSI')
                    ->orderBy('anio','asc')
                    ->orderBy('mes','asc')
                    ->orderBy('numero_dias_evento','asc')            
                    ->get();
                    return view('calendarios-spr.calendario-talleres',['sprTalleres' =>$sprTalleres]);
    }




/*calendario spr con filtro de presentaciones*/
    public function sprPresentaciones(){

        $sprPresentaciones=Calendario::join('categorias_eventos', 'calendario.id_categoria','=','categorias_eventos.id')
                    ->select('calendario.*','categorias_eventos.evento_categoria as tipo_evento')
                    ->where('habilitado','SI')
                    ->where('id_categoria','4')
                    //->where('estado', 'SAN LUIS POTOSI')
                    ->orderBy('anio','asc')
                    ->orderBy('mes','asc')
                    ->orderBy('numero_dias_evento','asc')            
                    ->get();
                    return view('calendarios-spr.calendario-presentaciones',['sprPresentaciones' =>$sprPresentaciones]);
    }

    /*calendario spr con filtro de cursos*/
    public function sprCursos(){

        $sprCursos=Calendario::join('categorias_eventos', 'calendario.id_categoria','=','categorias_eventos.id')
                    ->select('calendario.*','categorias_eventos.evento_categoria as tipo_evento')
                    ->where('habilitado','SI')
                    ->where('id_categoria','5')
                    //->where('estado', 'SAN LUIS POTOSI')
                    ->orderBy('anio','asc')
                    ->orderBy('mes','asc')
                    ->orderBy('numero_dias_evento','asc')            
                    ->get();
                    return view('calendarios-spr.calendario-cursos',['sprCursos' =>$sprCursos]);
    }

 /*calendario syca con filtro de cursos*/
    public function sprConferencias(){

        $sprConferencias=Calendario::join('categorias_eventos', 'calendario.id_categoria','=','categorias_eventos.id')
                    ->select('calendario.*','categorias_eventos.evento_categoria as tipo_evento')
                    ->where('habilitado','SI')
                    ->where('id_categoria','8')
                    //->where('estado', 'SAN LUIS POTOSI')
                    ->orderBy('anio','asc')
                    ->orderBy('mes','asc')
                    ->orderBy('numero_dias_evento','asc')            
                    ->get();
                    return view('calendarios-spr.calendario-conferencias',['sprConferencias' =>$sprConferencias]);
    }

/*-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+ F I N -+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+*/




    /*calendario care*/
    public function calendario3(){
        $calendario3=Calendario::join('categorias_eventos', 'calendario.id_categoria','=','categorias_eventos.id')
            ->select('calendario.*','categorias_eventos.evento_categoria as tipo_evento')
            ->where('habilitado','SI')
            ->orderBy('anio','asc')
            ->orderBy('mes','asc')
            ->orderBy('numero_dias_evento','asc')            
            ->get();
        return view('care-calendario',['calendario3' =>$calendario3]);

    }


    /*prueba para ver los cursos  por webinar
      public function pruebaWebinar(){
        if(isset($_POST['filtro'])){
        switch($_POST['filtro']){
            case "todos":
                $pruebaWebinar=Calendario::join('categorias_eventos', 'calendario.id_categoria','=','categorias_eventos.id')
                    ->select('calendario.*','categorias_eventos.evento_categoria as tipo_evento')
                    ->where('habilitado','SI')
                    ->where('id_categoria','7')
                    ->orderBy('anio','asc')
                    ->orderBy('mes','asc')
                    ->orderBy('numero_dias_evento','asc')            
                    ->get();
                return view('calendario',['pruebaWebinar' =>$pruebaWebinar]);
                break;
            case "recientes":
                $sql = "select * from productos order by fecha_registro asc;";
                break;
            case "antiguos":
                $sql = "select * from productos order by fecha_registro desc;";
                break;
            case "caros":
                $sql = "select * from productos order by precio desc;";
                break;
            case "economicos":
                $sql = "select * from productos order by precio asc;";
                break;
        }
    }

        

    }


    /*public function conf(Request $request){
        return view('confirmar_registro', ['request'=>$request]);
    }*/
    private $recibido;
    private $arpdf;

    public function reservacion(Request $request){

        // $usuarios = new Usuario;

        // $usuarios->reservacion = $request->no_reservacion;
        // $evento->reservacion = $request->evento;

        $this->validate($request, [
            'nombre'=> 'required|max:255',
            'apellidos' => 'required|max:255',
            'empresa'=>'required|max:255',
            'telefono' => 'required|max:30',
            'email' => 'required|max:255'
        ]);


        foreach ($request->nombre as $key => $v) {
            $data = array('nombre' => $request->nombre[$key],
                    'apellidos' => $request->apellidos[$key],
                    'empresa' => $request->empresa[$key],
                    'telefono' => $request->telefono[$key],
                    'email' => $request->email[$key],
                    'evento' => $request->evento,
                    'no_reservacion' => 'GP' . $request->no_reservacion . 'US' . $key,
                    'link_webinar' => $request->link_webinar,
                    'fecha' => $request->fecha,
                    'horario' => $request->horario,
                    'lugar' => $request->lugar,
                    'direccion' => $request->direccion,
                    'ciudad' => $request->ciudad,
                    'paga' => $request->paga,
                    'enviarc' => $request->enviarm[$key]
                );
            //$this->recibido=$request;
            //if(!$this->recibido->link_webinar){
               // $this->arpdf=$this->pdf($data[]);
            //}
            
            Reservacion::create($data);
            
            
            if($data['enviarc'] == 'pago') {
                
                 Mail::send('templates.email', $data, function ($message) use($data) {
                    
                    //remitente
                    $message->from('reservacion@inelco.mx','Centro de Capacitacion Inelco');
                    //asunto
                    $message->subject('Reservacion al evento: RESERVACIÓN Y PAGO | '. $data['evento']);
                    //archivo adjunto
                    if(!$data['link_webinar']){
                        $pdf = \PDF::loadView('reservation_pdf', ['data' => $data])->stream('reservacion-presentacion.pdf');
                        $message->attachData($pdf, 'reservacion-presentacion.pdf');
                    }
                    
                    //receptor
                    $message->to($data['email'], $data['nombre'].' '.$data['apellidos'].' | '.$data['empresa']);
                    $message->cc('reservacion@inelco.mx');
                });          
           } else {
                Mail::send('templates.email', $data, function ($message) use($data) {
                    
                    //remitente
                    $message->from('reservacion@inelco.mx','Centro de Capacitacion Inelco');
                    //asunto
                    $message->subject('Reservacion al evento: SOLO RESERVACIÓN');
                    //archivo adjunto
                    if(!$data['link_webinar']){
                        $pdf = \PDF::loadView('reservation_pdf', ['data' => $data])->stream('reservacion-presentacion.pdf');
                        $message->attachData($pdf, 'reservacion-presentacion.pdf');
                    }
                    
                    //receptor
                    $message->to($data['email'], 'Prueba email');
                    $message->cc('reservacion@inelco.mx');
                });
            }
        }

        return view('confirmar_registro', compact('request'));
    }

    public function pdf($recibido){   
        $recibi=$recibido;
        $pdf     = \PDF::loadView('reservation_pdf', ['recibi' => $recibi]);
        return $pdf->stream('reservacion-presentacion.pdf');
    }



    private $soft;
    public function saveDownload(Request $request){
        
        $this->validate($request, [
            'email_usuario' => 'required|max:255',
        ]);

        $this->recibido=$request;

        $this->soft=link_descarga::where('nombre_software', $request->software)->first();
        //$this->arpdf=$this->pdf($request);
        Mail::send('templates.respuesta_download', [
            'sistema' =>$this->soft->nombre_software,
            'link' =>$this->soft->link_software,
            ],function ($message) {
            
            //remitente
            $message->from('contacto@inelco.com.mx');
            //asunto
            $message->subject('Link de descarga de '.$this->soft->nombre_software);
            //archivo adjunto
            //$message->attachData($this->arpdf, 'reservacion-presentacion.pdf');
            //receptor
            $message->to($this->recibido->email_usuario, $this->recibido->contribuyente);
            $message->cc('contacto@inelco.com.mx');
        });

        Descargas::create([
                'email_usuario' => $request->email_usuario,
                'razon_social' => $request->razon_social,
                'nombre_comercial' => $request->nombre_comercial,
                'rfc' => $request->rfc,
                'contribuyente' => $request->contribuyente,
                'telefono' => $request->telefono,
                'link_descarga_id' => $this->soft->id
            ]);
        
        //return $pdf->download('reservacion-presentacion.pdf');
        return redirect()->back()->with('mensaje','Te hemos enviado el link de descarga a tu email. (En caso de no ver el enlace, comprobar en la carpeta de correo no deseado.)');
    }



    //controlador para mail de COI POP UP
   public function coi_nuevopopup(){
        return view('aspel.coi.lo-nuevo');
    }

    public function nosotros(){
        return view('nosotros');
    }

    public function contacto(){
    	return view('contacto');
    }

    public function descargas(){
        return view('descargas');
    }

    public function complemento(){
        return view('complemento-pago');
    }

    public function infodownload(Request $request){
        $info=Productos::where('nombre_prod',$request->nombre_prod)
            ->first();
        return view('infodownloads', compact('info'));
    }

    public function FAQs(){
        return view('preguntas-frecuentes');
    }

    public function knowledge(){
        return view('base-de-conocimientos');
    }

    public function hardware(){
        return view('hardware');
    }

    public function nominadig(){
        return view('nominadig');
    }

    /*public function sae(){
    	return view('aspel.sae');
    }*/

    public function aspel(){
        return view('aspel.aspel');
    }


    public function saenube(){
        return view('aspel.saenube.saenube');
    }

    public function saenubesoluciones(){
        return view('aspel.saenube.soluciones');
    }  
    public function saenube_nuevo(){
        return view('aspel.saenube.lo-nuevo');
    }
    public function saenube_movil(){
        return view('aspel.saenube.sae-nube-movil');
    }


  public function espacio(){
        return view('aspel.espacio.espacio');
    }

    public function espaciomodalidades(){
        return view('aspel.espacio.modalidades');
    }  
    public function espacionuevo(){
        return view('aspel.espacio.lo-nuevo');
    }
    public function espacioprecio(){
        return view('aspel.espacio.lista-precios');
    }

    public function admtienda(){
        return view('aspel.admtienda.admtienda');
    }

    public function admtiendasoluciones(){
        return view('aspel.admtienda.soluciones');
    }  
    public function admtiendanuevo(){
        return view('aspel.admtienda.lo-nuevo');
    }
    public function admtiendaprecio(){
        return view('aspel.admtienda.lista-precios');
    }

     public function admtiendadisp(){
        return view('aspel.admtienda.dispositivos-compatibles');
    }
   
   /*link para facturacion electronica landing*/
   public function factur(){
        return view('facturacion.2017.facturacion');
   }

    public function sycafactur(){
        return view('facturacion.2017.syca-facturacion');
   }

    public function factur2(){
        return view('facturacion.2017.facturacion');
   }


    public function sae(){
        return view('aspel.sae.sae');
    }
    public function saesoluciones(){
        return view('aspel.sae.soluciones');
    }  
    public function sae_nuevo(){
        return view('aspel.sae.lo-nuevo');
    }
    public function sae_movil(){
        return view('aspel.sae.sae-movil');
    }

    public function adm(){
        return view('aspel.adm.adm');
    }
    public function admsoluciones(){
        return view('aspel.adm.soluciones');
    }  
    public function adm_nuevo(){
        return view('aspel.adm.lo-nuevo');
    }

    public function banco(){
        return view('aspel.banco.banco');
    }
    public function bancosoluciones(){
        return view('aspel.banco.soluciones');
    }  
    public function banco_nuevo(){
        return view('aspel.banco.lo-nuevo');
    } 

    public function caja(){
        return view('aspel.caja.caja');
    }
    public function cajasoluciones(){
        return view('aspel.caja.soluciones');
    }  
    public function caja_nuevo(){
        return view('aspel.caja.lo-nuevo');
    } 

    public function coi(){
        return view('aspel.coi.coi');
    }
    public function coisoluciones(){
        return view('aspel.coi.soluciones');
    }  
    public function coi_nuevo(){
        return view('aspel.coi.lo-nuevo');
    }

    public function facture(){
        return view('aspel.facture.facture');
    }
    public function facturesoluciones(){
        return view('aspel.facture.soluciones');
    }  
    public function facture_nuevo(){
        return view('aspel.facture.lo-nuevo');
    } 

    public function noi(){
        return view('aspel.noi.noi');
    }
    public function noisoluciones(){
        return view('aspel.noi.soluciones');
    }  
    public function noi_nuevo(){
        return view('aspel.noi.lo-nuevo');
    }

    public function prod(){
        return view('aspel.prod.prod');
    }
    public function prodsoluciones(){
        return view('aspel.prod.soluciones');
    }


    public function sr(){
        return view('national-soft.soft-restaurant.soft-restaurant');
    }
    public function srsoluciones(){
        return view('national-soft.soft-restaurant.soluciones');
    }  
    public function sr_nuevo(){
        return view('national-soft.soft-restaurant.lo-nuevo');
    }
    public function sr_movil(){
        return view('national-soft.soft-restaurant.movil');
    }
    /*public function sr_modulos(){
        return view('national-soft.soft-restaurant.modulos-adicionales');
    }*/

    public function otm(){
        return view('national-soft.on-the-minute.on-the-minute');
    }
    /*public function otmsoluciones(){
        return view('national-soft.on-the-minute.soluciones');
    }  
    public function otm_nuevo(){
        return view('national-soft.on-the-minute.lo-nuevo');
    }*/
    public function otm_modulos(){
        return view('national-soft.on-the-minute.modulos-adicionales');
    }

    public function otm_caracteristicas(){
        return view('national-soft.on-the-minute.caracteristicas');
    }

    public function otm_hardware(){
        return view('national-soft.on-the-minute.hardware');
    }

    public function otm_comparativa(){
        return view('national-soft.on-the-minute.comparativa-hardware');
    }

    


    public function sf(){
        return view('national-soft.soft-facturas.soft-facturas');
    }
    /*public function sfsoluciones(){
        return view('national-soft.soft-facturas.soluciones');
    }  
    public function sf_nuevo(){
        return view('national-soft.soft-facturas.lo-nuevo');
    }*/
    public function sf_movil(){
        return view('national-soft.soft-facturas.movil');
    }
    /*public function sr_modulos(){
        return view('national-soft.soft-restaurant.modulos-adicionales');
    }*/

    /*funciones de NAtional Soft*/
    public function national(){
        return view('national-soft.national-soft');
    }
    
    public function nsh(){
        return view('national-soft.ns-hoteles.ns-hoteles');
    }
    public function nshsoluciones(){
        return view('national-soft.ns-hoteles.soluciones');
    }  
    public function nsh_nuevo(){
        return view('national-soft.ns-hoteles.caracteristicas');
    }
    public function nsh_movil(){
        return view('national-soft.ns-hoteles.movil');
    }
    /*public function sr_modulos(){
        return view('national-soft.soft-restaurant.modulos-adicionales');
    }*/
    /*esta es la modificacion de incrementa*/
    public function icrm(){
        return view('incrementa.incrementacrm');
    }

    public function icrm_caract(){
        return view('incrementa.caracteristicas');
    }

    public function icrm_preciomensual(){
        return view('incrementa.precio-mensual');
    }

     public function icrm_preciotrimes(){
        return view('incrementa.precio-trimestral');
    }

    public function icrm_preciosemes(){
        return view('incrementa.precio-semestral');
    }

    public function icrm_precioanual(){
        return view('incrementa.precio-anual');
    }

  

   
    

   /* public function showPresent($etiqueta_url){
        $landinfo=Landing::
            join('calendario', 'landing.id_calendario','=','calendario.id')
            ->join('categorias_eventos', 'calendario.id_categoria','=','categorias_eventos.id')
            ->where([
                ['habilitado','=','SI'],
                ['etiqueta_url', $etiqueta_url],                
                ['evento_categoria','Presentación'],
            ])
            ->select('calendario.*','landing.*','categorias_eventos.id as evento_id','calendario.id as calendario_id')
            ->first();
            //dd($landinfo);
        return view('landing.presenta', compact('landinfo'));
    }*/

    public function showCurso($etiqueta_url){
        $landinfo=Landing::
            join('calendario', 'landing.id_calendario','=','calendario.id')
            ->join('categorias_eventos', 'calendario.id_categoria','=','categorias_eventos.id')
            ->where([
                ['habilitado','=','SI'],
                ['etiqueta_url', $etiqueta_url],                
                ['evento_categoria','curso'],
            ])
            ->select('calendario.*','landing.*','categorias_eventos.id as evento_id','calendario.id as calendario_id')
            ->first();
            //dd($landinfo);
        //echo strtolower($landinfo->evento_categoria);
        return view('landing.curso', compact('landinfo'));
    }
        
    

    public function showWebinar($etiqueta_url){
        $landinfo=Landing::
            join('calendario', 'landing.id_calendario','=','calendario.id')
            ->join('categorias_eventos', 'calendario.id_categoria','=','categorias_eventos.id')
            ->where([
                ['habilitado','=','SI'],
                ['etiqueta_url', $etiqueta_url],
                ['evento_categoria','webinar'],
            ])
            ->select('calendario.*','landing.*','categorias_eventos.id as evento_id','calendario.id as calendario_id')
            ->first();
            //dd($landinfo);
        return view('landing.webinar', compact('landinfo'));
    }

    public function showConferencia($etiqueta_url){
        $landinfo=Landing::
            join('calendario', 'landing.id_calendario','=','calendario.id')
            ->join('categorias_eventos', 'calendario.id_categoria','=','categorias_eventos.id')
            ->where([
                ['habilitado','=','SI'],
                ['etiqueta_url', $etiqueta_url],                
                ['evento_categoria','conferencia'],
            ])
            ->select('calendario.*','landing.*','categorias_eventos.id as evento_id','calendario.id as calendario_id')
            ->first();
            //dd($landinfo);
        return view('landing.conferencia', compact('landinfo'));
    }
/*para la presentacion*/
    public function showpresnta2($etiqueta_url){
        $landinfo=Landing::
            join('calendario', 'landing.id_calendario','=','calendario.id')
            ->join('categorias_eventos', 'calendario.id_categoria','=','categorias_eventos.id')
            ->where([
                ['habilitado','=','SI'],
                ['etiqueta_url', $etiqueta_url],                
                ['evento_categoria','Presentacion'],
            ])
            ->select('calendario.*','landing.*','categorias_eventos.id as evento_id','calendario.id as calendario_id')
            ->first();
            //dd($landinfo);
        return view('landing.present', compact('landinfo'));
    }

/*========== empieza las funciones de inelco gral*/
/*para la presentacion*/
      public function despachos(){
        return view('aspel.aspelgral.despachos-contables-y-nomina');
    }

     public function manofactura(){
        return view('aspel.aspelgral.empresa-de-manofactura');
    }

     public function comercio(){
        return view('aspel.aspelgral.empresas-comercializadoras');
    }

     public function facturacion1(){
        return view('aspel.aspelgral.facturacion-electronica');
    }

     public function educativa(){
        return view('aspel.aspelgral.instituciones-educativas');
    }

     public function puntoventa(){
        return view('aspel.aspelgral.punto-de-venta');
    }




}


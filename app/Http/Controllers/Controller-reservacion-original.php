<?php
    private $recibido;
    private $arpdf;

    public function reservacion(Request $request){

        $this->validate($request, [
            'nombre'=> 'required|max:255',
            'apellidos' => 'required|max:255',
            'empresa'=>'required|max:255',
            'telefono' => 'required|max:30',
            'email' => 'required|max:255'
        ]);

        $this->recibido=$request;
        if(!$this->recibido->link_webinar){
            $this->arpdf=$this->pdf($request);
        }
        
        Mail::send('templates.email', [
            'evento' =>$this->recibido->evento,
            'lugar' =>$this->recibido->lugar,
            'fecha' =>$this->recibido->fecha,
            'horario' =>$this->recibido->horario,
            'precio' =>$this->recibido->paga,
            'no_reservacion' =>$this->recibido->no_reservacion,
            'link_webinar' =>$this->recibido->link_webinar,
            'nombrec' =>$this->recibido->nombre.' '.$this->recibido->apellidos,
            'empresa' =>$this->recibido->empresa,
            ],function ($message) {
            
            //remitente
            $message->from('reservacion@inelco.mx','Centro de Capacitacion Inelco');
            //asunto
            $message->subject('Reservacion al evento: '.$this->recibido->evento);
            //archivo adjunto
            if(!$this->recibido->link_webinar){
                $message->attachData($this->arpdf, 'reservacion-presentacion.pdf');
            }
            
            //receptor
            $message->to($this->recibido->email, $this->recibido->nombre.' '.$this->recibido->apellidos.' | '.$this->recibido->empresa);
            $message->cc('reservacion@inelco.mx');
        });
		
		
        
            Reservacion::create([
                    'nombre' => $request->nombre,
                    'apellidos' => $request->apellidos,
                    'empresa' => $request->empresa,
                    'telefono' => $request->telefono,
                    'email' => $request->email,
                    'evento' => $request->evento,
                    'no_reservacion' => $request->no_reservacion,
                    'link_webinar' => $request->link_webinar
                ]);
        
        
        //return $pdf->download('reservacion-presentacion.pdf');
        return view('confirmar_registro', compact('request'));
    }

    public function pdf($recibido){   
        $recibi=$recibido;
        $pdf     = \PDF::loadView('reservation_pdf', compact('recibi'));
        return $pdf->stream('reservacion-presentacion.pdf');
    }

?>
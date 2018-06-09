<?php

namespace Inelco\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use Redirect;
use Inelco\Http\Requests;
use Inelco\Http\Controllers\Controller;

class MailController extends Controller
{
    //
    //
    public function store ($request){

    	mail::send('emails.coicontacto',$request->all(), function($msj)){
    		$msj->subject(correo de contacto);
    		$msj->to(nestorlopezbta7@gmail.com);
    	});
		Session::flash('message','Mensaje enviado correctamente');
		return Redirect::to(/aspel-coi/lo-nuevo);
    }
}

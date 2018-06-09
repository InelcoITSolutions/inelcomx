<?php

namespace Inelco\Http\Controllers\Admin;

use Inelco\Modelos\Administrador;
use Inelco\Modelos\Reservacion;
use Inelco\Modelos\Descargas;
use Inelco\Modelos\link_descarga;
use Inelco\Modelos\Ventas;
use Validator;
/*use Illuminate\Http\Request;
use Inelco\Http\Requests;*/
use Inelco\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
//use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
//use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdminController extends Controller
{
	//use AuthenticatesUsers;AuthenticatesAndRegistersUsers
	use ThrottlesLogins;

	protected $redirectTo = '/admin/dashboard';
    

	protected $guard = 'admin';
	//protected $loginView='admin.auth.login';
	//protected $registerView = 'admin.auth.register';


	/*public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }
*/

    /*protected function validator(array $data)
    {
        return Validator::make($data, [
            'nombre' => 'required|max:255',
            'apellidos' => 'required|max:255',
            'telefono' => 'required|max:12',
            'email' => 'required|email|max:255|unique:administrador',
            'password' => 'required|min:6|confirmed',
        ]);
    }


    protected function create(array $data)
    {
        return Administrador::create([
            'nombre' => $data['nombre'],
            'apellidos' => $data['apellidos'],
            'telefono' => $data['telefono'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }*/


	/*public function logout(){
		auth()->guard('admin')->logout();
		return redirect('admin/login');
	}
	
	public function secret(){
		return view('admin.dashboard');
	}


	public function reset(){
		return view('admin.auth.passwords.email');
	}*/
    public function showReserv(){
        $reservaciones=Reservacion::paginate(5);
        return view('admin.calendario.reservaciones',['reservaciones' =>$reservaciones]);
    }

    public function showDescargas(){
        /*$descargas=Descargas::paginate(7);
        return view('admin.link_descargas.descargados',['descargas' =>$descargas, 'haber' => $haber]);*/
        $descargas=Descargas::join('link_descarga', 'descargas.link_descarga_id','=','link_descarga.id')
                        ->select('descargas.*','link_descarga.nombre_software as nom_soft')
                        ->paginate(10);

        return view('admin.link_descargas.descargados',['descargas' =>$descargas]);
    }

    public function showVentas(){
        $ventas=Ventas::with('articulosVendidos','articulosVendidos.productoVendido')
                        ->paginate(10);
        return view('admin.productos.ventas', compact('ventas'));
    }


}

<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
/*Route::get('/', function () {
    return view('welcome');
});*/

//Route::get('/', 'MyController@index');

/*  ===========================
        Servicios Inelco Beta
    ===========================  */

Route::get('servicios', 'MyController@servicios');
Route::get('servicios/implementacion', 'MyController@implementacion');
Route::get('servicios/asesoria', 'MyController@asesoria');
Route::get('servicios/consultoria', 'MyController@consultoria');
Route::get('servicios/capacitacion', 'MyController@capacitacion');
Route::get('servicios/soporte', 'MyController@soporte');
Route::get('servicios/seguridad', 'MyController@seguridad');
Route::get('servicios/seguridad-informatica', 'MyController@seguridad_informatica');

Route::get('complemento-pago', 'MyController@complemento');

Route::get('promociones', 'MyController@promociones');

Route::get('promocion-sae-banco', 'MyController@promocionsaebanco');
Route::get('promocion-coi-noi', 'MyController@promocioncoinoi');
Route::get('promocion-coi-banco', 'MyController@promocioncoibanco');
Route::get('promocion-sae-coi-noi-banco', 'MyController@promocionsaecoinoibanco');

/*  ======================
        Rutas actuales
    ======================  */

Route::get('/', 'MyController@index');
Route::get('servicios', 'MyController@servicios');
Route::get('calendario', 'MyController@calendario');
//Route::get('confirmacion-de-registro', 'MyController@confirmacion');
Route::post('calendario/evento/reservacion','MyController@reservacion');
Route::get('confirmacion/{eventoname}/{dircompleta}','MyController@conf');

Route::post('centro-de-descarga/download','MyController@saveDownload');

Route::get('nosotros', 'MyController@nosotros');
Route::get('contacto', 'MyController@contacto');
Route::get('centro-de-descarga', 'MyController@descargas');

Route::get('licencia-personalizada-aspel', 'MyController@infodownload');
//Route::get('pruebalo-gratis/{producto}', 'MyController@infodownload');

Route::get('preguntas-frecuentes', 'MyController@FAQs');
Route::get('base-de-conocimientos', 'MyController@knowledge');
Route::get('hardware', 'MyController@hardware');
Route::get('nomina-digital', 'MyController@nominadig');


/*aspel informacion general*/
Route::get('aspel', 'MyController@aspel');
Route::get('sistemas-aspel', 'MyController@aspel');

/*Rutas SAENube*/
Route::get('aspel-saenube', 'MyController@saenube');
Route::get('aspel-saenube/soluciones', 'MyController@saenubesoluciones');
Route::get('aspel-saenube/lo-nuevo', 'MyController@saenube_nuevo');
Route::get('aspel-saenube/sae-nube-movil', 'MyController@saenube_movil');


/*Rutas espacio*/
Route::get('aspel-espacio', 'MyController@espacio');
Route::get('aspel-espacio/modalidades', 'MyController@espaciomodalidades');
Route::get('aspel-espacio/lo-nuevo', 'MyController@espacionuevo');
Route::get('aspel-espacio/lista-precios', 'MyController@espacioprecio');

/*Rutas ADMTienda*/
Route::get('aspel-admtienda', 'MyController@admtienda');
Route::get('aspel-admtienda/soluciones', 'MyController@admtiendasoluciones');
Route::get('aspel-admtienda/lo-nuevo', 'MyController@admtiendanuevo');
Route::get('aspel-admtienda/lista-precios', 'MyController@admtiendaprecio');
Route::get('aspel-admtienda/dispositivos-compatibles', 'MyController@admtiendadisp');
 


/*Rutas SAE*/
Route::get('aspel-sae', 'MyController@sae');
Route::get('aspel-sae/soluciones', 'MyController@saesoluciones');
Route::get('aspel-sae/lo-nuevo', 'MyController@sae_nuevo');
Route::get('aspel-sae/sae-movil', 'MyController@sae_movil');

/*Rutas ADM*/
Route::get('aspel-adm', 'MyController@adm');
Route::get('aspel-adm/soluciones', 'MyController@admsoluciones');
Route::get('aspel-adm/lo-nuevo', 'MyController@adm_nuevo');

/*Rutas BANCO*/
Route::get('aspel-banco', 'MyController@banco');
Route::get('aspel-banco/soluciones', 'MyController@bancosoluciones');
Route::get('aspel-banco/lo-nuevo', 'MyController@banco_nuevo');

/*Rutas CAJA*/
Route::get('aspel-caja', 'MyController@caja');
Route::get('aspel-caja/soluciones', 'MyController@cajasoluciones');
Route::get('aspel-caja/lo-nuevo', 'MyController@caja_nuevo');

/*Rutas COI*/
Route::get('aspel-coi', 'MyController@coi');
Route::get('aspel-coi/soluciones', 'MyController@coisoluciones');
Route::get('aspel-coi/lo-nuevo', 'MyController@coi_nuevo');

/*Rutas FACTURE*/
Route::get('aspel-facture', 'MyController@facture');
Route::get('aspel-facture/soluciones', 'MyController@facturesoluciones');
Route::get('aspel-facture/lo-nuevo', 'MyController@facture_nuevo');

/*Rutas NOI*/
Route::get('aspel-noi', 'MyController@noi');
Route::get('aspel-noi/soluciones', 'MyController@noisoluciones');
Route::get('aspel-noi/lo-nuevo', 'MyController@noi_nuevo');

/*Rutas PROD*/
Route::get('aspel-prod', 'MyController@prod');
Route::get('aspel-prod/soluciones', 'MyController@prodsoluciones');

/*Rutas SOFT RESTAURANT*/
Route::get('national-soft/soft-restaurant', 'MyController@sr');
Route::get('national-soft/soft-restaurant/soluciones', 'MyController@srsoluciones');
Route::get('national-soft/soft-restaurant/lo-nuevo', 'MyController@sr_nuevo');
Route::get('national-soft/soft-restaurant/movil', 'MyController@sr_movil');
/*Route::get('national-soft/soft-restaurant/modulos-adicionales', 'MyController@sr_modulos');*/



/*national soft*/
Route::get('national-soft', 'MyController@national');


/*Rutas ON THE MINUTE*/
Route::get('national-soft/on-the-minute', 'MyController@otm');
/*Route::get('national-soft/on-the-minute/soluciones', 'MyController@otmsoluciones');
Route::get('national-soft/on-the-minute/lo-nuevo', 'MyController@otm_nuevo');*/
Route::get('national-soft/on-the-minute/modulos-adicionales', 'MyController@otm_modulos');

Route::get('national-soft/on-the-minute/caracteristicas', 'MyController@otm_caracteristicas');

Route::get('national-soft/on-the-minute/hardware', 'MyController@otm_hardware');

Route::get('national-soft/on-the-minute/comparativa-hardware', 'MyController@otm_comparativa');

/*Rutas SOFT FACTURAS*/
Route::get('national-soft/soft-facturas', 'MyController@sf');
/*Route::get('national-soft/soft-facturas/soluciones', 'MyController@sfsoluciones');
Route::get('national-soft/soft-facturas/lo-nuevo', 'MyController@sf_nuevo');*/
Route::get('national-soft/soft-facturas/movil', 'MyController@sf_movil');

/*Rutas NS HOTELES */
Route::get('national-soft/ns-hoteles', 'MyController@nsh');
Route::get('national-soft/ns-hoteles/soluciones', 'MyController@nshsoluciones');
Route::get('national-soft/ns-hoteles/caracteristicas', 'MyController@nsh_nuevo');
Route::get('national-soft/ns-hoteles/movil', 'MyController@nsh_movil');

/*RUTAS INCREMENTA*/
Route::get('incrementacrm', 'MyController@icrm');
Route::get('incrementa/caracteristicas', 'MyController@icrm_caract');
Route::get('incrementa/precio-mensual', 'MyController@icrm_preciomensual');
Route::get('incrementa/precio-trimestral', 'MyController@icrm_preciotrimes');
Route::get('incrementa/precio-semestral', 'MyController@icrm_preciosemes');
Route::get('incrementa/precio-anual', 'MyController@icrm_precioanual');


/*Rutas para admin/*/
//Route::auth();
Route::group(['middleware' => 'auth'], function(){
	
});

Route::resource('/home/user','UserController');
// Authentication Routes...
$this->get('admin/login', 'Admin\LoginController@showLoginForm');
$this->post('admin/login', 'Admin\LoginController@login');
$this->get('admin/logout', 'Admin\LoginController@logout');

// Registration Routes...
//$this->get('admin/register', 'Admin\RegisterController@showRegistrationForm');
//$this->post('admin/register', 'Admin\RegisterController@register');

// Password Reset Routes.../*
/*$this->get('admin/password/reset/{token?}', 'Admin\ResetPasswordController@showResetForm');
$this->get('admin/password/email', 'Admin\ResetPasswordController@sendResetLinkEmail');
$this->get('admin/password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm');*/
$this->get('admin/password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm');
$this->post('admin/password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail');
$this->get('admin/password/reset/{token}', 'Admin\ResetPasswordController@showResetForm');
$this->post('admin/password/reset', 'Admin\ResetPasswordController@reset');

Route::group(['middleware' => 'auth:admin'], function(){
	//Route::get('admin/password/email', 'Admin\PasswordController@sendResetLinkEmail');
	//Route::get('admin/logout', 'Admin\AdminController@logout');
	Route::resource('admin/calendario', 'Admin\CalendarioController');
	Route::resource('admin/categorias_eventos', 'Admin\CategoryEventController');
	Route::resource('admin/landing', 'Admin\LandingController');
	Route::get('admin/dashboard','AdminHomeController@index');
	/*tienda*/
	Route::resource('admin/productos', 'Admin\ProductosController');
	Route::resource('admin/kit', 'Admin\KitController');
	Route::resource('admin/kitarts', 'Admin\KitArticulosController');
	Route::get('precioprod/{id}','Admin\KitController@precioProdKit');
    Route::get('admin/eventos/reservaciones','Admin\AdminController@showReserv');
    Route::resource('admin/link-descargas', 'Admin\LinkDownloadsController');
    Route::get('admin/descargas','Admin\AdminController@showDescargas');
    Route::get('admin/ventas','Admin\AdminController@showVentas');
	
});

//ROUTES LANDING PAGE USER
//Route::get('presentacion/{etiqueta_url}', 'MyController@showPresent');
Route::get('curso/{etiqueta_url}', 'MyController@showCurso');
Route::get('webinar/{etiqueta_url}', 'MyController@showWebinar');
Route::get('newwebinar/{etiqueta_url}', 'MyController@newshowWebinar');
Route::get('conferencia/{etiqueta_url}', 'MyController@showConferencia');
Route::get('presentacion/{etiqueta_url}', 'MyController@showpresnta2');

Auth::routes();
Route::get('/home', 'HomeController@index');








	/*TIENDA ROUTES*/
Route::get('tienda', 'StoreController@inicio');

//RUTAS DE LA TIENDA
//Route::get('/tienda', 'TiendaController@index');

Route::get('tienda/producto/{etiqueta}', [
    'as'   => 'detalle-producto',
    'uses' => 'StoreController@show',
]);

/** Route to post search results **/
/*Route::post('/queries', [
    'uses' => 'BuscadorController@buscar',
    'as'   => 'queries.search',
]);*/

// Route::bind('producto', function ($etiqueta) {
//     return aspelsoluciones\Producto::where('etiqueta', $etiqueta)->first();
// });
// Carrito de compras
Route::get('/tienda/carrito', [
    'as'   => 'mostrar-carrito',
    'uses' => 'CarritoController@show',
]);
Route::get('/tienda/carrito/añadir/{producto}', [
    'as'   => 'añadir-carrito',
    'uses' => 'CarritoController@add',
]);
Route::get('/tienda/carrito/eliminar/{producto}', [
    'as'   => 'carrito-eliminar',
    'uses' => 'CarritoController@delete',
]);
Route::get('/tienda/carrito/vaciar', [
    'as'   => 'vaciar-carrito',
    'uses' => 'CarritoController@trash',
]);
Route::get('/tienda/carrito/actualizar/{producto}/{cantidad?}', [
    'as'   => 'actualizar-carrito',
    'uses' => 'CarritoController@update',
]);

Route::get('/tienda/detalles-de-la-compra', [
    'middleware' => 'auth',
    'as'         => 'detalle-pedido',
    'uses'       => 'CarritoController@detallePedido',
]);

//Forma de pago transferencia electronica
Route::get('transferencia-electronica', array(
    'as'   => 'transferencia-electronica',
    'uses' => 'CarritoController@enviarPedido',
));

// Enlace a PayPal
Route::get('payment', array(
    'as'   => 'payment',
    'uses' => 'PaypalController@postPayment',
));

Route::get('payment/status', array(
    'as'   => 'payment.status',
    'uses' => 'PaypalController@getPaymentStatus',
));

// OTRAS RUTAS PARA LAS PROMO DEL NUEVO NOI 8.0
/*
Route::get('promociones-nuevo-noi', [
    'as'   => 'promo-noi',
    'uses' => 'ProductosNuevoController@index',
]);

Route::bind('productsnoi', function ($tipo) {
    return aspelsoluciones\ProductosNuevo::where('tipo', $tipo)->first();
});
Route::get('mostrar/pedido', [
    'as'   => 'mostrar-pedido',
    'uses' => 'PedidoPoductoNoiController@show',
]);
Route::get('promo/añadir/{productsnoi}', [
    'as'   => 'añadir-pedido',
    'uses' => 'PedidoPoductoNoiController@add',
]);
/*Route::get('promo/actualizar', [
'as'   => 'actualizar-pedido',
'uses' => 'PedidoPoductoNoiController@agregarUser',
]);*/
/*
Route::get('promo/actualizar/{productsnoi}/{cantidad?}', [
    'as'   => 'actualizar-pedido',
    'uses' => 'PedidoPoductoNoiController@update',
]);
Route::get('promo/agregar-users/{productsnoi}/{cantidad_users?}', [
    'as'   => 'agregar-users',
    'uses' => 'PedidoPoductoNoiController@user_add',
]);
Route::get('promo/agregar-servicio/{productsnoi}/{cantidad_users?}', [
    'as'   => 'agregar-servicio',
    'uses' => 'PedidoPoductoNoiController@service',
]);
Route::get('quitar-servicio/{productsnoi}/{cantidad_users?}', [
    'as'   => 'quitar-servicio',
    'uses' => 'PedidoPoductoNoiController@delete_service',
]);
Route::get('cancelar-compra', [
    'as'   => 'cancelar-compra',
    'uses' => 'PedidoPoductoNoiController@trash',
]);
// pago con PayPal
Route::get('payments', array(
    'as'   => 'payments',
    'uses' => 'PagoNoiController@postPayment',
));

Route::get('payments/status', array(
    'as'   => 'payments.status',
    'uses' => 'PagoNoiController@getPaymentStatus',
));

Route::get('pdf', [
    'as'   => 'pdf',
    'uses' => 'PedidoPoductoNoiController@pdf',

]);

Route::post('registrar-pedido', [
    'as'   => 'registro',
    'uses' => 'PedidoPoductoNoiController@store',
]);
*/

/*para factura*/
Route::get('/factura-electronica', 'MyController@factur');
Route::get('/syca-factura-electronica', 'MyController@sycafactur');
Route::get('/nuevafactura', 'MyController@factur2');
// para aspel calendario 
// nueva ideaaaqaaaaaaa
Route::get('aspelsoluciones-calendario', 'MyController@calendario1');

Route::get('care-calendario', 'MyController@calendario3');



/*vista para el calendario webinar de inelco*/
Route::get('/calendario-webinar', 'MyController@calendarioWebinar');

/*vista para el calendario Talleres de inelco*/
Route::get('/calendario-talleres', 'MyController@calendarioTalleres');

/*vista para el calendario Cursos de inelco*/
Route::get('/calendario-cursos', 'MyController@calendarioCursos');

/*vista para el calendario presentaciones de inelco*/
Route::get('/calendario-presentaciones', 'MyController@calendarioPresentaciones');

/*vista para el calendario conferencias de inelco*/
Route::get('/calendario-conferencias', 'MyController@calendarioConferencias');


/*syca calendario*/

Route::get('syca-calendario', 'MyController@calendario2');

/*syca calendario webinar*/
Route::get('/syca-calendario/webinar', 'MyController@sycaWebinar');

/*syca calendario talleres*/
Route::get('/syca-calendario/talleres', 'MyController@sycaTalleres');

/*syca calendario presentaciones*/
Route::get('/syca-calendario/presentaciones', 'MyController@sycaPresentaciones');

/*syca calendario cursos*/
Route::get('/syca-calendario/cursos', 'MyController@sycaCursos');

/*syca calendario conferencias*/
Route::get('/syca-calendario/conferencias', 'MyController@sycaConferencias');


/*rutas como aspel soluciones calendario*/

/*syca calendario webinar*/
Route::get('/aspelsoluciones-calendario/webinar', 'MyController@aspelWebinar');

/*syca calendario talleres*/
Route::get('/aspelsoluciones-calendario/talleres', 'MyController@aspelTalleres');

/*syca calendario presentaciones*/
Route::get('/aspelsoluciones-calendario/presentaciones', 'MyController@aspelPresentaciones');

/*syca calendario cursos*/
Route::get('/aspelsoluciones-calendario/cursos', 'MyController@aspelCursos');

/*syca calendario conferencias*/
Route::get('/aspelsoluciones-calendario/conferencias', 'MyController@aspelConferencias');


/*rutas para la informacion general de los sistemas que se manejan*/
Route::get('/despachos-contables', 'MyController@despachos');

/*rutas para la informacion general de los sistemas que se manejan*/
Route::get('/empresas-manofactura', 'MyController@manofactura');

/*rutas para la informacion general de los sistemas que se manejan*/
Route::get('/empresas-comercializadora', 'MyController@comercio');

/*rutas para la informacion general de los sistemas que se manejan*/
Route::get('/facturacion', 'MyController@facturacion1');

/*rutas para la informacion general de los sistemas que se manejan*/
Route::get('/instituciones-educativas', 'MyController@educativa');

/*rutas para la informacion general de los sistemas que se manejan*/
Route::get('/punto-de-venta', 'MyController@puntoventa');


/*================ CALENDARIO SOLUCIONESPARARESTAURANTES ============================
 -+-+-+-+-+-+-+-+-+-+-+-+-+-+- I N I C I O -+-+-+-+-+-+-+-+-+-+-+-++-+-+--+-+-*/

/* Landing principal */
Route::get('solucionespararestaurantes-calendario', 'MyController@calendariorestaurantes');

/*spr calendario webinar*/
Route::get('/solucionespararestaurantes-calendario/webinar', 'MyController@sprWebinar');

/*spr calendario talleres*/
Route::get('/solucionespararestaurantes-calendario/talleres', 'MyController@sprTalleres');

/*spr calendario presentaciones*/
Route::get('/solucionespararestaurantes-calendario/presentaciones', 'MyController@sprPresentaciones');

/*spr calendario cursos*/
Route::get('/solucionespararestaurantes-calendario/cursos', 'MyController@sprCursos');

/*spr calendario conferencias*/
Route::get('/solucionespararestaurantes-calendario/conferencias', 'MyController@sprConferencias');

/*-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+ F I N -+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+*/




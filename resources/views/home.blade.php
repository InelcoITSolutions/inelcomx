@extends('layouts.app')
@section('name_title','Mi perfil de usuario | Inelco IT Solutions')
@section('content')
  
    @if(empty(Auth::user()->razon_social) || empty(Auth::user()->nombre_comercial) || empty(Auth::user()->rfc) || empty(Auth::user()->contribuyente) || empty(Auth::user()->telefono) || empty(Auth::user()->correo_facturacion))
        <div class="alert alert-warning">
            <div class="container-fluid">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"><i class="icon-cross2"></i></span>
                </button>
                <span class="fa icon-warning2"></span><b> Es importante que agregues los datos fiscales, para poder obtener licencias de prueba personalizada con todas las funciones, para poder realizar compras, registro a eventos, entre otras funciones. <button class="edit-perfil btn btn-warning btn-sm">Editar mi perfil</button></b>
            </div>
        </div>
    @endif

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="margin-top: 5em;">
                    <div class="panel panel-primary">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Mi Perfíl
                            </a>
                          </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h5><b>DATOS PERSONALES</b></h5>
                                            <p>Usuario: <b>{{ Auth::user()->name }}</b></p>
                                            <p>Email: <b>{{ Auth::user()->email }}</b></p>
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <h5><b>DATOS FISCALES</b></h5>
                                            <p>Razón social: <b>{{ Auth::user()->razon_social}}</b></p>
                                            <p>Nombre comercial: <b>{{ Auth::user()->nombre_comercial}}</b></p>
                                            <p>RFC: <b>{{ Auth::user()->rfc}}</b></p>
                                            <p>Contribuyente: <b>{{ Auth::user()->contribuyente}}</b></p>
                                            <p>Teléfono: <b>{{ Auth::user()->telefono}}</b></p>
                                            <p>Correo de facturación:<b> {{ Auth::user()->correo_facturacion}}</b></p>
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <h5><b>DIRECCIÓN</b></h5>
                                            <p>Calle: <b>{{ Auth::user()->calle}}</b></p>
                                            <p>No. exterior: <b>{{ Auth::user()->no_exterior}}</b></p>
                                            <p>No. interior:<b> {{ Auth::user()->no_interior}}</b></p>
                                            <p>Colonia: <b>{{ Auth::user()->colonia}}</b></p>
                                            <p>Ciudad: <b>{{ Auth::user()->ciudad}}</b></p>
                                            <p>Código postal: <b>{{ Auth::user()->cp}}</b></p>
                                            <p>País: <b>{{ Auth::user()->pais}}</b></p>
                                            <p>Estado: <b>{{ Auth::user()->estado}}</b></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <button class="btn btn-primary edit-perfil"><i class="fa icon-user-check"></i> Editar mi perfil</button>
                                        </div>
                                    </div>
                                </div>     
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-warning">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Mis compras
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        @if(count($compras)>0)
                                            @foreach($compras as $compra)
                                                <p>ID compra: <b> {{ $compra->id }} </b>, estado de la compra: <b>{{ $compra->estado_venta }}</b>, fecha: <b>{{ $compra->created_at }}</b>, Total: <b>{{ $compra->total }}</b></p>
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>Producto</th>
                                                                <th>Cantidad</th>
                                                                <th>Precio</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($compra->articulosVendidos as $articulos)
                                                                <tr>
                                                                    <td>
                                                                        <div class="col-xs-2">
                                                                            <img class="img-responsive" style="max-height: 30px;" src="{{ $articulos->productoVendido->logo_prod }}">
                                                                        </div>
                                                                        <div class="col-xs-8">
                                                                            {{ $articulos->productoVendido->nombre_prod }}
                                                                        </div>
                                                                    </td>
                                                                    <td>{{ $articulos->cantidad}}</td>
                                                                    <td>{{ $articulos->precio}}</td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <hr>
                                            @endforeach
                                        @else
                                            <div class="alert alert-info">
                                                <div class="container-fluid">
                                                    <div class="alert-icon">
                                                        <i class="icon-info-with-circle ico-notif"></i>
                                                    </div>
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true"><i class="icon-cross2"></i></span>
                                                    </button>
                                                    <b>Información:</b> No hay compras realizadas.
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-success">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Eventos
                            </a>
                          </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                @if(count($reservations)>0)
                                    @php $i=1; @endphp
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Email</th>
                                                    <th>Evento</th>
                                                    <th>No. Reservación</th>
                                                    <th>Fecha</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($reservations as $reservation)

                                                    <tr>
                                                        <td><b>{{ $i++ }}</b></td>
                                                        <td>{{ $reservation->email }}</td>
                                                        <td>{{ $reservation->evento}}</td>
                                                        <td>{{ $reservation->no_reservacion}}</td>
                                                        <td>{{ $reservation->created_at}}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                @else
                                    <div class="alert alert-info">
                                        <div class="container-fluid">
                                            <div class="alert-icon">
                                                <i class="icon-info-with-circle ico-notif"></i>
                                            </div>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true"><i class="icon-cross2"></i></span>
                                            </button>
                                            <b>Información:</b> No se ha registrado a ningún evento.
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-info">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                              Mis descargas
                            </a>
                          </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                @if(count($descargas) > 0)
                                    @php $i=0; @endphp
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th>Email</th>
                                                    <th>Software</th>
                                                    <th>Fecha</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($descargas as $descarga)
                                                    @php $i++; @endphp
                                                    <tr>
                                                        <td class="text-center"><b>{{ $i }}</b></td>
                                                        <td>{{ $descarga->email_usuario}}</td>
                                                        <td>{{ $descarga->nom_soft}}</td>
                                                        <td>{{ $descarga->created_at}}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    {{-- <div class="text-center">
                                        {!! $descargas->links() !!}
                                    </div> --}}
                                @else
                                    <div class="alert alert-info">
                                        <div class="container-fluid">
                                            <div class="alert-icon">
                                                <i class="icon-info-with-circle ico-notif"></i>
                                            </div>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true"><i class="icon-cross2"></i></span>
                                            </button>
                                            <b>Información:</b> No hay descargas registradas.
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalUser" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center" id="gridSystemModalLabel">Actualizar mi perfil</h4>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            
                            {!! Form::model(null, ['url' => ['/home/user', Auth::user()->id],'method'=>'PATCH']) !!}
                                <input type="hidden" name="_method" value="PATCH">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa icon-user-tie"></i></div>
                                            <input name="name" type="text" class="form-control" placeholder="Nombre" value="{{ Auth::user()->name }}">
                                        </div>
                                    </div>
                                </div>

                                <p>Datos Fiscales</p>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa icon-office"></i></div>
                                            <input name="razon_social" type="text" class="form-control" placeholder="Razón social" value="{{ Auth::user()->razon_social }}">
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa icon-office"></i></div>
                                            <input name="nombre_comercial" type="text" class="form-control" placeholder="Nombre comercial" value="{{ Auth::user()->nombre_comercial }}">
                                        </div>
                                    </div>
                                </div>                                        
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa icon-office"></i></div>
                                            <input name="rfc" type="text" class="form-control" placeholder="RFC" value="{{ Auth::user()->rfc }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa icon-user-tie"></i></div>
                                            <input name="contribuyente" type="text" class="form-control" placeholder="Nombre del contribuyente" value="{{ Auth::user()->contribuyente }}">
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="input-group ">
                                            <div class="input-group-addon"><i class="fa icon-mail"></i></div>
                                            <input name="correo_facturacion" type="email" class="form-control" placeholder="Email de facturación" value="{{ Auth::user()->correo_facturacion }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa icon-mobile"></i></div>
                                            <input name="telefono" type="tel" class="form-control" placeholder="Telefono" value="{{ Auth::user()->telefono }}">
                                        </div>
                                    </div>
                                </div>
                                
                                <p>Dirección</p>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa icon-address"></i></div>
                                            <input name="calle" type="tel" class="form-control" placeholder="Calle" value="{{ Auth::user()->calle }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa icon-address"></i></div>
                                            <input name="no_exterior" type="tel" class="form-control" placeholder="No. exterior" value="{{ Auth::user()->no_exterior }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa icon-address"></i></div>
                                            <input name="no_interior" type="tel" class="form-control" placeholder="No. interior" value="{{ Auth::user()->no_interior }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa icon-address"></i></div>
                                            <input name="colonia" type="tel" class="form-control" placeholder="Colonia" value="{{ Auth::user()->colonia }}">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa icon-location3"></i></div>
                                            <input name="pais" type="tel" class="form-control" placeholder="País" value="{{ Auth::user()->pais }}">
                                        </div>
                                    </div>
                                </div>                                
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa icon-location3"></i></div>
                                            <input name="estado" type="tel" class="form-control" placeholder="Estado" value="{{ Auth::user()->estado }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa icon-location3"></i></div>
                                            <input name="ciudad" type="tel" class="form-control" placeholder="Ciudad" value="{{ Auth::user()->ciudad }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa icon-location3"></i></div>
                                            <input name="cp" type="tel" class="form-control" placeholder="CP" value="{{ Auth::user()->cp }}">
                                        </div>
                                    </div>
                                </div>



                                <div class="col-md-12">
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-primary update-profile">
                                            <i class="fa icon-cycle"></i> Actualizar
                                        </button>

                                    </div>
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

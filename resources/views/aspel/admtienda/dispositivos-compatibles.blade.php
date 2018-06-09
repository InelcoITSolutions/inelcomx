@extends('templates.principal')


@section('name_title','Lista Precios ADM Tienda| Inelco IT Solutions')

@push('add-css')
    <link href="/css/products-styles.css" rel="stylesheet">
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush

@section('contenido')

    @include('aspel.admtienda.banner-admtienda')

    <section class="descripcion-prod desc-admtienda secciones " >
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <h2 align="center" id="mas">
                        <strong>Dispositivos compatibles</strong>
                    </h2>
                    <h2 align="center">Conoce los modelos de contratación y comienza a utilizar ADM Tienda.</h2>

                   
                </div>
                <div class="col-md-3">

                </div>

                <div class="col-md-6">
                    <div class="table-responsive "  >
                        <table class="table table-striped table-hover"  align="center" style="text-align: center;" border="0">
                              <thead>
                                <tr>
                                  <th height="55px" style="text-align: center;" class="bg-active">MARCA
                                  </th>
                                  <th style="text-align: center;" class="bg-danger">
                                  DISPOSITIVOS
                                  </th>
                                   <th style="text-align: center;" class="bg-primary">
                                  MODELO
                                  </th>
                                </tr>
                              </thead>

                              <tbody>
                                <tr>
                                  <td height="50px" >Unitech</td>
                                  <td>Lector óptico</td>
                                  <td>
                                  <ul>
                                    <li>MS842-2UPBGC-SG  
                                    </li>

                                    <li>MS920
                                    </li>
                                    <li>MS912
                                    </li>
                                    <li>MS910
                                    </li>
                                    <li>MS916
                                    </li>
                                  </ul>
                                  </td>
                                </tr>

                                <tr>
                                  <td height="50px" >Star Micronics</td>
                                  <td>Impresora Térmica</td>
                                  <td>
                                  <ul>
                                    <li>SM-T3OOi  
                                    </li>
                                    <li>SM-L200
                                    </li>
                                    <li>SM-230
                                    </li>
                                  </ul>
                                  </td>
                                </tr>

                                <tr>
                                  <td height="50px" >Epson</td>
                                  <td>Impresora Térmica</td>
                                  <td>
                                  <ul>
                                    <li>TM-M10  
                                    </li>
                                    <li>TM-M30
                                    </li>
                                    <li>TM-P20
                                    </li>
                                  </ul>
                                  </td>
                                </tr>

                                <tr>
                                  <td height="50px" >POWA</td>
                                  <td>Unidad T25</td>
                                  <td>
                                  <ul>
                                    <li>Lector Óptico  
                                    </li>
                                    <li>Impresora Térmica
                                    </li>
                                    <li>Cajón de dinero
                                    </li>
                                  </ul>
                                  </td>
                                </tr>


                                
                              </tbody>
                            </table>
                        </div>
                       
                    </div>
                                      
                </div>
                    
                
            </div>
        </div>
    </section>
                       
        </div>
                                      
                
        
            <a href="{{url('/contacto')}}" >
                            <div class="col-md-12">
                            <p class="text-center"><input class="btn btn-primary btn-lg"  value='Lo quiero' /></p>
                            </div>
            </a>
            </div>
        </div>
    </section>


       
    
    
    
    @include('aspel.admtienda.menu-admtienda')

@endsection

@push('add-js')   
    <script src="/js/jquery.slides.js"></script>
    <script src="/js/home.js"></script>
    <script src="/js/global.js"></script>
    @stack('files-menu')
    <script>
        $("body").attr('pagina','Productos');
    </script>   
@endpush
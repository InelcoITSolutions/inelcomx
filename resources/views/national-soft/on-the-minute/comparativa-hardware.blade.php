@extends('templates.principal')

@section('name_title','On The Minute | Inelco IT Solutions')

@push('add-css')
    <link href="/css/products-styles.css" rel="stylesheet"/>
    
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush

@section('contenido')

    @include('national-soft.on-the-minute.banner-otm')

    <section class="descripcion-prod otm-pages secciones ">
        <div class="container">
          <h2 class="text-center" id="mas"><b>Tabla comparativa de nuestro Hardware</b></h2>
                     
          <table class="table table-striped">
            <thead>
              <tr>
                <th class="text-center">                  </th>
                <th class="text-center"><img src="/images/products/otm/inelco-hardware-lector_DP.png" width="40%" class="img-responsive"> DP</th>
                <th class="text-center"><img src="/images/products/otm/inelco-hardware-k20.png" width="40%" class="img-responsive"> K20</th>
                <th class="text-center"><img src="/images/products/otm/inelco-hardware-mb200.png" width="40%" class="img-responsive"> NS FACE MB200</th>
                <th class="text-center"><img src="/images/products/otm/inelco-hardware-mb200.png" width="40%" class="img-responsive"> NS FACE MB200</th>
                <th class="text-center"><img src="/images/products/otm/inelco-hardware-mb200.png" width="40%" class="img-responsive"> NS FACE MB200</th>
              </tr>
            </thead>
            <tbody>
              <tr class="text-center">

                <td width="15%" style="text-align: left;"><p><b>Tipo de registro</b></p></td>

                <td><p>Huella Digital</p></td>

                <td><p>Huella Digital <br>
                RFID <br>Contraseña</p></td>

                <td><p>Huella Digital<br>
                Reconocimiento Facial<br>
                Contraseña</p></td>

                <td><p>Reconocimiento Facial<br>
                RFID<br>
                Contraseña</p></td>

                <td><p>Huella Digital<br>
                RFID<br>
                Contraseña<br></p></td>

              </tr>

              <tr class="text-center">
                <td width="15%" style="text-align: left;"><p><b>Funciona sin PC</b></p></td>
                <td><p><i class="fa fa-times" aria-hidden="true"></i></p></td>
                <td><p><i class="fa fa-check" aria-hidden="true"></i></p></td>
                <td><p><i class="fa fa-check" aria-hidden="true"></i></p></td>
                <td><p><i class="fa fa-check" aria-hidden="true"></i></p></td>
                <td><p><i class="fa fa-check" aria-hidden="true"></i></p></td>
                
              </tr>

              <tr class="text-center">
                <td width="15%" style="text-align: left;"><p><b>Conexión</b></p></td>
                <td><p>USB</p></td>
                <td><p>USB<br>
                Ethernet</p></td>
                <td><p>USB<br>
                Ethernet</p></td>
                <td><p>Wi-Fi<br>
                Ethernet</p></td>
                <td><p>Micro USB<br>
                Ethernet</p></td>
                
              </tr>

              <tr class="text-center">
                <td width="15%" style="text-align: left;"><p><b>Descarga de información</b></p></td>
                <td><p><i class="fa fa-times" aria-hidden="true"></i></p></td>
                <td><p><i class="fa fa-check" aria-hidden="true"></i></p></td>
                <td><p><i class="fa fa-check" aria-hidden="true"></i></p></td>
                <td><p><i class="fa fa-check" aria-hidden="true"></i></p></td>
                <td><p><i class="fa fa-check" aria-hidden="true"></i></p></td>
                
              </tr>

              <tr class="text-center">
                <td width="15%" style="text-align: left;"><p><b>Accesorios
                    (Se venden por separado)</b></p></td>
                <td><p><i class="fa fa-times" aria-hidden="true"></i></p></td>
                <td><p>Mini UPS<br>
                Chapa mangética<br>
                Tarjetas PVC/RFID</p></td>
                <td><p>Mini UPS</p></td>
                <td><p>Mini UPS<br>
                Tarjetas PVC/RFID</p></td>
                <td><p>Mini UPS<br>
                Tarjetas PVC/RFID<br>
                Cubierta de acrílico<br>
                Relay para chapa</p></td>
                
              </tr>

              <tr class="text-center">
                <td width="15%" style="text-align: left;"><p><b>Número de empleados</b></p></td>
                <td><p>10, 25, 50, 100, 200</p></td>
                <td><p>10, 25, 50, 100, 200, 300*, 500*, Ilimitado*</p></td>
                <td><p>10, 25, 50
                100, 200, 300*
                500*, Ilimitado*</p></td>
                <td><p>10, 25, 50
                100, 200, 300*
                500*, Ilimitado*</p></td>
                <td><p>10, 25, 50
                100, 200, 300*
                500*, Ilimitado*</p></td>
                
              </tr>

            </tbody>
          </table>
          <p>* Disponible en versión PRO</p>
           <a href="{{ url('/contacto') }}" target="_blank"> <button id="btn-hard" class="btn btn-primary btn-lg">Lo quiero</button></a>
        </div>

    </section>

    



    @include('national-soft.on-the-minute.menu-otm')

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

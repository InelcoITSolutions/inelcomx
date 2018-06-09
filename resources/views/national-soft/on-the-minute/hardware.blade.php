@extends('templates.principal')

@section('name_title','On The Minute | Inelco IT Solutions')

@push('add-css')
    <link href="/css/products-styles.css" rel="stylesheet"/>
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet"/>
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush

@section('contenido')

    @include('national-soft.on-the-minute.banner-otm')

    <section class="descripcion-prod otm-pages secciones ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <h2 class="text-center"><b>Hardware</b></h2>
                <br>
                  <div class="col-md-6">
                                  

                    <div class="col-md-6">
                    <h3><b>NS FACE MB 200</b></h3>
                    <h3>Terminal de huella digital, contraseña y reconocimiento facial</h3>
                    </div>

                    <div class="col-md-6">
                    <img id="hard" src="/images/products/otm/inelco-hardware-mb200.png" class="img-responsive">
                    </div>

                    <div class="col-md-12" style="margin-top: 3%" >
                    <p class="tx-js">Con la nueva terminal MB200, contarás con una completa seguridad y asistencia gracias al acceso por huella digital y reconocimiento facial.</p>
                    <p class="tx-js">Gracias a su tecnología TCP/IP, podrás administrarlo por red, además de contar con puerto USB para la transferencia manual de datos usando una memoria USB.</p>


                    <p>
                    <ul>
                        <li><b>Cámara infraroja:</b> Con visión nocturna.</li>
                        <li><b>Huella Digital:</b> Registra hasta 500 huellas.</li>
                        <li><b>USB:</b> Descarga de archivos.</li>
                        <li><b>Diferentes registros:</b> Escoge 1, 2 o hasa 3 tipos de registro: Huella digital, contraseña yreconocimiento facial.</li>
                        <li><b>Almacenamiento:</b> Almacena hasta 20 días sin descargar registros.</li>
                    </ul>
                    </p>

                    </div>

                    <div class="col-md-12">
                        <br>
                       <a href="{{ url('national-soft/on-the-minute/comparativa-hardware') }}"> <button id="btn-hard" class="btn btn-primary btn-lg">Comparar</button></a>
                       <a href="{{ url('/contacto') }}" target="_blank"> <button id="btn-hard" class="btn btn-primary btn-lg">Lo quiero</button></a>
                    </div>
                  
                  </div>

                    {{-- parte lateral --}}
                  <div class="col-md-6">


                    <div class="col-md-6">
                    <h3><b>K20</b></h3>
                    <h3>Terminal de huella digital, contraseña y RFID</h3>
                    </div>

                    <div class="col-md-6">
                    <img id="hard" src="/images/products/otm/inelco-hardware-k20.png" class="img-responsive">
                    </div>

                    <div class="col-md-12" style="margin-top: 3%">
                    <p class="tx-js">Con la nueva terminal K20, contarás con una completa seguridad y asistencia gracias al acceso por huella digital y el acceso a una puerta.</p>
                    <p class="tx-js">Está equipado con una batería de respaldo para continuar operando en caso de corte de energía. Gracias a su tecnología TCP/IP, podrás administrarlo por red, además de contar con puerto USB para la transferencia manual de datos usando una memoria USB.</p>
                    

                    <p>
                    <ul>
                        <li><b>Batería extra:</b> Batería con duración de 2 horas.</li>
                        <li><b>USB:</b> Descarga de archivos.</li>
                        <li><b>Diferentes registros:</b> Escoge 1, 2 o hasa 3 tipos de registro: Huella, clave y RFID.</li>
                        <li><b>Almacenamiento:</b> Almacena hasta 25 días sin descargar registros.</li>
                        
                    </ul>
                    </p>
                    </div>
                     <div class="col-md-12">
                    
                       <a href="{{ url('national-soft/on-the-minute/comparativa-hardware') }}"> <button id="btn-hard" class="btn btn-primary btn-lg">Comparar</button></a>
                       <a href="{{ url('/contacto') }}" target="_blank"> <button id="btn-hard" class="btn btn-primary btn-lg">Lo quiero</button></a>
                    </div>
                  </div>
                </div>

                {{-- segunda parte --}}

                 <div class="col-md-12" style="margin-top: 10%" id="mas">
                  <div class="col-md-6" >
                                  

                    <div class="col-md-6">
                    <h3><b>NS FACE RW</b></h3>
                    <h3>Terminal de reconocimiento facial y RFID</h3>
                    </div>

                    <div class="col-md-6">
                    <img id="hard" width="84%" src="/images/products/otm/inelco-hardware-nsface_rw_derecha.png" class="img-responsive">
                    </div>

                    <div class="col-md-12" style="margin-top: 3%">
                    <p class="tx-js">Lo último en tecnología de control de asistencia; se adapta a todo tipo de empresas, sin importar su tamaño. Es una terminal perfecta para fábricas, hospitales o laboratorios, ya que es activado automáticamente al colocar el rostro frente de la cámara infraroja, sin necesidad de tocar el dipositivo. También cuenta con conexión WiFi.</p>
                    
                    <p>
                    <ul>
                        <li><b>Cámara infraroja:</b> Con visión nocturna.</li>
                        <li>Diseño elegante y ergonómico</li>
                        <li><b>Conectividad:</b> Wi-Fi, Ethernet y USB.</li>
                        <li><b>Pantalla Táctil:</b> Tamaño 3" TFT.</li>
                        <li><b>Sistema óptico infrarrojo:</b> Que le permite identificar al usuario en entornos con poca luz.</li>
                    </ul>
                    </p>
                    </div>
                    <div class="col-md-12">
                         <br>
                         <br>
                       <a href="{{ url('national-soft/on-the-minute/comparativa-hardware') }}"> <button id="btn-hard" class="btn btn-primary btn-lg">Comparar</button></a>
                       <a href="{{ url('/contacto') }}" target="_blank"> <button id="btn-hard" class="btn btn-primary btn-lg">Lo quiero</button></a>
                    </div>
                  </div>

                    {{-- parte lateral --}}

                  <div class="col-md-6">


                    <div class="col-md-6">
                    <h3><b>TCP/IP</b></h3>
                    <h3>Terminal de huella digital, contraseña y RFID</h3>
                    </div>

                    <div class="col-md-6">
                    <img id="hard" src="/images/products/otm/inelco-hardware-tcpip.png" class="img-responsive">
                    </div>

                    <div class="col-md-12" style="margin-top: 8%">
                    <p class="tx-js">Terminal de control de asistencia ideal para empresas con diversos puntos de entrada o sucursales. Es compatible con un Mini UPS® para funcionar sin energía eléctrica, puede usar un RELAY® para abrir puertas con chapa magnética y la cubierta de acrílico* que brinda protección y seguridad al equipo.</p>
                    <p class="tx-js">* Accesorios se adquieren por separado.</p>
                    

                    <p>
                    <ul>
                        <li>Funciona sin necesidad de PC.</li>
                        <li><b>Conectividad:</b> Ethernet.</li>
                        <li><b>USB:</b> Descarga de archivos.</li>
                        <li>Pantalla TFT.</li>
                        <li>Reconocimiento de un toque por segundo.</li>
                        <li>Almacena 3,000 plantillas y 100,000 transacciones.</li>
                        
                    </ul>
                    </p>
                    </div>
                    <div class="col-md-12">
                       
                       <a href="{{ url('national-soft/on-the-minute/comparativa-hardware') }}"> <button id="btn-hard" class="btn btn-primary btn-lg">Comparar</button></a>
                       <a href="{{ url('/contacto') }}" target="_blank"> <button id="btn-hard" class="btn btn-primary btn-lg">Lo quiero</button></a>
                    </div>
                  </div>

                </div>

                   {{-- segunda parte --}}

                 <div class="col-md-12" style="margin-top: 10%">
                  <div class="col-md-6">
                                  

                    <div class="col-md-6">
                    <h3><b>DP</b></h3>
                    <h3>Lector de huella digital</h3>
                    </div>

                    <div class="col-md-6">
                    <img id="hard" height="70%" src="/images/products/otm/inelco-hardware-lector_DP.png" class="img-responsive">
                    </div>

                    <div class="col-md-12" style="margin-top: 3%">
                    <p class="tx-js">El lector On The Minute® DP es la solución ideal para micro y pequeñas empresas, lector de huella digital que se conecta a una PC vía USB para realizar los registros junto con el sistema On The Minute® 4.5. Posee un diseño ergonómico y altamente durable.</p>
                    
                    <p>
                    <ul>
                        <li>Diseño pequeño.</li>
                        <li>Excelente calidad de imagen.</li>
                        <li>Resistencia superior ESD.</li>
                        <li>Funciona bien seco, húmedo o huellas difíciles.</li>
                       
                    </ul>
                    </p>
                    </div>
                    <div class="col-md-12">
                       
                       <a href="{{ url('national-soft/on-the-minute/comparativa-hardware') }}"> <button id="btn-hard" class="btn btn-primary btn-lg">Comparar</button></a>
                       <a href="{{ url('/contacto') }}" target="_blank"> <button id="btn-hard" class="btn btn-primary btn-lg">Lo quiero</button></a>
                    </div>
                  </div>

                    {{-- parte lateral --}}

                  <div class="col-md-6">


                 
                  </div>

                </div>



            </div>
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

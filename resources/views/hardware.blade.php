@extends('templates.principal')

@section('name_title','Harwdare | Inelco IT Solutions')

@push('add-css')
<link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush

@section('contenido')
    <section class="banner-hard">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="title-h2">Con las terminales y periféricos de punto de venta Ec Line puedes equipar completamente tu restaurante</h2>
                </div>
                <div class="col-md-6">
                    <img src="/images/hardware/ec-banner.png" alt="Banner Ec Line" class="img-responsive">
                </div>
            </div>
        </div>
    </section>

    <section class="all-in-one secciones">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="/images/hardware/ec-aio.png" class="img-responsive hard-prod" alt="all in one">
                </div>
                <div class="col-md-8">
                    <h3 class="title-h3">Terminales All In One</h3>
                    <p>Computadora especializada con pantalla sensible para la operación del punto de venta.</p>
                    <center>
                        <button class="btn hard-btn ver-mas io" data-toggle="tabla1">Ver más</button>
                        <a class="a-class" href="tienda-prev"><button class="btn hard-btn comprar">Comprar</button></a>
                    </center>                    
                </div>
            </div>
            <div class="row tabla" id="tabla1">
                <div class="col-md-4">
                    <img src="/images/hardware/ec-aio.png" class="img-responsive hard-prod" alt="all in one">
                    <div class="back-tabla">
                        <h4 class="title-h4">SPR1200</h4>
                        <ul>
                            <li>Procesador Intel Atom D425 DualCore 1.8Ghz</li>
                            <li>Pantalla LCD 12” TouchScreen / 4 hilos</li>
                            <li>Resolución 1024x768 XVGA</li>
                            <li>Disco duro 500Gb | Memoria RAM 2Gb</li>
                            <li>Puerto USB, VGA de video</li>
                            <li>Fuente de poder 400Watts</li>
                            <li>Trabaja con OS: Windows 7, Windows XP,Linux, Wepos.</li>
                            <li>No incluye sistema operativo.</li>
                        </ul>
                        <center><button class="btn hard-btn ver-mas tabla-vm">Ficha técnica</button></center>
                        <center><a class="a-class" href="tienda-prev"><button class="btn hard-btn comprar tabla-c">Comprar</button></a></center>
                    </div>                    
                </div>
                <div class="col-md-4">
                    <img src="/images/hardware/ec-aio.png" class="img-responsive hard-prod" alt="all in one">
                    <div class="back-tabla">
                        <h4 class="title-h4">SPR1200</h4>
                        <ul>
                            <li>Procesador Intel Atom D425 DualCore 1.8Ghz</li>
                            <li>Pantalla LCD 12” TouchScreen / 4 hilos</li>
                            <li>Resolución 1024x768 XVGA</li>
                            <li>Disco duro 500Gb | Memoria RAM 2Gb</li>
                            <li>Puerto USB, VGA de video</li>
                            <li>Fuente de poder 400Watts</li>
                            <li>Trabaja con OS: Windows 7, Windows XP,Linux, Wepos.</li>
                            <li>No incluye sistema operativo.</li>
                        </ul>
                        <center><button class="btn hard-btn ver-mas tabla-vm">Ficha técnica</button></center>
                        <center><a class="a-class" href="tienda-prev"><button class="btn hard-btn comprar tabla-c">Comprar</button></a></center>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="/images/hardware/ec-aio.png" class="img-responsive hard-prod" alt="all in one">
                    <div class="back-tabla">
                        <h4 class="title-h4">SPR1200</h4>
                        <ul>
                            <li>Procesador Intel Atom D425 DualCore 1.8Ghz</li>
                            <li>Pantalla LCD 12” TouchScreen / 4 hilos</li>
                            <li>Resolución 1024x768 XVGA</li>
                            <li>Disco duro 500Gb | Memoria RAM 2Gb</li>
                            <li>Puerto USB, VGA de video</li>
                            <li>Fuente de poder 400Watts</li>
                            <li>Trabaja con OS: Windows 7, Windows XP,Linux, Wepos.</li>
                            <li>No incluye sistema operativo.</li>
                        </ul>
                        <center><button class="btn hard-btn ver-mas tabla-vm">Ficha técnica</button></center>
                        <center><a class="a-class" href="tienda-prev"><button class="btn hard-btn comprar tabla-c">Comprar</button></a></center>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="touchscreen secciones ">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3 class="title-h3">Monitores Touchscreen</h3>
                    <p>Convierte tu PC en una terminal de punto de venta con los monitores de pantalla sensible.</p>
                    <center>
                        <button class="btn hard-btn ver-mas io" data-toggle="tabla2">Ver más</button>
                        <!--<a class="hard-btn ver-mas" href="nosotros">Ver más</a>-->
                        <a class="hard-btn comprar" href="tienda-prev">Comprar</a>
                    </center>  
                </div>
                <div class="col-md-4">
                    <img src="/images/hardware/ec-touchcreen.png" class="img-responsive hard-prod" alt="touchscreen">
                </div>
            </div>
            <div class="row tabla" id="tabla2">
                <div class="col-md-4">
                    <img src="/images/hardware/ec-aio.png" class="img-responsive" alt="all in one">
                    <div class="back-tabla">
                        <h4 class="title-h4">SPR1200</h4>
                        <ul>
                            <li>Procesador Intel Atom D425 DualCore 1.8Ghz</li>
                            <li>Pantalla LCD 12” TouchScreen / 4 hilos</li>
                            <li>Resolución 1024x768 XVGA</li>
                            <li>Disco duro 500Gb | Memoria RAM 2Gb</li>
                            <li>Puerto USB, VGA de video</li>
                            <li>Fuente de poder 400Watts</li>
                            <li>Trabaja con OS: Windows 7, Windows XP,Linux, Wepos.</li>
                            <li>No incluye sistema operativo.</li>
                        </ul>
                        <center><button class="btn hard-btn ver-mas tabla-vm">Ficha técnica</button></center>
                        <center><a class="a-class" href="tienda-prev"><button class="btn hard-btn comprar tabla-c">Comprar</button></a></center>
                    </div>                    
                </div>
                <div class="col-md-4">
                    <img src="/images/hardware/ec-aio.png" class="img-responsive" alt="all in one">
                    <div class="back-tabla">
                        <h4 class="title-h4">SPR1200</h4>
                        <ul>
                            <li>Procesador Intel Atom D425 DualCore 1.8Ghz</li>
                            <li>Pantalla LCD 12” TouchScreen / 4 hilos</li>
                            <li>Resolución 1024x768 XVGA</li>
                            <li>Disco duro 500Gb | Memoria RAM 2Gb</li>
                            <li>Puerto USB, VGA de video</li>
                            <li>Fuente de poder 400Watts</li>
                            <li>Trabaja con OS: Windows 7, Windows XP,Linux, Wepos.</li>
                            <li>No incluye sistema operativo.</li>
                        </ul>
                        <center><button class="btn hard-btn ver-mas tabla-vm">Ficha técnica</button></center>
                        <center><a class="a-class" href="tienda-prev"><button class="btn hard-btn comprar tabla-c">Comprar</button></a></center>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="/images/hardware/ec-aio.png" class="img-responsive" alt="all in one">
                    <div class="back-tabla">
                        <h4 class="title-h4">SPR1200</h4>
                        <ul>
                            <li>Procesador Intel Atom D425 DualCore 1.8Ghz</li>
                            <li>Pantalla LCD 12” TouchScreen / 4 hilos</li>
                            <li>Resolución 1024x768 XVGA</li>
                            <li>Disco duro 500Gb | Memoria RAM 2Gb</li>
                            <li>Puerto USB, VGA de video</li>
                            <li>Fuente de poder 400Watts</li>
                            <li>Trabaja con OS: Windows 7, Windows XP,Linux, Wepos.</li>
                            <li>No incluye sistema operativo.</li>
                        </ul>
                        <center><button class="btn hard-btn ver-mas tabla-vm">Ficha técnica</button></center>
                        <center><a class="a-class" href="tienda-prev"><button class="btn hard-btn comprar tabla-c">Comprar</button></a></center>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="torretas secciones">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="/images/hardware/ec-torreta.png" class="img-responsive hard-prod" alt="torreta">
                </div>
                <div class="col-md-8">
                    <h3 class="title-h3">Torretas</h3>
                    <p>Agrega la torreta que le permite a tus clientes observar el marcaje de los productos que estas cobrando.</p>
                    <center>
                        <button class="btn hard-btn ver-mas io" data-toggle="tabla3">Ver más</button>
                        <a class="hard-btn comprar" href="tienda-prev">Comprar</a>
                    </center>                    
                </div>
            </div>
            <div class="row tabla" id="tabla3">
                <div class="col-md-4">
                    <img src="/images/hardware/ec-aio.png" class="img-responsive" alt="all in one">
                    <div class="back-tabla">
                        <h4 class="title-h4">SPR1200</h4>
                        <ul>
                            <li>Procesador Intel Atom D425 DualCore 1.8Ghz</li>
                            <li>Pantalla LCD 12” TouchScreen / 4 hilos</li>
                            <li>Resolución 1024x768 XVGA</li>
                            <li>Disco duro 500Gb | Memoria RAM 2Gb</li>
                            <li>Puerto USB, VGA de video</li>
                            <li>Fuente de poder 400Watts</li>
                            <li>Trabaja con OS: Windows 7, Windows XP,Linux, Wepos.</li>
                            <li>No incluye sistema operativo.</li>
                        </ul>
                        <center><button class="btn hard-btn ver-mas tabla-vm">Ficha técnica</button></center>
                        <center><a class="a-class" href="tienda-prev"><button class="btn hard-btn comprar tabla-c">Comprar</button></a></center>
                    </div>                    
                </div>
                <div class="col-md-4">
                    <img src="/images/hardware/ec-aio.png" class="img-responsive" alt="all in one">
                    <div class="back-tabla">
                        <h4 class="title-h4">SPR1200</h4>
                        <ul>
                            <li>Procesador Intel Atom D425 DualCore 1.8Ghz</li>
                            <li>Pantalla LCD 12” TouchScreen / 4 hilos</li>
                            <li>Resolución 1024x768 XVGA</li>
                            <li>Disco duro 500Gb | Memoria RAM 2Gb</li>
                            <li>Puerto USB, VGA de video</li>
                            <li>Fuente de poder 400Watts</li>
                            <li>Trabaja con OS: Windows 7, Windows XP,Linux, Wepos.</li>
                            <li>No incluye sistema operativo.</li>
                        </ul>
                        <center><button class="btn hard-btn ver-mas tabla-vm">Ficha técnica</button></center>
                        <center><a class="a-class" href="tienda-prev"><button class="btn hard-btn comprar tabla-c">Comprar</button></a></center>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="/images/hardware/ec-aio.png" class="img-responsive" alt="all in one">
                    <div class="back-tabla">
                        <h4 class="title-h4">SPR1200</h4>
                        <ul>
                            <li>Procesador Intel Atom D425 DualCore 1.8Ghz</li>
                            <li>Pantalla LCD 12” TouchScreen / 4 hilos</li>
                            <li>Resolución 1024x768 XVGA</li>
                            <li>Disco duro 500Gb | Memoria RAM 2Gb</li>
                            <li>Puerto USB, VGA de video</li>
                            <li>Fuente de poder 400Watts</li>
                            <li>Trabaja con OS: Windows 7, Windows XP,Linux, Wepos.</li>
                            <li>No incluye sistema operativo.</li>
                        </ul>
                        <center><button class="btn hard-btn ver-mas tabla-vm">Ficha técnica</button></center>
                        <center><a class="a-class" href="tienda-prev"><button class="btn hard-btn comprar tabla-c">Comprar</button></a></center>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="miniprinter secciones">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3 class="title-h3">Miniprinter</h3>
                    <p>Impresoras de ticket térmicas o de matriz de impacto,  con cortador automático ideal para la función de caja, y para la impresión de comandas en la cocina con alarma audible y visual.</p>
                    <center>
                        <button class="btn hard-btn ver-mas">Ver más</button>
                        <a class="hard-btn comprar" href="tienda-prev">Comprar</a>
                    </center>  
                </div>
                <div class="col-md-4">
                    <img src="/images/hardware/ec-miniprinter.png" class="img-responsive hard-prod" alt="ec-miniprinter">
                </div>
            </div>
       </div>
    </section>

    <section class="imp-etiquetas secciones">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="/images/hardware/ec-imp-etiquetas.png" class="img-responsive hard-prod" alt="ec-imp-etiquetas">
                </div>
                <div class="col-md-8">
                    <h3 class="title-h3">Impresoras de etiquetas</h3>
                    <p>Imprime etiquetas para todos tus productos con los datos que necesites inclusive con códigos de barras para facilitar su identificación al cobrarlos. También imprime las etiquetas para los anaqueles incluyendo su precio.</p>
                    <center>
                        <button class="btn hard-btn ver-mas">Ver más</button>
                        <a class="hard-btn comprar" href="tienda-prev">Comprar</a>
                    </center>                    
                </div>
            </div>
        </div>
    </section>

    <section class="cajon secciones">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3 class="title-h3">Cajón de dineo</h3>
                    <p>Conecta el cajón de dinero con depósitos para monedas y billetes con apertura automática al realizar el cobro, con ranura para recepción de cheques y documentos sin necesidad de abrir el cajón.</p>
                    <center>
                        <button class="btn hard-btn ver-mas">Ver más</button>
                        <a class="hard-btn comprar" href="tienda-prev">Comprar</a>
                    </center>        
                </div>
                <div class="col-md-4">
                    <img src="/images/hardware/ec-cajon.png" class="img-responsive hard-prod" alt="ec-cajon">
                </div>
            </div>
        </div>
    </section>

    <section class="scanner secciones">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="/images/hardware/ec-scanner.jpg" class="img-responsive hard-prod" alt="ec-scanner">
                </div>
                <div class="col-md-8">
                    <h3 class="title-h3">Lectores de códigos de barras</h3>
                    <p>Agiliza el marcaje de productos en la caja de cobro con los lectores de códigos de barras. Disponibles CCD, láser y omnidireccionales.</p>
                    <center>
                        <button class="btn hard-btn ver-mas">Ver más</button>
                        <a class="hard-btn comprar" href="tienda-prev">Comprar</a>
                    </center>           
                </div>
            </div>
        </div>
    </section>

    <section class="accesorios secciones">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3 class="title-h3">Accesorios y consumibles</h3>
                    <p>Lectores de tarjetas de banda magnética, teclados especializados, convertidores y más.</p>
                    <center>
                        <button class="btn hard-btn ver-mas">Ver más</button>
                        <a class="hard-btn comprar" href="tienda-prev">Comprar</a>
                    </center>  
                </div>
                <div class="col-md-4">
                    <img src="/images/hardware/ec-accesorio.png" class="img-responsive hard-prod" alt="ec-accesorio">
                </div>
            </div>
        </div>
    </section>

    <section class="mensaje secciones">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="title-h3">Adquiere todos los equipos que requiere tu punto de venta.</h3>
                    <p>Contamos con toda la variedad de equipo de punto de venta, accesorios y consumibles que ocupas en tu negocio.</p>
                    <p>Adquiérelos al mejor precio en nuestra tienda en línea y recíbelos en tu domicilio.</p>
                    <center>
                        <a class="hard-btn comprar" href="tienda-prev">Tienda en línea</a>
                    </center>  
                </div>
            </div>
        </div>
    </section>

@endsection

@push('add-js')
    <script src="/js/wrap-table.js"></script>
    <script>
        $("body").attr('pagina','Productos');
    </script>
@endpush
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <title>Reservacion</title>
    {{-- <link rel="stylesheet" type="text/css" href="../../public/css/reservation-pdf.css"> --}}
    {!! Html::style('css/reservation-pdf.css') !!} 
</head>

<body>
    <header class="clearfix">
        <div>
            <img alt=" " src="https://inelco.mx/images/banner-pdf.jpg" width="100%">
        </div>
        <div>
            <p class="text-left">
                <img alt="Inelco IT Solutions" src="https://inelco.mx/images/logo2.jpg" height="60">
            </p>
            <p class="text-right">
                <img alt="Inelco IT Solutions" src="https://inelco.mx/images/products/inelco-aspel-logo.png" height="60">
            </p>
        </div>
    </header>
    <div class="secciones">
        <h1>{{ $recibi->evento }}</h1>
        <h2>Reservacion <b>{{ $recibi->no_reservacion }}</b></h2>
        <p class="text-center">Hemos confirmado su reservación a nuestra evento para:</p>
        <h3><b>{{ $recibi->nombre }} {{ $recibi->apellidos }}</b></h3>
        <h4><b>{{ $recibi->empresa }}</b></h4>
        <table class="info">
            <thead>
                <tr>
                    <th>LUGAR</th>
                    <th>FECHA</th>
                </tr>                    
            </thead>
            <tbody>
                <tr>
                    <td>
                        <p>{{ $recibi->lugar }}</p>
                        <p>{{ $recibi->direccion }}</p>
                        <p>{{ $recibi->ciudad }}</p>
                    </td>
                    <td>
                        <p>{{ $recibi->fecha }}</p>
                        <p>{{ $recibi->horario }}</p>
                    </td>
                </tr>
            </tbody>
        </table>
        <p><b class="resaltar">Inelco IT Solutions</b> le agradece su interés y asistencia a nuestro evento. Le invitamos a consultar nuestro <b class="resaltar">calendario</b> de conferencias, talleres y cursos en: <a target="_blank" href="https://inelco.mx/calendario">inelco.mx/calendario</a></p>
        <!--<p>Más información de <b class="resaltar">Aspel NOI</b> en <a target="_blank" href="https://inelco.mx/aspel-noi">https://inelco.mx/aspel-noi</a>.
             Conoce el <b class="resaltar">Nuevo NOI 8</b> en <a href="https://inelco.mx/nuevo-noi8">https://inelco.mx/nuevo-noi8</a>--></p>
        <ul>
            <li>Favor de presentar esta reservación impresa en el registro del evento.</li>
        </ul>
        <table class="transparent">
            <thead>
                <tr>
                    <th>
                        <h1>Inelco IT Solutions</h1>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <p>Edificio Cintermex local 18PB</p>
                        <p>64010 Monterrey, NL</p>
                        <p>(81) 1352 2222</p>
                    </td>
                    <td>
                        <p>Mariano Otero N°610 local 3PB</p>
                        <p>78250 San Luis Potosí, SLP</p>
                        <p>(444) 211 9009</p>
                    </td>
                </tr>
            </tbody>
        </table>
        <hr>
        <h1 class="footer">www.inelco.mx</h1>
    </div>
</body>

</html>

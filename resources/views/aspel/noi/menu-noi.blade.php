@push('files-menu')
<script src="/js/modernizr.custom2.js">
</script>
<script src="/js/jquery.dlmenu.js">
</script>
<script>
    $(function() {
            $( '#dl-menu' ).dlmenu({
                animationClasses : { classin : 'dl-animate-in-2', classout : 'dl-animate-out-2' }
            });
        });
</script>
@endpush
<div class="demo-2" id="menu-noi">
    <div class="dl-menuwrapper" id="dl-menu">
        <button class="dl-trigger btn btn-default btn-circle btn-xl">
            Open Menu
        </button>
        <ul class="dl-menu">
            <li>
                <a href="{{url('aspel-noi')}}">
                    NOI
                </a>
            </li>
            <li>
                <a href="#">
                    Soluciones
                </a>
                <ul class="dl-submenu">
                    <li>
                        <a href="{{url('aspel-noi/soluciones#eficiente-administracion-del-capital-humano')}}">
                            Eficiente administración del capital humano
                        </a>
                    </li>
                    <li>
                        <a href="{{url('aspel-noi/soluciones#calculo-de-la-nomina')}}">
                            Cálculo de la nómina
                        </a>
                    </li>
                    <li>
                        <a href="{{url('aspel-noi/soluciones#movimientos-a-la-nomina')}}">
                            Movimientos a la nómina
                        </a>
                    </li>
                    <li>
                        <a href="{{url('aspel-noi/soluciones#recibos-de-nomina-cfdi')}}">
                            Recibos de nómina CFDI
                        </a>
                    </li>
                    <li>
                        <a href="{{url('aspel-noi/soluciones#imss-y-afore')}}">
                            IMSS y AFORE
                        </a>
                    </li>
                    <li>
                        <a href="{{url('aspel-noi/soluciones#aspel-noi-imss')}}">
                            Aspel-NOI-IMSS
                        </a>
                    </li>
                    <li>
                        <a href="{{url('aspel-noi/soluciones#modulo-fiscal')}}">
                            Módulo fiscal
                        </a>
                    </li>
                    <li>
                        <a href="{{url('aspel-noi/soluciones#mas-soluciones')}}">
                            Más soluciones NOI
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{url('aspel-noi/lo-nuevo')}}">
                    Lo nuevo
                </a>
            </li>
            <li>
                <a href="{{url('centro-de-descarga#noi')}}">
                    Descargar Aspel NOI
                </a>
            </li>
        </ul>
    </div>
    <!-- /dl-menuwrapper -->
</div>

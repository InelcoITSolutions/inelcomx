@push('files-menu')   
    <script src="/js/modernizr.custom2.js"></script>
    <script src="/js/jquery.dlmenu.js"></script>
    <script>
        $(function() {
            $( '#dl-menu' ).dlmenu({
                animationClasses : { classin : 'dl-animate-in-2', classout : 'dl-animate-out-2' }
            });
        });
    </script>
@endpush

	<div class="demo-2" id="menu-admTienda">    
        <div id="dl-menu" class="dl-menuwrapper">
            <button class="dl-trigger btn btn-default btn-circle btn-xl">Open Menu</button>
                <ul class="dl-menu">
                    <li>
                        <a href="{{url('aspel-admtienda')}}">ADM Tienda</a>
                    </li>
                    <li>
                <a href="#">
                    Soluciones
                </a>
                <ul class="dl-submenu">
                    <li>
                        <a href="{{url('aspel-admtienda/soluciones#notas-venta')}}">
                            Notas de venta.
                        </a>
                    </li>
                    <li>
                        <a href="{{url('aspel-admtienda/soluciones#clientes')}}">
                           Clientes.
                        </a>
                    </li>
                    <li>
                        <a href="{{url('aspel-admtienda/soluciones#productos')}}">
                            Productos.
                        </a>
                    </li>
                    <li>
                        <a href="{{url('aspel-admtienda/soluciones#movimientos-caja')}}">
                            Movimientos de caja.
                        </a>
                    </li>
                    <li>
                        <a href="{{url('aspel-admtienda/soluciones#administra-venta')}}">
                            Administra tu punto de venta.
                        </a>
                    </li>
                    <li>
                        <a href="{{url('aspel-admtienda/soluciones#mas-soluciones')}}">
                            Más Soluciones.
                        </a>
                    </li>
                    
                </ul>
            </li>
                    <li>
                        <a href="{{url('aspel-admtienda/lo-nuevo')}}">Lo nuevo</a>
                    </li>

                    <li>
                        <a href="{{url('aspel-admtienda/dispositivos-compatibles')}}">Dispositivos compatibles</a>
                    </li>
                    
                    <!--<li>
                        <a href="#">Factura electrónica</a>
                    </li>-->
                    <li>
                        <a href="{{url('aspel-admtienda/lista-precios')}}">Lista de precios</a>
                    </li>
                    <li>
                        <a href="https://play.google.com/store/apps/details?id=com.aspel.ADMTienda&hl=es" target="_blank">Descargar</a>
                    </li>
                </ul>
        </div><!-- /dl-menuwrapper -->
    </div>


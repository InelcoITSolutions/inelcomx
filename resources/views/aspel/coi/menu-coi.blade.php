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

<div class="demo-2" id="menu-coi">
    <div id="dl-menu" class="dl-menuwrapper">
        <button class="dl-trigger btn btn-default btn-circle btn-xl">Open Menu</button>
        <ul class="dl-menu">
            <li>
                <a href="{{url('aspel-coi')}}">COI</a>
            </li>
            <li>
                <a href="#">
                            Soluciones
                        </a>
                <ul class="dl-submenu">
                    <li>
                        <a href="{{url('aspel-coi/soluciones#catalogo-de-cuentas')}}">
                                    Catálogo de cuentas
                                </a>
                    </li>
                    <li>
                        <a href="{{url('aspel-coi/soluciones#clientes-y-cuentas-por-cobrar')}}">
                                    Departamentos, centro de costos y/o proyectos
                                </a>
                    </li>
                    <li>
                        <a href="{{url('aspel-coi/soluciones#contabilidad-electronica')}}">
                                    Contabilidad Eléctronica 1.3
                                </a>
                    </li>
                    <li>
                        <a href="{{url('aspel-coi/soluciones#facturas-y-vendedores')}}">
                                    Pólizas
                                </a>
                    </li>
                    <li>
                        <a href="{{url('aspel-coi/soluciones#proveedores')}}">
                                    Fiscales
                                </a>
                    </li>
                    <li>
                        <a href="{{url('aspel-coi/soluciones#compras')}}">
                                    Activos y depreciación
                                </a>
                    </li>
                    <li>
                        <a href="{{url('aspel-coi/soluciones#coi-en-la-nube')}}">
                                    Multimoneda
                                </a>
                    </li>
                    <li>
                        <a href="{{url('aspel-coi/soluciones#mas-soluciones')}}">
                                    Más soluciones COI
                                </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{url('aspel-coi/lo-nuevo')}}">
                            Lo nuevo
                        </a>
            </li>
            <li>
                <a href="{{url('centro-de-descarga#coi')}}">
                            Descargar Aspel COI
                        </a>
            </li>
        </ul>
    </div>
</div>
<!-- /dl-menuwrapper -->
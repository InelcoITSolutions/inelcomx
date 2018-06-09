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
<div class="demo-2" id="menu-facture">
    <div class="dl-menuwrapper" id="dl-menu">
        <button class="dl-trigger btn btn-default btn-circle btn-xl">
            Open Menu
        </button>
        <ul class="dl-menu">
            <li>
                <a href="{{url('aspel-facture')}}">
                    FACTURE
                </a>
            </li>
            <li>
                <a href="#">Soluciones</a>
                <ul class="dl-submenu">
                    <li>
                        <a href="{{url('aspel-facture/soluciones#factura-facil-y-rapido')}}">
                            Factura fácil y rápido
                        </a>
                    </li>
                    <li>
                        <a href="{{url('aspel-facture/soluciones#complementos')}}">
                            Complementos
                        </a>
                    </li>
                    <li>
                        <a href="{{url('aspel-facture/soluciones#mas-soluciones-facture')}}">
                            Más soluciones FACTURe
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{url('aspel-facture/lo-nuevo')}}">
                    Lo nuevo
                </a>
            </li>
            <li>
                <a href="{{url('centro-de-descarga#facture')}}">
                    Descargar Aspel facture
                </a>
            </li>
        </ul>
    </div>
    <!-- /dl-menuwrapper -->
</div>

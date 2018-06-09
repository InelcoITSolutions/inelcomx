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

	<div class="demo-2" id="menu-sae">    
        <div id="dl-menu" class="dl-menuwrapper">
            <button class="dl-trigger btn btn-default btn-circle btn-xl">Open Menu</button>
                <ul class="dl-menu">
                    <li>
                        <a href="{{url('aspel-saenube')}}">SAE Nube</a>
                    </li>
                    <li>
                        <a href="#">Soluciones</a>
                            <ul class="dl-submenu">
                                <li><a href="{{url('aspel-saenube/soluciones#sae-en-la-nube')}}">SAE en mi propia Nube</a></li>
                                <li><a href="{{url('aspel-saenube/soluciones#soluciones')}}">Soluciones</a></li>
                                <li><a href="{{url('aspel-saenube/soluciones#MasSoluciones')}}">Más beneficios</a></li>
                                <li><a href="{{url('aspel-saenube/soluciones#Interfacez')}}">Conexión con otras interfaces</a></li>
                                <li><a href="{{url('aspel-saenube/soluciones#espacio')}}">Espacio</a></li>
                            </ul>
                    </li>
                    <li>
                        <a href="{{url('aspel-saenube/lo-nuevo')}}">Lo nuevo</a>
                    </li>
                    <li>
                        <a href="{{url('aspel-saenube/sae-nube-movil')}}">SAE móvil</a>
                    </li>
                    <!--<li>
                        <a href="#">Factura electrónica</a>
                    </li>-->
                    <li>
                        <a href="#">Descargar Aspel SAE</a>
                    </li>
                </ul>
        </div><!-- /dl-menuwrapper -->
    </div>


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

	<div class="demo-2" id="menu-espacio">    
        <div id="dl-menu" class="dl-menuwrapper">
            <button class="dl-trigger btn btn-default btn-circle btn-xl">Open Menu</button>
                <ul class="dl-menu">
                    <li>
                        <a href="{{url('aspel-espacio')}}">ⓔspacio Aspel</a>
                    </li>
                    <li>
                        <a href="{{url('aspel-espacio/modalidades')}}">Modalidades</a>
                            
                    </li>
                    <li>
                        <a href="{{url('aspel-espacio/lo-nuevo')}}">Lo nuevo</a>
                    </li>
                    
                    <!--<li>
                        <a href="#">Factura electrónica</a>
                    </li>-->
                    <li>
                        <a href="{{url('aspel-espacio/lista-precios')}}">Lista de precios</a>
                    </li>
                </ul>
        </div><!-- /dl-menuwrapper -->
    </div>


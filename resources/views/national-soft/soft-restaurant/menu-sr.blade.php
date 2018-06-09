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
<div class="demo-2" id="menu-sr">
    <div class="dl-menuwrapper" id="dl-menu">
        <button class="dl-trigger btn btn-default btn-circle btn-xl">
            Open Menu
        </button>
        <ul class="dl-menu">
            <li>
                <a href="{{url('national-soft/soft-restaurant')}}">
                    Soft Restaurant
                </a>
            </li>
            <li>
                <a href="#">
                    Soluciones
                </a>
                <ul class="dl-submenu">
                    <li>
                        <a href="{{url('national-soft/soft-restaurant/soluciones#Restaurant')}}">
                            Restaurant
                        </a>
                    </li>
                    <li>
                        <a href="{{url('national-soft/soft-restaurant/soluciones#Pizzeria')}}">
                            Pizzería
                        </a>
                    </li>
                    <li>
                        <a href="{{url('national-soft/soft-restaurant/soluciones#Disco-Bar')}}">
                            Disco / Bar
                        </a>
                    </li>
                    <li>
                        <a href="{{url('national-soft/soft-restaurant/soluciones#Cafeteria')}}">
                            Cafetería
                        </a>
                    </li>
                    <li>
                        <a href="{{url('national-soft/soft-restaurant/soluciones#Servicio-a-domicilio')}}">
                            Servicio a domicilio
                        </a>
                    </li>
                    <li>
                        <a href="{{url('national-soft/soft-restaurant/soluciones#Fast-food')}}">
                            Fast food
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{url('national-soft/soft-restaurant/lo-nuevo')}}">
                    Lo nuevo
                </a>
            </li>
            <li>
                <a href="{{url('national-soft/soft-restaurant/movil')}}">
                    Soft Restaurant Móvil
                </a>
            </li>
            {{--<li>
                <a href="{{url('national-soft/soft-restaurant/modulos-adicionales')}}">
                    Modulos adicionales
                </a>
            </li>--}}
            
        </ul>
    </div>
    <!-- /dl-menuwrapper -->
</div>

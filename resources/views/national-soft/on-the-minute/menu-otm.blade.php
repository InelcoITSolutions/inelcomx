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
<div class="demo-2" id="menu-otm">
    <div class="dl-menuwrapper" id="dl-menu">
        <button class="dl-trigger  btn btn-default btn-circle btn-xl">
            Open Menu
        </button>
        <ul class="dl-menu">
            <li>
                <a href="{{url('national-soft/on-the-minute')}}">
                    On the minute
                </a>
            </li>
            <li>
                <a href="{{url('national-soft/on-the-minute/caracteristicas')}}">
                    Características
                </a>
            </li>
            <li>
                <a href="{{url('national-soft/on-the-minute/modulos-adicionales')}}">
                    Módulos adicionales
                </a>
            </li>
             <li>
                <a href="{{url('national-soft/on-the-minute/hardware')}}">
                   Hardware
                </a>
            </li>
             <li>
                <a href="{{url('national-soft/on-the-minute/comparativa-hardware')}}">
                   Comparativo de Hardware
                </a>
            </li>
            {{--<li>
                <a href="{{url('national-soft/soft-restaurant/modulos-adicionales')}}">
                    Modulos adicionales
                </a>
            </li>--}}
            <li>
                
            </li>
        </ul>
    </div>
    <!-- /dl-menuwrapper -->
</div>

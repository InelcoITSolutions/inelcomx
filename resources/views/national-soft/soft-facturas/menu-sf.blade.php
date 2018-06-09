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
<div class="demo-2" id="menu-sf">
    <div class="dl-menuwrapper" id="dl-menu">
        <button class="dl-trigger btn btn-default btn-circle btn-xl">
            Open Menu
        </button>
        <ul class="dl-menu">
            <li>
                <a href="{{url('national-soft/soft-facturas')}}">
                    Soft Facturas
                </a>
            </li>
            <li>
                <a href="{{url('national-soft/soft-facturas/movil')}}">
                    Soft Facturas Móvil
                </a>
            </li>
            {{--<li>
                <a href="{{url('national-soft/soft-restaurant/modulos-adicionales')}}">
                    Modulos adicionales
                </a>
            </li>--}}
            <li>
                <a href="{{url('https://play.google.com/store/apps/details?id=com.nationalsoft.softfacturas')}}" target="_blank">
                    Descargar Soft Facturas
                </a>
            </li>
        </ul>
    </div>
    <!-- /dl-menuwrapper -->
</div>

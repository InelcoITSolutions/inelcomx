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
<div class="demo-2" id="menu-icrm">
    <div class="dl-menuwrapper" id="dl-menu">
        <button class="dl-trigger btn btn-default btn-circle btn-xl">
            Open Menu
        </button>
        <ul class="dl-menu">
            <li>
                <a href="{{url('incrementacrm')}}">
                    Incrementa CRM
                </a>
            </li>
            <li>
                <a href="{{url('incrementa/caracteristicas')}}">
                    Caracteristicas
                </a>
            </li>

             <li>
                <a href="{{url('incrementa/precio-mensual')}}">
                    Lista de precios
                </a>
            </li>
            
            {{--<li>
                <a href="{{url('national-soft/soft-restaurant/modulos-adicionales')}}">
                    Modulos adicionales
                </a>
            </li>--}}
            <li>
                <a href="https://incrementacrm.com/invite-code/inelco" target="_blank">
                    Obtener Incrementa CRM
                </a>
            </li>
        </ul>
    </div>
    <!-- /dl-menuwrapper -->
</div>

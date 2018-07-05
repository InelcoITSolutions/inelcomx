<section class="timing secciones" id="registrarme"> 
        <div class="container">
            <div class="row">          
                
                @if($landinfo->precio_evento <>0)
                    <p class="text-center">¡No dejes pasar esta oportunidad! Regístrate hoy mismo</p>
                @else
                    <p class="text-center">¡No dejes pasar esta oportunidad! Regístrate hoy mismo <b>¡GRATIS!</b></p>
                @endif
                
                {{-- <form class="form-horizontal" > --}}
                {!! Form::open(array('url' =>'calendario/evento/reservacion', 'class' => 'form-horizontal')) !!}
                    
                    <input type="hidden" name="_method" value="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-content"><!-- FROM-CONTENT (JQuery Multifield) +=+ I N I C I O -->
                        <hr class="accessory">
                        <div class="grupo-reservacion"><!-- GRUPO A MULTIPLICAR (JQuery Multifield) +=+ I N I C I O -->
                            <div class="col-md-6 col-md-offset-3">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa icon-v-card"></i></div>
                                        <input name="nombre[]" type="text" class="form-control campo-formulario nombre" placeholder="Nombre" autocomplete="off" required style="text-transform: capitalize;"> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-md-offset-3">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa icon-v-card"></i></div>
                                        <input name="apellidos[]" type="text" class="form-control campo-formulario apellidos" placeholder="Apellidos" autocomplete="off" required style="text-transform: capitalize;">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-md-offset-3">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa icon-office"></i></div>
                                        <input name="empresa[]" type="text" class="form-control empresa" id="empresaf" placeholder="Empresa" autocomplete="off" onkeyup="var start = this.selectionStart;var end = this.selectionEnd;this.value = this.value.toUpperCase();this.setSelectionRange(start, end);" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-md-offset-3">
                                <div class="form-group">
                                    <div class="input-group ">
                                        <div class="input-group-addon"><i class="fa icon-mail"></i></div>
                                        <input name="email[]" type="email" class="form-control campo-formulario email" placeholder="E-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-md-offset-3">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa icon-mobile"></i></div>
                                        <input name="telefono[]" type="tel" class="form-control campo-formulario tel" placeholder="Teléfono (10 dígitos)" autocomplete="off" maxlength="10" pattern="[0-9]{10}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa icon-mobile"></i></div>
                                        <input name="ext[]" type="text" class="form-control campo-formulario ext" placeholder="Extensión" autocomplete="off" maxlength="5" pattern="[0-9]{0,6}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-md-offset-3 btnRemove">
                                <div class="form-group">
                                    {{--
                                    <input type="radio" name="enviarm[0]" value="pago" checked>
                                    <span class="text-base">
                                                            Enviar pago y reservación.
                                                        </span>
                                    <span style="display:block"></span>
                                    <input style="display:none" type="radio" name="enviarm[0]" value="reservacion" id="reservacionradio">
                                    <span style="display:none" class="text-base" id="reservacionradio">
                                                            Enviar sólo reservación.
                                                        </span>
                                    <span style="display:block"></span> --}}
                                    <button type="button" class="btn-delete ">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <label class="label-btn">Eliminar registro</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <hr class="accessory">
                            </div>
                        </div><!-- GRUPO A MULTIPLICAR (JQuery Multifield) +=+ F I N A L -->
                        
                        <!-- Botón de agregar más usuarios -->
                        <button style="display:none" type="button" class="btnAdd">
                        </button>
                    </div><!-- FROM-CONTENT (JQuery Multifield) +=+ F I N A L-->


                    <input style="display: none;" type="text" name="no_reservacion" value="{{date("y") . date("z") . date("H"). date("i") . date("s") }}">
                    <input style="display: none;" type="text" name="evento" value="Curso {{ $landinfo->nombre_evento }}">
                    <input style="display: none;" type="text" name="fecha" value="{{ $landinfo->nombre_dias_evento }} {{ $landinfo->numero_dias_evento }} de {{ $meses[$m-1] }} de {{ $landinfo->anio }}">
                    <input style="display: none;" type="text" name="horario" value="{{ $landinfo->horario_evento }} hrs">
                    <input style="display: none;" type="text" name="lugar" value="{{ $landinfo->lugar }}">
                    <input style="display: none;" type="text" name="direccion" value="{{ $landinfo->direccion }}">
                    <input style="display: none;" type="text" name="ciudad" value="{{ $landinfo->cp_evento }}, {{ $landinfo->ciudad }}, {{ $landinfo->estado }}">
                    <input style="display: none;" type="text" name="paga" value="{{ $landinfo->precio_evento }}">
                    
                    <!-- Botón de agregar más usuarios -->
                    <div class="col-md-6 col-md-offset-3">
                        <div class="form-group">
                            <button type="button" id="btnAgregarForm" class="btn-add" disabled>
                                <i class="fas fa-plus"></i>    
                            </button>
                            <label class="label-btn label-btn-disabled">Agregar registro</label>
                        </div>
                    </div>

                    <div class="col-md-12 checkbox">
                        <div class="text-center">
                        <label>
                            <input id="iOptinEmail" type="checkbox" required>
                            <span class="text-base">
                                Acepto los
                                <a href="/images/Términos y Políticas de Cursos.pdf" target="_blank" style="text-decoration: none">
                                    Términos y Políticas de Cursos.
                                </a>
                            </span>
                        </label>
                        </div>
                     </div>
                    <div class="col-md-12">
                        <div class="form-group text-center" >
                            {!! Form::button('Registrar',['type'=>'submit', 'class'=>'btn btn-lg', 'id'=>'subm']) !!}
                        </div>
                    </div>
                {!! Form::close() !!} 
            </div>
        </div>
</section>

@push('add-js-form')
 <script>
    //Script para agregar otro registro al formulario
    $(document).ready(function() {
        $('#btnAgregarForm').on('click', function() {
            $('.btnAdd').trigger("click");
        });
    });
</script>
<script>
    //Script que llama al plugin JQuery Multifield y clona el formulario
    $('.form-content').multifield({
        section: '.grupo-reservacion',
        btnAdd: '.btnAdd',
        btnRemove: '.btnRemove',

    });
</script>
<script>
    //Script que modifica la vista de la sección copyright
    $(document).ready(function() {
        if ($(window).width() < 697) {
            $(".id-landing").css("display", "none");
            $(".span-copyright").css("display", "block");
        }
    });
</script>
<script>
    //Script que activa el botón de agregar otro registro al completar los input
    $(document).ready(function() {

        $(function() {
            $('#btnAgregarForm').attr('disabled', 'disabled');
        });

        $('input[type=text], input[type=tel], input[type=email]').keyup(function() {

            if ($('.nombre').val() != '' &&
                $('.apellidos').val() != '' &&
                $('.empresa').val() != '' &&
                $('.email').val() != '' &&
                $('.tel').val() != '') {

                $('#btnAgregarForm').removeAttr('disabled');
                $('.label-btn').removeClass('label-btn-disabled');
            } else {
                $('#btnAgregarForm').attr('disabled', 'disabled');
                $('.label-btn').addClass('label-btn-disabled');
            }
        });
    });
</script>
@endpush
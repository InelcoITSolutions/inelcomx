@if (count($errors) > 0)
    <div class="modal fade" id="modalError" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog ">
        <div class="modal-content alert alert-danger">
          <div class="modal-header">
            <button style="color: #FFF" type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Error</h4>
          </div>
          <div class="modal-body">
            <strong>Whoops! Algo salio mal ...</strong>
            <br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
          </div>
          <div class="modal-footer">
            <button  type="button" class="btn btn-default btn-simple" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    
@endif

@push('add-js')
    <script>
        window.onload = function() {
            $("#modalError").modal();
        };
    </script>
@endpush




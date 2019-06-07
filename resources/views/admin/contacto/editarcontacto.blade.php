@extends('layouts.administracion')

@section('content')
  <div class="container">
    <h1>Editar Datos de Contacto</h1>

    <form method="post" action="/actualizarcontacto/{{$contacto->id}}" enctype="multipart/form-data" file="true">
      @csrf
    <div class="row">
      <div class="col-md-8">

          <div class="form-group required autocomplete">
            <label>Direccion</label>
            <input type="text" name="direccion_contacto" value="{{$contacto->direccion_contacto}}" class="form-control" required>
          </div>
          <div class="form-group required autocomplete">
            <label>Telefono</label>
            <input type="text" name="telefono_contacto" value="{{$contacto->telefono_contacto}}" class="form-control" required minlength="10" maxlength="10">
          </div>
          <div class="form-group required autocomplete">
            <label>Correo Electronico</label>
            <input type="email" name="correo_contacto" value="{{$contacto->correo_contacto}}" class="form-control" required>
          </div>
          <div class="form_group">
            <button class="btn btn-primary">Guardar Cambios</button>
          </div>
      </div>
      </div>
    </form>
  </div>
@endsection
<!-- bootstrap datepicker -->
@push('styles')
  <link rel="stylesheet" href="../../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.css">
@endpush

@push('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
  <!-- CK Editor -->
  <script src="../../bower_components/ckeditor/ckeditor.js"></script>
  <script src="../../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <script>
  $('#datepicker').datepicker({
    autoclose: true
  })
   CKEDITOR.replace('editor')
  </script>
@endpush

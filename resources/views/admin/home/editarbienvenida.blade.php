@extends('layouts.administracion')


@section('content')
  <div class="container">
    <h1>Editar Bienvenida</h1>

    <form method="post" action="/actualizarbienvenida/{{$bien->id}}" enctype="multipart/form-data" file="true">
      @csrf
    <div class="row">
      <div class="col-md-8">

          <div class="form-group required autocomplete">
            <label>Titulo</label>
            <input type="text" name="titulo_bienvenida" value="{{$bien->titulo_bienvenida}}" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Descripcion</label>
            <textarea name="descripcion_bienvenida" id="editor" rows="8" cols="80" class="form-control" required>{{$bien->descripcion_bienvenida}}</textarea>
          </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <!--
          <div class="form-group">
                <label>Date:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker">
                </div>
                <!-- /.input group -->
                <label>Imagen de Bienvenida</label>
                <input type="file" name="imagen_bienvenida" value="{{$bien->imagen_bienvenida}}" class="form-control" accept="image/*" required>
              </div>
              <div class="form_group">
                <button class="btn btn-primary">Guardar Cambios</button>
              </div>
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
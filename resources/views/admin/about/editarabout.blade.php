@extends('layouts.administracion')

@section('content')
  <div class="container">
    <h1>Editar Seccion</h1>
    <form method="post" action="/actualizarabout/{{$about->id}}" enctype="multipart/form-data" file="true">
      @csrf
    <div class="row">
      <div class="col-md-8">

          <div class="form-group required autocomplete">
            <label>Titulo</label>
            <input type="text" name="titulo_about" value="{{$about->titulo_about}}" class="form-control">
          </div>
          <div class="form-group">
            <label>Descripcion</label>
            <textarea name="descripcion_about" id="editor" rows="8" cols="80" class="form-control">{{$about->descripcion_about}}</textarea>
          </div>
          <div class="form-group">
            <label>Imagen de Bienvenida</label>
            <input type="file" name="imagen_about" class="form-control">
          </div>
          <div class="form-group required autocomplete">
              <label>Titulo del Segundo Apartado</label>
              <input type="text" name="titulo2_about" value="{{$about->titulo2_about}}" class="form-control">
          </div>
          <div class="form-group">
              <label>Descripcion del Segundo Apartado</label>
              <textarea name="descripcion2_about" id="editor1" rows="8" cols="80" class="form-control">{{$about->descripcion2_about}}</textarea>
          </div>
          <div class="form-group">
              <label>Imagen del Segundo Apartado</label>
              <input type="file" name="imagen2_about" class="form-control">
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
@endpush

@push('scripts')
  <!-- CK Editor -->
  <script src="../../bower_components/ckeditor/ckeditor.js"></script>
  <script src="../../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <script>
  $('#datepicker').datepicker({
    autoclose: true
  })
   CKEDITOR.replace('editor')
    CKEDITOR.replace('editor1')
  </script>
@endpush

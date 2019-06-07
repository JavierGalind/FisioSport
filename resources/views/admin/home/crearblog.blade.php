@extends('layouts.administracion')

@section('content')
<div class="container">
        <h1>Crear Blog</h1>
        <form method="post" action="{{route('guardarblog')}}" enctype="multipart/form-data" file="true">
          @csrf
        <div class="row">
          <div class="col-md-8">
    
              <div class="form-group required autocomplete">
                <label>Titulo</label>
                <input type="text" name="titulo_blog" placeholder="Ingresa el titulo" class="form-control" required>
              </div>
              <div class="form-group">
                <label>Descripcion</label>
                <textarea name="descripcion_blog" id="editor" rows="8" cols="80" class="form-control" required></textarea>
              </div>
              <div class="form-group">
                    <label>Imagen de Bienvenida</label>
                    <input type="file" name="imagen_blog" class="form-control" accept="image/*" required>
                  </div>
                  <div class="form_group">
                    <button class="btn btn-primary">Guardar</button>
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
      </script>
    @endpush
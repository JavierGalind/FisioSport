@extends('layouts.administracion')

@section('content')
  <div class="container">
    <h1>Crear Imagen para Slider</h1>
    <form method="post" action="{{route('guardarslider')}}" enctype="multipart/form-data" file="true">
      @csrf
    <div class="row">
      <div class="col-md-8">
        <div class="form-group">
                <label>Imagen del Slider</label>
                <input type="file" name="imagen_slider" class="form-control" accept="image/*" required>
                </div>
                <div class="form_group">
                <button class="btn btn-primary">Guardar</button>
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

@extends('layouts.administracion')

@section('content')
<div class="container">
  <div class="col-md-8">
    <h1>Slider</h1>
    <a href="{{route('crearslider')}}" class="btn btn-info">CREAR IMAGEN DEL SLIDER</a>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Imagen</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($slider as $sli)
          <tr>
            <th scope="row">{{$sli->id}}</th>
            <td><img src="img/{{$sli->imagen_slider}}" alt="" width="200" height="200"></td>
            <td>
             <a href="{{route('editarslider',$sli->id)}}" class="btn btn-info">Editar</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection

@extends('layouts.administracion')

@section('content')
<div class="container">
  <div class="col-md-8">
    <h1>Servicios</h1>
    
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Titulo</th>
          <th scope="col">Descripcion</th>
          <th scope="col">Imagen</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($servicio as $ser)
          <tr>
            <th scope="row">{{$ser->id}}</th>
            <td>{{$ser->titulo_servicio}}</td>
            <td>{{$ser->descripcion_servicio}}</td>
            <td>
                <img src="img/{{$ser->imagen_servicio}}" alt="" width="200" height="200"></td>
            <td>
             <a href="{{route('editarservicio',$ser->id)}}" class="btn btn-info">Editar</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    {!!$servicio->render()!!}
  </div>
</div>
@endsection

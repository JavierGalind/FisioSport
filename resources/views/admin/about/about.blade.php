@extends('layouts.administracion')

@section('content')
<div class="container">
  <div class="col-md-8">
    <h1>General</h1>
    
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Titulo</th>
          <th scope="col">Descripcion</th>
          <th scope="col">Imagen</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($about as $abo)
          <tr>
            <td>{{$abo->titulo_about}}</td>
            <td>{{$abo->descripcion_about}}</td>
            <td><img src="img/{{$abo->imagen_about}}" alt="" width="200" height="200"></td>
            <td>
             <a href="{{route('editarabout',$abo->id)}}" class="btn btn-info">Editar</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Titulo Apartado 2</th>
          <th scope="col">Descripcion Apartado 2</th>
          <th scope="col">Imagen Apartado 2</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($about as $abo)
          <tr>
            <td>{{$abo->titulo2_about}}</td>
            <td>{{$abo->descripcion2_about}}</td>
            <td><img src="img/{{$abo->imagen2_about}}" alt="" width="200" height="200"></td>
            <td>
             <a href="{{route('editarabout',$abo->id)}}" class="btn btn-info">Editar</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection

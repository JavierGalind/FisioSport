@extends('layouts.administracion')

@section('content')
<div class="container">
  <div class="col-md-8">
    <h1>Contacto</h1>
    <a href="{{route('crearcontacto')}}" class="btn btn-info">CREAR DATOS DE CONTACTO</a>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Direccion</th>
          <th scope="col">Telefono</th>
          <th scope="col">Correo</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($contacto as $con)
          <tr>
            <th scope="row">{{$con->id}}</th>
            <td>{{$con->direccion_contacto}}</td>
            <td>{{$con->telefono_contacto}}</td>
            <td>{{$con->correo_contacto}}</td>
            <td>
             <a href="{{route('editarcontacto',$con->id)}}" class="btn btn-info">Editar</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection

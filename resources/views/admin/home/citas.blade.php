@extends('layouts.administracion')

@section('content')
  <div class="container">
    <div class="col-md-8">
      <h1>CITAS</h1>
      <a href="{{route('crearcita')}}" class="btn btn-info">CREAR CONTENIDO DE CITAS</a>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Descripcion</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($citas as $cit)
            <tr>
              <th scope="row">{{$cit->id}}</th>
              <td>{{$cit->descripcion_cita}}</td>
              <td>
               <a href="{{route('editarcita',$cit->id)}}" class="btn btn-info">Editar</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection

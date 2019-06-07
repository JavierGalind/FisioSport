@extends('layouts.administracion')

@section('content')
 <div class="container">
     <div class="col-md-8">
            <h1>Bienvenida</h1>
            
            <table class="table table-dark">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                     @foreach ($bienvenida as $bien)
                     <tr>
                            <th scope="row">1</th>
                            <td>{{$bien->titulo_bienvenida}}</td>
                            <td>{{$bien->descripcion_bienvenida}}</td>
                            <td><img src="img/{{$bien->imagen_bienvenida}}" alt="" width="200" height="200"></td>
                            <td>
                            <a href="{{route('editarbienvenida',$bien->id)}}" class="btn btn-info">Editar</a>
                            </td>
                        </tr>
                     @endforeach   
                    </tbody>
                  </table>
     </div>
 </div>
@endsection
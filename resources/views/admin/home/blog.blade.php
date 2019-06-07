@extends('layouts.administracion')

@section('content')
<div class="container">
        <div class="col-md-8">
               <h1>Blogs</h1>
               <a href="{{route('crearblog')}}" class="btn btn-info">CREAR UN BLOG</a>
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
                        @foreach ($blog as $blo)
                        <tr>
                               <th scope="row">1</th>
                               <td>{{$blo->titulo_blog}}</td>
                               <td>{{$blo->descripcion_blog}}</td>
                               <td><img src="img/{{$blo->imagen_blog}}" alt="" width="200" height="200"></td>
                               <td>
                               <a href="{{route('editarblog',$blo->id)}}" class="btn btn-info">Editar</a>
                               </td>
                           </tr>
                        @endforeach   
                       </tbody>
                     </table>
        </div>
    </div>
@endsection
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;
class ServicioController extends Controller
{
    public function index()
    {
      $servicio= Servicio::all();
      return view('admin.home.servicios',compact('servicio'));
    }
    public function crearservicio()
    {
      return view('admin.home.crearservicio');
    }
    public function guardarservicio( Request $request)
    {
    if($request->hasFile('imagen_servicio')){
      $file= $request->file('imagen_servicio');
      $name=time().$file->getClientOriginalName();
      $file->move(public_path().'/img',$name);
    }
    $servicio= new Servicio;
      $servicio->titulo_servicio=$request->titulo_servicio;
      $servicio->descripcion_servicio=$request->descripcion_servicio;
      $servicio->imagen_servicio=$name;
      $servicio->save();
      return  back();
    }
    public function editarservicio($id){
     $servicio= Servicio::find($id);
      return view('admin.home.editarservicio',compact('servicio'));
    }
    public function actualizarservicio(Request $request, $id){
      if($request->hasFile('imagen_servicio')){
        $file= $request->file('imagen_servicio');
        $name=time().$file->getClientOriginalName();
        $file->move(public_path().'/img',$name);
      }
    $nuevotitulo=$request->input('titulo_servicio');
    $nuevadescripcion=$request->input('descripcion_servicio');
    $nuevaimagen=$name;
    $servicio= Servicio::find($id);
    $servicio->titulo_servicio=$nuevotitulo;
    $servicio->descripcion_servicio=$nuevadescripcion;
    $servicio->imagen_servicio=$nuevaimagen;
    $servicio->save();
    return redirect()->action('ServicioController@index');
    }
}

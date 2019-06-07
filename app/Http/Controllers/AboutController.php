<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
class AboutController extends Controller
{
    public function index()
    {
      $about= About::all();
      return view('admin.about.about',compact('about'));
    }
    public function crearabout()
    {
      return view('admin.about.crearabout');
    }
    public function guardarabout( Request $request)
    {
    if($request->hasFile('imagen_about')){
      $file= $request->file('imagen_about');
      $name=time().$file->getClientOriginalName();
      $file->move(public_path().'/img',$name);
    }
    if($request->hasFile('imagen2_about')){
      $file2= $request->file('imagen2_about');
      $name2=time().$file2->getClientOriginalName();
      $file2->move(public_path().'/img',$name2);
    }
    $about= new About;
      $about->titulo_about=$request->titulo_about;
      $about->descripcion_about=$request->descripcion_about;
      $about->imagen_about=$name;
      $about->titulo2_about=$request->titulo2_about;
      $about->descripcion2_about=$request->descripcion2_about;
      $about->imagen2_about=$name2;
      $about->save();
      return  back();
    }
    public function editarabout($id){
     $about= About::find($id);
      return view('admin.about.editarabout',compact('about'));
    }
    public function actualizarabout(Request $request, $id){
      if($request->hasFile('imagen_about')){
        $file= $request->file('imagen_about');
        $name=time().$file->getClientOriginalName();
        $file->move(public_path().'/img',$name);
      }
      if($request->hasFile('imagen2_about')){
        $file2= $request->file('imagen2_about');
        $name2=time().$file2->getClientOriginalName();
        $file2->move(public_path().'/img',$name2);
      }
    $nuevotitulo=$request->input('titulo_about');
    $nuevadescripcion=$request->input('descripcion_about');
    $nuevaimagen=$name;
    $nuevotitulo2=$request->input('titulo2_about');
    $nuevadescripcion2=$request->input('descripcion2_about');
    $nuevaimagen2=$name2;
    $about= About::find($id);
    $about->titulo_about=$nuevotitulo;
    $about->descripcion_about=$nuevadescripcion;
    $about->imagen_about=$nuevaimagen;
    $about->titulo2_about=$nuevotitulo2;
    $about->descripcion2_about=$nuevadescripcion2;
    $about->imagen2_about=$nuevaimagen2;
    $about->save();
    return redirect()->action('AboutController@index');
    }
}

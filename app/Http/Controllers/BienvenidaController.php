<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bienvenida;
class BienvenidaController extends Controller
{
    public function bienvenida(){
        $bienvenida= Bienvenida::all();
        return view('admin.home.bienvenida', compact('bienvenida'));
    }
    public function crearbienvenida(){
        return view('admin.home.crearbienvenida');
    }
    public function guardarbienvenida(Request $request){
        if($request->hasFile('imagen_bienvenida')){
            $file= $request->file('imagen_bienvenida');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/img',$name);
          }
          $bienvenida= new Bienvenida;
            $bienvenida->titulo_bienvenida=$request->titulo_bienvenida;
            $bienvenida->descripcion_bienvenida=$request->descripcion_bienvenida;
            $bienvenida->imagen_bienvenida=$name;
            $bienvenida->save();
            return  back();
    }
    public function editarbienvenida($id){
        $bien= Bienvenida::find($id);
         return view('admin.home.editarbienvenida',compact('bien'));
       }
       public function actualizarbienvenida(Request $request, $id){
         if($request->hasFile('imagen_bienvenida')){
           $file= $request->file('imagen_bienvenida');
           $name=time().$file->getClientOriginalName();
           $file->move(public_path().'/img',$name);
         }
       $nuevotitulo=$request->input('titulo_bienvenida');
       $nuevadescripcion=$request->input('descripcion_bienvenida');
       $nuevaimagen=$name;
       $bienvenida= Bienvenida::find($id);
       $bienvenida->titulo_bienvenida=$nuevotitulo;
       $bienvenida->descripcion_bienvenida=$nuevadescripcion;
       $bienvenida->imagen_bienvenida=$nuevaimagen;
       $bienvenida->save();
       return redirect()->action('BienvenidaController@bienvenida');
       }
}

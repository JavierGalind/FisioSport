<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cita;
class CitaController extends Controller
{
    public function index(){
        $citas= Cita::all();
        return view('admin.home.citas',compact('citas'));
      }
      public function crearcita()
      {
        return view('admin.home.crearcita');
      }
      public function guardarcita( Request $request)
      {
        $cita= new Cita;
        $cita->descripcion_cita=$request->descripcion_cita;
        $cita->save();
        return  back();
      }
      public function editarcita($id){
       $cita= Cita::find($id);
        return view('admin.home.editarcita',compact('cita'));
      }
      public function actualizarcita(Request $request, $id){
   
      $nuevadescripcion=$request->input('descripcion_cita');
   
      $cita= Cita::find($id);
      $cita->descripcion_cita=$nuevadescripcion;
      $cita->save();
      return redirect()->action('CitaController@index');
      }
}

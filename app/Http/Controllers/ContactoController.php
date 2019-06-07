<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacto;
class ContactoController extends Controller
{
    public function index()
    {
      $contacto= Contacto::all();
      return view('admin.contacto.contacto',compact('contacto'));
    }
    public function crearcontacto()
    {
      return view('admin.contacto.crearcontacto');
    }
    public function guardarcontacto( Request $request)
    {
      $contacto= new Contacto;
      $contacto->direccion_contacto=$request->direccion_contacto;
      $contacto->telefono_contacto=$request->telefono_contacto;
      $contacto->correo_contacto=$request->correo_contacto;
      $contacto->save();
      return redirect()->action('ContactoController@index');
    }
    public function editarcontacto($id){
     $contacto= Contacto::find($id);
      return view('admin.contacto.editarcontacto',compact('contacto'));
    }
    public function actualizarcontacto(Request $request, $id){
    $nuevodireccion=$request->input('direccion_contacto');
    $nuevotelefono=$request->input('telefono_contacto');
    $nuevocorreo=$request->input('correo_contacto');
    $contacto= Contacto::find($id);
    $contacto->direccion_contacto=$nuevodireccion;
    $contacto->telefono_contacto=$nuevotelefono;
    $contacto->correo_contacto=$nuevocorreo;
    $contacto->save();
    return redirect()->action('ContactoController@index');
    }
}

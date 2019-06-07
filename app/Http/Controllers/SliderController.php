<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
class SliderController extends Controller
{
    public function index()
    {
      $slider= slider::orderBy('id','DESC')->paginate('2');
      return view('admin.about.slider',compact('slider'));
    }
    public function crearslider()
    {
      return view('admin.about.crearslider');
    }
    public function guardarslider( Request $request)
    {
    if($request->hasFile('imagen_slider')){
      $file= $request->file('imagen_slider');
      $name=time().$file->getClientOriginalName();
      $file->move(public_path().'/img',$name);
    }
      $slider= new slider;
      $slider->imagen_slider=$name;
      $slider->save();
        return redirect()->action('SliderController@index');
    }
    public function editarslider($id){
     $slider= slider::find($id);
      return view('admin.about.editarslider',compact('slider'));
    }
    public function actualizarslider(Request $request, $id){
      if($request->hasFile('imagen_slider')){
        $file= $request->file('imagen_slider');
        $name=time().$file->getClientOriginalName();
        $file->move(public_path().'/img',$name);
      }
  
    $nuevaimagen=$name;
    $slider= slider::find($id);
    $slider->imagen_slider=$nuevaimagen;
    $slider->save();
    return redirect()->action('SliderController@index');
    }
}

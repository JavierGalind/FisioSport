<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
   public function blog(){
       $blog= Blog::all();
       return view('admin.home.blog',compact('blog'));
   }
   public function crearblog(){
       return view('admin.home.crearblog');
   }
   public function guardarblog(Request $request){
    if($request->hasFile('imagen_blog')){
        $file= $request->file('imagen_blog');
        $name=time().$file->getClientOriginalName();
        $file->move(public_path().'/img',$name);
      }
      $blog= new Blog;
        $blog->titulo_blog=$request->titulo_blog;
        $blog->descripcion_blog=$request->descripcion_blog;
        $blog->imagen_blog=$name;
        $blog->save();
        return  back();
}
public function editarblog($id){
    $blog= Blog::find($id);
     return view('admin.home.editarblog',compact('blog'));
   }
   public function actualizarblog(Request $request, $id){
     if($request->hasFile('imagen_blog')){
       $file= $request->file('imagen_blog');
       $name=time().$file->getClientOriginalName();
       $file->move(public_path().'/img',$name);
     }
   $nuevotitulo=$request->input('titulo_blog');
   $nuevadescripcion=$request->input('descripcion_blog');
   $nuevaimagen=$name;
   $blog= Blog::find($id);
   $blog->titulo_blog=$nuevotitulo;
   $blog->descripcion_blog=$nuevadescripcion;
   $blog->imagen_blog=$nuevaimagen;
   $blog->save();
   return redirect()->action('BlogController@blog');
   }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacto;
use App\Servicio;
use App\Blog;
use App\Slider;
use App\Cita;
use App\Bienvenida;
use App\About;
class PageController extends Controller
{
    public function index(){
        $bienvenida= Bienvenida::all();
        $servicio= Servicio::all();
        $blog= Blog::all();
        $cita= Cita::all();
        return view('welcome',compact('bienvenida','servicio','blog','cita'));
    }

    public function abouts(){
        $slider= Slider::all();
        $about= About::all();
        return view('about',compact('slider','about'));
    }

    public function contact(){
        $contacto= Contacto::all();
        $cita= Cita::all();
        return view('contact',compact('contacto','cita'));
    }
}

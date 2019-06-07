@extends('layouts.app')

@section('content')

<section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url(images/about.jpg);">
  <div class="container">
    <div class="row"> 
      <div class="col-lg-12"> 
        <div class="page-title-name">
          <h1>¿Quienes Somos?</h1>
          <p></p>
        </div>
        <ul class="page-breadcrumb">
          <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> Inicio</a> <i class="fa fa-angle-double-right"></i></li>          
          <li><span>¿Quienes Somos?</span> </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!--=================================
page-title -->

<!--=================================
About-->

<section class="page-section-pt">
  <div class="container">
     <div class="row">
       @foreach ($about as $abo)
           
       
         <div class="col-lg-6">
           <div class="mb-60">
             <h2>{{$abo->titulo_about}}</h2>
             <p>{!!$abo->descripcion_about!!}</p>
           </div>
         </div>
<br>
<br>
<br>
         <div class="col-md-6">
           <div class="clearfix">
              <img class="bottom-img mx-auto" src="img/{{$abo->imagen_about}}" alt="">
           </div>
         </div>
         @endforeach
     </div>
  </div>
</section>

<!--=================================
About-->

<!--=================================
feature text -->

{{--<section class="page-section-ptb position-re bg-overlay-theme-70" data-jarallax='{"speed": 0.6}' style="background-image: url(images/08.jpg);">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="owl-carousel" data-nav-dots="true" data-items="1" data-md-items="1" data-sm-items="1">
          <div class="item">
            <div class="testimonial text-white clean">
              <div class="testimonial-avatar"> <img alt="" src="images/team/01.jpg"> </div>
              <div class="testimonial-info"> Excellent Customer support! These guys reply within minutes sometimes and really help you with when you need them. The template itself is very extended as well. Happy with my purchase!</div>
              <div class="author-info"> <strong>15Twelve - <span>ThemeForest user</span></strong> </div>
            </div>
          </div>
          <div class="item">
            <div class="testimonial text-white clean">
              <div class="testimonial-avatar"> <img alt="" src="images/team/02.jpg"> </div>
              <div class="testimonial-info"> One of the most complete template here. Thanks a lot for such great features, pages, shortcodes and home variations. Incredible Job. And the best of all, great introductions</div>
              <div class="author-info"> <strong>Xerracol - <span>ThemeForest user</span></strong> </div>
            </div>
          </div>
          <div class="item">
            <div class="testimonial text-white clean">
              <div class="testimonial-avatar"> <img alt="" src="images/team/03.jpg"> </div>
              <div class="testimonial-info"> This is a well put together template and the developer offers great support. I've been in contact with them and the response was prompt and everything has been taken care of.</div>
              <div class="author-info"> <strong>Warble - <span>ThemeForest user</span></strong> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>--}}

 <!--=================================
feature text -->

 <!--=================================
Schedule Of -->

<section class="page-section-pt">
  <div class="container">
  	<div class="row">
       <div class="col-md-12">
         <div class="section-title line center text-center">
          <h6 class="subtitle">Galería</h6>
          <h2 class="title">Equipos de última generación</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="blog-entry mb-50">
          <div class="entry-image clearfix">
            <div class="owl-carousel bottom-center-dots" data-nav-dots="ture" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1">
              <div class="item">
                <img class="img-fluid" src="img/{{$slider[0]->imagen_slider}}" alt="">
              </div>
              <div class="item">
                <img class="img-fluid" src="img/{{$slider[1]->imagen_slider}}" alt="">
              </div>
              <div class="item">
                <img class="img-fluid" src="img/{{$slider[2]->imagen_slider}}" alt="">
              </div>
              <div class="item">
                <img class="img-fluid" src="img/{{$slider[3]->imagen_slider}}" alt="">
              </div>
              <div class="item">
                <img class="img-fluid" src="img/{{$slider[4]->imagen_slider}}" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

 <!--=================================
Schedule Of -->
 
<!--=================================
About-->

<section class="page-section-ptb sm-pt-10">
  <div class="container">
      @foreach ($about as $abo)
  	<div class="row">
       <div class="col-md-12">
         <div class="section-title line center text-center">
          <h6 class="subtitle">Conoce</h6>
         <h2 class="title">{{$abo->titulo2_about}}</h2>
        </div>
      </div>
    </div>
    <div class="row">
     
          
     
      <div class="col-lg-6">
        <div class="who-we-are-left">
          <img class="img-fluid full-width" src="img/{{$abo->imagen_about}}" alt="">
        </div>
      </div>
      <div class="col-lg-6 sm-mt-30 align-self-center">
        
          <p>{!!$abo->descripcion2_about!!}</p>
         
       
      </div>  
      @endforeach
    </div>
  </div>
</section>

<!--=================================
About-->


<!--=================================
Clients -->

<section class="theme-bg page-section-ptb">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="clients-list ">
         {{-- <div class="owl-carousel" data-nav-dots="false" data-items="5" data-md-items="4" data-sm-items="3" data-xs-items="2" data-xx-items="2">
            <div class="item"> 
              <img class="img-fluid mx-auto" src="images/clients/light/01.png" alt="">
            </div>
            <div class="item"> 
              <img class="img-fluid mx-auto" src="images/clients/light/02.png" alt="">
            </div>
            <div class="item"> 
              <img class="img-fluid mx-auto" src="images/clients/light/03.png" alt="">
            </div>
            <div class="item"> 
              <img class="img-fluid mx-auto" src="images/clients/light/04.png" alt="">
            </div>
            <div class="item"> 
              <img class="img-fluid mx-auto" src="images/clients/light/05.png" alt="">
            </div>
            <div class="item"> 
              <img class="img-fluid mx-auto" src="images/clients/light/06.png" alt="">
            </div>
            <div class="item"> 
              <img class="img-fluid mx-auto" src="images/clients/light/07.png" alt="">
            </div>
            <div class="item"> 
              <img class="img-fluid mx-auto" src="images/clients/light/08.png" alt="">
            </div>
          </div>--}}
        </div>
      </div>
    </div>
  </div>
</section>

<!--=================================
Clients -->
@endsection
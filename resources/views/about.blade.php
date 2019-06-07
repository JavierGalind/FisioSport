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
         <div class="col-lg-6">
           <div class="mb-60">
             <h2>Fisio Sport Klinik</h2>
             <p>Ofrecemos servicios de primer nivel con equipos de última generación, nos especializamos en la rehabilitación de personas que sufran patologías o alteraciones del movimiento.</p>
             <div class="mt-40">
               <div class="row">
                  <div class="col-md-6 col-sm-6 xs-mb-30">
                    <ul class="list list-unstyled theme-color">
                      <li><i class="fa fa-plus-square"></i> Fisioterapia Deportiva</li> 
                      <li><i class="fa fa-plus-square"></i> Fisioterapia Geriatrica</li>     
                      <li><i class="fa fa-plus-square"></i> Fisioterapia Postural</li>          
                      <li><i class="fa fa-plus-square"></i> Fisioterapia Reumatológica </li>  
                      <li><i class="fa fa-plus-square"></i> Fisioterapia Post Quirúrgica</li> 
                      <li><i class="fa fa-plus-square"></i> Vendaje Neuromuscular</li> 
                     </ul>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <ul class="list list-unstyled theme-color">
                        <li><i class="fa fa-plus-square"></i> Terapia Manual</li>            
                        <li><i class="fa fa-plus-square"></i> Técnicas de Relajación</li>
                        <li><i class="fa fa-plus-square"></i> Actividad Física y Deporte</li>   
                     </ul>
                  </div>
               </div>
             </div>
           </div>
         </div>
         <div class="col-md-6">
           <div class="clearfix">
              <img class="bottom-img mx-auto" src="{{ asset('images/torre2.jpg') }}" alt="">
           </div>
         </div>
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
                <img class="img-fluid" src="{{ asset('images/gallery/about_1.jpg') }}" alt="">
              </div>
              <div class="item">
                <img class="img-fluid" src="{{ asset('images/gallery/about_2.jpg') }}" alt="">
              </div>
              <div class="item">
                <img class="img-fluid" src="{{ asset('images/gallery/about_3.jpg') }}" alt="">
              </div>
              <div class="item">
                <img class="img-fluid" src="{{ asset('images/gallery/about_4.jpg') }}" alt="">
              </div>
              <div class="item">
                <img class="img-fluid" src="{{ asset('images/gallery/about_5.jpg') }}" alt="">
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
  	<div class="row">
       <div class="col-md-12">
         <div class="section-title line center text-center">
          <h6 class="subtitle">Conoce</h6>
          <h2 class="title">Las Últimas Tecnologías</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="who-we-are-left">
          <img class="img-fluid full-width" src="{{ asset('images/about3.jpg') }}" alt="">
        </div>
      </div>
      <div class="col-lg-6 sm-mt-30 align-self-center">
        <div class="section-title mb-10">
          <h6>Nos mantenemos actualizados</h6>
          <p>Diagnosticamos tu lesión para aplicar la mejor tecnología que ayude a aliviar tu malestar.</p>
        </div> 
        <p>So, there you have it; the six steps that will help you to the fabled land of achievement and success! You now have the opportunity to push ahead and reach your potential. </p>
        <div class="row mt-20">
          <div class="col-md-6">
            <ul class="list list-unstyled list-hand">
              <li> Terapia Láser</li>
              <li> Magnetoterapia </li>
              <li> Electroterapia </li>
              <li> Presoterapia </li>
            </ul>
          </div>
          <div class="col-md-6">
            <ul class="list list-unstyled list-hand">
              <li> Ondas de Choque</li>
              <li> Mecanoterapia </li>
              <li> Hidroterapia </li>
            </ul>
          </div>
        </div>
      </div>  
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
@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
<!--=================================
 rev-slider -->

@include('partials.sliders')

<!--=================================
 rev-slider -->

<!--=================================
appointment -->

<section class="appointment"> 
  <div class="container">
     <div class="row">
     <div class="col-lg-12">
        <div class="appointment-bg bg-overlay-theme-90 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url(/images/06.jpg);">
           <div class="row clearfix">
             <div class="col-lg-6">
               @foreach ($cita as $cit)
                   {!!$cit->descripcion_cita!!}
               @endforeach
             </div>
             <div class="col-lg-3 col-md-6">
               <div class="contact-form border-form full-width clearfix">
                  <div class="section-field">
                    <input id="name" type="text" placeholder="Nombre*" class="form-control placeholder" name="frist name">
                   </div> 
                   <div class="section-field">
                      <input type="email" placeholder="Correo Electrónico*" class="form-control placeholder" name="email">
                    </div>
                   <div class="section-field textarea">
                     <textarea class="input-message form-control placeholder" placeholder="Comentario*" rows="4" name="message"></textarea>
                    </div>
                 </div>
             </div>
             <div class="col-lg-3 col-md-6">
               <div class="contact-form border-form full-width clearfix">
                  <div class="section-field">
                    <input type="text" placeholder="Apellidos*" class="form-control placeholder" name="last name">
                   </div> 
                   <div class="section-field mb-15">
                      <div class="box">
                        <select class="wide fancyselect">
                          <option value="1">Seleccione una opción</option>
                          <option value="2"></option>
                          <option value="3">A option</option>
                          <option value="4">Potato</option>
                        </select>
                      </div>
                    </div>
                   <div class="section-field">
                    <a class="button white clearfix btn-block" href="#">Enviar</a>
                    <a class="mt-15 text-white float-left" href="#">* Todos los campos son requeridos</a>
                    </div>
                 </div>
             </div>
          </div>
        </div>
     </div>     
   </div>
  </div>
</section>

<!--=================================
appointment -->

<!--=================================
 About-->

 <section class="page-section-pt sm-pb-30">
  <div class="container">
    <div class="row">
      @foreach ($bienvenida as $bien)
      <div class="col-lg-8">
          <div class="mb-60 sm-mb-30">
          <h2>{{$bien->titulo_bienvenida}}</h2>
              <p class="mt-30"></p>
              {!!$bien->descripcion_bienvenida!!}
            
          </div>
        
      </div>
      <div class="col-md-4">
          <div class="clearfix">
            <img class="bottom-img img-fluid mx-auto" src="img/{{$bien->imagen_bienvenida}}" alt="">
          </div>
        </div>
    
      @endforeach
     
          </div>
  </div>
</section>

<!--=================================
 About-->

@include('partials.services')

{{-- Table --}}

<!--=================================
our-blog -->

@include('partials.blog')

<!--=================================
our-blog -->

<!--=================================
team -->



<!--=================================
Clients -->

<!--================================= google map-->

<section class="white-bg o-hidden">
  <div class="container-fluid p-0">
    <div class="row">
     <div class="col-lg-12 col-md-12">
      <div style="width: 100%; height: 380px;" id="map" class="g-map" data-type='black'></div>
    </div>
  </div>
  </div>
</section>
 
<!--================================= google map-->
@endsection
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
               <span class="text-white">¿Necesitas Ayuda?</span>
               <h3 class="text-white mb-20">¡Agenda una cita!</h3>
               <p class="text-white">Si lo prefiere puede comunicarse con nosotros para elegir una fecha y hora por teléfono. </p>
               <p class="text-white">Le atenderemos con gusto en el número. </p>
                <div class="contact-box mt-30 sm-mb-30">
                    <div class="contact-icon">
                        <i class="fa fa-plus-square text-white"></i>
                    </div>
                    <div class="contact-info">
                        <h5 class="text-white">(722) 000-00-00</h5>
                        <span class="text-white">Lunes-Viernes 8:00-20:00 hrs</span>
                    </div>
                </div>
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
      <div class="col-lg-8">
        <div class="mb-60 sm-mb-30">
            <h2>Bienvenidos a Fisio Sport Klinik</h2>
            <p class="mt-30"></p>
            <p>Somos una clínica especializada en rehabilitación física. Ayudamos a nuestros pacientes a maximizar su calidad de vida, reincorporándolos a sus actividades diarias de manera rápida, con atención personalizada.</p>
          
            <p><b>Filosofía:</b> En Fisiosportklinik nos preocupamos por la integridad física de nuestros pacientes, brindamos nuestros servicios con personal altamente capacitado y con equipo tecnológico de punta. Nuestro mayor interés es la recuperación total de nuestros pacientes.</p>

            <p><b>Misión:</b>Acompañar a nuestros pacientes a lo largo de su tratamiento con plena responsabilidad profesional y humana.</p>

            <p><b>Visión:</b> Ser el referente en rehabilitación física en la región del Valle de Toluca con un enfoque 100% humano.</p>
          
        </div>
      </div>
      <div class="col-md-4">
        <div class="clearfix">
          <img class="bottom-img img-fluid mx-auto" src="{{ asset('images/about2.jpg') }}" alt="">
        </div>
      </div>
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
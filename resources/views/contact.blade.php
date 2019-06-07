@extends('layouts.app')

@section('content')
<!--=================================
page-title-->

<section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url(images/contacto.jpg);">
  <div class="container">
    <div class="row"> 
      <div class="col-lg-12"> 
        <div class="page-title-name">
          <h1>Contacto</h1>
          <p>{{--Te brindamos la mejor atención--}}</p>
        </div>
        <ul class="page-breadcrumb">
          <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> Inicio</a> <i class="fa fa-angle-double-right"></i></li>
          <li><span>Contacto</span> </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!--=================================
page-title -->

<!--=================================
contact -->

<section class="page-section-pt">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-title line center text-center">
          <h6 class="subtitle">Medios</h6>
          <h2 class="title">Póngase en contacto con nosotros</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-6 sm-mb-30">
        <div class="feature-text square theme-icon">
          <div class="feature-icon">
            <span class="fa fa-map-marker"></span>
          </div>
          <div class="feature-info">
            <h5 class="text-back">Dirección</h5>
            <p>Torre Médica II de Especialidades, Av. Lic. Benito Juárez García 341 NTE, La Purisima, 52140 Metepec, Méx.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 sm-mb-30">
        <div class="feature-text square theme-icon">
          <div class="feature-icon">
            <span class="fa fa-phone"></span>
          </div>
          <div class="feature-info">
            <h5 class="text-back">Teléfono</h5>
            <p>(722) 232 40 77</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 sm-mb-30">
        <div class="feature-text square theme-icon">
          <div class="feature-icon">
            <span class="fa fa-envelope-o"></span>
          </div>
          <div class="feature-info">
            <h5 class="text-back">Correo Electrónico</h5>
            <p>contacto@fisiosportklinik.mx</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--=================================
contact -->

<!--=================================
appointment  -->

<section class="appointment inner white-bg page-section-ptb">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-title line center text-center">
          <h6 class="subtitle">Formulario</h6>
          <h2 class="title">Contactanos</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <div id="formmessage">Success/Error Message Goes Here</div>
        <form id="contactform" role="form" method="post" action="php/contact-form.php">
          <div class="contact-form clearfix">
            <div class="section-field">
              <input id="name" type="text" placeholder="Nombre*" class="form-control"  name="name">
            </div> 
            <div class="section-field">
               <input type="email" placeholder="Correo Electrónico*" class="form-control" name="email">
            </div>
            <div class="section-field">
                <input type="text" placeholder="Teléfono*" class="form-control" name="phone">
            </div>
            <div class="section-field textarea">
              <textarea class="form-control input-message" placeholder="Comentario*" rows="9" name="message"></textarea>
            </div>
            <div class="section-field submit-button">
               <input type="hidden" name="action" value="sendEmail"/>
               <button id="submit" name="submit" type="submit" value="Send" class="button"> Enviar </button>
            </div>
          </div>
        </form>
        <div id="ajaxloader" style="display:none"><img class="mx-auto mt-30 mb-30 d-block" src="images/pre-loader/loader-02.svg" alt=""></div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 xs-mt-30">
        <h4 class="text-blue">Agenda tu cita</h4>
        <p>No esperes más y agenda una cita con nuestros especialistas.</p>
        <ul class="addresss-info"> 
          <li class="mt-20"><i class="fa fa-map-marker"></i> <p>Torre Médica II de Especialidades, Av. Lic. Benito Juárez García 341 NTE, La Purisima, 52140 Metepec, Méx.</p> </li>
          <li><i class="fa fa-phone"></i> <a href="tel:7042791249"> <span>(722) 232 40 77</span> </a> </li>
          <li><i class="fa fa-envelope-o"></i>contacto@fisiosportklinik.mx</li>
        </ul>
      </div>
    </div>
  </div>  
</section>

<!--=================================
appointment  -->

<!--=================================
 contact map -->

<section class="contact-map clearfix o-hidden">
  <div class="container-fluid p-0">
    <div class="row">
      <div class="col-lg-12">
        <div style="width: 100%; height: 350px;" id="map" class="g-map" data-type='black'></div>
      </div>
    </div>
  </div>
</section>

<!--=================================
 contact map -->

<!--=================================
emergency cases  -->

<div class="emergency-cases mt-80 container black-bg mb-80">
  <div class="bg-2 bg-opacity-black-80">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="emergency-cases-info">
          <i class="fa fa-phone-square text-white"></i>
          <h1 class="text-white uppercase mb-0">Agenda tu cita: <strong> (722) 232 40 77</strong></h1>
        </div>
      </div> 
    </div>
  </div>
</div>

<!--=================================
emergency cases  -->
@endsection
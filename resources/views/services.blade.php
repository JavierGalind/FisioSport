@extends('layouts.app')

@section('content')
<!--=================================
page-title-->

<section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url(images/servicios.jpg);">
  <div class="container">
    <div class="row"> 
      <div class="col-lg-12"> 
        <div class="page-title-name">
          <h1>Servicios</h1>
          <p>We know the secret of your success</p>
        </div>
        <ul class="page-breadcrumb">
          <li><a href="#"><i class="fa fa-home"></i> Inicio</a> <i class="fa fa-angle-double-right"></i></li>
          <li><span>Servicios</span> </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!--=================================
page-title -->

<!--=================================
About-->

<section class="page-section-pt sm-pb-30">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-title line center text-center">
          <h6 class="subtitle">Los mejores</h6>
          <h2 class="title">Nuestros Servicios</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 mb-60 sm-mb-10">
        <div class="feature-text">
          <div class="feature-icon">
            <span class="fa fa-stethoscope"></span>
          </div>
          <div class="feature-info">
            <h5 class="theme-color">Many Style Available</h5>
            <p>Dolor sit consectetur conseqt quibusdam, enim expedita sed quia nesciunt</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 mb-60 sm-mb-10">
        <div class="feature-text">
          <div class="feature-icon">
            <span class="fa fa-user-md"></span>
          </div>
          <div class="feature-info">
            <h5 class="theme-color">Parallax Sections</h5>
            <p>Dolor sit consectetur conseqt , enim expedita sed quia nesciunt</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 mb-60 sm-mb-10">
        <div class="feature-text">
          <div class="feature-icon">
            <span class="fa fa-h-square"></span>
          </div>
          <div class="feature-info">
            <h5 class="theme-color">Unlimited layouts</h5>
            <p>Dolor sit consectetur conseqt quibusdam, enim expedita sed quia nesciunt</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 mb-60 sm-mb-10">
        <div class="feature-text">
          <div class="feature-icon">
            <span class="fa fa-heartbeat"></span>
          </div>
          <div class="feature-info">
            <h5 class="theme-color">Unlimited layouts</h5>
            <p>Dolor sit consectetur conseqt quibusdam, enim expedita sed quia nesciunt</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 mb-60 sm-mb-10">
        <div class="feature-text">
          <div class="feature-icon">
            <span class="fa fa-hospital-o"></span>
          </div>
          <div class="feature-info">
            <h5 class="theme-color">Many Style Available</h5>
            <p>Dolor sit consectetur conseqt quibusdam, enim expedita sed quia nesciunt</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 mb-60 sm-mb-10">
        <div class="feature-text">
          <div class="feature-icon">
            <span class="fa fa-ambulance"></span>
          </div>
          <div class="feature-info">
            <h5 class="theme-color">Parallax Sections</h5>
            <p>Dolor sit consectetur conseqt , enim expedita sed quia nesciunt</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 mb-60 sm-mb-10">
        <div class="feature-text">
          <div class="feature-icon">
            <span class="fa fa-medkit"></span>
          </div>
          <div class="feature-info">
            <h5 class="theme-color">Unlimited layouts</h5>
            <p>Dolor sit consectetur conseqt quibusdam, enim expedita sed quia nesciunt</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 mb-60 sm-mb-10">
        <div class="feature-text">
          <div class="feature-icon">
            <span class="fa fa-heart"></span>
          </div>
          <div class="feature-info">
            <h5 class="theme-color">Unlimited layouts</h5>
            <p>Dolor sit consectetur conseqt quibusdam, enim expedita sed quia nesciunt</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--=================================
About-->

@include('partials.services')

<!--=================================
tab -->
@endsection
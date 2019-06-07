<!--=================================
Schedule Of -->

<!--=================================
tab -->
<section class="medical-tab page-section-ptb" style="padding-top: 0;">
  <div class="page-section-pt theme-bg position-re">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-title line center dark-bg text-center">
            <h6 class="subtitle">Servicios </h6>
            <h2 class="title">Fisioterapia y Rehabilitación</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tab nav-border nav-center">
            <ul class="nav nav-tabs">
            <li><a class="active" href="#tab-01" data-toggle="tab"> <i class="fa fa-magic"></i> {{$servicio[0]->titulo_servicio}}</a></li>
              <li><a href="#tab-02" data-toggle="tab"> <i class="fa fa-magnet"></i> {{$servicio[1]->titulo_servicio}}</a></li>
              <li><a href="#tab-03" data-toggle="tab"> <i class="fa fa-bolt"></i> {{$servicio[2]->titulo_servicio}}</a></li>
              <li><a href="#tab-04" data-toggle="tab"> <i class="fa fa-compress"></i> {{$servicio[3]->titulo_servicio}}</a></li>
              <li><a href="#tab-05" data-toggle="tab"> <i class="fa fa-google-wallet"></i> {{$servicio[4]->titulo_servicio}}</a></li>
              <li><a href="#tab-06" data-toggle="tab"> <i class="fa fa-thermometer-three-quarters"></i> {{$servicio[5]->titulo_servicio}}</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="tab-content mt-60">
          <div class="tab-pane fade show active" id="tab-01">
            <div class="row">
              <div class="col-lg-6 sm-mb-30">
                <h3>{{$servicio[0]->titulo_servicio}}</h3>
                    <ul class="list list-unstyled theme-color"> 
                        <p class="text-justify">{!!$servicio[0]->descripcion_servicio!!}</p>
                    </ul>
              </div>
              <div class="col-lg-6">
                <img class="img-fluid b-block" src="img/{{$servicio[0]->imagen_servicio}}" alt="">
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="tab-02">
            <div class="row">
              <div class="col-lg-6">
                <img class="img-fluid b-block" src="img/{{$servicio[1]->imagen_servicio}}" alt="">
              </div>
              <div class="col-lg-6 sm-mb-30">
              <h3>{{$servicio[1]->titulo_servicio}}</h3>              
              <p class="text-justify">{!!$servicio[1]->descripcion_servicio!!}</p>
              </div>              
            </div>
          </div>
          <div class="tab-pane fade" id="tab-03">
            <div class="row">
              <div class="col-lg-6 sm-mb-30">
                <h3>{{$servicio[2]->titulo_servicio}}</h3>
                <div class="row">
                    {!!$servicio[2]->descripcion_servicio!!} 
                </div>
              </div>
              <div class="col-lg-6">
                <img class="img-fluid" src="img/{{$servicio[2]->imagen_servicio}}" alt="">
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="tab-04">
            <div class="row">
              <div class="col-lg-6">
                <img class="img-fluid" src="img/{{$servicio[3]->imagen_servicio}}" alt="">
              </div>
              <div class="col-lg-6">
                <h3>{{$servicio[3]->titulo_servicio}}a</h3>
                <p class="text-justify">{!!$servicio[3]->descripcion_servicio!!}</p>
              </div>
            
            </div>
          </div>
          <div class="tab-pane fade" id="tab-05">
              <div class="row">
                <div class="col-lg-6 sm-mb-30">
                  <h3>{{$servicio[4]->titulo_servicio}}</h3>
                  <p class="text-justify">{!!$servicio[4]->descripcion_servicio!!}
                  </p>
                </div>
                <div class="col-lg-6">
                  <img class="img-fluid b-block" src="img/{{$servicio[4]->imagen_servicio}}" alt="">
                </div>
              </div>
        </div>
        <div class="tab-pane fade" id="tab-06">
            <div class="row">
              <div class="col-lg-6">
                <img class="img-fluid" src="img/{{$servicio[5]->imagen_servicio}}" alt="">
              </div>
              <div class="col-lg-6 sm-mb-30">
                <h3>{{$servicio[5]->titulo_servicio}}</h3>
                <p>{!!$servicio[5]->descripcion_servicio!!}</p>            
              </div>              
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
   tab -->
<section class="our-blog gray-bg page-section-ptb">
<div class="container">
    <div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="section-title line center text-center">
        <h6 class="subtitle">Blog</h6>
        <h2 class="title">Últimos Artículos</h2>
        </div>
    </div>
    </div>
   
        
   
    <div class="row">
            @foreach ($blog as $blo)
    <div class="col-lg-4 col-md-4 sm-mb-30">
        <div class="blog-box blog-2 white-bg h-100">        
        <img class="img-fluid" src="img/{{$blo->imagen_blog}}" alt="">
        <div class="blog-info">
        <span class="post-category"><a href="#">Información</a></span>
        <h4> <a href="http://www.terapia-fisica.com/terapia-laser/">{{$blo->titulo_blog}}</a></h4>
        <p>{!!$blo->descripcion_blog!!}</p>
        <span><i class="fa fa-calendar-check-o"></i> {{$blo->created_at}} </span>
        <a class="button icon-color" href="http://www.terapia-fisica.com/terapia-laser/">Leer Más<i class="fa fa-angle-right"></i></a>
        </div>            
        </div>
        </div>
    @endforeach
    </div>
   
    <div class="row">
        <div class="col-lg-12 text-center">
            <a class="mt-40 button" href="#">Más blogs</a>
        </div>
    </div>
    </div>
</section>
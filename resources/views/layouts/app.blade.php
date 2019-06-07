<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Webster - Responsive Multi-purpose HTML5 Template" />
<meta name="author" content="potenzaglobalsolutions.com" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Fisio Sport Klinik</title>

<!-- Favicon -->
<link rel="shortcut icon" href="images/favicon.ico" />

<!-- font -->
<link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,500,500i,600,700,800,900|Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">
 
<!-- Plugins -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/plugins-css.css') }}" />

<!-- revoluation -->
<link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/settings.css') }}" media="screen" />

<!-- Typography -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/typography.css') }}" />

<!-- Shortcodes -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/shortcodes/shortcodes.css') }}" />

<!-- Style -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />

<!-- medical -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/medical.css') }}" /> 

<!-- Responsive -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}" /> 

<!-- Style customizer -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/skin-yellow.css') }}" data-style="styles"/>

</head>

<body>
 
<div class="wrapper">
  <!--================================= preloader -->  
  <div id="pre-loader">
    <img src="images/pre-loader/loader-07.svg" alt="">
  </div>
  <!--================================= preloader -->
  @include('partials.header')

  @yield('content')

  @include('partials.footer')
</div>
  
<div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>
 
<!--================================= jquery -->

<!-- jquery -->
<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>

<!-- plugins-jquery -->
<script src="{{ asset('js/plugins-jquery.js') }}"></script>

<!-- plugin_path -->
<script>var plugin_path = 'js/';</script>
 
<!-- REVOLUTION JS FILES -->
<script src="{{ asset('revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="{{ asset('revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
<!-- revolution custom --> 
<script src="{{ asset('revolution/js/revolution-custom.js') }}"></script> 

<!-- custom -->
<script src="{{ asset('js/custom.js') }}"></script> 
 
</body>
</html>

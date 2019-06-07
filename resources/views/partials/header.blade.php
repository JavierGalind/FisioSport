<!--=================================
 header -->

<header id="header" class="header transparent">
 
<!--=================================
 mega menu -->

<div class="menu">  
  <!-- menu start -->
   <nav id="menu" class="mega-menu">
    <!-- menu list items container -->
    <section class="menu-list-items">
     <div class="container"> 
      <div class="row"> 
       <div class="col-lg-12 col-md-12"> 
        <!-- menu logo -->
        <ul class="menu-logo">
            <li>
              <a href="{{ url('/') }}">
                <img src="{{ asset('images/logo7.png') }}" alt="logo">
              </a>
            </li>
        </ul>
        <!-- menu links -->
        <div class="menu-bar">
         <ul class="menu-links">
          
            <li class="{{ request()->is('/') ? 'active' : '' }}">
              <a href="{{ url('/') }}">Inicio</a> 
            </li>
            <li class="{{ request()->is('abouts') ? 'active' : '' }}">
              <a href="{{ url('abouts') }}">¿Quienes Somos?</a> 
            </li> 
            <!--<li><a href="demo-categories/medical/about.html"> <i class="fa fa-angle-down fa-indicator"></i> </a> 
            <ul class="drop-down-multilevel left-side">
                    <li><a href="#">Surgeries </a>  </li>
                    <li><a href="#">Faq’s</a> </li>
                    <li><a href="#">Patient Resources</a> </li>
                    <li><a href="#">Media</a> </li>
                    <li><a href="#">Contact</a> </li>
                </ul>
            </li>-->
            {{-- <li class="{{ request()->is('services') ? 'active' : '' }}">
              <a href="{{ url('services') }}">Servicios </a>
            </li> --}}
            <!--<li><a href="demo-categories/medical/doctors.html">Doctores</a> </li>-->
            <!--<li><a href="demo-categories/medical/schedule.html">Schedule</a> </li> -->
            <!--<li><a href="demo-categories/medical/appointment.html">Appointment</a>  </li>--> 
            <!--<li><a href="demo-categories/medical/blog.html">Blog</a> </li>-->
            <li class="{{ request()->is('contact') ? 'active' : '' }}">
              <a href="{{ url('contact') }}">Contacto</a>
            </li>
            <li class="{{ request()->is('login') ? 'active' : '' }}">
              <a href="{{ url('login') }}">Iniciar Sesion</a> 
            </li>
        </ul>
        <div class="search-cart">
          <div class="search">
            <a class="search-btn not_click" href="javascript:void(0);"></a>
              <div class="search-box not-click">
                 <form action="search.html" method="get">
                  <input type="text"  class="not-click form-control" name="search" placeholder="Buscar.." value="" >
                  <button class="search-button" type="submit"> <i class="fa fa-search not-click"></i></button>
                </form>
           </div>
          </div>
          {{-- <div class="shpping-cart">
           <a class="cart-btn" href="#"> <i class="fa fa-shopping-cart icon"></i> <strong class="item">2</strong></a>
            <div class="cart">
              <div class="cart-title">
                 <h6 class="uppercase mb-0">Shopping cart</h6>
              </div>
              <div class="cart-item">
                <div class="cart-image">
                  <img class="img-fluid" src="{{ asset('images/shop/01.jpg') }}" alt="">
                </div>
                <div class="cart-name clearfix">
                  <a href="#">Product name <strong>x2</strong> </a>
                  <div class="cart-price">
                    <del>$24.99</del> <ins>$12.49</ins>
                 </div>
                </div>
                <div class="cart-close">
                    <a href="#"> <i class="fa fa-times-circle"></i> </a>
                 </div>
              </div>
              <div class="cart-item">
                <div class="cart-image">
                  <img class="img-fluid" src="{{ asset('images/shop/02.jpg') }}" alt="">
                </div>
                <div class="cart-name clearfix">
                  <a href="#">Product name <strong>x2</strong></a>
                  <div class="cart-price">
                    <del>$24.99</del> <ins>$12.49</ins>
                 </div>
                </div>
                 <div class="cart-close">
                    <a href="#"> <i class="fa fa-times-circle"></i> </a>
                 </div>
              </div>
              <div class="cart-total">
                <h6 class="mb-15"> Total: $104.00</h6>
                <a class="button" href="shop-shopping-cart.html">View Cart</a>
                <a class="button black" href="shop-checkout.html">Checkout</a>
              </div>
            </div>
          </div> --}}
        </div>
        </div>
       </div>
      </div>
     </div>
    </section>
   </nav>
  <!-- menu end -->
 </div>
</header>

<!--=================================
 header -->
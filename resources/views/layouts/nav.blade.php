<!-- resources/views/layouts/nav.blade.php -->

<!-- header section start -->
<div class="header_section header_bg">
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a href="{{ url('/') }}" class="logo">
         <img src="{{ asset('images/logo.png') }}" alt="Logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
         aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
               <a class="nav-link" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item {{ request()->is('about') ? 'active' : '' }}">
               <a class="nav-link" href="{{ url('/about') }}">About</a>
            </li>
            <li class="nav-item {{ request()->is('cycle') ? 'active' : '' }}">
               <a class="nav-link" href="{{ url('/cycle') }}">Our Cycle</a>
            </li>
            <li class="nav-item {{ request()->is('shop') ? 'active' : '' }}">
               <a class="nav-link" href="{{ url('/shop') }}">Shop</a>
            </li>
            <li class="nav-item {{ request()->is('news') ? 'active' : '' }}">
               <a class="nav-link" href="{{ url('/news') }}">News</a>
            </li>
            <li class="nav-item {{ request()->is('contact') ? 'active' : '' }}">
               <a class="nav-link" href="{{ url('/contact') }}">Contact Us</a>
            </li>
         </ul>

         <form class="form-inline my-2 my-lg-0">
            <div class="login_menu">
               <ul>
                  <li><a href="#">Login</a></li>
                  <li><a href="#"><img src="{{ asset('images/trolly-icon.png') }}"></a></li>
                  <li><a href="#"><img src="{{ asset('images/search-icon.png') }}"></a></li>
               </ul>
            </div>
         </form>
      </div>

      <div id="main">
         <span style="font-size:36px;cursor:pointer; color: #fff" onclick="openNav()">
            <img src="{{ asset('images/toggle-icon.png') }}" style="height: 30px;">
         </span>
      </div>
   </nav>

   <!-- banner section start -->
   <div class="banner_section layout_padding">
      <div id="main_slider" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
            @for ($i = 0; $i < 3; $i++)
            <div class="carousel-item {{ $i === 0 ? 'active' : '' }}">
               <div class="container">
                  <div class="row">
                     <div class="col-md-7">
                        <div class="best_text">Best</div>
                        <div class="image_1"><img src="{{ asset('images/img-1.png') }}"></div>
                     </div>
                     <div class="col-md-5">
                        <h1 class="banner_taital">New Model Cycle</h1>
                        <p class="banner_text">It is a long established fact that a reader will be distracted by the readable content</p>
                        <div class="contact_bt"><a href="{{ url('/contact') }}">Shop Now</a></div>
                     </div>
                  </div>
               </div>
            </div>
            @endfor
         </div>
         <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i>
         </a>
         <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i>
         </a>
      </div>
   </div>
   <!-- banner section end -->
</div>
<!-- header section end -->

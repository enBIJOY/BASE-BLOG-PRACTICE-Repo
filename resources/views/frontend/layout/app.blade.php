<!DOCTYPE html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>@yield('title','Blog-Practice-app')</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{('base/img/favicon.svg')}}"/>
    <!-- Place favicon.ico in the root directory -->

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="{{('base/css/bootstrap-5.0.0-alpha-2.min.css')}}" />
    <link rel="stylesheet" href="{{('base/css/LineIcons.2.0.css')}}"/>
    <link rel="stylesheet" href="{{('base/css/animate.css')}}"/>
    <link rel="stylesheet" href="{{('base/css/lindy-uikit.css')}}"/>
    <link rel="stylesheet" href="{{('base/css/base-style.css')}}"/>
  </head>
  <body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!-- ========================= preloader start ========================= -->
    <!-- <div class="preloader">
      <div class="loader">
        <div class="spinner">
          <div class="spinner-container">
            <div class="spinner-rotator">
              <div class="spinner-left">
                <div class="spinner-circle"></div>
              </div>
              <div class="spinner-right">
                <div class="spinner-circle"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- ========================= preloader end ========================= -->

    <!-- ========================= hero-section-wrapper-1 start ========================= -->
    @include('frontend.layout.header')
    <!-- ========================= clients-logo end ========================= -->


    @yield('content')



    <!-- ========================= footer style-4 footer-dark start ========================= -->
    @include('frontend.layout.footer')
    <!-- ========================= footer style-4 footer-dark end ========================= -->

    <!-- ========================= scroll-top start ========================= -->
    <a href="#" class="scroll-top"> <i class="lni lni-chevron-up"></i> </a>
    <!-- ========================= scroll-top end ========================= -->
		

    <!-- ========================= JS here ========================= -->
    <script src="{{('base/js/bootstrap.5.0.0.alpha-2-min.js')}}"></script>
    <script src="{{('base/js/count-up.min.js')}}"></script>
    <script src="{{('base/js/wow.min.js')}}"></script>
    <script src="{{('base/js/main.js')}}"></script>
    <script src="{{ asset('js/newsletter.js') }}"></script>
    <script src="{{ asset('js/contactform.js') }}"></script>
  </body>
</html>

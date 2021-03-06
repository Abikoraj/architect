<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <!-- Site Title-->
    <title>{{env('APP_NAME',"")}}</title>
    <meta name="author" content="{{env('APP_NAME',"")}}" />
    <meta name="description" content="Interior Designer in Nepal - {{env('APP_NAME',"")}} is recognized as a full service interior design firm specializing in comprehensive interior detailing, Space Planning, Project Management and Build Firm." />
    <meta name="keywords" content="interiornepal, interior, design, nepal, interiordesigndharan, interiordesignbiratnagar, kathmandu, interiordesigninkathmandu, interiordesigninitahari, designer, pokharainterior, interiorbutwal" />
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:300,400,700%7CRoboto:400,500,700">
    <link rel="stylesheet" href="{{asset('theme2/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('theme2/css/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('theme2/css/style.css')}}">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
    <style>
        .rd-navbar-fullwidth.rd-navbar--is-clone .rd-navbar-main-outer, .rd-navbar-fullwidth.rd-navbar--is-stuck .rd-navbar-main-outer {
            padding-top: 5px;
            padding-bottom: 5px;

        }
        .rd-navbar-nav{
          text-align:right;
          padding-right:40px;
        }
    </style>
    @php
        $setting=\App\Models\Setting::first();

    @endphp
  </head>
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <!-- Page Loader-->
    <div class="preloader" id="preloader">
      <div class="page-loader-logo">
        <div class="brand">
          <div class="brand__name"><img src="{{asset($setting->logo)}}" alt="" />
          </div>
        </div>
      </div>
      <div class="page-loader-body">
        <div id="loadingProgressG">
          <div class="loadingProgressG" id="loadingProgressG_1"></div>
        </div>
      </div>
    </div>
    <!-- Page-->
    <div class="page">
      {{-- <!-- Page Header--><a class="banner banner-top" href="https://www.templatemonster.com/intense-multipurpose-html-template.html" target="_blank"><img src="images/intense.jpg" alt="" height="0"/></a> --}}
      <header class="page-header section">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-creative" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fullwidth" data-xl-device-layout="rd-navbar-fullwidth" data-xl-layout="rd-navbar-fullwidth" data-xxl-device-layout="rd-navbar-fullwidth" data-xxl-layout="rd-navbar-fullwidth" data-stick-up-clone="false" data-md-stick-up-offset="150px" data-lg-stick-up-offset="60px" data-md-stick-up="true" data-lg-stick-up="true">
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand"><a class="brand" href="/">
                      <div class="brand__name"><img src="{{asset($setting->logo)}}" alt="" />
                      </div></a></div>
                </div>
                <!-- RD Navbar Nav-->
                <div class="rd-navbar-nav-wrap">
                  <div class="rd-navbar-main-item"><a class="button button-xs button-lighter" href="{{route('theme2.contact')}}">Get a quote</a></div>
                  <!-- RD Navbar Nav-->
                  <ul class="rd-navbar-nav">
                    <li class="{{Route::is('theme2.home')?'active':''}}"><a href="{{route('theme2.home')}}">Home</a>
                    </li>
                    <li class="{{Route::is('theme2.about')?'active':''}}"><a href="{{route('theme2.about')}}">About Us</a>
                    </li>
                    <li class="{{Route::is('theme2.services')?'active':''}}"><a href="{{route('theme2.services')}}">Services</a>
                    </li>
                    {{-- <li class="{{Route::is('theme2.home')?'active':''}}"><a href="typography.html">Typography</a>
                    </li> --}}
                    <li class="{{Route::is('theme2.contact')?'active':''}}"><a href="{{route('theme2.contact')}}">Contact</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
    
      @yield('content')
      <footer class="footer-classic bg-gray-8">
        <div class="container">
          <div class="footer-classic__main">
            <ul class="list-nav-bordered">
              <li><a href="{{route('theme2.home')}}">Home</a></li>
              <li><a href="{{route('theme2.about')}}">About Us</a></li>
              <li><a href="{{route('theme2.services')}}">Services</a></li>
              <li><a href="{{route('theme2.contact')}}">Contacts</a></li>
            </ul>
          </div>
          <div class="divider"></div>
          <div class="footer-classic__aside">
            <div class="row row-20">
              <div class="col-md-6 text-md-left">
                <!-- Rights-->
                <p class="rights"><span>{{env('APP_NAME')}}</span><span>&nbsp;&copy;&nbsp;</span><span class="copyright-year"></span>. All Rights Reserved. </p>
              </div>
              <div class="col-md-6 text-md-right">
                <ul class="list-inline-xxs">
                  <li>
                    <p>Follow Us</p>
                  </li>
                  <li><a class="icon icon-xs icon-style-modern fa fa-facebook" href="{{$setting->fb}}"></a></li>
                  <li><a class="icon icon-xs icon-style-modern fa fa-twitter" href="{{$setting->insta}}"></a></li>
                  <li><a class="icon icon-xs icon-style-modern fa fa-instagram" href="{{$setting->twitter}}"></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="{{asset('theme2/js/core.min.js')}}"></script>
    <script src="{{asset('theme2/js/script.js')}}"></script>
  </body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>@if(!Request::is('/')) @yield('title') - @endif DESA KARETAN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon-->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('front_asset/image/bwi.png')}}">
    <link rel="stylesheet" href="{{ asset('front_asset/css/bootstrap.css') }}">
    <link href="{{ asset('front_asset/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('front_asset/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('modules/izitoast/dist/css/iziToast.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_asset/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front_asset/css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front_asset/css/slick-theme.css') }}">
</head>

<body>
    <header class="navigation">
        <nav class="navbar navbar-custom navbar-fixed-top">
            <div class="container text-center">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="@if(Request::is('/')) {{ asset('front_asset/image/Desa Karetan.png') }} @else {{ asset('front_asset/image/Desa Karetan black.png') }} @endif " height="45"
                            alt="logo"></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav menu-left">
                        <li><a href="{{ route('front.landing') }}">Beranda</span></a></li>
                        <li class="dropdown active">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Profil Desa <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('front.history') }}">Sejarah</a></li>
                                <li><a href="{{ route('front.team') }}">Pengurus</a></li>
                                <li><a href="{{ route('front.location') }}">Wilayah</a></li>
                             </ul>
                        </li>
                        <li><a href="{{ route('front.graphic') }}">Info Grafik</a></li>
                        <li><a href="{{ route('front.information') }}">Redaksi</a></li>
                        <li class="active"><a href="{{ route('front.contact') }}">Kontak</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right button-right">
                        <li><a href="{{ route('login') }}">Masuk Sekarang</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        @if(!Request::is('/'))
        <div class="nav-pagination">
            <div class="container">
               <hr class="hraing">
               <div class="row">
                  <div class="col-md-6 col-sm-6">
                     <div class="sooper-text">
                        <h4>@yield('title')</h4>
                     </div>
                  </div>
                  <div class="col-md-6  col-sm-6 text-right nav-pagination1">
                     <ul>
                        <li><a href="{{ route('front.landing') }}">Beranda</a></li>
                        <li> -
                        </li>
                        <li>@yield('title') </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
        @endif
    </header>
    @yield('content')
    <footer class="footer-bottom">
        <div class="container">
           <div class="row">
              <div class="col-md-6 col-sm-6">
                 <div class="footer-logo-text ">
                    <img height="60px" src="{{ asset('front_asset/image/Desa Karetan black.png') }}" alt="footer-logo">
                 </div>
              </div>
              <div class="col-md-6 col-sm-6">
                 <div class="main-3-section text-right ">
                    <ul>
                       <li class="twitter-icon"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                       <li class="facebook-icon"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                       <li class="youtube-icon"><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                       <li class="gmail-icon"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    </ul>
                 </div>
              </div>
              <div class="clear-fix"></div>
              <div class="col-md-12 col-sm-12">
                 <hr class="hraing1">
                 <div class="footer-bottom1">
                    <p>© All 2020 All rights reserved.<a href="#"> Desa karetan</a></p>
                 </div>
              </div>
           </div>
        </div>
     </footer>
    <!--jQuery-->
    <script src="{{ asset('front_asset/js/jquery.js') }}"></script>
    <!--Bootstrap-->
    <script src="{{ asset('front_asset/js/bootstrap.js')}}"></script>
    <!--wow js-->
    <script src="{{ asset('front_asset/js/wow.js') }}"></script>
    <!--Slick-->
    <script src="{{ asset('front_asset/js/slick.js') }}"></script>
    <!--Custom js-->
    <script src="{{ asset('front_asset/js/custom.js') }}"></script>
    <script src="{{ asset('modules/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('modules/izitoast/dist/js/iziToast.min.js') }}"></script>
    <script src="{{ asset('assets/js/crud.js') }}"></script>
    <script>
      var text = "";
      var button;
      $('button').on('click', function (e) {
          button = $(this);
          text = $(this).text();
      });
      console.log(button);
      $(document)
          .ajaxStart(function () {
              if (button != undefined) {
                  button.prop('disabled', true).text('Tunggu Sebentar...');
              }
          })
          .ajaxStop(function () {
              if (button != undefined) {
                  button.prop('disabled', false).text(text);
              }
          });
  </script>
    @yield('custom')
</body>

</html>

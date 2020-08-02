<!DOCTYPE html>
<html lang="en">

<head>
    <title>DESA KARETAN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon-->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('front_asset/image/favicon-32x32.png')}}">
    <link rel="stylesheet" href="{{ asset('front_asset/css/bootstrap.css') }}">
    <link href="{{ asset('front_asset/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('front_asset/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">
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
                    <a class="navbar-brand" href="#"><img src="{{ asset('front_asset/image/Desa Karetan.png') }}" height="45"
                            alt="logo"></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav menu-left">
                        <li><a href="#">Beranda</span></a></li>
                        <li class="dropdown active">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Profil Desa <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Sejarah</a></li>
                                <li><a href="#">Pemimpin</a></li>
                                <li><a href="#">Wilayah</a></li>
                             </ul>
                        </li>
                        <li><a href="about.html">Info Grafik</a></li>
                        <li><a href="pricing.html">Redaksi</a></li>
                        <li><a href="contact.html">Kontak</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right button-right">
                        <li><a href="#">Masuk Sekarang</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    @yield('content')
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
</body>

</html>

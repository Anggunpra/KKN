<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>

    <!-- General CSS Files -->
    <link href="{{ asset('public_assets/img/logo/obi.png')}}" rel="icon" type="image/png">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome/all.css')}}">
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('modules/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('modules/weathericons/css/weather-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('modules/weathericons/css/weather-icons-wind.min.css') }}">
    <link rel="stylesheet" href="{{ asset('modules/summernote/dist/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('modules/izitoast/dist/css/iziToast.min.css') }}">
    <link rel="stylesheet" href="{{ asset('modules/select2/dist/css/select2.min.css') }}">
    <link href="{{ asset('modules/datatables/media/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('modules/datatables/media/js/dataTables.bootstrap4.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('modules/datatables/media/js/responsive.bootstrap4.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('modules/datatables/media/js/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('modules/datatables/media/js/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="fas fa-bars"></i></a></li>
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="{{ asset('assets/img/avatar/avatar-1.png') }}"
                                class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, {{ auth()->user()->nama_lengkap }}</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-title">Selamat Datang!</div>
                            <a href="" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Biodata
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="javascript:void()"
                                onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"
                                class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Keluar
                            </a>
                        </div>
                    </li>
                </ul>
                <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </nav>
            <div class="main-sidebar">
                @include('layouts.sidebar_menu')
            </div>
            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        @if(request()->route()->getName() != 'dashboard')
                        <div class="section-header-back">
                            <a href="{{ url()->previous() }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
                        </div>
                        @endif
                        <h1>@yield('title')</h1>
                        @yield('action')
                    </div>
                    @yield('content')

                </section>
                @yield('modal')
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2020 <div class="bullet"></div>
                </div>
                <div class="footer-right">
                    KKN BACK TO VILLAGE 2020
                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('assets/js/popper.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.nicescroll.min.js')}}"></script>
    <script src="{{ asset('assets/js/moment.min.js')}}"></script>
    <script src="{{ asset('assets/js/stisla.js') }}"></script>

    <!-- JS Libraies -->
    <script src="{{ asset('modules/simpleweather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ asset('modules/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('modules/jqvmap/dist/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('modules/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('modules/summernote/dist/summernote-bs4.js') }}"></script>
    <script src="{{ asset('modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>
    <script src="{{ asset('modules/jquery-ui-dist/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('modules/izitoast/dist/js/iziToast.min.js') }}"></script>
    <script src="{{ asset('modules/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('modules/datatables/media/js/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('modules/datatables/media/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('modules/datatables/media/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('modules/datatables/media/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('modules/datatables/media/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('modules/datatables/media/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('modules/datatables/media/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('modules/datatables/media/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('modules/datatables/media/js/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('modules/datatables/media/js/dataTables.select.min.js') }}"></script>
    <script src="{{ asset('assets/js/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/js/pdfmake/vfs_fonts.js') }}"></script>

    <!-- Template JS File -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/crud.js') }}"></script>
    <script src="{{ asset('modules/select2/dist/js/select2.full.min.js')}}"></script>
    <script src="{{ asset('vendor/sweetalert/sweetalert.all.js')}}"></script>
    
    <!-- Page Specific JS File -->
    {{-- <script src="{{ asset('assets/js/page/index-0.js') }}"></script> --}}
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

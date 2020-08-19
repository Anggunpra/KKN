<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- General CSS Files -->
    <link href="{{ asset('public_assets/img/logo/obi.png')}}" rel="icon" type="image/png">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome/all.css')}}">
    <link rel="stylesheet" href="{{ asset('modules/bootstrap-daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{ asset('modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}">
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('modules/bootstrap-social/bootstrap-social.css') }}">
    <link rel="stylesheet" href="{{ asset('modules/izitoast/dist/css/iziToast.min.css') }}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row justify-content-md-center">
                    <div class="col-sm-12 col-md-12 col-lg-5">
                        <div class="login-brand">
                            <img src="{{ asset('assets/img/unej.png') }}" alt="logo" width="100"
                                class="shadow-light">
                        </div>

                        @yield('content')
                        <div class="simple-footer">
                            Copyright &copy; KKN BACK TO VILLAGE 2020
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('assets/js/popper.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.nicescroll.min.js')}}"></script>
    <script src="{{ asset('assets/js/moment.min.js')}}"></script>
    <script src="{{ asset('assets/js/stisla.js') }}"></script>
    <script src="{{ asset('modules/izitoast/dist/js/iziToast.min.js') }}"></script>
    <script src="{{ asset('assets/js/stisla.js') }}"></script>
    <script src="{{ asset('assets/js/crud.js') }}"></script>

    <!-- JS Libraies -->
    <script src="{{ asset('modules/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{ asset('modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"></script>
    <!-- Template JS File -->

    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script>
        var text = "";
        var button;
        $('button').on('click', function (e) {
            button = $(this);
            text = $(this).text();
        });
        $(document)
            .ajaxStart(function () {
                button.prop('disabled', true).text('Tunggu Sebentar ...');
            })
            .ajaxStop(function () {
                button.prop('disabled', false).text(text);
            });
    </script>
    @yield('custom')
    <!-- Page Specific JS File -->
</body>

</html>

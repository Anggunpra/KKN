@extends('layouts.front')
@section('content')
<section class="banner-app">
    <div class="">
        <div class="row">
            <div class="col-md-6">
                <div class="heading headbetter text-color  wow animated slideInLeft">
                    <h3>Smart Kampung Desa Karetan </h3>
                    <p>Selaras dengan program Kementerian Desa, Pembangunan Daerah Tertinggal dan Transmigrasi RI dalam membentuk Desa Tanggap COVID-19, Desa Karetan mengupayakan ikut berpartisipasi aktif dalam program tersebut.
                    </p>
                    <div class="banner-btn ">
                        <a href="{{ route('register') }}" class="btn btn-pink button6">Daftar Sekarang</a>
                        <a href="{{ route('front.letter') }}" class="btn btn-blue button6">Pengajuan Surat Keterangan</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 no-padd">
                <div class=" wow animated zoomIn">
                    <img src="{{ asset('front_asset/image/desa/2.jpg') }}" class="img-responsive" alt="image">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="check-out-feature web-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center  wow animated slideInUp">
                <div class="heading">
                    <h3>Berbagai macam kemudahan</h3>
                    <h3>Yang dapat Anda temukan:</h3>
                </div>
            </div>
            <div class="col-md-4 text-center ">
                <div class="check-out-text  wow animated slideInLeft">
                    <div class="feature-card">
                        <img src="{{ asset('front_asset/image/feature1.png') }}" alt="feature">
                        <img src="{{ asset('front_asset/image/feature1-hover.png') }}" class="img-feature" alt="feature">
                    </div>
                    <h4>Pengajuan Surat Keterangan</h4>
                    <p>Pembuatan surat keterangan usaha, domisili, kehilangan dan lain-lain bisa diajukan secara online.</p>
                </div>
            </div>

            <div class="col-md-4 text-center ">
                <div class="check-out-text  wow animated slideInRight">
                    <div class="feature-card">
                        <img src="{{ asset('front_asset/image/feature3.png') }}" alt="feature">
                        <img src="{{ asset('front_asset/image/feature3-hover.png') }}" class="img-feature"
                            alt="feature">
                    </div>
                    <h4>Survey COVID-19</h4>
                    <p>Survey ini bertujuan untuk mendata kondisi kesehatan masyarakat.</p>
                </div>
            </div>
            {{-- <div class="clear-fix"></div> --}}
            <div class="col-md-4 text-center  wow animated slideInLeft">
                <div class="check-out-text">
                    <div class="feature-card">
                        <img src="{{ asset('front_asset/image/feature4.png') }}" alt="feature">
                        <img src="{{ asset('front_asset/image/feature4-hover.png') }}" class="img-feature"
                            alt="feature">
                    </div>
                    <h4>Info Grafik COVID-19</h4>
                    <p>Fitur ini akan menampilkan data dari hasil survey COVID-19.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="discover">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="right-text  wow animated slideInLeft">
                    <h4>Dapatkan Info Terbaru</h4>
                    <p>Informasi perkembangan terbaru mengenai Desa Karetan dapat Anda lihat disini.</p>
                    <div class="button-center ">
                        <a href="{{ route('front.information') }}" class="btn button3">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class=" wow animated zoomIn">
                    <img src="{{ asset('front_asset/image/desa/5294.png') }}" class="img-responsive"
                        alt="desktop">
                </div>
            </div>
        </div>
        <hr class="haring">
    </div>
    <div class="main-container-div">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class=" wow animated zoomIn">
                        <img src="{{ asset('front_asset/image/desa/Grafik.png') }}" height="100px" class="img-responsive" alt="map">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="right-text wow animated slideInRight">
                        <h4>Kawal COVID-19</h4>
                        <p>Dapatkan info terbaru mengenai perkembangan COVID-19. Anda juga dapat berpatisipasi dalam program pencegahan penyebaran COVID-19. Daftar Sekarang dan isi surveynya</p>
                        <div class="button-center">
                            <a href="{{ route('front.graphic') }}" class="btn button3">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <section class="newsletter">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="heading text-center newsletter1 wow animated slideInUp">
                    <h3>Subscribe to our newsletter</h3>
                    <p>Join our mailing list and get daily our new software updates</p>
                </div>
                <form class="form-inline forms text-center" action="index.html">
                    <div class="form-group">
                        <input type="email" placeholder="Enter your email address" size="32"
                            class="form-control wow animated slideInLeft" id="email">
                    </div>
                    <button type="button" class="btn btn-subscribe wow animated slideInRight">Subscribe now</button>
                </form>
            </div>
        </div>
    </div>
</section> --}}
<section class="screenshot">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="heading text-center wow animated slideInUp">
                    <h3>Desa Karetan </h3>
                    <h3>Desa Tanggap COVID-19</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div id="carousel-example-generic" class="carousel-bg carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="{{ asset('front_asset/image/desa/12.jpg')}}" class="img-responsive"
                                alt="image">
                            <div class="carousel-caption">
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ asset('front_asset/image/desa/13.jpg')}}" class="img-responsive"
                                alt="image">
                            <div class="carousel-caption">
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ asset('front_asset/image/desa/14.jpg')}}" class="img-responsive"
                                alt="image">
                            <div class="carousel-caption">
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ asset('front_asset/image/desa/15.jpg')}}" class="img-responsive"
                                alt="image">
                            <div class="carousel-caption">
                            </div>
                        </div>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <i class="	fa fa-chevron-left" aria-hidden="true"></i>
                        <span class="sr-only">Sebelumnya</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <i class="	fa fa-chevron-right" aria-hidden="true"></i>
                        <span class="sr-only">Selanjutnya</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="newsletter2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="heading text-center newsletter1 ">
                    <h3>Link tarkait :</h3>
                </div>
                <div class="desk-trust">
                    <div class="responsive2">
                        <div><a href="http://banyuwangikab.go.id" target="_blank" rel="noopener noreferrer"><img src="{{ asset('front_asset/image/desa/smart.png') }}"  height="80" alt="image"></a> </div>
                        <div><a href="http://smartkampung.id" target="_blank" rel="noopener noreferrer"><img src="{{ asset('front_asset/image/bwi.png') }}" height="70" alt="image"></a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
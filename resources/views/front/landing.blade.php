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
                        <a href="{}" class="btn btn-pink button6">Daftar Sekarang</a>
                        <a href="" class="btn btn-blue button6">Pengajuan Surat Pernyataan</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 no-padd">
                <div class=" wow animated zoomIn">
                    <img src="{{ asset('front_asset/image/web-app.png') }}" class="img-responsive" alt="image">
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
                    <h4>Pembuatan Surat</h4>
                    <p>Pembuatan surat keterangan atau pernyataan dari desa setempat.</p>
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
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                        suffered alteration in some form, by injected humour lorem ipsum is simply free text in the
                        market or randomised words.</p>
                    <div class="button-center ">
                        <a href="" class="btn button3">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class=" wow animated zoomIn">
                    <img src="{{ asset('front_asset/image/desktop-in-image.png') }}" class="img-responsive"
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
                        <img src="{{ asset('front_asset/image/map-images.png') }}" class="img-responsive" alt="map">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="right-text wow animated slideInRight">
                        <h4>Real time graphs working system</h4>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour lorem ipsum is simply free text in
                            the market or randomised words.</p>
                        <div class="button-center">
                            <button type="button" class="btn button3">Learn More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="newsletter">
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
</section>
<section class="screenshot">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="heading text-center wow animated slideInUp">
                    <h3>Would you like to see software </h3>
                    <h3>checkout screenshot:</h3>
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
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="{{ asset('front_asset/image/screenshot.png')}}" class="img-responsive"
                                alt="image">
                            <div class="carousel-caption">
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ asset('front_asset/image/screenshot1.png')}}" class="img-responsive"
                                alt="image">
                            <div class="carousel-caption">
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ asset('front_asset/image/screenshot.png')}}" class="img-responsive"
                                alt="image">
                            <div class="carousel-caption">
                            </div>
                        </div>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <i class="	fa fa-chevron-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <i class="	fa fa-chevron-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="question">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="heading text-center wow animated slideInUp">
                    <h3>Do you have any questions?</h3>
                    <h3>find out Answers:</h3>
                </div>
            </div>
            <div class="col-md-4">
                <div class="quest-text wow animated slideInLeft">
                    <h4>How sooper works?<span class="pull-right purple "><i class="	fa fa-question"></i></span>
                    </h4>
                    <p>There are many variations of passages of available but majority have suffer alteration in
                        some form by inject humor.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="quest-text wow animated slideInUp">
                    <h4>In Sooper safe to use? <span class="pull-right yellow"><i class="	fa fa-question"></i></span>
                    </h4>
                    <p>There are many variations of passages of available but majority have suffer alteration in
                        some form by inject humor.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="quest-text wow animated slideInRight">
                    <h4>Why Sooper Charge us? <span class="pull-right pink"><i class="	fa fa-question"></i></span>
                    </h4>
                    <p>There are many variations of passages of available but majority have suffer alteration in
                        some form by inject humor.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="team">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center heading wow animated slideInUp">
                <h3>People behind the sooper app</h3>
                <h3>Meet the team:</h3>
            </div>
            <div class="col-md-3 col-sm-3 team-border">
                <div class="team-member  text-center">
                    <img src="image/team1.jpg" class="img-responsive img-circle" alt="team">
                    <h4>Jessica brown</h4>
                    <p>Developer</p>
                    <div class="main-3-section">
                        <ul>
                            <li class="twitter-icon"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                            <li class="facebook-icon"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li class="youtube-icon"><a href="#"><i class="fa fa-youtube-play"
                                        aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 team-border">
                <div class="team-member  text-center">
                    <img src="{{ asset('front_asset/image/team2.jpg') }}" class="img-responsive img-circle" alt="team">
                    <h4>Mark Jason</h4>
                    <p>Developer</p>
                    <div class="main-3-section">
                        <ul>
                            <li class="twitter-icon"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                            <li class="facebook-icon"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li class="youtube-icon"><a href="#"><i class="fa fa-youtube-play"
                                        aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 team-border">
                <div class="team-member  text-center">
                    <img src="{{ asset('front_asset/image/team3.jpg') }}" class="img-responsive img-circle" alt="team">
                    <h4>Reena Scot</h4>
                    <p>Adword Manager</p>
                    <div class="main-3-section">
                        <ul>
                            <li class="twitter-icon"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                            <li class="facebook-icon"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li class="youtube-icon"><a href="#"><i class="fa fa-youtube-play"
                                        aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="team-member text-center">
                    <img src="image/team4.jpg" class="img-responsive img-circle" alt="team">
                    <h4>Kevin Smith</h4>
                    <p>Developer</p>
                    <div class="main-3-section">
                        <ul>
                            <li class="twitter-icon"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                            <li class="facebook-icon"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li class="youtube-icon"><a href="#"><i class="fa fa-youtube-play"
                                        aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
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
                    <h3>Trusted by great businesses</h3>
                </div>
                <div class="desk-trust">
                    <div class="responsive2">
                        <div><img src="{{ asset('front_asset/image/ron.png') }}" alt="image"></div>
                        <div> <img src="{{ asset('front_asset/image/faster.png') }}" alt="image"></div>
                        <div> <img src="{{ asset('front_asset/image/nc2.png') }}" alt="image"></div>
                        <div> <img src="{{ asset('front_asset/image/sweets.png') }}" alt="image"></div>
                        <div> <img src="{{ asset('front_asset/image/Untitled-2.png') }}" alt="image"></div>
                        <div> <img src="{{ asset('front_asset/image/goldimage.png') }}" alt="image"></div>
                        <div> <img src="{{ asset('front_asset/image/ron.png') }}" alt="image"></div>
                        <div> <img src="{{ asset('front_asset/image/faster.png') }}" alt="image"></div>
                        <div> <img src="{{ asset('front_asset/image/nc2.png') }}" alt="image"></div>
                        <div> <img src="{{ asset('front_asset/image/sweets.png') }}" alt="image"></div>
                        <div> <img src="{{ asset('front_asset/image/Untitled-2.png') }}" alt="image"></div>
                        <div> <img src="{{ asset('front_asset/image/goldimage.png') }}" alt="image"></div>
                        <div> <img src="{{ asset('front_asset/image/ron.png') }}" alt="image"></div>
                        <div> <img src="{{ asset('front_asset/image/faster.png') }}" alt="image"></div>
                        <div> <img src="{{ asset('front_asset/image/nc2.png') }}" alt="image"></div>
                        <div> <img src="{{ asset('front_asset/image/sweets.png') }}" alt="image"></div>
                        <div> <img src="{{ asset('front_asset/image/Untitled-2.png') }}" alt="image"></div>
                        <div> <img src="{{ asset('front_asset/image/goldimage.png') }}" alt="image"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="section-color-div-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="container-background ">
                        <div class="getone">
                            <h1>Get a Sooper Landing page App now</h1>
                            <h5>No setup, No credit card required and 1 month free trial</h5>
                        </div>
                        <div class="button-text-center">
                            <a href="" class="btn btn-pink button7">Get the Sooper</a>
                            <a href="" class="btn btn-pink button7">View app Pricing</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="logo-footer2 wow animated  slideInLeft">
                        <img src="{{ asset('front_asset/image/logo-footer.png') }}" class="img-responsive"
                            alt="footer-logo">
                    </div>
                </div>
                <div class="col-md-2 col-sm-2">
                    <div class="footer-div1 wow animated  slideInUp">
                        <h5>Company</h5>
                        <ul>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Press Release</a></li>
                            <li><a href="#">Reviews</a></li>
                            <li><a href="#">Feedbacks</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2">
                    <div class="footer-div1 wow animated  slideInUp">
                        <h5>Features</h5>
                        <ul>
                            <li><a href="#">No Setup</a></li>
                            <li><a href="#">Quick Access</a></li>
                            <li><a href="#">Secure Payment</a></li>
                            <li><a href="#">24h Support</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2">
                    <div class="footer-div1 wow animated  slideInUp">
                        <h5>Integrations</h5>
                        <ul>
                            <li><a href="#">Andriod</a></li>
                            <li><a href="#">IOS App</a></li>
                            <li><a href="#">Windows App</a></li>
                            <li><a href="#">Desktop Version</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-2">
                    <div class="main-3-section  unoorder wow animated  slideInRight">
                        <h5>Follow</h5>
                        <ul>
                            <li class="twitter-icon"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                            <li class="facebook-icon"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li class="youtube-icon"><a href="#"><i class="fa fa-youtube-play"
                                        aria-hidden="true"></i></a></li>
                            <li class="gmail-icon"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="footer12">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="bottom-footer4 wow animated  slideInLeft">
                        <p>© All 2018 All rights reserved.<a href="#"> Design by Layerdrops</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="bottom-footer3 wow animated  slideInRight">
                        <p>
                            <a href="#">Terms & Conditions</a> &nbsp; &nbsp;
                            <a href="#">Privacy Policy</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
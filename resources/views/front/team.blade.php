@extends('layouts.front')
@section('title','Struktur Pengurus Desa Karetan')
@section('content')
<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center heading wow animated slideInUp">
                <h3>Pengurus Pemerintah Desa Karetan</h3>
                <h3>Periode Tahun 2019 - 2024</h3>
            </div>
            <div class="col-md-12">
                <img src="{{ asset('front_asset/image/desa/16.jpg') }}" class="img-responsive center-block" alt="">
            </div>
        </div>
    </div>
</section>
<section class="team">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center heading wow animated slideInUp">
                <h3>Daftar Nama Pengurus Pemerintah Desa Karetan</h3>
                <h3>Beserta Jabatan</h3>
            </div>
            <div class="col-md-3 col-sm-3 team-border">
                <div class="team-member  text-center ">
                    <img src="{{ asset('front_asset/image/desa/1.png') }}" class="img-responsive" alt="team">
                    <h4>BONARI</h4>
                    <p>Kepala Desa</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 team-border">
                <div class="team-member  text-center ">
                    <img src="{{ asset('front_asset/image/desa/2.png') }}" class="img-responsive" alt="team">
                    <h4>Sumarno</h4>
                    <p>Sekertaris Desa</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 team-border">
                <div class="team-member  text-center ">
                    <img src="{{ asset('front_asset/image/desa/3.png') }}" class="img-responsive" alt="team">
                    <h4>Wahyu Kristiani</h4>
                    <p>KAUR Keuangan</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 team-border">
                <div class="team-member  text-center ">
                    <img src="{{ asset('front_asset/image/desa/4.png') }}" class="img-responsive" alt="team">
                    <h4>Eko Witanto</h4>
                    <p>KAUR Perencanaan</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 team-border">
                <div class="team-member  text-center ">
                    <img src="{{ asset('front_asset/image/desa/5.png') }}" class="img-responsive" alt="team">
                    <h4>Wawan Priwantoro</h4>
                    <p>KASI Pemerintah</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 team-border">
                <div class="team-member  text-center ">
                    <img src="{{ asset('front_asset/image/desa/6.png') }}" class="img-responsive" alt="team">
                    <h4>Luis Kukuh T.</h4>
                    <p>KASI Kesejahteraan</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 team-border">
                <div class="team-member  text-center ">
                    <img src="{{ asset('front_asset/image/desa/7.png') }}" class="img-responsive" alt="team">
                    <h4>Kosong.</h4>
                    <p>KASI Pelayanan</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 team-border">
                <div class="team-member  text-center ">
                    <img src="{{ asset('front_asset/image/desa/8.png') }}" class="img-responsive" alt="team">
                    <h4>SUKARI</h4>
                    <p>KADUS Sidodadi</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 team-border">
                <div class="team-member  text-center ">
                    <img src="{{ asset('front_asset/image/desa/9.png') }}" class="img-responsive" alt="team">
                    <h4>Judi Riyanto</h4>
                    <p>KADUS Sidoagung</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
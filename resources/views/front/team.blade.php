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
                    <h4>Bu Ani</h4>
                    <p>Bendahara Desa</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
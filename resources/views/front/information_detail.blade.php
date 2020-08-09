@extends('layouts.front')
@section('title', $information->judul)
@section('content')
<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8">
                <div class="about-box wow animated fadeInLeft">
                    <div class="about-overlay">
                        <img src="{{ is_null($information->gambar) ? asset('front_asset/image/about1.jpg') : asset($information->gambar)  }}" class="img-responsive" alt="about">
                        <div class="news-overlay">
                            <div class="overlay-text"><a href="#"><img src="{{ asset('front_asset/image/200px-Plus_symbol.svg.png')}}"
                                        alt="plus"></a>
                            </div>
                        </div>
                    </div>
                    <h4>{{ $information->judul}}</h4>
                    <span class="badge badge-success">{{ $information->category->nama_kategori }}</span>
                    <p>
                        {!! $information->deskripsi !!}
                    </p>
                    <p class="text-info">Dibuat pada : {{ \Carbon\Carbon::parse($information->created_at)->format('d M Y H:i') }}</p>
                </div>
            </div>
            <div class="col-md-4">

            </div>
            
        </div>
    </div>
</section>
@endsection
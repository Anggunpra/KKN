@extends('layouts.front')
@section('title', 'Daftar Berita dan Informasi')
@section('content')
<section class="about">
    <div class="container">
        <div class="row">
            @forelse($information as $item)
            <div class="col-md-4 col-sm-4">
                <div class="about-box wow animated fadeInLeft">
                    <div class="about-overlay">
                        <img src="{{ is_null($item->gambar) ? asset('front_asset/image/about1.jpg') : asset($item->gambar)  }}" class="img-responsive" alt="about">
                        <div class="news-overlay">
                            <div class="overlay-text"><a href="#"><img src="{{ asset('front_asset/image/200px-Plus_symbol.svg.png')}}"
                                        alt="plus"></a>
                            </div>
                        </div>
                    </div>
                    <h4>{{ $item->judul}}</h4>
                    <p>     
                        {!!  $item->summary !!}
                    </p>
                    <a href="{{ route('front.information.detail',$item->id) }}" class="btn btn-info" target="_blank" rel="noopener noreferrer">Detail</a>
                </div>
            </div>
            @empty
            <div class="col-md-12">
                <div class="alert alert-danger" role="alert">
                    <strong>Kosong</strong> Saat ini berita atau informasi sedang tidak tersedia
                </div>
            </div>
            @endforelse
            
        </div>
    </div>
</section>
@endsection
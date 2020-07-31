@extends('layouts.main')
@section('title','Dashboard')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="hero text-white hero-bg-image"
            data-background="{{ asset('assets/img/unsplash/eberhard-grossgasteiger-1207565-unsplash.jpg')}}">
            <div class="hero-inner">
                <h2>Hai, Selamat Datang {{ auth()->user()->nama_lengkap }}!</h2>
                <p class="lead">Yukk silahkan pastikan data profil Anda dapat terisi dengan lengkap, agar pendataan
                    semakin akurat</p>
                <div class="mt-4">
                    <a href="" class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="far fa-user"></i> Cek
                        Data</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-12 mb-2">
        <div class="row justify-content-md-center">
          <div class="col-sm-12 col-lg-4">
              <select name="periode" class="form-control" required>
                  <option value="" selected disabled>Pilih Periode</option>
                  @foreach ($periodes as $p)
                  <option value="{{ $p->id }}">{{ $p->nama_periode }}</option>
                  @endforeach
              </select>
          </div>
          <div class="col-lg-3 col-sm-12">
              <button type="button" id="seleksi" class="btn btn-primary"><i class="fas fa-tasks"></i> PILIH</button>
          </div>
        </div>
    </div>
    @foreach ($data as $item)
    <div class="col-12 col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4>{{ $item['nama_grafik'] }}</h4>
            </div>
            <div class="card-body">
                <canvas id="{{ $item['id_grafik'] }}"></canvas>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
@section('custom')
<script>
    var link = "{{ route('home') }}";
    var periode;
    var queryPeriode = "?periode=";
    $('select[name=periode]').on('change', function () {
        periode = $(this).children("option:selected").val()
        // console.log(periode);
        queryPeriode = "?periode=" + periode;
    });
    $('#seleksi').on('click', function () {
        var href = link + queryPeriode;
        console.log(href);
        window.location.href = href;
    });
    @foreach($data as $item)
    var ctx2 = document.getElementById("{{ $item['id_grafik'] }}");
    // ctx.height = 175;
    new Chart(ctx2, {
        type: 'doughnut',
        data: {
            datasets: [{
                data: @json($item['label_total']),
                backgroundColor: [
                    "rgba(255,193,7,0.9)",
                    "rgba(0,162,255,0.9)",
                    "rgba(123,179,26,0.9)",
                    "rgba(255,152,0,0.9)",
                    "rgba(250,152,0,0.9)",
                    "rgba(116, 7, 163,0.9)",
                    "rgba(7, 69, 163,0.9)",
                    "rgba(5, 163, 66,0.9)",
                    "rgba(6, 156, 151,0.9)",
                    "rgba(111, 145, 9,0.9)",
                    "rgba(240, 58, 2,0.9)",
                    "rgba(245, 171, 0,0.9)",
                    "rgba(177, 145, 186,0.9)",

                ],
                hoverBackgroundColor: [
                    "rgba(255,193,7,0.5)",
                    "rgba(0,162,255,0.5)",
                    "rgba(123,179,26,0.5)",
                    "rgba(255,152,0,0.5)",
                    "rgba(250,152,0,0.5)",
                    "rgba(116, 7, 163,0.5)",
                    "rgba(7, 69, 163,0.5)",
                    "rgba(5, 163, 66,0.5)",
                    "rgba(6, 156, 151,0.5)",
                    "rgba(111, 145, 9,0.5)",
                    "rgba(240, 58, 2,0.5)",
                    "rgba(245, 171, 0,0.5)",
                    "rgba(177, 145, 186,0.5)",
                ]

            }],
            labels: @json($item['label'])
        },
        options: {
            responsive: true,
            cutoutPercentage: 60,
            maintainAspectRatio: false,
            animation: {
                animateRotate: true,
                animateScale: true,
            },
            legend: {
                position: 'right',
                labels: {
                    usePointStyle: true,
                    fontFamily: "Segoe UI",
                    fontSize: 14,
                    fontColor: '#464a53'
                },


            },
        }
    });
    @endforeach
</script>
@endsection
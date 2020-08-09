@extends('layouts.front')
@section('title', 'Informasi Grafik')
@section('content')
<section class="about">
    <div class="container">
        <div class="row">
            @foreach ($data as $item)
            <div class="col-4 col-md-4 col-lg-4">
                <div class="card" style="background: white;">
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
    </div>
</section>
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
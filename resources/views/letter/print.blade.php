<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <style>
        @page {
            margin: 1cm 1.5cm 0cm 1.5cm !important;
            padding: 0px 0px 0px 0px !important;
        }

        @font-face {
            font-family: 'niconne';
            src: url({{ url('assets/fonts/Niconne-Regular.ttf') }}) format("truetype");
        }
        @font-face {
            font-family: 'kaushan';
            src: url({{url('assets/fonts/KaushanScript-Regular.ttf')}}) format("truetype");
        }

        body {
            font-family: "Times New Roman", Times, serif;
            
        }
        body p, table tr td {
            font-size: 13pt;
            
        }

        table,
        table tr,
        table td {
            margin: 0;
            padding: 0;
            border: none;
            border-spacing: 1.7;
            text-align: justify;
        }

        .kop {
            margin: 0;
            padding:0;
            /* line-height: 30px; */
        }

        .kop_line {
            border-bottom: 1pt solid black;
        }

        table tr {
            vertical-align: top;
        }

        li {
            margin-top: 3px;
            margin-bottom: 1px;
        }

        .nowrap{
            text-align:right;
            padding-right: 5px;
        }

        /* #watermark {
                position: fixed;
                bottom:   10cm;
                left:     5.5cm;
                width:    8cm;
                height:   8cm;
                z-index:  -1000;
            } */
    </style>
    {{-- <link href="{{ public_path('user_assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" /> --}}
    <title>Surat Keterangan</title>
</head>

<body>
    {{-- <div id="watermark">
        <img src="ocw_logo.png" height="100%" width="100%" />
    </div> --}}

    <table width="100%">
        <tr style="border-bottom: 1pt solid black;">
            <td width="15%">
                <img height="100" src="{{ asset('front_asset/image/bwi.png')}}" alt="">
            </td>
            <td width="85%" style="text-align:center;">
                <h3 class="kop" style="font-style: normal; font-weight:normal;">PEMERINTAH KABUPATEN BANYUWANGI</h3>
                <h3 class="kop" style="font-style: normal; font-weight:normal;">KECAMATAN PURWOHARJO</h3>
                <h3 class="kop" style="font-style: normal; font-weight:normal;">KANTOR KEPALA DESA KARETAN</h3>
                <p class="kop">Jalan Grajagan Nomor. 45 Telepon. 393552 Pos. 68483</p>
                <p class="kop" style="font-style: normal;font-style:italic">Website : karetan.desa.id 	&nbsp;&nbsp;&nbsp;&nbsp; Email : desakaretan@gmail.com</p>
            </td>
        </tr>
    </table>
    <hr style="border-top: 4px double black;">
    <h3 class="kop" style="text-decoration:underline; text-align:center;">SURAT KETERANGAN</h3>
<h4 class="kop" style="text-align:center;margin-bottom:10px;"><strong> Nomor : {{ $letter->nomor_surat }}</strong></h4>
    {{-- <p style="font-size:12pt; position: relative;margin:0;padding:0;">Yang bertanda tangan dibawah ini :</p> --}}
    <table id="data" style="margin-top:20px;margin-bottom:20px;"  width="100%">
        <tr>
            <td colspan="4">Yang bertanda tangan dibawah ini :</td>
        </tr>
        <tr>
            <td width="5%">Nama</td>
            <td width="25%"></td>
            <td class="nowrap">:</td>
            <td width="55%">{{ $letter->official->nama_pejabat }}</td>
        </tr>
        <tr>
            <td width="5%">Jabatan</td>
            <td width="25%"></td>
            <td class="nowrap">:</td>
            <td width="55%">{{ $letter->official->jabatan_pejabat }}</td>
        </tr>
        <tr>
            <td colspan="4">dengan ini menerangkan bahwa :</td>
        </tr>
        {{-- <p style="font-size:12pt; position: relative;line-height:0.9em;text-justify: distribute-all-lines; vertical-align: middle; display:inline;"></p> --}}
        <tr>
            <td width="5%">a.</td>
            <td width="25%">Nama Lengkap</td>
            <td class="nowrap">:</td>
            <td width="55%">{{ $letter->nama_lengkap }}</td>
        </tr>
        <tr>
            <td width="5%">b.</td>
            <td width="25%">NIK</td>
            <td class="nowrap">:</td>
            <td width="55%">{{ $letter->nik }}</strong></td>
        </tr>
        <tr>
            <td width="5%">c.</td>
            <td width="25%">Tempat, Tanggal Lahir</td>
            <td class="nowrap">:</td>
            <td width="55%">{{ $letter->tempat_lahir }}, {{ \Carbon\Carbon::parse($letter->tanggal_lahir)->format('d F Y') }}</td>
        </tr>
        <tr>
            <td width="5%">d.</td>
            <td width="25%">Jenis Kelamin</td>
            <td class="nowrap">:</td>
            <td width="55%">{{ $letter->jenis_kelamin }}</strong></td>
        </tr>
        <tr>
            <td width="5%">e.</td>
            <td width="25%">Agama</td>
            <td class="nowrap">:</td>
            <td width="55%">{{ $letter->agama }}</strong></td>
        </tr>
        <tr>
            <td width="5%">f.</td>
            <td width="25%">Status Perkawinan</td>
            <td class="nowrap">:</td>
            <td width="55%">{{ $letter->status_kawin }}</strong></td>
        </tr>
        <tr>
            <td width="5%">g.</td>
            <td width="25%">Pekerjaan</td>
            <td class="nowrap">:</td>
            <td width="55%">{{ $letter->pekerjaan }}</strong></td>
        </tr>
        <tr>
            <td width="5%">h.</td>
            <td width="25%">Alamat</td>
            <td class="nowrap">:</td>
            <td width="55%">RT/RW {{ $letter->rt }}/{{ $letter->rw }} {{ $letter->dusun }} Desa Karetan Kecamatan Purwoharjo Kabupaten Banyuwangi</strong></td>
        </tr>
        <tr>
            <td width="5%">i.</td>
            <td width="25%">Keterangan</td>
            <td class="nowrap">:</td>
            <td width="55%"></td>
        </tr>
        <tr>
            <td width="5%"></td>
            <td colspan="3">
                <ol>
                    <li>Orang tersebut diatas benar - benar penduduk Desa Karetan Kecamatan Purwoharjo Kabupaten Banyuwangi.</li>
                    <li>
                        Atas pengakuan yang bersangkutan, sampai surat keterangan ini dibuat orang tersebut diatas {{ $letter->jenis_sk }}.
                    </li>
                </ol>
                <p style="margin-left:20px;">Surat keterangan ini digunakan untuk <strong>{{ $letter->keperluan_sk }}</strong>.</p>
            </td>
        </tr>
        <tr>
            <td colspan="4">Demikian surat keterangan dibuat untuk dipergunakan sebagaimana mestinya.</td>
        </tr>
    </table>
        {{-- <p style="padding-left:3em;text-indent: 1.5 cm;font-family:niconne; font-size:15pt; position: relative;line-height:0.8em;text-justify: distribute-all-lines; vertical-align: middle; display:inline;">{{ $letter->letter_finish }}</p> --}}
    <table style="margin-top:40px;" width="100%">
        <tr>
            <td>
                
            </td>
            <td align="right" valign="middle">
            </td>
            <td></td>
            <td width="40%">
                <div style="text-align:left;">
                    <p class="kop" style="font-size:12pt;">Dibuat di : Karetan</p>
                    <p class="kop" style="font-size:12pt;text-decoration:underline;">Pada Tanggal : {{ \Carbon\Carbon::now()->format('d F Y') }}</p>
                    <p class="kop" style="font-size:12pt;">{{ $letter->official->jabatan_pejabat }}</p>
                    {{-- <p class="kop" style="font-size:15pt;line-height:0.9;margin-bottom:1;padding:0;">Kabupaten Jember</p> --}}
                    
                    <br>
                    <br>
                    <br>
                    <p class="kop" style="margin-top:0;padding:0;font-size:12pt;font-weight:bold;">{{ $letter->official->nama_pejabat }}</p>
                    {{-- <p class="kop" style="font-size:15pt;line-height:0.8;margin:0;padding:0;">{{ $letter->official->jabatan_pejabat }}</p> --}}
                    {{-- <p class="kop" style="font-family:niconne;font-size:15pt;line-height:0.8;margin:0;padding:0;">{{ $letter->departement_head_number	}}</p> --}}
                </div>
            </td>
        </tr>
    </table>
</body>
</html>
@extends('layouts.front')
@section('title', 'Pengajuan Surat Keterangan')
@section('content')
<section class="contact-section">
    <div class="container">
       <div class="row">
          <div class="col-md-8 col-sm-8">
             <div class="wow animated  slideInLeft">
                 <div id="mc_embed_signup">
                <form action="{{ route('front.letter.submission') }}" method="post" id="create-form">
                    @csrf
                   <div id="mc_embed_signup_scroll">
                      <div class="input-aling">
                         <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="jenis_sk">Jenis Surat Keterangan</label>
                                    <select class="form-control" name="jenis_sk" id="jenis-sk" aria-describedby="helpJSK">
                                        <option>Pilih Jenis Surat Keterangan</option>
                                        <option value="Surat Keterangan Usaha">Surat Keterangan Usaha</option>
                                        <option value="Surat Keterangan Domisili">Surat Keterangan Domisili</option>
                                        <option value="Surat Keterangan Kehilangan">Surat Keterangan Kehilangan</option>
                                        <option value="Lain-lain">Lain-lain</option>
                                    </select>
                                    <small id="helpJSK" class="text-muted">Jenis Surat yang diajukan</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                
                                <div class="form-group">
                                    <label for="">Nama Lengkap</label>
                                    <input type="text" name="nama_lengkap" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                    <small id="helpId" class="text-muted">Nama Lengkap sesuaikan dengan KTP</small>
                                </div>
                                <div class="form-group">
                                    <label for="nik">Nomor Induk Kependudukan</label>
                                    <input type="number" name="nik" id="nik" class="form-control" placeholder="" aria-describedby="helpNIK">
                                    <small id="helpNIK" class="text-muted">NIK tercantum pada KTP atau KK</small>
                                </div>
                                <div class="form-group">
                                    <label for="tempat_lahir">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" placeholder="" aria-describedby="helptempat_lahir">
                                    <small id="helptempat_lahir" class="text-muted">Tempat lahir Anda</small>
                                </div>
                                <div class="form-group">
                                    <label for="status_kawin">Status Kawin</label>
                                    <select name="status_kawin" class="form-control" aria-describedby="helpJK">
                                        <option value="" selected disabled>Pilih Status Kawin</option>
                                        <option value="Kawin">Kawin</option>
                                        <option value="Belum Kawin">Belum Kawin</option>
                                        <option value="Cerai Hidup">Cerai Hidup</option>
                                        <option value="Cerai Mati">Cerai Mati</option>
                                    </select>
                                    <small id="helpJK" class="text-muted">Status Kawin</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nomor_hp">Nomor HP</label>
                                    <input type="number" name="nomor_hp" id="nomor_hp" class="form-control" placeholder="" aria-describedby="helpNomor">
                                    <small id="helpNomor" class="text-muted">Nomor HP</small>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" class="form-control" aria-describedby="helpJK">
                                        <option value="" selected disabled>Pilih Jenis Kelamin</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                    <small id="helpJK" class="text-muted">Jenis Kelamin</small>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" placeholder="" aria-describedby="helptanggal_lahir">
                                    <small id="helptanggal_lahir" class="text-muted">Tanggal lahir Anda</small>
                                </div>
                                <div class="form-group">
                                    <label for="agama">Agama</label>
                                    <select name="agama" class="form-control" aria-describedby="helpAgama">
                                        <option value="" selected disabled>Pilih Agama</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Protestan">Protestan</option>
                                    </select>
                                    <small id="helpAgama" class="text-muted">Agama yang Anda anut saat ini</small>
                                </div>
                            </div>
                         </div>
                         <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="rt">RT</label>
                                    <input type="text" name="rt" id="rt" class="form-control"
                                        placeholder="" aria-describedby="helpRT">
                                    <small id="helpRT" class="text-muted">Lingkungan RT Anda</small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="rw">RW</label>
                                    <input type="text" name="rw" id="rw" class="form-control"
                                        placeholder="" aria-describedby="helpRW">
                                    <small id="helpRW" class="text-muted">Lingkungan RW Anda</small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="dusun">Dusun</label>
                                    <select class="form-control" name="dusun" id="dusun"
                                        aria-describedby="helpDusun">
                                        <option>Pilih Dusun</option>
                                        <option value="Dusun Sidodadi">Dusun Sidodadi</option>
                                        <option value="Dusun Sidoagung">Dusun Sidoagung</option>
                                    </select>
                                    <small id="helpDusun" class="text-muted">Dusun Tempat tinggal Anda</small>
                                </div>
                            </div>
                        </div>
                         <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="pekerjaan">Pekerjaan</label>
                                    <input type="text" name="pekerjaan" id="pekerjaan" class="form-control" placeholder="" aria-describedby="helpPEKERJAAN">
                                    <small id="helpPEKERJAAN" class="text-muted">Pekerjaan Anda saat ini</small>
                                </div>  
                                <div class="form-group">
                                    <label for="keperluan_sk">Keperluan Surat Keterangan</label>
                                    <input type="text" name="keperluan_sk" id="keperluan_sk" class="form-control" placeholder="" aria-describedby="helpKeperluan">
                                    <small id="helpKeperluan" class="text-muted">Tuliskan maksud dan tujuan pengajuan surat</small>
                                </div>
                                <div class="form-group">
                                    <label for="isi_sk">Menerangkan Isi Surat</label>
                                    <input type="text" name="isi_sk" id="isi_sk" class="form-control" placeholder="" aria-describedby="helpIsi">
                                    <small id="helpIsi" class="text-muted">Isikan keterangan isi surat, Contoh : Menjalankan usaha konter hp</small>
                                </div>
                                <div class="form-group">
                                    <label for="upload_surat_pengantar">Upload Berkas Surat Pengantar RT RW</label>
                                    <input type="file" name="upload_surat_pengantar" id="upload_surat_pengantar" class="form-control" placeholder="" aria-describedby="helpUPRT">
                                    <small id="helpUPRT" class="text-muted">Berkas dapat berupa scan/foto dengan format berkas pdf, jpeg, jpg, atau png</small>
                                </div>
                                <div class="form-group">
                                    <label for="upload_scan_ktp">Upload Scan KTP/KK</label>
                                    <input type="file" name="upload_scan_ktp" id="upload_scan_ktp" class="form-control" placeholder="" aria-describedby="helpUPRT">
                                    <small id="helpUPRT" class="text-muted">Berkas dapat berupa scan/foto dengan format berkas pdf, jpeg, jpg, atau png</small>
                                </div>
                                <div class="form-group">
                                    <label for="upload_berkas_pendukung">Upload Berkas Pendukung (Jika diperlukan)</label>
                                    <input type="file" name="upload_berkas_pendukung" id="upload_berkas_pendukung" class="form-control" placeholder="" aria-describedby="helpUPRW">
                                    <small id="helpUPRW" class="text-muted">Berkas dapat berupa scan/foto dengan format berkas pdf, jpeg, jpg, atau png</small>
                                </div>
                            </div>
                         </div>
                         <div class="button-left">
                            <div class="clear" >
                                <button type="submit" id="" class="btn btn-primary" btn-lg btn-block">Submit</button>
                            </div>
                         </div>
                      </div>
                   </div>
                </form>
             </div>
               
              
             </div>
          </div>
          <div class="col-md-4 col-sm-4">
             <div class="bg-section wow animated  slideInRight">
                <div class="main-3-section">
                   <h5><b>Address</b></h5>
                   <p>Suite 20 Sooper Street West - 018 United States</p>
                </div>
                <div class="main-3-section">
                   <h5><b>Phone</b></h5>
                   <p>Local: 2800 256 508<br>
                      Mobile: 666 777 888
                   </p>
                </div>
                <div class="main-3-section">
                   <h5><b>Email:</b></h5>
                   <p>needhelp@sooper.com<br>
                      inquiry@sooper.com
                   </p>
                </div>
                <div class="main-3-section">
                   <ul>
                      <li class="twitter-icon"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                      <li class="facebook-icon"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                      <li class="youtube-icon"><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                      <li class="gmail-icon"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                   </ul>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
@endsection
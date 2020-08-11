@extends('layouts.main')
@section('title','Ubah Pengajuan Surat')
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Isikan Data Surat Pengajuan</h4>
                </div>
                <div class="card-body">
                    @if ($message = Session::get('message'))
                    <div class="alert alert-warning alert-block">
                      <button type="button" class="close" data-dismiss="alert">×</button> 
                        <strong>{{ $message }}</strong>
                    </div>
                  @endif
                    <form id="update-form" action="{{ route('letter.update',$letter->id) }}" method="post">
                        @csrf
                        @method('patch')
                        <div class="row alert alert-info">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nomor_surat" class="text-white">Nomor Surat</label>
                                    <input type="text" name="nomor_surat" id="" class="form-control" placeholder="" value="{{ $letter->nomor_surat  }}"
                                        aria-describedby="helpId">
                                    <small id="helpId" class="text-white">Nomor Surat diisi oleh operator</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="status_kawin">Yang Bertanda tangan</label>
                                    <select name="official_id" class="form-control" aria-describedby="helpOfficial">
                                        <option value="" selected disabled>Pilih Yang Bertanda Tangan</option>
                                        @forelse ($officials as $item)
                                        <option value="{{ $item->id }}" {{ $item->id == $letter->official_id ? 'selected' : '' }}>{{ $item->nama_pejabat }}</option>
                                        @empty
                                        <option value="" selected disabled>Tidak ada pejabat, silahkan tambahkan terlebih dahulu</option>
                                        @endforelse
                                    </select>
                                    <small id="helpOfficial" class="text-white">Orang yang bertanda tangan pada surat</small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nama Lengkap</label>
                                    <input type="text" name="nama_lengkap" class="form-control" placeholder="" value="{{ $letter->nama_lengkap }}"
                                        aria-describedby="helpId">
                                    <small id="helpId" class="text-muted">Nama Lengkap sesuaikan dengan KTP</small>
                                </div>
                                <div class="form-group">
                                    <label for="nik">Nomor Induk Keluarga</label>
                                    <input type="number" name="nik" id="nik" class="form-control" placeholder="" value="{{ $letter->nik }}"
                                        aria-describedby="helpNIK">
                                    <small id="helpNIK" class="text-muted">NIK tercantum pada KTP atau KK</small>
                                </div>
                                <div class="form-group">
                                    <label for="tempat_lahir">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" value="{{ $letter->tempat_lahir }}"
                                        placeholder="" aria-describedby="helptempat_lahir">
                                    <small id="helptempat_lahir" class="text-muted">Tempat lahir Anda</small>
                                </div>
                                <div class="form-group">
                                    <label for="status_kawin">Status Kawin</label>
                                    <select name="status_kawin" class="form-control" aria-describedby="helpJK">
                                        <option value="" selected disabled>Pilih Status Kawin</option>
                                        <option value="Kawin" {{ $letter->status_kawin == 'Kawin' ? 'selected' : '' }}>Kawin</option>
                                        <option value="Belum Kawin" {{ $letter->status_kawin == 'Belum Kawin' ? 'selected' : '' }}>Belum Kawin</option>
                                        <option value="Cerai Hidup" {{ $letter->status_kawin == 'Cerai Hidup' ? 'selected' : '' }}>Cerai Hidup</option>
                                        <option value="Cerai Mati" {{ $letter->status_kawin == 'Cerai Mati' ? 'selected' : '' }}>Cerai Mati</option>
                                    </select>
                                    <small id="helpJK" class="text-muted">Status Kawin</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nomor_hp">Nomor HP</label>
                                    <input type="number" name="nomor_hp" id="nomor_hp" class="form-control" value="{{ $letter->nomor_hp }}"
                                        placeholder="" aria-describedby="helpNomor">
                                    <small id="helpNomor" class="text-muted">Nomor HP</small>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" class="form-control" aria-describedby="helpJK">
                                        <option value="" selected disabled>Pilih Jenis Kelamin</option>
                                        <option value="Laki-laki" {{ $letter->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                        <option value="Perempuan" {{ $letter->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                    </select>
                                    <small id="helpJK" class="text-muted">Jenis Kelamin</small>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" value="{{ $letter->tanggal_lahir }}"
                                        placeholder="" aria-describedby="helptanggal_lahir">
                                    <small id="helptanggal_lahir" class="text-muted">Tanggal lahir Anda</small>
                                </div>
                                <div class="form-group">
                                    <label for="agama">Agama</label>
                                    <select name="agama" class="form-control" aria-describedby="helpAgama">
                                        <option value="" selected disabled>Pilih Agama</option>
                                        <option value="Islam" {{ $letter->agama == 'Islam' ? 'selected' : '' }}>Islam</option>
                                        <option value="Hindu" {{ $letter->agama == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                                        <option value="Budha" {{ $letter->agama == 'Budha' ? 'selected' : '' }}>Budha</option>
                                        <option value="Kristen" {{ $letter->agama == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                                        <option value="Katolik" {{ $letter->agama == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                                        <option value="Protestan" {{ $letter->agama == 'Protestan' ? 'selected' : '' }}>Protestan</option>
                                    </select>
                                    <small id="helpAgama" class="text-muted">Agama yang Anda anut saat ini</small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="rt">RT</label>
                                    <input type="text" name="rt" id="rt" class="form-control" value="{{ $letter->rw }}"
                                        placeholder="" aria-describedby="helpRT">
                                    <small id="helpRT" class="text-muted">Lingkungan RT Anda</small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="rw">RW</label>
                                    <input type="text" name="rw" id="rw" class="form-control" value="{{ $letter->rw }}"
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
                                        <option value="Dusun Sidodadi" {{ $letter->dusun == 'Dusun Sidodadi' ? 'selected' : '' }}>Dusun Sidodadi</option>
                                        <option value="Dusun Sidoagung" {{ $letter->dusun == 'Dusun Sidoagung' ? 'selected' : '' }}>Dusun Sidoagung</option>
                                    </select>
                                    <small id="helpDusun" class="text-muted">Dusun Tempat tinggal Anda</small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="pekerjaan">Pekerjaan</label>
                                    <input type="text" name="pekerjaan" id="pekerjaan" class="form-control" value="{{ $letter->pekerjaan }}"
                                        placeholder="" aria-describedby="helpPEKERJAAN">
                                    <small id="helpPEKERJAAN" class="text-muted">Pekerjaan Anda saat ini</small>
                                </div>
                                <div class="form-group">
                                    <label for="keperluan_sk">Keperluan Surat Pernyataan</label>
                                    <input type="text" name="keperluan_sk" id="keperluan_sk" class="form-control" value="{{ $letter->keperluan_sk }}"
                                        placeholder="" aria-describedby="helpKeperluan">
                                    <small id="helpKeperluan" class="text-muted">Tuliskan maksud dan tujuan pengajuan
                                        surat</small>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_sk">Jenis Surat Pernyataan</label>
                                    <input type="text" name="jenis_sk" id="jenis_sk" class="form-control" value="{{ $letter->jenis_sk }}"
                                        placeholder="" aria-describedby="helpKeperluan">
                                    <small id="helpSK" class="text-muted">Jenis Surat yang diajukan</small>
                                </div>
                                <div class="form-group">
                                    <label for="upload_pengantar_rt">Upload Berkas Surat Pengantar RT</label>
                                    <a href="{{ asset($letter->upload_pengantar_rt) }}" target="_blank" class="btn btn-primary"><i class="fas fa-download"></i> Unduh</a>
                                    
                                </div>
                                <div class="form-group">
                                    <label for="upload_pengantar_rw">Upload Berkas Surat Pengantar RW</label>
                                    <a href="{{ asset($letter->upload_pengantar_rw) }}" target="_blank" class="btn btn-primary"><i class="fas fa-download"></i> Unduh</a>
                                </div>
                                   <div class="form-check">
                                     <label class="form-check-label">
                                       <input type="checkbox" class="form-check-input" name="cetak" id="" value="cetak" checked>
                                       Cetak Surat
                                     </label>
                                   </div>
                            </div>
                        </div>
                        <div class="button-left">
                            <button type="submit" id="" class="btn btn-primary" btn-lg btn-block">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('custom')
<script>

</script>
@endsection
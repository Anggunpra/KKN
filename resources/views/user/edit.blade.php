@extends('layouts.main')
@section('title','Ubah Pengguna')
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Isikan Data Akun Pengguna</h4>
                </div>
                <div class="card-body">
                    <form id="update-form" action="{{ route('user.update',$user->id) }}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Lengkap <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="nama_lengkap" class="form-control"
                                    value="{{$user->nama_lengkap  }}" placeholder="Masukkan Nama Lengkap . . . .">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pekerjaan <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="pekerjaan" class="form-control"
                                    value="{{$user->pekerjaan  }}" placeholder="Masukkan Pekerjaan . . . .">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-12 col-md-7">
                                <input type="email" name="email" class="form-control" value="{{$user->email  }}"
                                    placeholder="Masukkan Email . . . .">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Peran Pengguna <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-12 col-md-7">
                                <select name="role" class="form-control" id="role">
                                    <option value="" disabled selected>Pilih Level Pengguna</option>
                                    <option value="Masyarakat" @if($user->hasRole('Masyarakat')) selected @endrole>Masyarakat</option>
                                    <option value="Perangkat Desa" @if($user->hasRole('Perangkat Desa')) selected @endrole>Perangkat Desa</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kata Sandi <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-12 col-md-7">
                                <input type="password" name="password" min="1" class="form-control"
                                    value="" placeholder="Masukkan Kata Sandi . . . .">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Konfirmasi Kata Sandi
                                <span class="text-danger">*</span></label>
                            <div class="col-sm-12 col-md-7">
                                <input type="password" name="password_confirmation" min="1" class="form-control"
                                    value=""
                                    placeholder="Masukkan Konfirmasi Kata Sandi . . . .">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nomor Telepon (WA)
                                <span class="text-danger">*</span></label>
                            <div class="col-sm-12 col-md-7">
                                <input type="number" name="nomor_telepon" class="form-control"
                                    value="{{$user->nomor_telepon  }}" placeholder="Masukkan Nomor Telpon . . . .">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nomor KTP
                                <span class="text-danger">*</span></label>
                            <div class="col-sm-12 col-md-7">
                                <input type="number" name="nomor_ktp" class="form-control"
                                    value="{{$user->nomor_ktp }}" placeholder="Masukkan Nomor KTP . . . .">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Alamat Tempat Tinggal
                                <span class="text-danger">*</span></label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="alamat_tinggal" class="form-control"
                                    value="{{$user->alamat_tinggal }}"
                                    placeholder="Masukkan Alamat Tempat Tinggal . . . .">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Lahir <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-12 col-md-7">
                                <input type="date" name="tanggal_lahir" min="1" class="form-control"
                                    value="{{$user->tanggal_lahir }}" placeholder="Masukkan Tanggal Lahir. . . .">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                            <div class="col-sm-12 col-md-7">
                                <button class="btn btn-primary">Simpan</button>
                            </div>
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
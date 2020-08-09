@extends('layouts.app')

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h4>Daftar Sekarang</h4>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
                <label for="nama_lengkap" class="control-label">{{ __('Nama Lengkap') }}</label>
                    <input id="nama_lengkap" type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap" value="{{ old('nama_lengkap') }}" required autocomplete="nama_lengkap" autofocus>
                    @error('nama_lengkap')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <div class="form-group">
                <label for="pekerjaan" class="control-label">{{ __('Pekerjaan') }}</label>
                    <input type="text" name="pekerjaan" class="form-control"  value="{{ old('pekerjaan') }}" placeholder="Masukkan Pekerjaan . . . .">
                    @error('pekerjaan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>

            <div class="form-group">
                <label for="email" class="control-label">{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>

            <div class="form-group">
                <label for="password" class="control-label">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>

            <div class="form-group">
                <label for="password-confirm" class="control-label">{{ __('Confirm Password') }}</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>

            <div class="form-group">
                <label for="nomor_telepon" class="control-label">{{ __('Nomor Telepon') }}</label>
                <input type="number" id="nomor_telepon" name="nomor_telepon" class="form-control @error('nomor_telepon') is-invalid @enderror" value="{{ old('nomor_telepon') }}" placeholder="Masukkan Nomor Telpon . . . .">
                    @error('nomor_telepon')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <div class="form-group">
                <label for="nomor_ktp" class="control-label">{{ __('Nomor KTP') }}</label>
                <input type="number" id="nomor_ktp" name="nomor_ktp" class="form-control @error('nomor_ktp') is-invalid @enderror" value="{{ old('nomor_ktp') }}" placeholder="Masukkan Nomor KTP . . . .">
                    @error('nomor_ktp')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <div class="form-group">
                <label for="alamat_tinggal" class="control-label">{{ __('Alamat Tempat Tinggal') }}</label>
                <input type="text" id="alamat_tinggal" name="alamat_tinggal" class="form-control @error('alamat_tinggal') is-invalid @enderror" value="{{ old('alamat_tinggal') }}" placeholder="Masukkan Alamat Tinggal . . . .">
                    @error('alamat_tinggal')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <div class="form-group">
                <label for="tanggal_lahir" class="control-label">{{ __('Tanggal Lahir') }}</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror" value="{{ old('tanggal_lahir') }}" placeholder="Masukkan Tanggal Lahir . . . .">
                    @error('tanggal_lahir')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="mt-5 text-muted text-center">
    Sudah Punya Akun ? <a href="{{{ route('login') }}}">Masuk Sekarang</a>
</div>
@endsection

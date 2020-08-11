@extends('layouts.main')
@section('title','Ubah Data Pejabat Desa')
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Isikan Data Pejabat</h4>
                </div>
                <div class="card-body">
                    <form id="update-form" action="{{ route('official.update',$official->id) }}" method="post">
                        @csrf
                        @method('patch')
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Pejabat<span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="nama_pejabat" class="form-control" placeholder="Masukkan Nama Pejabat . . . ." value="{{ $official->nama_pejabat }}">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jabatan<span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="jabatan_pejabat" class="form-control" placeholder="Masukkan Jabatan Pejabat . . . ." value="{{ $official->jabatan_pejabat }}">
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
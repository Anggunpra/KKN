@extends('layouts.main')
@section('title','Tambah Kategori')
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Isikan Data Kategori Informasi</h4>
                </div>
                <div class="card-body">
                    <form id="create-form" action="{{ route('category.store') }}" method="post">
                        @csrf
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Kategori <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="nama_kategori" class="form-control"
                                    value="{{ old('nama_kategori') }}" placeholder="Masukkan Nama Kategori . . . .">
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
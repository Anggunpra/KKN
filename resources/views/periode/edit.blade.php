@extends('layouts.main')
@section('title','Edit Periode')
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Isikan Data Periode</h4>
                </div>
                <div class="card-body">
                    <form id="update-form" action="{{ route('periode.update',$periode->id) }}" method="post">
                        @csrf
                        @method('patch')
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Periode<span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="nama_periode" class="form-control"
                                    value="{{ $periode->nama_periode }}" placeholder="Masukkan Nama Periode . . . .">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Mulai<span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-12 col-md-7">
                                <input type="date" name="open_date" class="form-control" value="{{ \Carbon\Carbon::parse($periode->open_date)->format('Y-m-d') }}" placeholder="Masukkan Tanggal Mulai . . . .">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Berakhir<span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-12 col-md-7">
                                <input type="date" name="close_date" class="form-control" value="{{ \Carbon\Carbon::parse($periode->close_date)->format('Y-m-d') }}" placeholder="Masukkan Tanggal Mulai . . . .">
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
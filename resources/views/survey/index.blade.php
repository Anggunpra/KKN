@extends('layouts.main')
@section('title','Hasil Survey')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    <a href="{{ route('survey.create') }}" class="btn btn-primary">Tambah</a>
                </h4>
                <div class="card-header-action">
                    
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    {!! $dataTable->table() !!}
                </div>
            </div>
        </div>
    </div>
</div>    
@endsection
@section('custom')
<script src="{{ asset('vendor/datatables/buttons.server-side.js')}}"></script>
{!! $dataTable->scripts() !!}
@endsection
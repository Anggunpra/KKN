@extends('layouts.main')
@section('title','Survey Kesehatan')
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Isikan Data Survey</h4>
                </div>
                <div class="card-body">
                    <form id="create-form" action="{{ route('survey.store') }}" method="post">
                        @csrf
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3 text-capitalize">Periode <span
                                class="text-danger">*</span></label> 
                            <div class="col-sm-12 col-md-7">
                                <select name="periode" class="form-control" required>
                                    <option value="" selected disabled>Pilih Periode</option>
                                    @foreach ($periodes as $p)
                                        <option value="{{ $p->id }}">{{ $p->nama_periode }}</option> 
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        @foreach ($attributes as $item)
                        @php
                            $attributeNames = explode('_',$item->nama_atribut);
                            $attributeName = '';
                            foreach ($attributeNames as $attribute) {
                                $attributeName .= $attribute . ' ';
                            }
                        @endphp
                        
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3 text-capitalize">{{ $attributeName }} @if($item->wajib == 1)<span
                                    class="text-danger">*</span>@endif</label>
                            <div class="col-sm-12 col-md-7">
                                @if($item->tipe_input == 'Isian Text')
                                <input type="text" name="{{ $item->nama_atribut }}" class="form-control"
                                    value="{{ old($item->nama_atribut) }}" placeholder="Masukkan {{ $attributeName }} . . . ."  @if($item->wajib == 1) required @endif>
                                @elseif($item->tipe_input == 'Angka')
                                <input type="numeric" name="{{ $item->nama_atribut }}" min="1" class="form-control"
                                    value="{{ old($item->nama_atribut) }}" placeholder="Masukkan {{ $attributeName }} . . . ." @if($item->wajib == 1) required @endif>
                                @else
                                <select name="{{ $item->nama_atribut }}" class="form-control" @if($item->wajib == 1) required @endif>
                                    <option value="" selected disabled>Pilih Nilai</option>
                                    @foreach (explode(',',$item->nilai) as $val)
                                       <option value="{{ $val }}">{{ $val }}</option> 
                                    @endforeach
                                </select>
                                @endif
                            </div>
                        </div>
                        @endforeach
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
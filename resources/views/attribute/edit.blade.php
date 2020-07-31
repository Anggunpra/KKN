@extends('layouts.main')
@section('title','Ubah Atribut Pengecekan Kesehatan')
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Isikan Data Atribut</h4>
                </div>
                <div class="card-body">
                    <form id="update-form" action="{{ route('atribute.update',$attribute->id) }}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Atribut <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="nama_atribut" class="form-control"
                                    value="{{ $attribute->nama_atribut }}" placeholder="Masukkan Nama Atribut, tanpa menggunakan spasi">
                            </div>
                        </div>
                        {{-- <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Relasi Atribut</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="relasi_atribut" class="form-control"
                                    value="{{ $attribute->relasi_atribut }}" placeholder="Masukkan Relasi Atribut jika inputan bergantung dengan jawaban form lain, tanpa menggunakan spasi">
                            </div>
                        </div> --}}
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tipe Input <span
                                class="text-danger">*</span></label>
                            <div class="col-sm-12 col-md-7">
                                <select name="tipe_input" id="tipe_input" class="form-control">
                                    <option value="" disabled selected>Pilihan Tipe Inputan</option>
                                    <option value="Isian Text" {{ $attribute->tipe_input == 'Isian Text' ? 'selected' : '' }}>Input Berupa Text</option>
                                    <option value="Angka" {{ $attribute->tipe_input == 'Angka' ? 'selected' : '' }}>Input Berupa Angka</option>
                                    <option value="Dropdown" {{ $attribute->tipe_input == 'Dropdown' ? 'selected' : '' }}>Pilihan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Apakah Form Wajib? <span
                                class="text-danger">*</span></label>
                            <div class="col-sm-12 col-md-7">
                                <select name="wajib" class="form-control">
                                    <option value="" disabled selected>Pilih jawaban</option>
                                    <option value="1" {{ $attribute->wajib == 1 ? 'selected' : '' }}>Ya</option>
                                    <option value="0" {{ $attribute->wajib == 0 ? 'selected' : '' }}>Tidak</option>
                                </select>
                            </div>
                        </div>
                        <div id="value" class="form-group row mb-4 d-none">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pilihan Nilai Form</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="nilai" class="form-control"
                                    value="{{ $attribute->nilai }}" placeholder="Pisahkan Nilai dengan koma jika pilihan lebih dari satu">
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
$(function () {
  if($('select#tipe_input').children('option:selected').val() == 'Dropdown'){
    $('#value').removeClass('d-none');
  }
  $('select#tipe_input').on('change',function(e){
      var val = $(this).children('option:selected').val();
      if(val == 'Dropdown'){
        $('#value').removeClass('d-none');
    }else{
        $('#value').addClass('d-none');
      }
  })  
});
</script>
@endsection
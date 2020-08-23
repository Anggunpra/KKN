@extends('layouts.main')
@section('title','Tambah Informasi')
@section('content')
<div class="section-body">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <form id="update-form" action="{{ route('information.update',$information->id) }}" method="post">
              @csrf
              @method('PATCH')
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul <span class="text-danger">*</span> </label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" name="judul" class="form-control" value="{{ $information->judul }}" placeholder="Masukkan Judul Berita . . . .">
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Gambar</label>
                <div class="col-sm-12 col-md-7">
                    <input type="hidden" name="old_gambar" value="{{ asset($information->gambar) }}">
                    <input type="file" name="gambar" class="form-control" value="">
                    <img src="{{ asset($information->gambar) }}" class="img-fluid" width="100" alt="">
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kategori Informasi<span class="text-danger">*</span></label>
                <div class="col-sm-12 col-md-7">
                  <select name="kategori" class="form-control">
                      <option value="" selected disabled>Pilih Kategori</option>
                      @forelse($categories as $item)
                          <option value="{{ $item->id }}" {{ $item->id == $information->category_id ? 'selected' : '' }}>{{ $item->nama_kategori }}</option>
                      @empty
                          <option value="" selected disabled>Tidak ada kategori, silahkan tambahkan terlebih dahulu</option>
                      @endforelse
                  </select>
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi<span class="text-danger">*</span></label>
                <div class="col-sm-12 col-md-7">
                    <input type="hidden" name="deskripsi" value="{{ $information->deskripsi }}">
                    <textarea name="DSC" id="ck_editor" cols="30" rows="10">{{ $information->deskripsi }}</textarea>
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
<script src="{{ asset('assets/plugin/ckeditor/ckeditor.js') }}"></script>
<script>
    var editor = CKEDITOR.replace('ck_editor',{
      filebrowserUploadUrl: "{{route('information.upload', ['_token' => csrf_token() ])}}",
      filebrowserUploadMethod: 'form'
    });
    editor.on('change', function (e) {
        $('input[name=deskripsi]').val(e.editor.getData());
    });
</script>
@endsection
<div class="button-group">
    <div class="btn-group">
        <button type="button" title="Ubah Data Informasi" onclick="window.location.href='{{ route('information.edit', $row->id) }}'" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"
            aria-hidden="true"></i></button>
        <button type="button" title="Hapus Data Informasi"onClick="deleteData('{{ route('information.delete',$row->id) }}','{{ $row->judul }}')" class="btn btn-danger btn-sm hapus"><i class="fas fa-trash"
            aria-hidden="true"></i></button>
    </div>
</div>
<div class="button-group">
    <div class="btn-group">
        <button type="button" title="Ubah Data Pejabat" onclick="window.location.href='{{ route('official.edit', $row->id) }}'" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"
            aria-hidden="true"></i></button>
        <button type="button" title="Hapus Data Pejabat"onClick="deleteData('{{ route('official.delete',$row->id) }}','{{ $row->nama_pejabat }}')" class="btn btn-danger btn-sm hapus"><i class="fas fa-trash"
            aria-hidden="true"></i></button>
    </div>
</div>
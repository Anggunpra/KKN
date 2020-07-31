<div class="button-group">
    <div class="btn-group">
        <button type="button" title="Ubah Data Periode" onclick="window.location.href='{{ route('periode.edit', $row->id) }}'" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"
            aria-hidden="true"></i></button>
        <button type="button" title="Hapus Data Periode"onClick="deleteData('{{ route('periode.delete',$row->id) }}','{{ $row->nama_periode }}')" class="btn btn-danger btn-sm hapus"><i class="fas fa-trash"
            aria-hidden="true"></i></button>
    </div>
</div>
<div class="button-group">
    <div class="btn-group">
        <button type="button" title="Ubah Data Atribut" onclick="window.location.href='{{ route('atribute.edit', $row->id) }}'" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"
            aria-hidden="true"></i></button>
        <button type="button" title="Hapus Data Atribut"onClick="deleteData('{{ route('atribute.delete',$row->id) }}','{{ $row->nama_atribut }}')" class="btn btn-danger btn-sm hapus"><i class="fas fa-trash"
            aria-hidden="true"></i></button>
    </div>
</div>
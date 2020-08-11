<div class="button-group">
    <div class="btn-group">
        <button type="button" title="Ubah Data Surat" onclick="window.location.href='{{ route('letter.edit', $row->id) }}'" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"
            aria-hidden="true"></i></button>
        <button type="button" title="Cetak Surat" onclick="window.location.href='{{ route('letter.print', $row->id) }}'" class="btn btn-info btn-sm"><i class="fas fa-print"
            aria-hidden="true"></i></button>
        <button type="button" title="Hapus Data Surat"onClick="deleteData('{{ route('letter.delete',$row->id) }}','{{ $row->judul }}')" class="btn btn-danger btn-sm hapus"><i class="fas fa-trash"
            aria-hidden="true"></i></button>
    </div>
</div>
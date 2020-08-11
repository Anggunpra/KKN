<?php

namespace App\DataTables;

use App\LetterSubmission;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class LetterSubmissionDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addIndexColumn()
            ->editColumn('upload_pengantar_rt', function($row){
                $btn = '<a href="'.asset($row->upload_pengantar_rt).'" class="btn btn-sm btn-primary" target="_blank"> Unduh</a>';
                return $btn;
            })
            ->editColumn('upload_pengantar_rw', function($row){
                $btn = '<a href="'.asset($row->upload_pengantar_rw).'" class="btn btn-sm btn-primary" target="_blank"> Unduh</a>';
                return $btn;
            })
            ->addColumn('action', function($row){
                return view('letter.action',compact('row'))->render();
            })
            ->rawColumns(['action','upload_pengantar_rt','upload_pengantar_rw']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\LetterSubmission $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(LetterSubmission $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('lettersubmission-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1)
                    ->parameters([
                        'responsive' => true,
                        'columnDefs' => [
                            [
                                'responsivePriority' => 1,
                                'targets' => -1,
                            ],

                        ]
                    ])
                    ->buttons(
                        Button::make('export'),
                        Button::make('print'),
                        Button::make('reload')
                    );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('DT_RowIndex')->searchable(false)->title('#'),
            Column::make('nama_lengkap'),
            Column::make('nomor_surat'),
            Column::make('nik'),
            Column::make('tempat_lahir'),
            Column::make('tanggal_lahir'),
            Column::make('pekerjaan'),
            Column::make('rt'),
            Column::make('rw'),
            Column::make('dusun'),
            Column::make('keperluan_sk'),
            Column::make('nomor_hp'),
            Column::make('upload_pengantar_rt'),
            Column::make('upload_pengantar_rw'),
            Column::make('jenis_sk'),
            Column::make('agama'),
            Column::make('jenis_kelamin'),
            Column::make('status_kawin'),
            Column::make('created_at'),
            Column::make('action'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'LetterSubmission_' . date('YmdHis');
    }
}

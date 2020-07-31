<?php

namespace App\DataTables;

use App\Attribute;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class AtributeDataTable extends DataTable
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
            ->addColumn('action', function($row){
                return view('attribute.action',compact('row'))->render();
            })
            ->rawColumns(['action']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Atribute $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Attribute $model)
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
                    ->setTableId('atribute-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1)
                    ->parameters([
                        'responsive' => true,
                        'columnDefs' => [
                            [
                                'responsivePriority' => 1,
                                'targets' => 0,
                            ],
                            [
                                'responsivePriority' => 2,
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
            Column::make('DT_RowIndex')->title('#')->searchable(false),
            Column::make('nama_atribut'),
            Column::make('relasi_atribut'),
            Column::make('tipe_input'),
            Column::make('wajib'),
            Column::make('nilai'),
            Column::make('updated_at'),
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->addClass('text-center'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Atribute_' . date('YmdHis');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\PeriodeDataTable;
use Validator;
class PeriodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PeriodeDataTable $datatable)
    {
        return $datatable->render('periode.index');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('periode.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $dataValidator = [
            'nama_periode' => 'required|string',
            'open_date' => 'required',
            'close_date' => 'required',
        ];
        // return response()->json(['status' => false, 'message' => $request->open_date], 400);
        $validator = Validator::make($input,$dataValidator);
        if($validator->fails()){
            return response()->json(['status' => false, 'message' => $validator->errors()->all()], 400);
        }
        $periode = \App\Periode::firstOrCreate([
            'nama_periode' => $request->nama_periode,
            'open_date' => $request->open_date,
            'close_date' => $request->close_date,
        ]);
        return response()->json(['status' => true, 'message' => 'Periode Berhasil ditambahkan'], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $periode = \App\Periode::findOrFail($id);
        return view('periode.edit',compact('periode'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $periode = \App\Periode::findOrFail($id);
        $input = $request->all();
        $dataValidator = [
            'nama_periode' => 'required|string',
            'open_date' => 'required',
            'close_date' => 'required',
        ];
        // return response()->json(['status' => false, 'message' => $request->open_date], 400);
        $validator = Validator::make($input,$dataValidator);
        if($validator->fails()){
            return response()->json(['status' => false, 'message' => $validator->errors()->all()], 400);
        }
        $periode->update([
            'nama_periode' => $request->nama_periode,
            'open_date' => $request->open_date,
            'close_date' => $request->close_date,
        ]);
        return response()->json(['status' => true, 'message' => 'Periode Berhasil diperbarui'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\OfficialDataTable;
use Validator;
class OfficialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(OfficialDataTable $datatable)
    {
        return $datatable->render('official.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('official.create');
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
            'nama_pejabat' => 'required|string',
            'jabatan_pejabat' => 'required|string',
        ];
        $validator = Validator::make($input,$dataValidator);
        if($validator->fails()){
            return response()->json(['status' => false, 'message' => $validator->errors()->all()], 400);
        }
        $official = \App\Official::create([
            'nama_pejabat' => $request->nama_pejabat,
            'jabatan_pejabat' => $request->jabatan_pejabat,
        ]);
        return response()->json(['status' => true, 'message' => 'Berhasil menambahkan pejabat'], 200);
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
        $official = \App\Official::findOrFail($id);
        return view('official.edit',compact('official'));
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
        $official = \App\Official::findOrFail($id);
        $input = $request->all();
        $dataValidator = [
            'nama_pejabat' => 'required|string',
            'jabatan_pejabat' => 'required|string',
        ];
        $validator = Validator::make($input,$dataValidator);
        if($validator->fails()){
            return response()->json(['status' => false, 'message' => $validator->errors()->all()], 400);
        }
        $official->update([
            'nama_pejabat' => $request->nama_pejabat,
            'jabatan_pejabat' => $request->jabatan_pejabat,
        ]);
        return response()->json(['status' => true, 'message' => 'Berhasil memperbarui pejabat'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $official = \App\Official::findOrFail($id);
        $official->delete();
        return response()->json(['status' => true, 'message' => 'Berhasil menghapus pejabat'], 200);
    }
}

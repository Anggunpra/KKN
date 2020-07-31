<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\AtributeDataTable;
use Validator;
class AtributeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AtributeDataTable $datatable)
    {
        return $datatable->render('attribute.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('attribute.create');
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
            'nama_atribut' => 'required|string|alpha_dash|unique:attributes,nama_atribut',
            'relasi_atribut' => 'nullable|string|alpha_dash',
            'tipe_input' => 'required|in:Isian Text,Angka,Dropdown',
            'wajib' => 'required|in:0,1',
            'nilai' => 'required_if:tipe_input,==,Dropdown',
        ];
        $validator = Validator::make($input,$dataValidator);
        if($validator->fails()){
            return response()->json(['status' => false , 'message' => $validator->errors()->all()], 400);
        }
        $attribute = \App\Attribute::firstOrCreate([
            'nama_atribut' => $request->nama_atribut,
            'relasi_atribut' => $request->relasi_atribut,
            'tipe_input' => $request->tipe_input,
            'wajib' => $request->wajib,
            'nilai' => $request->nilai,
        ]);
        return response()->json(['status' => true, 'message' => 'Berhasil Menambahkan Atribut'], 200);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $attribute = \App\Attribute::findOrFail($id);
        return view('attribute.edit',compact('attribute'));
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
        $attribute = \App\Attribute::findOrFail($id);
        $input = $request->all();
        $dataValidator = [
            'relasi_atribut' => 'nullable|string|alpha_dash',
            'tipe_input' => 'required|in:Isian Text,Angka,Dropdown',
            'wajib' => 'required|in:0,1',
            'nilai' => 'required_if:tipe_input,==,Dropdown',
        ];
        if($attribute->nama_atribut != $request->nama_atribut){
            $dataValidator['nama_atribut'] = 'required|string|alpha_dash|unique:attributes,nama_atribut';
        }
        $validator = Validator::make($input,$dataValidator);
        if($validator->fails()){
            return response()->json(['status' => false , 'message' => $validator->errors()->all()], 400);
        }
        $attribute->update([
            'nama_atribut' => $request->nama_atribut,
            'relasi_atribut' => $request->relasi_atribut,
            'tipe_input' => $request->tipe_input,
            'wajib' => $request->wajib,
            'nilai' => $request->nilai,
        ]);
        return response()->json(['status' => true, 'message' => 'Berhasil Memperbarui Atribut'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $attribute = \App\Attribute::findOrFail($id);
        $attribute->delete();
        return response()->json(['status' => true, 'message' => 'Berhasil Menghapus Attribut'], 200);
    }
}

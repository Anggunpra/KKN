<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\CategoryDataTable;
use Validator;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CategoryDataTable $datatable)
    {
        return $datatable->render('category.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
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
        $validator = Validator::make($input,['nama_kategori'=>'required|string']);
        if($validator->fails()){
            return response()->json(['status' => false , 'message' => $validator->errors()->all()], 400);
        }
        $category = \App\Category::firstOrCreate([
            'nama_kategori' => $request->nama_kategori,
        ]);
        return response()->json(['status' => true, 'message' => 'Berhasil Menambahkan Kategori'], 200);
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
        $category = \App\Category::findOrFail($id);
        return view('category.edit',compact('category'));
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
        $category = \App\Category::findOrFail($id);
        $input = $request->all();
        $validator = Validator::make($input,['nama_kategori'=>'required|string']);
        if($validator->fails()){
            return response()->json(['status' => false , 'message' => $validator->errors()->all()], 400);
        }
        $category->update([
            'nama_kategori' => $request->nama_kategori,
        ]);
        return response()->json(['status' => true, 'message' => 'Berhasil Memperbarui Kategori'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = \App\Category::findOrFail($id);
        $category->delete();
        return response()->json(['status' => true, 'message' => 'Berhasil Menghapus Kategori'], 200);
    }
}

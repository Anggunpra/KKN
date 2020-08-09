<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\DataTables\InformationDataTable;
use Validator;
class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(InformationDataTable $datatable)
    {
        return $datatable->render('information.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = \App\Category::all();
        return view('information.create',compact('categories'));
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
            'judul' => 'required|string|min:5',
            'gambar' => 'nullable|mimes:jpeg,jpg,png|max:5024',
            'deskripsi' => 'required',
            'kategori' => 'required|exists:categories,id',
        ];
        $validator = Validator::make($input,$dataValidator);
        if($validator->fails()){
            return response()->json(['status' => false , 'message' => $validator->errors()->all() ], 400);
        }
        $slug = Str::slug('-',$request->title);
        if($request->hasFile('gambar')) {
            $uploadBerkas = $request->file('gambar');
            $destinationPath = 'uploads/informasi/image/'; // upload path
            $fileName = date('YmdHis'). '-' . Str::random(25) . "_image." . $uploadBerkas->getClientOriginalExtension();
            $uploadBerkas->move($destinationPath, $fileName);
            $fileName = $destinationPath.$fileName;
        }
        $dataInformation = [
            'judul' => $request->judul,
            'slug' => $slug,
            'deskripsi' => $request->deskripsi,
            'category_id' => $request->kategori,
        ];
        if($request->hasFile('gambar')){
            $dataInformation['gambar'] = $fileName;
        }
        $information = \App\Information::create($dataInformation);
        return response()->json(['status' => true , 'message' => 'Berhasil menambahkan informasi baru' ]);
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
        $information = \App\Information::findOrFail($id);
        $categories = \App\Category::all();
        return view('information.edit',compact('categories','information'));
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
        $information = \App\Information::findOrFail($id);
        $input = $request->all();
        $dataValidator = [
            'judul' => 'required|string|min:5',
            'gambar' => 'nullable|mimes:jpeg,jpg,png|max:5024',
            'deskripsi' => 'required',
            'kategori' => 'required|exists:categories,id',
        ];
        $validator = Validator::make($input,$dataValidator);
        if($validator->fails()){
            return response()->json(['status' => false , 'message' => $validator->errors()->all() ], 400);
        }
        if($request->hasFile('gambar')) {
            $uploadBerkas = $request->file('gambar');
            $destinationPath = 'uploads/informasi/image/'; // upload path
            $fileName = date('YmdHis'). '-' . Str::random(25) . "_image." . $uploadBerkas->getClientOriginalExtension();
            $uploadBerkas->move($destinationPath, $fileName);
            $fileName = $destinationPath.$fileName;
        }
        $dataUpdate = [
            'judul' => $request->judul,
            'gambar' => $request->hasFile('gambar') ? $fileName : $information->gambar,
            'deskripsi' => $request->deskripsi,
            'category_id' => $request->kategori,
        ];
        $information->update($dataUpdate);
        return response()->json(['status' => true , 'message' => 'Berhasil memperbarui informasi']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $information = \App\Information::findOrFail($id);
        $information->delete();
        return response()->json(['status' => true , 'message' => 'Berhasil menghapus infromasi']);
    }
}

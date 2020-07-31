<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\UserDataTable;
use Validator;
class UserController extends Controller
{
    public function index(UserDataTable $datatable)
    {
        return $datatable->render('user.index');
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $dataValidator = [
            'nama_lengkap' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:5|confirmed',
            'pekerjaan' => 'required|string',
            'nomor_telepon' => 'required|numeric|digits_between:10,13|unique:users,nomor_telpon',
            'nomor_ktp' => 'required|numeric|min:16|unique:users,nomor_ktp',
            'alamat_tinggal' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'role' => 'required|exists:roles,name',
        ];
        $validator = Validator::make($input,$dataValidator);
        if($validator->fails()){
            return response()->json(['status' => false,'message' => $validator->errors()->all()], 400);
        }
        $user = \App\User::firstOrCreate([
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'pekerjaan' => $request->pekerjaan,
            'nomor_telepon' => $request->nomor_telepon,
            'nomor_ktp' => $request->nomor_ktp,
            'alamat_tinggal' => $request->alamat_tinggal,
            'tanggal_lahir' => $request->tanggal_lahir,
        ]);
        $user->syncRoles([$request->role]);
        return response()->json(['status' => true,'message' => 'Berhasil menambahkan data'], 200);
    }

    public function edit($id)
    {
        $user = \App\User::findOrFail($id);
        return view('user.edit',compact('user'));
    }
    public function update(Request $request,$id)
    {
        $user = \App\User::findOrFail($id);
        $input = $request->all();
        $dataValidator = [
            'nama_lengkap' => 'required|string',
            'pekerjaan' => 'required|string',
            'alamat_tinggal' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'role' => 'required|exists:roles,name',
        ];
        if($user->nomor_telepon != $request->nomor_telepon){
            $dataValidator['nomor_telepon'] = 'required|numeric|digits_between:10,13|unique:users,nomor_telepon';         
        }
        if($user->email != $request->email){
            $dataValidator['email'] = 'required|email|unique:users,email';
        }
        if($user->nomor_ktp != $request->nomor_ktp){
            $dataValidator['nomor_ktp'] = 'required|numeric|min:16|unique:users,nomor_ktp';
        }
        if($request->password != ''){
            $dataValidator['password'] = 'required|min:5|confirmed';
        }

        $validator = Validator::make($input,$dataValidator);
        if($validator->fails()){
            return response()->json(['status' => false,'message' => $validator->errors()->all()], 400);
        }
        $user->update([
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'pekerjaan' => $request->pekerjaan,
            'nomor_telepon' => $request->nomor_telepon,
            'nomor_ktp' => $request->nomor_ktp,
            'alamat_tinggal' => $request->alamat_tinggal,
            'tanggal_lahir' => $request->tanggal_lahir,
        ]);
        $user->syncRoles([$request->role]);
        return response()->json(['status' => true,'message' => 'Berhasil memperbarui data'], 200);
    }

    public function destroy($id)
    {
        $user = \App\User::findOrFail($id);
        $auth = auth()->user();
        if($user->id == $auth->id){
            return response()->json(['status' => false,'message' => 'Tidak dapat menghapus pengguna'], 400);
        }
        $user->delete();
        return response()->json(['status' => true,'message' => 'Berhasil menghapus data'], 200);
    }
}

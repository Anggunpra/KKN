<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $validator = Validator::make($data, [
            'nama_lengkap' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:5|confirmed',
            'pekerjaan' => 'required|string',
            'nomor_telepon' => 'required|numeric|digits_between:10,13|unique:users,nomor_telepon',
            'nomor_ktp' => 'required|numeric|min:16|unique:users,nomor_ktp',
            'alamat_tinggal' => 'required|string',
            'tanggal_lahir' => 'required|date',
        ]);
        return $validator;
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'nama_lengkap' => $data['nama_lengkap'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'pekerjaan' => $data['pekerjaan'],
            'nomor_telepon' => $data['nomor_telepon'],
            'nomor_ktp' => $data['nomor_ktp'],
            'alamat_tinggal' => $data['alamat_tinggal'],
            'tanggal_lahir' => $data['tanggal_lahir'],
        ]);
        $user->assignRole('Masyarakat');
        return $user;
    }
}

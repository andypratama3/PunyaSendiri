<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){

        return view('login');
    }
    public function register(){

        return view('register');
    }
    public function register_user(Request $request){
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random('60'),

        ]);
        return \redirect('Login')->with('register','Registrasi Berhasil Silahkan Login');
    }
    public function login_true(Request $request){
        if(Auth::attempt($request->only('email','password'))){
        return redirect('/Dashboard')->with('success','Anda Telah Berhasil Login');
        }
        return \redirect('login')->with('wrong','Email Atau Password Salah');
    }
    public function logout(){
        Auth::logout();
        return \redirect('Login')->with('logout','Anda Telah LogOut');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

        $user = User::all();
        return view('user',compact('user'));
    }
    public function show($id){
        $user = User::find($id);
        return view('editUser',compact('user'));
    }
    public function edit(Request $request,$id){
        $user = User::find($id);
        $user->update($request->all());
        return \redirect('/Dashboard/User')->with('success-update','Data Berhasil Di Update');
    }
    public function delete($id){
        $user = User::find($id);
        $user->delete();
        return \redirect('/Dashboard/User');
    }
    //->with('success','Data barhasil Di Hapus')
}

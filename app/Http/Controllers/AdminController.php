<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login(){

    return view('login');
    }
    public function index(Request $request){

        return view('Dashboard');
    }
    public function AdminSettings(Request $request){


        return view('setting');

    }
}

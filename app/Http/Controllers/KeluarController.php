<?php

namespace App\Http\Controllers;

use App\Models\Keluar;
use App\Models\Status;
use Illuminate\Http\Request;

class KeluarController extends Controller
{
    public function index()
    {
    $status = Status::with('keluar')->get();
    $keluar = Keluar::with('status')->get();
    return view('keluar', compact('keluar','status'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function index(){
        $pesanan = Pesanan::all();
        return view('Pesanan',compact('pesanan'));
    }
    public function show($id){
        $pesanan = Pesanan::find($id);
        return view('pesananedit', compact('pesanan'));
    }
    public function edit(Request $request, $id){
        $pesanan = Pesanan::find($id);
        $pesanan->update($request->all());
        return \redirect('/Dashboard/Pesanan')->with('success-insert','Data Berhasil Di Tambah');
    }
    public function delete($id){
        $pesanan = Pesanan::find($id);
        $pesanan->delete();
        return \redirect('/Dashboard/Pesanan')->with('success-delete','Data Berhasil Di Hapus');
    }
}

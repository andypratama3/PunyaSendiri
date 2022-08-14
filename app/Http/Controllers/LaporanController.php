<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index(){

        $laporan = Laporan::all();
        return view('laporan', compact('laporan'));
    }
    public function insert(Request $request){
        $laporan = Laporan::create($request->all());

        if($request->hasFile('Laporan')){
            $request->file('Laporan')->move('LaporanFile/', $request->file('Laporan')->getClientOriginalName());
            $laporan->Laporan = $request->file('Laporan')->getClientOriginalName();
            $laporan->save();
         }
         return redirect('/Dashboard/Laporan')->with('success-insert','Data Berhasil Ditambah');
    }
    public function delete($id){

        $laporan = Laporan::find($id);
        $laporan->delete();
        return redirect('/Dashboard/Laporan')->with('success-delete','Data Berhasil Di hapus');
    }

}

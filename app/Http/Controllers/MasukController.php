<?php

namespace App\Http\Controllers;


use App\Models\Masuk;
use App\Models\Status;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreMasukRequest;
use App\Http\Requests\UpdateMasukRequest;
use Symfony\Component\HttpFoundation\Request;

class MasukController extends Controller
{

    public function index(Request $request)
    {
        // $status = status::with('masuk')->get();
        // $masuk = masuk::with('status')->get();
        $masuk = masuk::all();
        return view('barang', compact('masuk'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $masuk = Masuk::create($request->all());
        return redirect('/Dashboard/Barang')->with('success-insert','Data Berhasil Di tambah');
        // alert::success('Selamat Data Berhasil Di Tambahkan');
        return view('barang',compact('masuk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMasukRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMasukRequest $request)
    {
        //
    }
    public function show($id)
    {
        $masuk = Masuk::find($id);
        return view('edit', compact('masuk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Masuk  $masuk
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $masuk = Masuk::find($id);
        $masuk->update($request->all());
        // alert::success('Selamat Data Berhasil Di Edit');
        return redirect('/Dashboard/Barang')->with('success-update','Data Berhasil Di Update');
        return view('/Dashboard/Barang');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMasukRequest  $request
     * @param  \App\Models\Masuk  $masuk
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMasukRequest $request, Masuk $masuk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Masuk  $masuk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Masuk $masuk,$id)
    {
        $masuk = Masuk::find($id);
        $masuk->delete();
        return redirect('/Dashboard/Barang')->with('success-delete','Data Berhasil Di hapus');
    }
}


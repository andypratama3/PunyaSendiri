@extends('layouts.nav')
@section('title','Barang')
@section('content')
@foreach ($masuk as $item)

@endforeach
<div class="content-wrapper">

<div class="container-xxl flex-grow-1 container-p-y">
    <form action="/Dashboard/Barang/edit{{$masuk->id}}" method="POST">
        @csrf
    <div class="card mb-4">
      <h5 class="card-header" style="text-align: center">Edit Data</h5>
      <div class="card-body">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Nama Barang</label>
          <input type="text" class="form-control" name="Nama_brg" placeholder="" value="{{$masuk->Nama_brg}}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Kode Barang</label>
            <input type="text" class="form-control" name="Kode_brg" id="exampleFormControlInput1" placeholder="" value="{{$masuk->Kode_brg}}">
          </div>

        <div class="mb-3">
          <label for="exampleFormControlSelect1" class="form-label">Status</label>
          <select id="defaultSelect" class="form-select" name="status_id">
            <option value="{{$masuk->status_id}}" style="text-align: center;">{{($masuk->status_id == 1)? 'Complated' : 'Pending'}}</option>
            <option value="1" class="badge bg-label-primary me-1">Complated</option>
            <option value="0" class="badge bg-label-danger me-1">Pending</option>
            <span class="badge bg-label-primary me-1"></span>
          </select>
        </div>
        <button class="btn btn-primary" type="submit">Save changes</button>
        </div>
    </div>
    </form>
  </div>
</div>

@endsection

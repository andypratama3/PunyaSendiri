@extends('layouts.nav')
@section('title','Pesanan')
@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        @if(session()->get('success-delete'))
        <div class="alert alert-danger alert-dismissible" role="alert" style="text-align: center;" data-delay="2000">
            {{session()->get('success-delete')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if(session()->get('success-update'))
        <div class="alert alert-primary alert-dismissible" role="alert" style="text-align: center;" data-delay="2000">
            {{session()->get('success-update')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if(session()->get('success-insert'))
        <div class="alert alert-success alert-dismissible" role="alert" style="text-align: center;" data-delay="2000">
            {{session()->get('success-insert')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        
        <div class="card">
                <h5 class="card-header" style="text-align: center;"><Strong>Pesanan </Strong>
                    <a href="/Dashboard"><button type="button"
                    class="btn btn-info"
                    style="float: left">
                Kembali
            </button>
            </a>
                </h5>
                <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead class="table-light">
                    <tr>
                        <th>Nama Barang</th>
                        <th>Kode Barang</th>
                        <th>Jumlah</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($pesanan as $item)
                        <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$item->nama_barang}}</strong></td>
                        <td>{{$item->kode_barang}}</td>
                        <td>{{$item->jumlah}}</td>
                        <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                            <a class="dropdown-item" href="/Dashboard/Pesanan/show{{$item->id}}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                            <a class="dropdown-item" href="/Dashboard/Pesanan/Delete{{$item->id}}"><i class="bx bx-trash me-1"></i> Delete</a>
                            </div>
                        </div>
                    </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
            </div>

@endsection

@extends('layouts.nav')
@section('title','Laporan')
@section('content')
<style>
    .td{
        text-align: center;
    }
</style>
{{-- Alerts --}}
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

{{-- Content --}}
    <div class="card">
    <h5 class="card-header" style="text-align: center;"><strong>Laporan</strong>
        <a href="/Dashboard"><button type="button"
            class="btn btn-info"
            style="float: left">
        Kembali
    </button>
        </a>
    <button
    type="button"
    class="btn btn-primary"
    data-bs-toggle="modal"
    data-bs-target="#modalCenter"
    style="float:right;"
  >
    Tambah Laporan
  </button>
  <br>
  <br>
    <div class="card-body">

      <div class="table-responsive text-nowrap">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th class="td">Laporan</th>
              <th class="td">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($laporan as $item)
            <tr>
              <td class="td">{{$item->Laporan}}</td>
              <td class="td" style="width: 20px;">
                <a href="{!!asset('LaporanFile/')!!}/{{$item->Laporan}}" class="btn btn-success">Download</a>
                <a href="/Dashboard/Laporan/Delete{{$item->id}}" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>

      </div>
    </div>
  </div>
</div>

  <form action="/Dashboard/Laporan/insert" method="POST" enctype="multipart/form-data">
    @csrf
  <!-- Basic Bootstrap Table -->
  <div class="col-lg-4 col-md-6">
    <div class="mt-3">
      <!-- Button trigger modal -->
    </div>
      <!-- Modal -->
      <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalCenterTitle">Masukan Laporan</h5>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body">
              <div class="row">
                {{-- <div class="col mb-3">
                  <label for="nameWithTitle" class="form-label">Nama Laporan</label>
                  <input
                    type="text"
                    id="nameWithTitle"
                    class="form-control"
                    placeholder="Enter Name"
                    name="Nama_laporan"
                    required
                  />
                </div> --}}
              </div>
              <div class="mb-3">
                <label for="formFile" class="form-label">Select File</label>
                <input class="form-control" name="Laporan" type="file" id="formFile" required>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                Close
              </button>
              <button class="btn btn-primary" type="submit">Save changes</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
@endsection

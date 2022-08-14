@extends('layouts.nav')
@section('title','Barang')
@section('content')
{{-- Alerts --}}
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        @if(session()->get('success-delete'))
        <div class="alert alert-danger alert-dismissible" role="alert" style="text-align: center;" data-delay="20">
            {{session()->get('success-delete')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if(session()->get('success-update'))
        <div class="alert alert-primary alert-dismissible" role="alert" style="text-align: center;" data-delay="20">
            {{session()->get('success-update')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if(session()->get('success-insert'))
        <div class="alert alert-success alert-dismissible" role="alert" style="text-align: center;" data-delay="20">
            {{session()->get('success-insert')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

{{-- Content --}}
    <div class="card">
        <h5 class="card-header" style="text-align: center;"><strong> Barang</strong>
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
            Tambah Barang Masuk
          </button>
        </h5>

        <div class="table-responsive text-nowrap">

          <table class="table">
            <thead>
              <tr>
                <th>Nama Barang</th>
                <th>Kode Barang</th>
                <th>Stock</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>

            <tbody>
                @foreach ($masuk as $item)
              <tr>
                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$item->Nama_brg}}</strong></td>
                <td>{{$item->Kode_brg}}</td>
                <td>{{$item->Stock}}</td>
                <td>
                    <span class="badge {{($item->status_id ==1)? 'bg-label-primary me-1': 'bg-label-danger me-1'}}">{{($item->status_id == 1)? 'Complated' : 'Pending'}}</span>
                </td>
                <td>
                      <a class="btn btn-primary"  href="/Dashboard/Barang/Show{{$item->id}}">Edit</a>
                      <a class="btn btn-danger" style="font-size: 12px;" href="/Dashboard/Barang/delete{{$item->id}}"><i class="bx bx-trash me-1"></i> Delete</a>
                    </div>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
    </div>
    <br>
    <nav aria-label="Page navigation">
        <ul class="pagination">
          <li class="page-item first">
            <a class="page-link" href=""><i class="tf-icon bx bx-chevrons-left"></i></a>
          </li>
          <li class="page-item prev">
            <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevron-left"></i></a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:void(0);">1</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:void(0);">2</a>
          </li>
          <li class="page-item active">
            <a class="page-link" href="javascript:void(0);">3</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:void(0);">4</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:void(0);">5</a>
          </li>
          <li class="page-item next">
            <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevron-right"></i></a>
          </li>
          <li class="page-item last">
            <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevrons-right"></i></a>
          </li>
        </ul>
      </nav>
    </div>
</div>
</div>
    <!-- / Layout wrapper -->
    <form action="/Dashboard/Barang/insert" method="POST">
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
                  <h5 class="modal-title" id="modalCenterTitle">Masukan Data</h5>
                  <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                  ></button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col mb-3">
                      <label for="nameWithTitle" class="form-label">Nama Barang</label>
                      <input
                        type="text"
                        id="nameWithTitle"
                        class="form-control"
                        placeholder="Enter Name"
                        name="Nama_brg"
                        required
                      />
                    </div>
                  </div>
                  <div class="row g-2">
                    <div class="col mb-0">
                      <label for="emailWithTitle" class="form-label">Kode Barang</label>
                      <input
                        type="number"
                        id="emailWithTitle"
                        class="form-control"
                        placeholder="Enter Code"
                        name="Kode_brg"

                      />
                    </div>
                  </div>
                  <div class="row g-2">
                    <div class="col mb-0">
                      <label for="emailWithTitle" class="form-label">Stock Barang</label>
                      <input
                        type="number"
                        id="emailWithTitle"
                        class="form-control"
                        placeholder="Enter Stock"
                        name="Stock"

                      />
                    </div>
                  </div>
                  <br>
                  <div class="row g-2">
                    <div class="col mb-0">
                      <label for="emailWithTitle" class="form-label">Status</label>
                      <select id="defaultSelect" class="form-select" name="status_id">
                        <option value="disable" style="text-align: center">Pilih Status</option>
                        <option value="1" class="badge bg-label-primary me-1">Complated</option>
                        <option value="0" class="badge bg-label-danger me-1">Pending</option>
                        <span class="badge bg-label-primary me-1"></span>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Close
                  </button>
                  <button class="btn btn-primary" type="submit" id="alert">Save changes</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
@endsection


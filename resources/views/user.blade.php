@extends('layouts.nav')
@section('title','Settings')
@section('content')
<div class="content-wrapper">
                <div class="container-xxl flex-grow-1 container-p-y">
                    @if(session()->get('success-update'))
            <div class="alert alert-primary alert-dismissible" role="alert" style="text-align: center;" data-delay="2000">
                {{session()->get('success-update')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="card">
                <h5 class="card-header" style="text-align: center;"><strong>All User</strong>
                    <a href="/Dashboard"><button type="button"
                        class="btn btn-info"
                        style="float: left">
                    Kembali
                </button>
                    </a>
                    <br><br><br>
                <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead class="table-light">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Created</th>
                        <th>Update</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($user as $item)
                        <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$item->name}}</strong></td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->role}}</td>
                        <td><span class="badge bg-label-success me-1">
                            {{$item->created_at}}
                        </span>
                        </td>
                        <td><span class="badge bg-label-primary me-1">{{$item->updated_at}}</span></td>
                        <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                            <a class="dropdown-item" href="/Dashboard/User/show{{$item->id}}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                            <a class="dropdown-item" href="/Dashboard/User{{$item->id}}"><i class="bx bx-trash me-1"></i> Delete</a>
                            </div>
                        </div>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
            </div>
    </div>
</div>
@endsection

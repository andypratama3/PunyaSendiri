@extends('layouts.nav')
@section('title','User')
@section('content')
@foreach ($user as $item)

@endforeach
<div class="content-wrapper">

<div class="container-xxl flex-grow-1 container-p-y">
    <form action="/Dashboard/User/edit{{$user->id}}" method="POST">
        @csrf
    <div class="card mb-4">
      <h5 class="card-header" style="text-align: center">Edit User</h5>
      <div class="card-body">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Nama</label>
          <input type="text" class="form-control" name="name" placeholder="" value="{{$user->name}}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" id="exampleFormControlInput1" placeholder="" value="{{$user->email}}">
          </div>

        <div class="mb-3">
          <label for="exampleFormControlSelect1" class="form-label">Role</label>
          <select id="defaultSelect" class="form-select" name="role">
            <option value="{{$user->role}}" style="text-align: center;">{{$user->role}}</option>
            <option value="admin" class="badge bg-label-primary me-1">Admin</option>
            <option value="user" class="badge bg-label-danger me-1">User</option>
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

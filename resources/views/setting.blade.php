@extends('layouts.nav')
@section('title','Settings')
@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="card mb-4">
                <h5 class="card-header">Profile Details</h5>
                <hr class="my-0">
                <div class="card-body">
                <form id="formAccountSettings" action="" method="POST" onsubmit="return false">

                    <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="firstName" class="form-label">Name</label>
                        <input class="form-control" type="text" id="firstName" name="name" value="{{Auth::User()->name}}" autofocus="">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="lastName" class="form-label">Email</label>
                        <input class="form-control" type="text" name="email" id="lastName" value="{{Auth::User()->email}}">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="email" class="form-label">Password</label>
                        <input class="form-control" type="password" name="password" value="" placeholder="New Password">
                    </div>
                    <div class="mt-2">
                    <button type="submit" class="btn btn-primary me-2">Save changes</button>
                    <a href="/Dashboard" class="btn btn-outline-secondary">Cancel</></a>
                    </div>
                </form>

                </div>
                <!-- /Account -->
            </div>
            <div class="card">
                <h5 class="card-header">Delete Account</h5>
                <div class="card-body">
                <div class="mb-3 col-12 mb-0">
                    <div class="alert alert-warning">
                    <h6 class="alert-heading fw-bold mb-1">Are you sure you want to delete your account?</h6>
                    <p class="mb-0">Once you delete your account, there is no going back. Please be certain.</p>
                    </div>
                </div>
                <form id="formAccountDeactivation" action="" onsubmit="return false">
                    <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" name="accountActivation" id="accountActivation">
                    <label class="form-check-label" for="accountActivation">I confirm my account deactivation</label>
                    </div>
                    <a href="" class="btn btn-danger deactivate-account">Delete Account</a>
                </form>
                </div>
            </div>
            </div>
        </div>

    </div>
</div>
  @endsection


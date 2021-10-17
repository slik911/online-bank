@extends('layouts.app')
@section('title')
    {{$user->name}}
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Users</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Users</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row">
                        <h4 class="card-title mb-4">Change User Ppprofile</h4>
                        <form method="post" action="{{route('update.profile')}}">
                            @csrf
                            <input type="hidden" class="form-control" name="uid" value="{{$user->uid}}">
                            <div class="mb-3">
                                <label for="formrow-firstname-input" class="form-label">Full name</label>
                                <input type="text" class="form-control" id="formrow-firstname-input" name="name" value="{{$user->name}}">
                            </div>

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="formrow-email-input" class="form-label">Email</label>
                                        <input type="email" class="form-control" readonly name="email" value="{{$user->email}}" id="formrow-email-input">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="formrow-phone_number-input" class="form-label">Phone number</label>
                                        <input type="text" class="form-control" name="phone_number" value="{{$user->phone_number}}" id="formrow-phone_number-input">
                                    </div>
                                </div>

                            </div>

                            <div>
                                <button type="submit" class="btn btn-primary w-md">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row">
                        <h4 class="card-title mb-4">Change User Password</h4>

                        <form method="post" action="{{route('password.change')}}">
                            @csrf
                            <input type="hidden" class="form-control" id="formrow-firstname-input" name="uid" value="{{$user->uid}}">
                            <div class="row mb-4">
                                <label for="password" class="col-sm-3 col-form-label">Password</label>
                                <div class="col-sm-9">
                                  <input type="password" class="form-control" name="password" id="password">
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="password-confirm" class="col-sm-3 col-form-label">Re Type</label>
                                <div class="col-sm-9">
                                  <input type="password" class="form-control" name="password_confirmation" id="password-confirm" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row justify-content-end">
                                <div class="col-sm-9">



                                    <div>
                                        <button type="submit" id="change_password" class="btn btn-primary w-md">Save Changes</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end col -->
</div>

@endsection
@section('scripts')
@endsection

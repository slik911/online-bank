@extends('layouts.app')
@section('title')
    {{Auth::user()->name}}
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Profile</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body bg-white">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">

                            <div class="row justify-content-end ">
                                <div class="col-sm-9">
                                    <div>
                                        <h5 class="card-title mb-4">Change User Profile</h5>
                                    </div>
                                </div>
                            </div>

                            <form method="post" action="{{route('update.profile')}}">
                                @csrf
                                <input type="hidden" class="form-control" id="formrow-firstname-input" name="uid" value="{{Auth::user()->uid}}">
                                <div class="row mb-4">
                                    <label for="password" class="col-sm-3 col-form-label">Full Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="name" name="name" value="{{Auth::user()->name}}">
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="email" name="email" value="{{Auth::user()->email}}">
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="phone_number" class="col-sm-3 col-form-label">Phone Number</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{Auth::user()->phone_number}}">
                                    </div>
                                </div>

                                <div class="row justify-content-end">
                                    <div class="col-sm-9">
                                        <div>
                                            <button type="submit" class="btn btn-primary w-md">Save Changes</button>
                                        </div>
                                    </div>
                                </div>
                            </form>


                            <div class="row justify-content-end mt-5">
                                <div class="col-sm-9">



                                    <div>
                                        <h4 class="card-title mb-4">Change User Password</h4>
                                    </div>
                                </div>
                            </div>
                                <form method="post" action="{{route('password.change')}}">
                                    @csrf
                                    <input type="hidden" class="form-control" id="formrow-firstname-input" name="uid" value="{{Auth::user()->uid}}">
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


                                <div class="row justify-content-end  mt-5">
                                    <div class="col-sm-9">
                                        <div>
                                            <h5 class="card-title mb-4">Change  PIN</h5>
                                        </div>
                                    </div>
                                </div>

                                <form method="post" action="{{route('pin.change')}}">
                                    @csrf
                                    <input type="hidden" class="form-control" id="formrow-firstname-input" name="uid" value="{{Auth::user()->uid}}">
                                    <div class="row mb-4">
                                        <label for="oldpin" class="col-sm-3 col-form-label">Old Pin</label>
                                        <div class="col-sm-9">
                                          <input type="password" class="form-control" name="oldpin" id="oldpin">
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label for="pin-confirm" class="col-sm-3 col-form-label">New Pin</label>
                                        <div class="col-sm-9">
                                          <input type="password" class="form-control" name="pin" id="pin-confirm" required autocomplete="pin">
                                        </div>
                                    </div>

                                    <div class="row justify-content-end">
                                        <div class="col-sm-9">

                                            <div>
                                                <button type="submit"  class="btn btn-primary w-md">Confrim</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row">
                        <h4 class="card-title mb-4">Change User Password</h4>

                        <form method="post" action="{{route('password.change')}}">
                            @csrf
                            <div class="row mb-4">
                                <label for="password" class="col-sm-3 col-form-label">Password</label>
                                <div class="col-sm-9">
                                  <input type="password" class="form-control" name="password" id="password">
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="password-confirm" class="col-sm-3 col-form-label">Re Type</label>
                                <div class="col-sm-9">
                                  <input type="password" class="form-control" name="password_confirmation" id=""password-confirm" required autocomplete="new-password">
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
    </div><!-- end col --> --}}
</div>

@endsection
@section('scripts')
@endsection

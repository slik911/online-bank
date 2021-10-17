@extends('layouts.app')
@section('title')
New User
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">User</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">New User</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body ">
                <div class=" col-md-6 pt-3 pb-3">
                    <form method="POST" class="form-horizontal" action="{{ route('register.users') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="form-control "
                            value="{{ old('name') }}" id="name" name="name" autofocus
                                placeholder="Enter Full Name">
                        </div>

                        <div class="mb-3">
                            <label for="useremail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="useremail"
                            value="{{ old('email') }}" name="email" placeholder="Enter email" autofocus >
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <div
                                class="input-group auth-pass-inputgroup">
                                <input type="password" name="password"
                                    class="form-control "
                                    id="userpassword" placeholder="Enter password"
                                    aria-label="Password" aria-describedby="password-addon" autofocus >
                                <button class="btn btn-light " type="button" id="password-addon"><i
                                        class="mdi mdi-eye-outline"></i></button>
                            </div>
                        </div>


                        <div class="mb-3">
                            <label for="phone_number">Phone Number</label>
                            <div class="input-group" id="phone_number">
                                <input type="text" class="form-control" placeholder="Phone Number" value="{{ old('phone_number') }}"
                                    name="phone_number" autofocus >
                                <span class="input-group-text"><i class="mdi mdi-phone"></i></span>

                            </div>
                        </div>


                        <div class="mb-3">
                            <label class="col-md-2 col-form-label">Role</label>
                            <div class="col-md-12">
                                <select class="form-select" id="role" name="role">
                                    <option>Select</option>
                                    <option value="user">User</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </div>
                     </div>

                     <div class="mb-3">
                        <label for="pin">Transaction Pin</label>
                        <div class="input-group" id="pin">
                            <input type="text" id="pin" class="form-control" placeholder="Four Digit Pin"
                                name="pin" autofocus >
                        </div>
                    </div>


                        <div class="mt-4 d-grid">
                            <button class="btn btn-primary waves-effect waves-light"
                                type="submit">Create</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
</div>



@endsection


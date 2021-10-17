@extends('layouts.app')
@section('title')
Settings
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Settings</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Settings</li>
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
                                        <h5 class="card-title mb-4">Setting</h5>
                                    </div>
                                </div>
                            </div>


                                <div class="row mb-4">
                                    <label for="password" class="col-sm-3 col-form-label">Transfer</label>
                                    <div class="col-sm-9">
                                        @if (!$setting->transfer)
                                        <a href="{{route('transfer.settings')}}" class="btn btn-primary btn-sm waves-effect">Activate Transfers</a>
                                        @else
                                        <a href ="{{route('transfer.settings')}}" class="btn btn-danger btn-sm waves-effect">Deactivate Transfer</a>
                                        @endif
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="email" class="col-sm-3 col-form-label">Transfer Limit</label>
                                    <div class="col-sm-9">
                                        @if (!$setting->transfer_limit)
                                        <a href="{{route('daily.limit')}}" class="btn btn-primary btn-sm waves-effect">Activate Transfer Limit</a>
                                        @else
                                        <a href ="{{route('daily.limit')}}" class="btn btn-danger btn-sm waves-effect">Deactivate Transfer Limit</a>
                                        @endif
                                    </div>
                                </div>



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

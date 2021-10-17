@extends('layouts.app')
@section('title')
    {{$card_type}}
@endsection
@section('style')
<link rel="stylesheet" href="{{asset('assets/libs/sweetalert2/sweetalert2.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/toastr.min.css')}}">
@endsection
@section('content')
<div class="col-12">
    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
        <h4 class="mb-sm-0 font-size-18">{{$card_type}}</h4>
        <div class="page-title-right">
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">{{$card_type}}</li>
            </ol>
        </div>
    </div>
</div>
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title" style="font-size:12px;">Fill all required fields</h4>
            <div class="row">
                <div class="col-md-6">
                    <form action="{{route('card.submit')}}" method="post">
                        @csrf
                        <input type="hidden" class="form-control" name="uid" value="{{Auth::user()->uid}}">
                        <div class="row mb-3">
                            <label for="oldpin" class="col-sm-3 col-form-label">Request</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="request" id="request" readonly value="{{$card_type}}">
                            </div>
                        </div>

                        @if ($card_type == "cheques" || $card_type == "credit cards")
                        <div class="row mb-3">
                            <label for="pin-confirm" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="email" id="email" required >
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="pin-confirm" class="col-sm-3 col-form-label">Phone Number</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="phone_number" id="phone_number" required>
                            </div>
                        </div>
                        @endif

                        @if ($card_type == "cheques")
                        <div class="row mb-3">
                            <label for="number_of_leaves" class="col-sm-3 col-form-label">Number of Leaves</label>
                            <div class="col-sm-9">
                              <div class="form-group">
                                <select class="form-select" name="number_of_leaves" id="number_of_leaves" required>
                                  <option value="25 Leaves">25 Leaves</option>
                                  <option value="50 Leaves">50 Leaves</option>
                                  <option value="100 Leaves">100 Leaves</option>
                                </select>
                              </div>
                            </div>
                        </div>
                        @endif

                        @if ($card_type == "credit cards")
                        <div class="row mb-3">
                            <label for="card_product" class="col-sm-3 col-form-label">Card Product</label>
                            <div class="col-sm-9">
                              <div class="form-group">
                                <select class="form-select" name="card_product" id="card_product" required>
                                  <option value="Master">Master</option>
                                  <option value="Gold Card">Gold Card</option>
                                  <option value="Platinum Card">Platinum Card</option>
                                </select>
                              </div>
                            </div>
                        </div>
                        @endif


                        @if ($card_type == "cheques" || $card_type == "credit cards")
                        <div class="row mb-3">
                            <label for="pickup_location" class="col-sm-3 col-form-label">Pickup Location</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="pickup_location" id="pickup_location" required>
                            </div>
                        </div>
                        @endif


                        @if ($card_type == "virtual cards")

                        <div class="row mb-3">
                            <div class="col-12">

                                <center><img src="{{asset('assets/images/vcard.png')}}" class="img-fluid" alt=""></center>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="card_alias" class="col-sm-3 col-form-label">Card Alias</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="card_alias" id="card_alias" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="initial_amount" class="col-sm-3 col-form-label">Initial Amount</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" placeholder="$ Initial Amount" name="initial_amount" id="initial_amount" required>
                            </div>
                        </div>
                        @endif





                        <div class="row justify-content-end">
                            <div class="col-sm-9">

                                <div>
                                    <button type="submit"  class="btn btn-primary w-md">Proccess Request</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script src="{{asset('assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>
<script src="{{asset('assets/js/toastr.min.js')}}"></script>

@endsection

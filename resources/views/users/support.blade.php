@extends('layouts.app')
@section('title')
Support
@endsection
@section('style')
<link rel="stylesheet" href="{{asset('assets/libs/sweetalert2/sweetalert2.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/toastr.min.css')}}">
@endsection
@section('content')
<div class="col-12">
    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
        <h4 class="mb-sm-0 font-size-18">Support Ticket</h4>
        <div class="page-title-right">
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">Support</li>
            </ol>
        </div>
    </div>
</div>
<div class="col-12">
    <div class="card">
        <div class="card-body pt-5 pb-5">
            <h4 class="card-title" style="font-size:12px;">Fill all required fields</h4>
            <div class="row">
                <div class="col-md-6">
                    <form action="{{route('support.save')}}" method="post">
                        @csrf

                        <div class="mt-3">
                            <label class="mb-1">Select Type</label>
                            <div class="form-group">
                                <select class="form-select" name="card_product" id="card_product" required>
                                <option value="">Choose Type...</option>
                                  <option value="Master">Account Issue</option>
                                  <option value="Gold Card">Credit Card Issue</option>
                                  <option value="Platinum Card">Credit Card Repayment Issue</option>
                                   <option value="Master">Debit Card Issue</option>
                                  <option value="Gold Card">Unsuccessful Funds Transfer</option>
                                  <option value="Platinum Card">Internet Banking Issues</option>
                                  <option value="Platinum Card">Fraud Related Issues</option>
                                </select>
                              </div>
                        </div>
                        <div class="mt-3">
                            <label class="mb-1">Complaint</label>

                            <textarea id="textarea" class="form-control" name="complaint" maxlength="225" rows="6"
                                placeholder="This textarea has a limit of 225 chars." required></textarea>
                        </div>




                        <div class="row mt-3">
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

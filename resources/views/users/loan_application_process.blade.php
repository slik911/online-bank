@extends('layouts.app')
@section('title')
    {{$loan_type}}
@endsection
@section('style')
<link rel="stylesheet" href="{{asset('assets/libs/sweetalert2/sweetalert2.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/toastr.min.css')}}">
@endsection
@section('content')
<div class="col-12">
    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
        <h4 class="mb-sm-0 font-size-18">{{$loan_type}}</h4>
        <div class="page-title-right">
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">{{$loan_type}}</li>
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
                    <form>
                        @csrf
                        <input type="hidden" class="form-control" name="uid" value="{{Auth::user()->uid}}">
                        <div class="row mb-3">
                            <label for="oldpin" class="col-sm-3 col-form-label">Reason for Loan</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="reason" id="reason" readonly value="{{$loan_type}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="pin-confirm" class="col-sm-3 col-form-label">Amount</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="amount" id="amount" >
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="pin-confirm" class="col-sm-3 col-form-label">Pay Back</label>
                            <div class="col-sm-9">
                              <input type="date" class="form-control" name="date" id="date" >
                            </div>
                        </div>

                        <div class="row justify-content-end">
                            <div class="col-sm-9">

                                <div>
                                    <button id="process"  class="btn btn-primary w-md">Proccess Request</button>
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
    <script>
        $(document).ready(function(){
            $('#process').click(function(){
                // var amt = $('#amount').val();
                event.preventDefault();
                if($('#amount').val() == ""){
                    Swal.fire(
                    {
                        title: 'Error!',
                        text: 'Amount is required',
                        icon: 'error',
                    }
                    )
                }
                else if($('#date').val() == ""){
                    Swal.fire(
                    {
                        title: 'Error!',
                        text: 'Payback date is required',
                        icon: 'error',
                    }
                    )
                }
                else{
                    Swal.fire(
                    {
                        title: 'Successful!',
                        text: 'kindly be patient while we analyze your request',
                        icon: 'success',
                    }
                    )
                }
            });
        });
    </script>
@endsection

@extends('layouts.app')
@section('title')
    Transfer Funds
@endsection
<div class="col-12">
    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
        <h4 class="mb-sm-0 font-size-18">Transfer</h4>
        <div class="page-title-right">
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">Transfer</li>
            </ol>
        </div>
    </div>
</div>
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-7">
                                        <p>Balance</p>
                                        <h1 style="line-height: 5px;">${{number_format($account->balance)}}</h1>

                                        <h6 class="mt-4">Account Number</h6>
                                        <p>{{$account->account_number}}</p>
                                    </div>
                                    <div class="col-3 pt-4">
                                        <i class="bx bx-wallet" style="font-size:45px; background-color:rgba(85,110,230, .3); color:rgb(85, 110, 230); padding:20px; border-radius:50px"></i>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Transfer History</h4>

                                <div  data-simplebar style="max-height: 310px;">
                                    <ul class="verti-timeline list-unstyled">
                                        @foreach ($transaction as $transaction)
                                            @if ($transaction->type == "credit")
                                            <li class="event-list">
                                                <div class="event-timeline-dot">
                                                    <i class="bx bx-up-arrow-circle font-size-24 text-success" style="margin-top:-2px;"></i>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <h5 class="font-size-14">{{\Carbon\Carbon::parse($transaction->date)->format('d M Y')}} <i class="bx bx-right-arrow-alt text-success font-size-16 text-primary align-middle ms-2"></i></h5>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <div>
                                                            <p style="margin-bottom:-2px; float:right; font-weight:600; font-style:poppins" class="text-success">${{number_format($transaction->amount)}}</p>
                                                            TRF/CDR/{{$transaction->account_name}}/{{$transaction->ref}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            @else
                                            <li class="event-list">
                                                <div class="event-timeline-dot">
                                                    <i class="bx bx-up-arrow-circle font-size-24 text-danger" style="margin-top:-2px;"></i>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <h5 class="font-size-14">{{\Carbon\Carbon::parse($transaction->date)->format('d M Y')}} <i class="bx bx-right-arrow-alt text-danger font-size-16 text-primary align-middle ms-2"></i></h5>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <div>
                                                            <p class="text-danger" style="margin-bottom:-2px; float:right; font-weight:600; font-style:poppins">-${{number_format($transaction->amount)}}</p>
                                                            TRF/CDR/{{$transaction->beneficiary}}/{{$transaction->ref}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            @endif
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body pe-md-5 pe-3 ps-md-5 ps-3">
                        <h5 class="mb-3">Transfer</h5>
                        <form action="{{route('debit')}}" method="post">
                            @csrf
                                <input type="hidden" class="form-control" id="debit_uid"name="uid" value="{{Auth::user()->uid}}">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="amount" class="form-label">Amount</label>
                                            <input type="number" class="form-control " name="amount"  id="amount" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="name" class="form-label">Beneficiary </label>
                                    <input type="text" class="form-control" required  id="name"  name="beneficiary_name">
                                </div>

                                <div class="mb-3">
                                    <label for="account_number" class="form-label">Beneficiary Account Number</label>
                                    <input type="text" class="form-control" required  id="account_number"  name="account_number" >
                                </div>

                                <div class="mb-3">
                                    <label for="bank" class="form-label">Bank </label>
                                    <input type="text" class="form-control" required  id="bank"  name="bank">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="iban" class="form-label">IBAN </label>
                                            <input type="text" class="form-control"  required id="iban"  name="iban">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="swiftcode" class="form-label">Swift Code</label>
                                            <input type="text" class="form-control"  id="swiftcode"  name="swiftcode" >
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="form-group">
                                      <label for="narration">Narration</label>
                                      <input type="text" class="form-control"  id="narration"  name="narration">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="form-group">
                                      <label for="pin">Pin</label>
                                      <input type="password" class="form-control"  id="pin"  name="pin">
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Transfer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

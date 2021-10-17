@extends('layouts.app')
@section('title')
 Dashboard
@endsection
@section('style')
    <link rel="stylesheet" href="{{asset('assets/libs/apexcharts/apexcharts.min.js')}}">
@endsection
@section('script')
    <script src="{{asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>
    <script>
        var credit = document.getElementById('credit').value;
        console.log(credit);

        var radialoptions1 = {
        series: [credit],
        chart: {
        type: 'radialBar',
        width: 60,
        height: 60,
        sparkline: {
            enabled: true
        }
        },
        dataLabels: {
            enabled: false
        },
        colors: ['#34c38f'],
        plotOptions: {
            radialBar: {
                hollow: {
                    margin: 0,
                    size: '60%'
                },
                track: {
                    margin: 0
                },
                dataLabels: {
                    show: false
                }
            }
        }
    };

    var radialchart1 = new ApexCharts(document.querySelector("#radialchart-1"), radialoptions1);
    radialchart1.render();
        var debit = document.getElementById('debit').value;

    var radialoptions2 = {
        series: [debit],
        chart: {
        type: 'radialBar',
        width: 60,
        height: 60,
        sparkline: {
            enabled: true
        }
        },
        dataLabels: {
            enabled: false
        },
        colors: ['#f46a6a'],
        plotOptions: {
            radialBar: {
                hollow: {
                    margin: 0,
                    size: '60%'
                },
                track: {
                    margin: 0
                },
                dataLabels: {
                    show: false
                }
            }
        }
    };

    var radialchart2 = new ApexCharts(document.querySelector("#radialchart-2"), radialoptions2);
    radialchart2.render();
    </script>
@endsection
@section('content')
<div class="col-12">
    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
        <h4 class="mb-sm-0 font-size-18">Dashboard</h4>
        <div class="page-title-right">
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
    </div>
</div>

    <form action="">
        <input type="hidden" id="credit" value="{{number_format((float)$credit_percentage, 2, '.', '')}}">
        <input type="hidden" id="debit" value="{{number_format((float)$debit_percentage, 2, '.', '')}}">
    </form>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
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

                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row pt-4">
                                        <div class="col-7  card-title">
                                            Credit Transactions
                                            <p class="text-muted" style="font-weight:400">{{number_format((float)$credit_percentage, 2, '.', '')}}%</p>
                                        </div>
                                        <div class="col-5">
                                            <div id="radialchart-1" class="apex-charts"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row pt-4">
                                        <div class="col-7 card-title">
                                            Debit Transactions
                                            <p class="text-muted">{{number_format((float)$debit_percentage, 2, '.', '')}}%</p>
                                        </div>
                                        <div class="col-5">
                                            <div id="radialchart-2" class="apex-charts"></div>
                                        </div>
                                    </div>
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
                                                TRF/DBT/{{$transaction->account_name}}/{{$transaction->ref}}
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

@endsection

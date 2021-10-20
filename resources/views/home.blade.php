@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-7">
                            <p>Users</p>
                            <h5 style="line-height: 5px;">{{number_format($user)}}</h5>
                        </div>
                        <div class="col-3 pt-1">
                            <i class="bx bx-user" style="font-size:20px; background-color:rgba(85,110,230, .3); color:rgb(85, 110, 230); padding:20px; border-radius:50px"></i>
                        </div>

                    </div>
                </div>
            </div>
       </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-7">
                                <p>Debit</p>
                                <h5 style="line-height: 5px;">${{number_format($debit)}}</h5>
                            </div>
                            <div class="col-3 pt-1">
                                <i class="bx bx-wallet" style="font-size:20px; background-color:rgba(244,106,106, .3); color:rgb(244,106,106); padding:20px; border-radius:50px"></i>
                            </div>

                        </div>
                    </div>
                </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-7">
                            <p>Credit</p>
                            <h5 style="line-height: 5px;">${{number_format($credit)}}</h5>
                        </div>
                        <div class="col-3 pt-1">
                            <i class="bx bx-credit-card" style="font-size:20px; background-color:rgba(80,165,241, .3); color:rgb(80,165,241); padding:20px; border-radius:50px"></i>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-7">
                            <p>Transactions</p>
                            <h5 style="line-height: 5px;">${{number_format($total_transaction)}}</h5>
                        </div>
                        <div class="col-3 pt-1">
                            <i class="bx bx-bar-chart" style="font-size:20px; background-color:rgba(52,195,143,.3); color:rgb(52,195,143); padding:20px; border-radius:50px"></i>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

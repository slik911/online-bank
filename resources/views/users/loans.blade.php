@extends('layouts.app')
@section('title')
Loans
@endsection
@section('style')
    <style>
        @media (max-width: 767px) {
            .icon-loan{
                font-size:20px !important;
                margin-top:15px;
            }
            .loan-text{
                font-size:14px !important;
                margin-left:10px;
            }
            .loan-write-up{
                font-size:10px !important;
                margin-left:10px;
            }
        }
    </style>
@endsection
@section('content')
<div class="col-12">
    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
        <h4 class="mb-sm-0 font-size-18">Loans</h4>
        <div class="page-title-right">
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">Loans</li>
            </ol>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-3 col-3 pt-2">
                                <a href="{{route('loan.process', ['loan_type'=>'personal_loan'])}}" style="text-decoration: none">
                                    <i class="bx bx-wallet icon-loan" style="font-size:25px; background-color:rgba(85,110,230, .3); color:rgb(85, 110, 230); padding:20px; border-radius:50px"></i>
                                </a>
                            </div>
                            <div class="col-md-7 col-8">
                                <h5 class="pt-3 loan-text"><a href="{{route('loan.process', ['loan_type'=>'personal_loan'])}}" style="text-decoration: none">Personal Loans </a></h5>
                                <p class="loan-write-up">Loans for personal reasons repayable withing 6 to 12 months</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3 col-3 pt-2">
                                <a href="{{route('loan.process', ['loan_type'=>'car_loan'])}}" style="text-decoration: none">
                                    <i class="bx bx-car icon-loan" style="font-size:25px; background-color:rgba(52,195,143, .3); color:rgb(52,195,143); padding:20px; border-radius:50px"></i>
                                </a>
                            </div>
                            <div class=" col-md-7 col-8 ">
                                <h5 class="pt-3 loan-text"><a href="{{route('loan.process', ['loan_type'=>'car_loan'])}}" style="text-decoration: none">Car Loans </a></h5>
                                <p class="loan-write-up">Need a new car? request for your loan now</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-3 col-3 pt-2">
                                <a href="{{route('loan.process', ['loan_type'=>'student_loan'])}}" style="text-decoration: none">
                                <i class="bx bx-user icon-loan" style="font-size:25px; background-color:rgba(80,165,241, .3); color:rgb(80,165,241); padding:20px; border-radius:50px"></i>
                                </a>
                            </div>
                            <div class=" col-md-7 col-8 ">

                                <h5 class="pt-3 loan-text"><a href="{{route('loan.process', ['loan_type'=>'student_loan'])}}" style="text-decoration: none">Student Loans</a></h5>
                                <p class="loan-write-up">Loans for personal reasons repayable withing 6 to 12 months</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-3 col-3 pt-2">
                                <a href="{{route('loan.process', ['loan_type'=>'house_loan'])}}" style="text-decoration: none">
                                <i class="bx bx-home icon-loan" style="font-size:25px; background-color:rgba(244,106,106, .3); color:rgb(244,106,106); padding:20px; border-radius:50px"></i>
                                </a>
                            </div>
                            <div class=" col-md-7 col-8 ">

                                <h5 class="pt-3 loan-text"><a href="{{route('loan.process', ['loan_type'=>'house_loan'])}}" style="text-decoration: none">House Loans</a></h5>
                                <p class="loan-write-up">Buy or Build your dream home today with just a click away</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-3 col-3 pt-2">
                                <a href="{{route('loan.process', ['loan_type'=>'salary_loan'])}}" style="text-decoration: none">
                                <i class="bx bx-wallet icon-loan" style="font-size:25px; background-color:rgba(241,180,76, .3); color:rgb(241,180,76); padding:20px; border-radius:50px"></i>
                                </a>
                            </div>
                            <div class=" col-md-7 col-8 ">
                                <h5 class="pt-3 loan-text"><a href="{{route('loan.process', ['loan_type'=>'salary_loan'])}}" style="text-decoration: none">Salary Loans</a></h5>
                                <p class="loan-write-up">Suitable for only working class citizens get your loan now</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-3 col-3 pt-2">
                                <a href="{{route('loan.process', ['loan_type'=>'business_loan'])}}" style="text-decoration: none">
                                <i class=" bx bx-bar-chart-alt-2 icon-loan" style="font-size:25px; background-color:rgba(116,120,141, .3); color:rgb(116,120,141); padding:20px; border-radius:50px"></i>
                                </a>
                            </div>
                            <div class=" col-md-7 col-8 ">

                                <h5 class="pt-3 loan-text"><a href="{{route('loan.process', ['loan_type'=>'business_loan'])}}" style="text-decoration: none">Business Loans</a></h5>
                                <p class="loan-write-up">Grow your business today by requesting for bulk loans</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

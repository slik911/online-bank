@extends('layouts.app')
@section('title')
Cheques & Cards
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
        <h4 class="mb-sm-0 font-size-18">Cheques & Cards</h4>
        <div class="page-title-right">
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">Cheques & Cards</li>
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
                                <a href="{{route('card.process', ['card_type'=>'cheques'])}}" style="text-decoration: none">
                                    <i class="bx bx-book icon-loan" style="font-size:25px; background-color:rgba(85,110,230, .3); color:rgb(85, 110, 230); padding:20px; border-radius:50px"></i>
                                </a>
                            </div>
                            <div class="col-md-7 col-8">
                                <h5 class="pt-3 loan-text"><a href="{{route('card.process', ['card_type'=>'cheques'])}}" style="text-decoration: none">Cheques </a></h5>
                                <p class="loan-write-up">Apply for your cheque book</p>
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
                                <a href="{{route('card.process', ['card_type'=>'credit_cards'])}}" style="text-decoration: none">
                                    <i class="bx bx-credit-card icon-loan" style="font-size:25px; background-color:rgba(52,195,143, .3); color:rgb(52,195,143); padding:20px; border-radius:50px"></i>
                                </a>
                            </div>
                            <div class=" col-md-7 col-8 ">
                                <h5 class="pt-3 loan-text"><a href="{{route('card.process', ['card_type'=>'credit_cards'])}}" style="text-decoration: none">Credit Cards </a></h5>
                                <p class="loan-write-up">Request for your credit cards </p>
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
                                <a href="{{route('card.process', ['card_type'=>'virtual_cards'])}}" style="text-decoration: none">
                                <i class="bx bx-card icon-loan" style="font-size:25px; background-color:rgba(244,106,106, .3); color:rgb(244,106,106); padding:20px; border-radius:50px"></i>
                                </a>
                            </div>
                            <div class=" col-md-7 col-8 ">

                                <h5 class="pt-3 loan-text"><a href="{{route('card.process', ['card_type'=>'virtual_cards'])}}" style="text-decoration: none">Virtual Cards</a></h5>
                                <p class="loan-write-up">Request for your virtual cards online</p>

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

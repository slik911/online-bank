@extends('layouts.app')
@section('title')
Transaction History
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Transaction History</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Accounts</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body  table-responsive">

                <table id="datatable" class="table table-bordered nowrap">
                    <thead>
                    <tr>
                        <th>Date</th>
                        <th>Reference</th>
                        <th>Account </th>
                        <th>Account Number</th>
                        <th>Amount</th>
                        <th>Beneficiary</th>
                        <th>Beneficiary Account Number</th>
                        <th>Beneficiary's Bank</th>
                        <th>Narration</th>

                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>


                    <tbody>
                        @foreach ($transactions as $transaction)
                        <tr>
                            <td>{{$transaction->date}}</td>
                            <td>{{$transaction->ref}}</td>
                            <td>{{$transaction->account_name}}</td>
                            <td>{{$transaction->account_number}}</td>
                            <td>${{number_format($transaction->amount)}}</td>
                            <td>{{$transaction->beneficiary}}</td>
                            <td><center>{{$transaction->beneficiary_account}}</center></td>
                            <td>{{$transaction->beneficiary_bank}}</td>
                            <td>{{$transaction->narration}}</td>
                            <td>
                                @if ($transaction->status)
                                    <span class="text-danger">Hidden</span>
                                @else
                                    <span class="text-success">Visible</span>
                                @endif
                            </td>


                            <td>
                                @if (!$transaction->status)
                                <a href="{{route('transaction.status', ['id'=>$transaction->id])}}" class="btn btn-danger btn-sm">Hide</a>
                                @else
                                <a href="{{route('transaction.status', ['id'=>$transaction->id])}}" class="btn btn-success btn-sm">Unhide</a>
                                @endif

                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div> <!-- end col -->
</div>




@endsection
@section('script')
    <script>
        $(document).ready(function(){

        })
    </script>
@endsection

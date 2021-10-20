@extends('layouts.app')
@section('title')
Accounts
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Accounts</h4>

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
                        <th>Name</th>
                        <th>Email</th>
                        <th>Account Number</th>
                        <th>Account Balance</th>
                        <th>Date Created</th>
                        <th>Status</th>
                        <th>Actions</th>
                        <th></th>
                    </tr>
                    </thead>


                    <tbody>
                        @foreach ($accounts as $account)
                        <tr>
                            <td>{{$account->name}}</td>
                            <td>{{$account->email}}</td>
                            <td><center>{{$account->account_number}}</center></td>
                            <td><center>${{number_format($account->balance)}}</center></td>
                            <td>{{$account->created_at}}</td>
                            <td>
                                @if ($account->status)
                                    <span class="text-success">Active</span>
                                @else
                                    <span class="text-danger">Suspended</span>
                                @endif
                            </td>
                            <td>
                                <div class="btn-group">
                                    {{-- <button type="button" class="btn btn-outline-primary btn-sm">Choose</button> --}}
                                    <button type="button" class="btn  btn-outline-primary btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                       Choose Option <i class="mdi mdi-chevron-down"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#" id="credit_account" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-id="{{$account->id}}">Credit Account</a>
                                        <a class="dropdown-item" href="#" id="debit_account" data-bs-toggle="modal" data-bs-target="#staticBackdrop2"  data-id="{{$account->id}}">Debit Account</a>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <a href="{{route('transaction.history',['uid'=>$account->user_id])}}" class="btn btn-success btn-sm">Transaction History</a>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div> <!-- end col -->
</div>


 <!-- Static  Modal for Credit account -->
 <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Credit Account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('transfer')}}" method="post">
                @csrf
                <div class="modal-body">
                    <input type="hidden" class="form-control" id="credit_uid"name="uid" value="">

                    <div class="row">

                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="acount_name" class="form-label">Account name</label>
                                <input type="text" class="form-control " name="account_name"  id="account_name" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="acount_number" class="form-label">Account Number</label>
                                <input type="text" class="form-control " name="account_number" id="acount_number" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="amount" class="form-label">Amount</label>
                                <input type="number" class="form-control " name="amount"  id="amount" required>
                            </div>
                        </div>


                    </div>
                    <div class="mb-3 row">

                        <div class="col-md-12">
                            <label for="example-datetime-local-input" class=" cform-label">Date and
                                Time</label>
                            <input class="form-control" type="datetime-local" name="date"
                                id="example-datetime-local-input" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="formrow-firstname-input" class="form-label">Beneficiary </label>
                        <input type="text" class="form-control" readonly id="credit_name"  name="credit_name" value="">
                    </div>

                    <div class="mb-3">
                        <label for="formrow-firstname-input" class="form-label">Beneficiary Account Number</label>
                        <input type="text" class="form-control" readonly id="credit_account_number"  name="credit_account_number" value="">
                    </div>




                    <div class="mb-3">
                        <div class="form-group">
                          <label for="narration">Narration</label>
                          <textarea class="form-control" name="narration" id="narration" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Fund Account</button>
                </div>
            </form>
        </div>
    </div>
</div>

 <!-- Static  Modal for Debit account -->
 <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Debit Account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('debit')}}" method="post">
                @csrf
                <div class="modal-body">
                    <input type="hidden" class="form-control" id="debit_uid"name="uid" value="">

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
                        <input type="text" class="form-control"  id="name"  name="name">
                    </div>

                    <div class="mb-3">
                        <label for="account_number" class="form-label">Beneficiary Account Number</label>
                        <input type="text" class="form-control"  id="account_number"  name="account_number" >
                    </div>

                    <div class="mb-3">
                        <label for="bank" class="form-label">Bank </label>
                        <input type="text" class="form-control"  id="bank"  name="bank">
                    </div>

                    <div class="mb-3 row">

                        <div class="col-md-12">
                            <label for="example-datetime-local-input" class=" cform-label">Date and
                                Time</label>
                            <input class="form-control" type="datetime-local" name="date"
                                id="example-datetime-local-input" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="form-group">
                          <label for="narration">Narration</label>
                          <textarea class="form-control" name="narration" id="narration" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Fund Account</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
@section('script')
    <script>
        $(document).ready(function(){
            $(document).on('click', '#credit_account',function(){
                var id = $(this).attr('data-id');
                // alert('ok');
                $.ajax({
                    method: 'get',
                    url:"{{route('get.user')}}",
                    data:{id:id},
                    success: function(data){
                        console.log(data);
                        $('#credit_uid').val(data.user_id);
                        $('#credit_name').val(data.name);
                        $('#credit_account_number').val(data.account_number);
                    }
                });
            });

            $(document).on('click','#debit_account', function(){
                var id = $(this).attr('data-id');
                $.ajax({
                    method: 'get',
                    url:"{{route('get.user')}}",
                    data:{id:id},
                    success: function(data){
                        console.log(data);
                        $('#debit_uid').val(data.user_id);

                    }
                });
            });
        })
    </script>
@endsection

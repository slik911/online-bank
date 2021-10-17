@extends('layouts.app')
@section('title')
Users
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Users</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Users</li>
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
                        <th>Phone</th>
                        <th>Role</th>
                        <th>Date Created</th>
                        <th>User Status</th>
                        <th>Actions</th>
                        <th></th>
                    </tr>
                    </thead>


                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->phone_number}}</td>
                            <td>{{$user->role}}</td>
                            <td>{{$user->created_at}}</td>
                            <td>
                                @if ($user->status)
                                    <span class="text-success">Active</span>
                                @else
                                    <span class="text-danger">Blocked</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{route('edit.user', ['uid'=>$user->uid])}}" class="btn btn-primary btn-sm waves-effect">Edit</a>
                            </td>



                            <td>
                                @if ($user->status)
                                <a href="" class="btn btn-danger btn-sm waves-effect" onclick="event.preventDefault(); document.getElementById('change_user_status').submit();">Block</a>
                                @else
                                <a href ="" class="btn btn-success btn-sm waves-effect" onclick="event.preventDefault(); document.getElementById('change_user_status').submit();">Activate</a>
                                @endif

                                <form action="{{route('change_user_status')}}" id="change_user_status" method="post">
                                @csrf
                                    <input type="hidden" name="user_id" value="{{$user->id}}">
                                </form>
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

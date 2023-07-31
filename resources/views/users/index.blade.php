@extends('layouts.master')
@section('content')

<div class="card shadow mb-4">
    
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Users</h6>
    </div>

    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <div class="card-body">
        <p>All users currently saved</p>
    
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <a href="/users/create" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                <i class="fas fa-plus fa-sm text-white-50"></i> Create new user</a>
        </div>

        <table class="table table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">User Type</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            
            <tbody>
                @foreach($users as $user)
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone_number}}</td>
                    <td>{{$user->user_type}}</td>
                    <td>{{$user->created_at}}</td>
                    <td> 
                        <a href="/users/{{$user->id}}" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">    
                        <i class="fas fa-trash fa-sm text-white-50"></i> Delete</a> 
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop
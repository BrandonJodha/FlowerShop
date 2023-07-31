@extends('layouts.master')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Create a new order</h6>
    </div>

    <div class="card-body">    
        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
 
        <form method="post" action="{{url('users')}}">
        @csrf

            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Phone Number</label>
                <input type="text" name="phone_number" class="form-control" required>
            </div>

            <div class="form-group">
                <label>User Type</label>
                <select name="user_type">
                    <option value="customer">Customer</option>
                    <option value="admin">Admin</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
</div>
@stop
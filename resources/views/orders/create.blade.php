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
 
        <form method="post" action="{{url('orders')}}">
        @csrf

            <div class="form-group">
                <label>User ID (optional) </label>
                <input type="number" name="user_id" class="form-control">
            </div>

            <div class="form-group">
                <label>Number of roses</label>
                <input type="number" name="rose_count" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Number of lilies</label>
                <input type="number" name="lily_count" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Number of orchids</label>
                <input type="number" name="orchid_count" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Number of tulips</label>
                <input type="number" name="tulip_count" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Number of daffodils</label>
                <input type="number" name="daffodil_count" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Delivery Address</label>
                <textarea name="delivery_address" class="form-control" required=""></textarea>
            </div>
            
            <div class="form-group">
                <label>Delivery Date</label>
                <input type="date" name="delivery_date" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
</div>
@stop
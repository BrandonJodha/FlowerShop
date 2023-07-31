@extends('layouts.master')
@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Orders</h6>
    </div>

    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <div class="card-body">
        <p>All orders currently placed</p>
    
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <a href="/orders/create" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i> Create new order</a>

            <a href="/orders/export" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm">    
            <i class="fas fa-file-export fa-sm text-white-50"></i> Export</a> 
        </div>

        <table class="table table-sm">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Roses</th>
                <th scope="col">Lilies</th>
                <th scope="col">Orchids</th>
                <th scope="col">Tulips</th>
                <th scope="col">Daffodils</th>
                <th scope="col">Delivery Address</th>
                <th scope="col">Delivery Date</th>
                <th scope="col">Date Created</th>
                <th scope="col">Action</th>

                </tr>
            </thead>
            
            <tbody>
                @foreach($orders as $order)
                <tr>
                    <th scope="row">{{$order->id}}</th>
                    <td>{{$order->rose_count}}</td>
                    <td>{{$order->lily_count}}</td>
                    <td>{{$order->orchid_count}}</td>
                    <td>{{$order->tulip_count}}</td>
                    <td>{{$order->daffodil_count}}</td>
                    <td>{{$order->delivery_address}}</td>
                    <td>{{$order->delivery_date}}</td>
                    <td>{{$order->created_at}}</td>
                    <td> 
                        <a href="/orders/{{$order->id}}" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">    
                        <i class="fas fa-trash fa-sm text-white-50"></i> Delete</a> 
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop
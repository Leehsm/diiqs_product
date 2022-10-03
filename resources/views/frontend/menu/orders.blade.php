@extends('master')
@section('content')
<div class="container">

    <h2 class="title">Order History</h2> 

    <div class="form-group my-account"> 
        <h4>My Account </h4> 
        <table class="table table-hover">
            <thead>
                <tr><th><a href="#" class="form-group my-account-a"></a></th></tr>
                <tr><th><a href="#" class="form-group my-account-a">Dashboard</a></th></tr>
                <tr><th><a href="/orders" class="form-group my-account-a">Orders</a></th></tr>
                <tr><th><a href="#" class="form-group my-account-a">Account Details</a></th></tr>
                <tr><th><a href="#" class="form-group my-account-a">Logout</a></th></tr>
            </thead>
            
        </table>
    </div>

    <div class="form-group order-history">
        <table class="table table-hover">
            <thead>
              <tr>
                  <th>No</th>
                  <th>Order</th>
                  <th>Date</th>
                  <th>Status</th>
                  <th>Total</th>
                  <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($order as $orders )
                <tr>
                    <td>No</td>
                    <td ><a style="color: black" href="#">#{{ $orders->billNo }}<a></td>
                    <td>{{ $orders->order_date }}</td>
                    <td>{{ $orders->status }}</td>
                    <td>RM {{ $orders->amount }}</td>
                    <td>
                        <button type="submit" class="btn">View</button>
                        <button type="submit" class="btn btn-success">Print</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
            
        </table>
    </div>
</div>

@endsection
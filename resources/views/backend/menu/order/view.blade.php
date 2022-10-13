@extends('backend.admin_master')
@section('content')

<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row" id="main" >
                <div class="container" >
                    <h2>All Order List</h2>           
                    <table id="listTable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Bill No</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Note</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order as $orders )
                            <tr>
                                {{-- <td><img src={{ $orders->image }}></td> --}}
                                <td>{{ $orders->order_date }}</td>
                                <td>{{ $orders->billNo }}</td>
                                <td>{{ $orders->name }}</td>
                                <td>{{ $orders->phone }}</td>
                                <td>{{ $orders->email }}</td>
                                <td>{{ $orders->address }}, {{ $orders->postcode }}, {{ $orders->city }}, {{ $orders->state }}, {{ $orders->country }}</td>
                                <td>{{ $orders->note }}</td>
                                <td>{{ $orders->status }}</td>
                                <td>
                                    <a href="#" class="btn btn-info" title="Edit Data"><i class="fa fa-pencil">Edit</i></a>
                                    <a href="#" class="btn btn-danger" title="Delete Data" id="delete">Delete<i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
</div><!-- /#wrapper -->

@endsection
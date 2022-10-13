@extends('backend.admin_master')
@section('content')

<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row" id="main" >
                <div class="container" >
                    <h2>All Combo List</h2>           
                    <table id="listTable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($combo as $combos )
                            <tr>
                                <td><img src={{ $combos->gallery }}></td>
                                <td>{{ $combos->name }}</td>
                                <td>{{ $combos->quantity }}</td>
                                <td>RM {{ $combos->price }}</td>
                                <td>{{ $combos->description }}</td>
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
@extends('backend.admin_master')
@section('content')

<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row" id="main" >
                <div class="container" >
                    <h2>All Product List</h2>           
                    <table id="listTable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Link</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($slider as $sliders )
                            <tr>
                                <td><img src={{ $sliders->image }}></td>
                                <td>{{ $sliders->name }}</td>
                                <td>{{ $sliders->description }}</td>
                                <td>{{ $sliders->link }}</td>
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
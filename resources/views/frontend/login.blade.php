@extends('master')
@section('content')  
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="login" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail">Email Address</label>
                    <input type="email" name="email" class="form-control" placeholder="your email" aria-describedby="basic-addon2">
                </div>
            
                <div class="form-group">
                    <label for="exampleInputPassword">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="password" aria-describedby="basic-addon2">
                </div>
                
                <button type="submit" class="btn btn-default">Login</button>
            </form>
        </div>
    </div>
</div>
@endsection
@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <a href="/">< Go Back</a>
        <div class="col-sm-6">
            <img class="detail-img" src="{{asset($product['gallery'])}}" alt="">
        </div>
        <div class="col-sm-6">
            <h2></h2>
            <h2>{{$product['name']}}</h2>
            <h3>Price :RM {{$product['price']}}</h3>
            <h4>Details: {{$product['description']}}</h4>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input class="form-control prodQty" type="number" id="quantity" name="quantity" min="1" max="{{ $product['quantity'] }}" value="1" required>
                <input type="hidden" name="product_id" value={{ $product['id'] }}>
                <button class="btn btn-primary addToCart-btn"> Add To Cart </button>
                
        </div>
    </div>
    
    <br><br>

    <div class="product-wrapper">
        <h3>Feedback & Review</h3>
        <div class="our-product">
            Review
        </div>
    </div>
</div>
@endsection
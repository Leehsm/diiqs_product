@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{asset($product['gallery'])}}" alt="">
        </div>
        <div class="col-sm-6">
            <a href="/">Go Back</a>
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

    {{-- <div class="product-wrapper">
        <h3>Related Product</h3>
        @foreach ($related as $products )
            <div class="our-product">
                <a href="../detail/{{ $products['id'] }}">
                    <img class="our-product-img" src={{ asset($products['gallery']) }}>
                    <div class="">
                        <h3>{{ $products['name'] }}</h3>
                    </div>
                </a>
            </div>
        @endforeach
    </div> --}}
</div>
@endsection
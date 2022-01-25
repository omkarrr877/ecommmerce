@extends('master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img src="{{$product['gallery']}}" alt="">
        </div>
        <div class="col-sm-6 mt-5 pt-4">
            <a href="/" class="">Go Back</a>
            <h2 class="title h1 my-4">{{$product['name']}}</h2>
            <h3>Price : <span class="lead">{{$product['price']}}</span></h3>
            <h4>Details : <span class="lead">{{$product['description']}}</span></h4>
            <h4>Category : <span class="lead">{{$product['category']}}</span></h4>
<br><br>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value={{$product['id']}}>
                <button class="btn btn-danger">Add To Cart</button>
            </form>
            <button class="btn btn-success">Buy Now</button>
        </div>
    </div>
</div>


@endsection
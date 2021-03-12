@extends('master')

@section('content')
<div class="container">
 <div class="row">
   <div class="col-sm-6"> 
    <img class="detail-img" src="{{$product['gallery']}}" alt="phone">
   </div>
   <div class="col-sm-6"> 
    <a href="/">Previous Page</a>
    <h2>Name: {{$product['name']}}</h2>
    <h3>Price: {{$product['price']}}</h3>
    <h4>Category: {{$product['category']}}</h4>
    <h5>Description: {{$product['description']}}</h5>
    <br><br>
    <form action="/add_to_cart" method="POST">
      <input type="hidden" name="product_id" value="{{$product['id']}}">
      @csrf
      <button class="btn btn-success">Add To Cart</button>

    </form>
        <br><br>
    <button class="btn btn-primary">Buy Now</button>
    <br><br>
   </div>
 </div>

</div>


@endsection
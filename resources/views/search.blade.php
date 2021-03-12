@extends('master')
@section('content')

<div class="custom-product">
  <div class="col-sm-4">
    <a href="#">Filter</a>
  </div>
 <div class="col-sm-4">
   <div class="trending-wrapper">
          <h1>Searched Products Result</h1>
    @foreach($products as $item)

    <div class="searched-items">
     
    <a href="detail/{{$item['id']}}">
       <img class="trending-img" src="{{$item['gallery']}}">
      
       <div class="">
       <h3>{{$item['name']}}</h3>      
       <h4>{{$item['description']}}</h4>   
      </div>
    </a>
    @endforeach
   </div>
   </div>
</div>
@endsection
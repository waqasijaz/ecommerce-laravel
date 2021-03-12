@extends('master')
@section('content')

<div class="custom-product">
    <div class="col-sm-6">
    <h3>Order Details</h3>
    <table class="table table-striped">
    <tbody>
      <tr>
        <td>Price</td>
        <td>{{$total}}</td>
        
      </tr>
      <tr>
        <td>Tax</td>
        <td>0 Rupees</td>
        
      </tr>
      <tr>
        <td>Delivery</td>
        <td>100</td>
      </tr>
      <tr>
        <td>Total Amount</td>
        <td>{{$total+100}}</td>
      </tr>
    </tbody>
  </table>
<form action="orderplace" method="POST">
    @csrf
  <div class="form-group">
        <label for="address">Address:</label>
        <textarea placeholder="enter address" name="address" class="form-control"></textarea>
        </div>
        <div class="form-group">
        <label for="">Payment Method:</label>
        <p> <input type="radio" value="cash" name="payment"> <span> Debit Card </span></p>   
        <p> <input type="radio" value="cash" name="payment"> <span> Credit Card </span></p>   
        <p> <input type="radio" value="cash" name="payment"><span> Cash On Delivery </span></p>   
    </div>
      <button type="submit" class="btn btn-default">Order Now</button>
</form>
    </div>
</div>
@endsection

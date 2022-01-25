@extends('master')
@section("content")
<div class="custom-product">
     <div class="col-sm-10">

        <table class="table table-striped">
  
  <tbody>
    <tr>
    
      <td>Amount</td>
      <td>$ {{ $total }}</td>
      
    </tr>
    <tr>
     
      <td>Tax</td>
      <td>$ 0</td>
      
    </tr>
    <tr>
    
      <td>Delivery</td>
      <td>10 $</td>
      
    </tr>

     <tr>
    
      <td>Total Amount</td>
      <td>{{ $total + 10 }}</td>
      
    </tr>

  </tbody>
</table>

<div>
    <form action="/orderplace" method="POST">
      @csrf
  <div class="form-group">
    <label for="pwd"><strong>Enter Your Address</strong>  </label> <br> <br>
    <textarea name="address" placeholder="Enter your Address"  class="form-control" id="" > </textarea>
  </div>
  <div class="form-group">
    <label for="pwd"><strong>Payment Method</strong>  </label> <br> <br>
    <input type="radio" value="cash" name="payment"> <span>Online Payment</span> <br> <br>
    <input type="radio" value="cash" name="payment"> <span>EMI Payment</span> <br> <br>
    <input type="radio" value="cash" name="payment"> <span>Payment On Delivery</span> <br> <br>
  </div>
 
  <button type="submit" class="btn btn-primary">Order Now</button>
</form>


</div>
       
        
       </div>
</div>
@endsection 
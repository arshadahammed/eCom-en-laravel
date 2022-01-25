@extends('master')
@section("content")
<div class="custom-product">
     <div class="col-sm-10">
        <div class="trending-wrapper">
            <h2>Cart List</h2>
            <a class="btn btn-success"
            href="ordernow">Order Now</a> <br> <br>
            
            @foreach($products as $item)
            <div class="row search-item cart-list-devider">
              <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                <img class="trending-image" src="{{$item->gallery}}">
                 
                     </a>
              </div>

              <div class="col-sm-3">
                
                 <div class="">
                 <h3>{{$item->name}}</h3>
                  <h5>{{$item->discription}}</h5>
                    </div>
                     
              </div>

              <div class="col-sm-3">
                
                <a href="/removecart/{{ $item->cart_id }}" class="btn btn-warning">Remove from Cart</a>
                
                    
              </div>
             </div>
             @endforeach
          </div>
           <a class="btn btn-success"
            href="ordernow">Order Now</a> <br> <br>
      </div>
    </div>
</div>
@endsection 
@extends('master')
@section("content")
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 offset-md-3">
<form action="register" method="POST">
    @csrf

     <div class="mb-3">
   <label for="exampleInputEmail1" class="form-label">User Name</label>
    <input type="text" name="name" class="form-control" placeholder="User Name">
   
  </div>


  <div class="mb-3">
   <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" placeholder="Email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control"  placeholder="Password">
  </div>

  <button type="submit" class="btn btn-primary">Register</button>
  {{-- dfdvd  --}}
</form>
</div>
</div>
</div>
@endsection 
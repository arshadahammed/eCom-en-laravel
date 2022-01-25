 <?php 
 use App\Http\Controllers\ProductController;
 $total=0;
 if(Session::has('user')){
$total = ProductController::CartItem();
 }
 
 ?> 
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">E-comm</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="myorders">Orders</a>
        </li>
              
      </ul>
      <form action="/search" class="d-flex">
        <input class="form-control search-box" name="query" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>

      </form>
    
    </div>     
  </div>
        <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
         <li class="nav-item">
          <a class="nav-link" href="/cartlist">cart({{ $total }})</a>
           </li>
           @if (Session::has('user'))
             
         <li class="dropdown ">
        <a class="dropdown-toggle nav-link " data-toggle="dropdown" href="#">{{ Session::get('user')['name'] }}
        <span class="caret"></span></a>
        <ul class="dropdown-menu nav-item ">
          <li ><a href="/logout"class="nav-link">logout</a></li>
         
        </ul>
      </li>
      @else
       <li>
          <a class="nav-link" href="/login">Login</a>
           </li>
             <li>
          <a class="nav-link" href="/register">Register</a>
           </li>
      @endif
             </ul>
          </div>
</nav>
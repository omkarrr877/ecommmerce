<?php 
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user')){
$total=ProductController::cartItem();
}
?>

<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark primary-color pink darken-4">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="/">Ecommmerce</a>
  
    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
      aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">
  
      <!-- Links -->
      <ul class="navbar-nav mx-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
  
        <!-- Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">Dropdown</a>
          <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
  
      </ul>
      <!-- Links -->
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link btn" href="#">
        <i class="fas fa-shopping-cart"></i>
      Cart <span class="badge badge-danger ml-2">{{$total}}</span>
      </a>
    </li>
@if (Session::has('user'))
            <!--Dropdown primary-->
<li class="nav-item dropdown">
  <!--Trigger-->
  <a class="nav-link dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false">{{Session::get('user')['name']}}</a>
  <!--Menu-->
  <div class="dropdown-menu dropdown-primary">
    <a class="dropdown-item" href="/logout">Logout</a>
  </div>
</li>
    @else
    <li class="nav-item">
      <a class="nav-link btn" href="/login">
        Login
      </a>
    </li>
@endif
  </ul>

    </div>
    <!-- Collapsible content -->
  
  </nav>
  <!--/.Navbar-->
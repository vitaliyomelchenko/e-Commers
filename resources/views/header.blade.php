<?php
use App\Http\Controllers\ProductController;
$item = 0;
if(Session('user'))
{
  $item = ProductController::cartItem();
}
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
    <a class="navbar-brand" href="/">E-Commers</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('ordersList')}}">Orders</a>
          </li>
        </ul>
        
        <form action="{{ route('search')}}" class="d-flex">
          <input class="form-control me-2 search-box" type="search" name="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-primary" type="submit">Search</button>
        </form>
        <a class="nav-link pull-right" href="{{route('cartList')}}" tabindex="-1">Cart({{$item}})</a>
        @if (Session('user'))
            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  {{Session::get('user')->name}}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="{{ route('logout')}}">Log Out</a></li>
                </ul>
            </div>
        @else
          <a class="nav-link" href="{{ route('registration')}}">Registration</a>
        @endif
        
      </div>
    </div>
  </nav>
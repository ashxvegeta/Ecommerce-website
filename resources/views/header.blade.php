<?php

use App\Http\Controllers\Productcontroller;

$total = 0;

if(Session::has('user')){

$total =  Productcontroller::countcartproduct();




}


?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light shadow">
<div class="container d-flex justify-content-between align-items-center">

<a class="navbar-brand text-success logo h1 align-self-center" href="index.html">
Zay
</a>

<button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
<div class="flex-fill">
<ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
<li class="nav-item">
<a class="nav-link text-success" href="/">Home</a>
</li>
<li class="nav-item">
<a class="nav-link text-success" href="about.html">About</a>
</li>
<li class="nav-item">
<a class="nav-link text-success"  href="shop.html">Shop</a>
</li>
<li class="nav-item">
<a class="nav-link text-success" href="contact.html">Contact</a>
</li>


<li class="nav-item">
<a class="nav-link text-success" href="/registration_form">Registration</a>
</li>


<li class="nav-item">
@if(Session::has('user'))
<a class="nav-link text-sccess" href="/orders">Orders</a>

@endif
</li>

<li class="nav-item">
@if(Session::has('user'))
<a class="nav-link text-success" href="/logout">Logout</a>
@else
<a class="nav-link text-success" href="/login">Login</a>
@endif
</li>






</ul>
</div>
<a class="nav-icon position-relative text-decoration-none" href="/cartlist">
<i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
<span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">{{$total}}</span>
</a>

<div class="navbar align-self-center d-flex ml-5">
<div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
<div class="input-group">
<input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
<div class="input-group-text">
<i class="fa fa-fw fa-search"></i>
</div>
</div>
</div>
<form action="/search" method="GET">
{{-- <input type="text" name="query" placeholder="Search products">
<button type="submit">Search</button> --}}

<div class="row">
<div class="col-sm-8">
<input type="text" name="query" placeholder="Search products" class="form-control">
</div>
<div class="col-sm-4">
<button type="submit" class="btn btn-primary">Search</button>
</div>
</div>
</form>


</div>
</div>

</div>
</nav>
</body>
</html>
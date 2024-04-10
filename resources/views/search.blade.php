@extends('master')

@section('content')
<pre>


</pre>

<h6 class="ml-5">Showing-{{$count}} Result</h6>


<div class="ml-5 mt-5">
SortBY   <a href="/search?sort=price_low" class="ml-5" style="text-decoration: none">Price-Low to High</a>
<a href="{{ route('search', ['sort' => 'price_high']) }}" class="ml-5" style="text-decoration: none">Price- High  to Low</a>
</div>



@if(count(($products)))




<section class="">
<div class="container py-5">
<div class="row text-center py-3">
<div class="col-lg-6 m-auto">

</div>
</div>
<div class="row">
@foreach ($products as $product)
<div class="col-12 col-md-4 mb-4">
<div class="card h-100" style="width: 250px;">
<a href="detail/{{$product['id']}}">
<img src="photo/{{$product['gallary']}}" class="card-img-top" alt="..." height="300px"  width="150vw">
</a>
<div class="card-body">
<ul class="list-unstyled d-flex justify-content-between">
<li>
<i class="text-warning fa fa-star"></i>
<i class="text-warning fa fa-star"></i>
<i class="text-warning fa fa-star"></i>
<i class="text-muted fa fa-star"></i>
<i class="text-muted fa fa-star"></i>
</li>
<li class="text-muted text-right">${{$product['price']}}</li>
</ul>
<a href="detail/{{$product['id']}}" class="h2 text-decoration-none text-dark">{{$product['name']}}</a>
<p class="card-text">
{{$product['description']}}  
</p>
<p class="text-muted">{{$product['category']}}</p>
</div>
</div>
</div>
@endforeach


</div>
</div>
</section>

@else

<p class="text-center mt-5">No products found.</p>
@endif


<pre>








</pre>
@endsection
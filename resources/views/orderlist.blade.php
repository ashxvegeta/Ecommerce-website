@extends('master')
@section('content')

<section class="vh-100" >
<div class="container h-100" >
<div class="" style=";width:150vh">
<div class="col">
<br>

<div class="card mb-4">

@foreach($orders as $order)
<div class="card-body p-4">

<div class="row align-items-center">
<div class="col-md-2">
  <img src="photo/{{$order->gallary}}"
    class="img-fluid" alt="Generic placeholder image" style="height:150px;">
</div>
<div class="col-md-2 d-flex justify-content-center">
  <div>
    <p class="small text-muted mb-4 pb-2">Name</p>
    <p class="lead fw-normal mb-0">{{$order->name}}</p>
  </div>
</div>
<div class="col-md-2 d-flex justify-content-center">
  <div>
    <p class="small text-muted mb-4 pb-2">Category</p>
    <p class="lead fw-normal mb-0">
        {{$order->category}} </p>
  </div>
</div>
<div class="col-md-2 d-flex justify-content-center">
  <div>
    <p class="small text-muted mb-4 pb-2">Description</p>
    <p class="lead fw-normal mb-0">{{$order->description}}</p>
  </div>
</div>
<div class="col-md-2 d-flex justify-content-center">
  <div>
    <p class="small text-muted mb-4 pb-2">Price</p>
    <p class="lead fw-normal mb-0">${{$order->price}}</p>
  </div>
</div>
<div class="col-md-2 d-flex justify-content-center">
  
</div>
</div>

</div>
<hr>
@endforeach




</div>
{{ $orders->links() }}



</div>
</div>
</div>
</section>







<pre>
















</pre>
@endsection
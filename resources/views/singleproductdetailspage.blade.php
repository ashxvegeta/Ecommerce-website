@extends('master')
@section('content')

@if(session('success'))
<div class="alert alert-success">
{{ session('success') }}
</div>
@endif


<pre>

</pre>



{{-- {{$product}} --}}





<div class="container custom-detail mt-5">
<div class="row">

<div class="col-6">
<img src="{{asset('photo/'.$product['gallary'])}}" alt=""  class="shadow-lg" style="height:350px;width:300px">

<pre>

</pre>
<form action="/addtocart" method="post">
@csrf
<input type="hidden" value="{{$product['id']}}" name="product_id" placeholder="">
<button class="btn btn-success"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add to cart</button>
</form>
<br>
<a href="placeorder" class="btn btn-primary"><i class="fa fa-money" aria-hidden="true"></i> Buy now</a>
</div>


<div class="col-6">
<a href="/"><-Go Back</a>
<h2>{{$product['name']}}</h2>
<span class="bg-success p-1 text-white">4.4 <i class="fa fa-star" aria-hidden="true"></i></span>
<p>Price:₹ {{$product['price']}} <del>₹50,9908% off</del></p>
<p>Description: {{$product['description']}}</p>
<p>Category: {{$product['category']}}</p>
<p><i class="fa fa-tag text-success" aria-hidden="true"></i> Special Price₹100 off with cashback coupon on First OrderT&C</p>
<p><i class="fa fa-tag text-success" aria-hidden="true"></i> Bank OfferFlat ₹25 Instant Cashback on Paytm UPI. Min Order Value ₹250. Valid once per Paytm accountT&C</p>
<p><i class="fa fa-tag text-success" aria-hidden="true"></i> Bank OfferFlat ₹100 Instant Cashback on Paytm Wallet. Min Order Value ₹1000. Valid once per Paytm accountT&C</p>
<p><i class="fa fa-tag text-success" aria-hidden="true"></i> Bank Offer5% Cashback on Flipkart Axis Bank CardT&C</p>
</div>

</div>

</div>


<pre>





</pre>
@endsection





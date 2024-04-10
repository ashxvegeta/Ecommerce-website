<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


@extends('master')


@section('content')
{{-- {{$product}} --}}

<section class="vh-100" >
<div class="container h-100">
<div class="row d-flex justify-content-center align-items-center h-100">
<div class="col">
<p><span class="h2">Shopping Cart </span><span class="h4">(1 item in your cart)</span></p>

<div class="card mb-4">

@foreach ($product as $products)
<div class="card-body p-4">

<div class="row align-items-center">
<div class="col-md-2">
<img src="photo/{{$products->gallary}}"
class="img-fluid" alt="Generic placeholder image" style="height:150px;">
</div>
<div class="col-md-2 d-flex justify-content-center">
<div>
<p class="small text-muted mb-4 pb-2">Name</p>
<p class="lead fw-normal mb-0">{{$products->name}}</p>
</div>
</div>
<div class="col-md-2 d-flex justify-content-center">
<div>
<p class="small text-muted mb-4 pb-2">Category</p>
<p class="lead fw-normal mb-0">
{{$products->category}}</p>
</div>
</div>
<div class="col-md-2 d-flex justify-content-center">
<div>
<p class="small text-muted mb-4 pb-2">Description</p>
<p class="lead fw-normal mb-0">{{$products->description}}</p>
</div>
</div>
<div class="col-md-2 d-flex justify-content-center">
<div>
<p class="small text-muted mb-4 pb-2">Price</p>
<p class="lead fw-normal mb-0">${{$products->price}}</p>
</div>
</div>
<div class="col-md-2 d-flex justify-content-center">
<div>
<p class="small text-muted mb-4 pb-2">Action</p>
<p class="lead fw-normal mb-0"><a href="/removecart/{{$products->cart_id}}"  onclick="return confirmDelete();">Remove</a></p>
</div>
</div>
</div>

</div>



@endforeach

</div>


<div class="d-flex justify-content-end">

<a  class="btn btn-primary btn-lg" href="/ordrnow">Order now</a>
</div>

</div>
</div>
</div>
</section>

<pre>



</pre>
@endsection


<script>
  async function confirmDelete() {
    const result = await Swal.fire({
    title: 'Are you sure?',
    text: 'This product will be removed from your cart.',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#d33',
    cancelButtonColor: '#3085d6',
    confirmButtonText: 'Yes, remove it!',
    cancelButtonText: 'Cancel'
  }).then((result) => {
    if (result.isConfirmed) {
      // If the user clicks "OK", allow the link to be followed
      return true;
    } else {
      // If the user clicks "Cancel", prevent the link from being followed
      return false;
    }
  });
}

</script>
<!DOCTYPE html>
<html lang="en">
<head>

<!-- Fontawesome Icons -->
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Meta Tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap css -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Animation -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<!-- wow-->
<link rel="stylesheet" href="https://cdn.boomcdn.com/libs/wow-js/1.3.0/wow.min.js"/>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Admin Panel</title>
<!-- plugins:css -->
<link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
<link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
<!-- endinject -->
<!-- Plugin css for this page -->
<link rel="stylesheet" href="admin/assets/vendors/jvectormap/jquery-jvectormap.css">
<link rel="stylesheet" href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
<link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
<link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
<!-- End plugin css for this page -->
<!-- inject:css -->
<!-- endinject -->
<!-- Layout styles -->
<link rel="stylesheet" href="admin/assets/css/style.css">
<!-- End layout styles -->
<link rel="shortcut icon" href="admin/assets/images/favicon.png" />
</head>
<body>
<div class="container-scroller">
<div class="row p-0 m-0 proBanner" id="proBanner">
<div class="col-md-12 p-0 m-0">
<div class="card-body card-body-padding d-flex align-items-center justify-content-between">
<div class="ps-lg-1">
<div class="d-flex align-items-center justify-content-between">
<p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
<a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
</div>
</div>
<div class="d-flex align-items-center justify-content-between">
<a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
<button id="bannerClose" class="btn border-0 p-0">
<i class="mdi mdi-close text-white me-0"></i>
</button>
</div>
</div>
</div>
</div>

<!-- partial:partials/_sidebar.html -->
@include('admin/navbar')



<!-- partial -->
<div class="container-fluid page-body-wrapper">
<!-- partial:partials/_navbar.html -->
<nav class="navbar p-0 fixed-top d-flex flex-row">
<div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
<a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
</div>

@include('admin/adminheader')

</nav>
<!-- partial -->
<div class="main-panel">
<div class="content-wrapper">



<h1 class="text-center">Edit  Products</h1>


<div class="container">


    <form action="{{route('admin.update')}}" method="post" enctype="multipart/form-data">
    
    @csrf
    
    
    <input type="hidden" name="id"  class="form-control" value="{{$product['id']}}">
    
    <label for="">name</label>
    <input type="text" name="name"  class="form-control" value="{{$product['name']}}">
    
    <label for="">price</label>
    <input type="text" name="price"  class="form-control" value="{{$product['price']}}">
    
    
    <label for="">category</label>
    <input type="text" name="category"  class="form-control" value="{{$product['category']}}">
    
    
    <label for="">description</label>
    <input type="text" name="description"  class="form-control" value="{{$product['description']}}">
    
    
    <label for="">image</label>
    <input type="file" name="image" id="" class="form-control">
    
    <br>

    <input type="submit" class="btn btn-primary">
  
    
    
    </form>
    </div>


{{-- <div  style="width:1000px;"  class="mx-auto" >
<form  action="updat" method="post" enctype="multipart/form-data">
@csrf

<input  value="{{$product['id']}}"  type="hidden" name="id" id="id" class="form-control">


<div class="modal-body">
<label for="email">Product Name</label>
<input  value="{{$product['name']}}"  type="text" name="name" id="name" class="form-control">

<label for="password">Price</label>
<input type="number" value="{{$product['price']}}"  name="price" id="price" class="form-control">

<label for="password">Category</label>
<input type="text" value="{{$product['category']}}"   name="category" id="category" class="form-control">


<label for="description">Description</label>
<input type="text" value="{{$product['description']}}"    name="description" id="description" class="form-control">


<label for="image">Images</label>
<input type="file" name="image" id="image" class="form-control text-white">


</div> --}}
{{-- 
<input type="submit" class="btn btn-primary">
<input type="reset" class="btn btn-danger"> --}}

</form>
</div>


</div>
<!-- content-wrapper ends -->
<!-- partial:partials/_footer.html -->
<footer class="footer">
<div class="d-sm-flex justify-content-center justify-content-sm-between">


</div>
</footer>
<!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
<script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
<script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
<script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
<script src="admin/assets/js/jquery.cookie.js" type="text/javascript"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="admin/assets/js/off-canvas.js"></script>
<script src="admin/assets/js/hoverable-collapse.js"></script>
<script src="admin/assets/js/misc.js"></script>
<script src="admin/assets/js/settings.js"></script>
<script src="admin/assets/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="admin/assets/js/dashboard.js"></script>
<!-- End custom js for this page -->
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Corona Admin</title>
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



<h1 class="text-center">Admin Panel</h1>

<div class="row mt-5">



<div class="col-xl-3 col-sm-6 grid-margin stretch-card">
<div class="card">
<div class="card-body">
<div class="row">
<div class="col-9">
<div class="d-flex align-items-center align-self-start">
<h3 class="mb-0">{{$user}}</h3>

</div>
</div>
<div class="col-3">
<div class="icon icon-box-success ">
<span class="mdi mdi-arrow-top-right icon-item"></span>
</div>
</div>
</div>
<h6 class="text-muted font-weight-normal"> Total Customers</h6>
</div>
</div>
</div>



<div class="col-xl-3 col-sm-6 grid-margin stretch-card">
<div class="card">
<div class="card-body">
<div class="row">
<div class="col-9">
<div class="d-flex align-items-center align-self-start">
<h3 class="mb-0">{{$product}}</h3>

</div>
</div>
<div class="col-3">
<div class="icon icon-box-success">
<span class="mdi mdi-arrow-top-right icon-item"></span>
</div>
</div>
</div>
<h6 class="text-muted font-weight-normal">Total Products</h6>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 grid-margin stretch-card">
<div class="card">
<div class="card-body">
<div class="row">


<div class="col-9">
<div class="d-flex align-items-center align-self-start">
<h3 class="mb-0">
{{$order}}


</h3>
{{-- <p class="text-danger ms-2 mb-0 font-weight-medium">-2.4%</p> --}}
</div>
</div>
<div class="col-3">
<div class="icon icon-box-danger">
<span class="mdi mdi-arrow-bottom-left icon-item"></span>
</div>
</div>
</div>
<h6 class="text-muted font-weight-normal">Total Orders</h6>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 grid-margin stretch-card">
<div class="card">
<div class="card-body">
<div class="row">
<div class="col-9">
<div class="d-flex align-items-center align-self-start">
<h3 class="mb-0">$31.53</h3>
<p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p>
</div>
</div>
<div class="col-3">
<div class="icon icon-box-success ">
<span class="mdi mdi-arrow-top-right icon-item"></span>
</div>
</div>
</div>
<h6 class="text-muted font-weight-normal">Expense current</h6>
</div>
</div>
</div>
</div>

{{-- practice section --}}

<?php

$users = DB::table('users')->get();			
// print_r($users);		
?>


<select name="users" id="users"  onchange="fun()">
@foreach($users as $user)
<option value="{{$user->id}}">{{$user->name}}</option>
@endforeach 
</select>



<table id="table-id" class="table text-white">
<thead>
<tr>
<th>Name</th>
<th>Email</th>
{{-- <th>Password</th> --}}
</tr>
</thead>
<tbody id="tbody"></tbody>
</table>

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


<script>


function fun(){
var id = $('#users').val();
if (id == "") {
$("#txtHint").html("");
} else {
$.ajax({
url: "{{url('/getuser')}}/"+id,
type: "GET",
success: function(data) {

if(data){
var rows = "";
$.each(data, function(key, val){
// alert(val);
rows += "<tr>";
rows += "<td>" + val.name +"</td>";
rows += "<td>" + val.email +"</td>";
rows += "</tr>";
});
// alert(rows);
$('#tbody').html(rows);
}



// if(data){

//   var rows = "";
//   $.each(data, function(key, value){
//     rows += "<tr>";
//     rows += "<td>" + value.name + "</td>";
//     rows += "<td>" + value.email + "</td>";
//     // rows += "<td>" + value.password + "</td>";
//     rows += "</tr>";
//   });
//   $('#tbody').html(rows);
// }
}
});
}
}


</script>
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
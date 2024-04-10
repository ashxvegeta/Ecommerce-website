<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
@extends('master')


@section('content')

<h1 class="text-center mt-5">Login Page</h1>
<hr>
<!-- Display validation errors -->


<div class="container  p-4 w-50 mt-5" style="border-radius:50px;background-color:aliceblue">
<form action="login" method="post" enctype="multipart/form-data" onsubmit="return validate()">
@csrf
<div class="form-group">
<label for="exampleInputEmail1">Email address</label>
<input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
<span id="v_email"></span>
@if($errors->has('email'))
<p class="text-danger">{{ $errors->first('email')}}</p>
@endif
</div>


<div class="form-group">
<label for="exampleInputPassword1">Password</label>
<input type="password" class="form-control" name="password" id="password"  placeholder="Password">
<span id="v_password"></span>
@if($errors->has('password'))
<p class="text-danger">{{ $errors->first('password')}}</p>
@endif
</div>

<button type="submit" class="btn btn-primary">Submit</button>
</form> 
</div>


<pre>









</pre>


@endsection 

<script>
function validate() {
var email = document.getElementById('email').value;
var password = document.getElementById('password').value;

if (email == "") {
document.getElementById('v_email').innerHTML="<p style='color:red'>Please enter your email address</p>";
return false;
}

if(password==""){
document.getElementById('v_password').innerHTML="<p style='color:red'>Please enter your password</p>";
return false;
}

}
</script>
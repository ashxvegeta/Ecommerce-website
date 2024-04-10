<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>


@extends('master')

@section('content')


<h1 class="text-center mt-5">Registration Page</h1>
<hr>

@if(Session::has('success'))
<p class="alert {{ Session::get('alert-success', 'alert-success') }}">{{ Session::get('success') }}</p>
@endif 


<div class="container  p-4 w-50 mt-5" style="border-radius:50px;background-color:aliceblue">
<form action="userregistration" method="post" enctype="multipart/form-data">
@csrf
<input class="form-control" type="hidden" value="{{csrf_token()}}" id="token" name="token">
<input type="hidden" name="type" value="user">

<div class="form-group">
<label for="exampleInputEmail1">Name</label>
<input type="text" class="form-control" name="name"  placeholder="Enter email">
@if($errors->has('name'))
<p class="text-danger">{{ $errors->first('name')}}</p>
@endif
</div>

<div class="form-group">
<label for="exampleInputEmail1">Email address</label>
<input type="email" class="form-control" name="email" id="email"  placeholder="Enter email">
<span style="color:red" id="email_check"></span>
@if($errors->has('email'))
<p class="text-danger">{{ $errors->first('email')}}</p>
@endif
</div>
<div class="form-group">
<label for="exampleInputPassword1">Password</label>
<input type="password" class="form-control" name="password" placeholder="Password">
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
   $(document).ready(function(){
     $('#email').keyup(function(){
        var email =$('#email').val();
        var token = $('#token').val();
        $.ajax({
            url:'chkemail',
            method:'POST',
            data:{email:email,_token: token},
            success:function(data){
                if (data==1) {
                    document.getElementById('email_check').innerHTML="this email is already in use";
                }
                else{
                    document.getElementById('email_check').innerHTML="<p style='color:green'>this email available</p>";

                }
            }
        })
     })
    })
</script>
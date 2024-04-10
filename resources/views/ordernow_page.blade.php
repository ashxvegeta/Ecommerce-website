@extends('master')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if (Session::has('danger'))
    <div class="alert alert-danger">
        {{ Session::get('danger') }}
    </div>
@endif 
</body>
</html>

<h1 class="text-center mt-5">Order Now Page</h1>   

<div class="container p-5 mt-5 shadow-lg" style="border:1px solid grey">

    <table class="table ">
        <tr>
            <th>Amount</th>
            <th>{{$amount}}</th>
        </tr>

        <tr>
            <th>Tax</th>
            <th>10</th>
        </tr>

        <tr>
            <th>Delivery</th>
            <th>20</th>
        </tr>

        <tr>
            <th>Total Amount</th>
            <th>{{$amount+10+20}}</th>
        </tr>
    </table>


    <form action="placeorder" method="post">
        @csrf
       <label for="" style="font-weight:bold">Enter Address</label>
        <textarea  id="" cols="10" rows="2" class="form-control" name="address"></textarea>
        
        <label for="" style="font-weight:bold" class="mt-3">Payment Method</label><br>

       
        <input type="radio" name="payment"  value="COD">COD  <br>
        <input type="radio" name="payment"  value="Cash On Delivery" >Cash On Delivery <br>
        <input type="radio" name="payment"  value="Emi" >Emi<br>




    <input type="submit" name="" id="" value="Place Order" class="btn btn-primary mt-3">

    </form>

</div>
<pre>


    
</pre>
@endsection
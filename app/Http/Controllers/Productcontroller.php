<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\product;

use App\Models\cart;

use App\Models\order;

// use Stripe\Stripe;
// use Stripe\Charge;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Session;

class Productcontroller extends Controller
{
//

function index(){
$products = product::all();
return view('product',compact('products'));
}

function singleproductdetailspage($id){

$product = product::find($id);
return view('singleproductdetailspage',compact('product'));


}


function add_to_cart(Request $req){

if($req->session()->has('user')){

$cart = new cart;

$cart->user_id = $req->session()->get('user')['id'];

$cart->product_id =   $req->product_id;
$cart->save();
Session::flash('success', 'Product added to cart successfully');
return redirect()->back();
}

else{
return redirect('/login');
}
}


static function countcartproduct(){
$user_id = Session::get('user')['id'];
return cart::where('user_id',$user_id)->count();
}



function cartlist(){
$user_id = Session::get('user')['id'];
$product =DB::table('carts')
->join('products','carts.product_id','=','products.id')
->where('carts.user_id',$user_id)
->select('products.*','carts.id as cart_id')
->get();
return view('cartlist',compact('product'));
}

function removecart($id){
Cart::destroy($id);
return redirect('/cartlist');
}



function ordrnow(){
$user_id = Session::get('user')['id'];
$amount = DB::table('carts')
->join('products','carts.product_id', '=', 'products.id')
->where('carts.user_id',$user_id)
->sum('products.price');
return view('ordernow_page',compact('amount'));
}

function placeorder(Request $req){

$user_id =  Session::get('user')['id'];
$allcart = cart::where('user_id',$user_id)->get();

foreach($allcart as $cart){
$order = new Order;
$order->product_id   =     $cart['product_id'];
$order->user_id   =     $cart['user_id'];
$order->status =  "pending";
$order->payment_method = $req->payment;
$order->payment_status = "pending";
$order->address = $req->address;
$order->save();
Session::flash('danger', 'Record was successfully deleted');                                                                                                 
cart::where('user_id',$user_id)->delete();

}
return redirect()->back();
}


// function placeorder(Request $req){
//     Stripe::setApiKey(env('STRIPE_SECRET'));
//     $user_id =  Session::get('user')['id'];
//     $allcart = cart::where('user_id',$user_id)->get();

//     foreach($allcart as $cart){
//         $order = new Order;
//         $order->product_id = $cart['product_id'];
//         $order->user_id = $cart['user_id'];
//         $order->status = "pending";
//         $order->payment_method = $req->payment;
//         $order->payment_status = "pending";
//         $order->address = $req->address;
//         $order->save();
//         cart::where('user_id',$user_id)->delete();

//         // Charge the customer's payment method using Stripe
//         Stripe::setApiKey(env('STRIPE_SECRET'));
//         Charge::create([
//             'amount' => $cart['price'] * 100, // Amount in cents
//             'currency' => 'usd',
//             'source' => $req->stripeToken,
//             'description' => 'Order for ' . $cart['product_name']
//         ]);
//     }

//     return redirect()->back();
// }





function orders(){
$user_id = Session::get('user')['id'];
$orders = DB::table('orders')
->join('products', 'orders.product_id', '=', 'products.id')
->where('user_id',$user_id)
->paginate(4);
return view('orderlist',compact('orders'));
}



function search(Request $request){

if ($request->has('query')) {
$query = $request->input('query');
$products= Product::where('name','like',"%{$query}%")->get();
$count= Product::where('name','like',"%{$query}%")->count();
}

if($request->has('sort')){

if($request->input('sort') == 'price_low'){
$products = Product::orderBy('price')->get();
$count = Product::orderBy('price')->count();

}

elseif ($request->input('sort') == 'price_high') {
$products = Product::orderByDesc('price')->get();
$count = Product::orderByDesc('price')->count();

}
}
// if ($request->has('sort')) {

// if ($request->input('sort') == 'price_low') {
// $products =  Product::orderBy('price')->get();


// } elseif ($request->input('sort') == 'price_high') {
// $products= Product::orderByDesc('price')->get();
// }
// }
return view('search',compact('products','count'));
}
}

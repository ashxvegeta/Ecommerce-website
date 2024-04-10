<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

use Illuminate\Support\Facades\DB;

class admincontroller extends Controller
{
//


function uploadproducts(){
$product = Product::get();
return view('admin/adminallproducts',compact('product'));

}


function addproucts(Request $request){
    // return $request;
$product = new product();
$product->name = $request->name;
$product->price = $request->price;
$product->category = $request->category;
$product->description = $request->description;
$product->type = $request->type;
//how to insrt and upload image
$image = $request->file('image');
$imageName = $image->getClientOriginalName(); 
$image->move(public_path('photo'), $imageName);//public/photo->thisis the path
$product->gallary = $imageName;
$product->save();
return redirect()->back();

}


function admindelete($id){
product::find($id)->delete();
return redirect()->back();
}


function admineditproduct(){
$id =  $_GET['id'];
$product = product::find($id);
return view('admin/admineditproduct',compact('product'));
}

function updateproducts(Request $request){

// return $request;
$id = $request->id;
$image = $request->file('image');
$imageName = $image->getClientOriginalName();
$image->move(public_path('photo'), $imageName); 

$data= [

'name'=>$request->name,
'price'=>$request->price,
'category'=>$request->category,
'description'=>$request->description,
'gallary'=>$imageName,
];
product::find($id)->update($data);
return redirect('uploadproducts');
}

function show($id){
    $user = DB::table('users')->where('id', $id)->first();
    // return response()->json(['product'=>$user]);


    return response()->json(['product'=>$user]);

}


}

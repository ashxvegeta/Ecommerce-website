<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\product;

use App\Models\order;




use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Session;

class usercontroller extends Controller
{
//

function login(Request $request) {

$request->validate([
'email' => 'required|email',
'password' => 'required|min:5',
]);

$user = User::where([
['email','=', $request->email]
])->first();

if($user && Hash::check($request->password,$user->password)){
if($user->type == "user"){
$request->session()->put('user',$user);
return redirect('/');           
}
else{
$request->session()->put('admin',$user);
// $users = user::get('name');
$user = user::all()->count();
$order = order::all()->count();
$product = product::all()->count();

return view('adminpage',compact('user','product','order'));
}

}

else{
return redirect()->back();
}




}

function registrationform(){
return view('registrationform');
}

function userregistration(Request $request){



$request->validate([
'name'=>'required',
'email' => 'required|email',
'password' => 'required|min:5',
]);    


$data = [
'name'=>$request->name,
'email'=>  $request->email,
'password'=> Hash::make($request->password),  
'type'=> $request->type
];
user::insert($data);
Session::flash('success', 'Registration successful!');
return redirect()->back();

}



function checkemail(Request $request){
$email = $request->input('email');
$query = User::where('email', $email)->first();
if ($query) {
    return 1;
}
else{
  return 0;
}
}

}

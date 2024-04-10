<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Usercontroller;

use App\Http\Controllers\Productcontroller;

use App\Http\Controllers\admincontroller;


use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/login', function () {
return view('login');
});

Route::post('/login',[Usercontroller::class,'login'] );

Route::get('/',[Productcontroller::class,'index']);

Route::get('/detail/{id}',[Productcontroller::class,'singleproductdetailspage']);

Route::post('/addtocart',[Productcontroller::class,'add_to_cart'] );

Route::get('/logout', function () {

Session::forget('user');
return redirect('/login');
});

Route::get('/adminlogout', function () {

Session::forget('admin');
return redirect('/login');
});

Route::get('/cartlist',[Productcontroller::class,'cartlist']);

Route::get('/removecart/{id}',[Productcontroller::class,'removecart']);

Route::get('/ordrnow',[Productcontroller::class,'ordrnow']);

Route::post('/placeorder',[Productcontroller::class,'placeorder']);

Route::get('/orders',[Productcontroller::class,'orders']);

Route::get('/registration_form',[Usercontroller::class,'registrationform']);

Route::post('/userregistration',[Usercontroller::class,'userregistration']);

Route::get('/search',[Productcontroller::class,'search'])->name('search');

Route::get('/uploadproducts',[admincontroller::class,'uploadproducts']);

Route::post('/add_proucts',[admincontroller::class,'addproucts']);

Route::get('/admindelete/{id}',[admincontroller::class,'admindelete']);

Route::get('/admin_edit',[admincontroller::class,'admineditproduct'])->name('admin.edit');

// Route::get('/update_data',[admincontroller::class,'updateproucts']);

Route::post('/update_data', [admincontroller::class, 'updateproducts'])->name('admin.update');

Route::get('/getuser/{id}', [admincontroller::class, 'show']);

Route::post('/chkemail',[usercontroller::class, 'checkemail']);











<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;


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

Route::get('/logout', function () {
//this session will erase the session data using the forget function
    Session::forget('user');
    return redirect('login');
});
Route::get('login',[UserController::class,'login']);
Route::post('login',[UserController::class,'checkLogin']);
Route::get('register',[UserController::class,'register']);
Route::post('register',[UserController::class,'registeration']);
Route::post('subscriber',[UserController::class,'subscriber']);

Route::get('admin',[AdminController::class,'adminLayout']);
Route::get('addadmin',[AdminController::class,'addadmin']);
Route::post('addadmin',[AdminController::class,'newAdmin']);

Route::get('/',[ProductController::class,'showProduct']);
Route::get('admin/addproduct',[ProductController::class,'addProduct']);
Route::post('admin/addproduct',[ProductController::class,'storeProduct']);
Route::get('showproduct',[ProductController::class,'showProduct']);
Route::get('details/{id}',[ProductController::class,'productDetails']);
Route::get('search',[ProductController::class,'searchProducts']);
Route::post('add_to_cart',[ProductController::class,'addToCart']);
Route::get('/cartlist',[ProductController::class,'cartList']);
Route::get('/removecart/{id}',[ProductController::class,'removeCart']);
Route::get('ordernow',[ProductController::class,'orderNow']);
Route::post('buynow',[ProductController::class,'buyNow']);
Route::post('/place_order',[ProductController::class,'PlaceOrder']);
Route::post('/place_order_now',[ProductController::class,'PlaceOrderNow']);
Route::get('/MyOrders',[ProductController::class,'MyOrders']);


Route::view('3','front.l3');
Route::view('4','front.l4');
Route::view('5','front.l5');

Route::view('productdemo','front.productdemo');



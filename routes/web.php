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

Route::get('/', function () {
    return view('front.home');
});
Route::get('login',[UserController::class,'login']);
Route::post('login',[UserController::class,'checkLogin']);
Route::get('register',[UserController::class,'register']);
Route::post('register',[UserController::class,'registeration']);

Route::get('admin',[AdminController::class,'adminLayout']);
Route::get('addadmin',[AdminController::class,'addadmin']);
Route::post('addadmin',[AdminController::class,'newAdmin']);


Route::get('admin/addproduct',[ProductController::class,'addProduct']);
Route::post('admin/addproduct',[ProductController::class,'storeProduct']);

Route::view('3','front.l3');
Route::view('4','front.l4');
Route::view('5','front.l5');


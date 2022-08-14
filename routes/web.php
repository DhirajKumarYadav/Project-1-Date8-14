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

Route::get('admin',[UserController::class,'adminLayout']);
Route::get('login',[UserController::class,'login']);
Route::get('register',[UserController::class,'register']);

Route::get('addadmin',[AdminController::class,'addadmin']);

Route::get('admin/addproduct',[ProductController::class,'addProduct']);
Route::post('admin/newproduct',[ProductController::class,'newProduct']);

Route::view('3','front.l3');
Route::view('4','front.l4');
Route::view('5','front.l5');


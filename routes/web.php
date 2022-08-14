<?php

use Illuminate\Support\Facades\Route;

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
Route::view('layout','front.layout');
Route::view('login','front.login');
Route::view('2','front.l2');
Route::view('3','front.l3');
Route::view('4','front.l4');
Route::view('5','front.l5');


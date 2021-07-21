<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;


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

Route::get('/login',function(){
    return view('login');
});


Route::post('/login',[UserController::class,'login'])->name('login');
Route::get('/',[ProductController::class,'index'])->name('home');
Route::get('/product/detail/{id}',[ProductController::class,'show_product_detail'])->name('productdetail');
Route::get('/product/search',[ProductController::class,'search'])->name('search');
Route::post('/product/add_to_card',[CartController::class,'add_to_cart'])->name('addtocart');





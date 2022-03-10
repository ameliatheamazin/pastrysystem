<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController; //declare the route
use App\Http\Controllers\UserController; //declare the route
use App\Http\Controllers\OrderController; //declare the Route
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\User;

Route::resource('Cart', 'CartController');
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
//for the home page
Route::get("/", [ProductController::class, 'showProd']);
//to route the item to add to cart
Route::get('/addToCart/{id}', [ProductController::class, 'addToCart']);
//to route the item to checkout
Route::get('/checkout', [ProductController::class, 'orderPaid']);
//for the cart page
Route::get("/cart", [ProductController::class, 'showCart']);



//Admin dashboard
Route::view("/admin", "admin.home");

//list all orders
Route::get('/admin/order', [OrderController::class, 'index']);
//to show 1 order
Route::get('/admin/order/{id}', [OrderController::class, 'show']);
//edit order details
Route::get('/admin/order/{id}/edit', [OrderController::class, 'showEdit']);
//edit order details
Route::post('/admin/order/{id}/edit', [OrderController::class, 'update']);
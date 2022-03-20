<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController; //declare the route
use App\Http\Controllers\UserController; //declare the route
use App\Http\Controllers\OrderController; //declare the Route
use App\Http\Controllers\AdminProductController; //declare the Route
use App\Http\Controllers\Products_OrderController; //declare the Route
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\User;
use App\Models\Products_Order;
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
Route::get('/add/{id}',[ProductController::class,'addQty']);
Route::get('/deduct/{id}',[ProductController::class,'deductQty']);
//to route the item to checkout
Route::get('/checkout', [OrderController::class, 'addOrder']);
Route::get('/orderPaid', [ProductController::class, 'orderPaid']);
// //to put save the products associated with the order
// Route::get('/addOrderProd',[Products_OrderController::class,'addOrderProd']);
//for the cart page
Route::get("/cart", [ProductController::class, 'showCart']);
//to the profile pages
Route::get("/profile", [UserController::class, 'showUser']);


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
//list all orders
Route::get('/admin/product', [AdminProductController::class, 'index']);
//to show 1 product
Route::get('/admin/product/{id}', [AdminProductController::class, 'show']);
//edit product details
Route::get('/admin/product/{id}/edit', [AdminProductController::class, 'showEdit']);
//edit product details
Route::post('/admin/product/{id}/edit', [AdminProductController::class, 'update']);

//add product details
Route::get("/admin/add/product", [AdminProductController::class, 'showAdd']);
//add product details
Route::post('/admin/add', [AdminProductController::class, 'add']);
//to delete 1 product
Route::get('/admin/product/{id}/delete', [AdminProductController::class, 'destroy']);
<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

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
//     return view('index');
// });

Route::get('user',[UserController::class,'index']);
Route::get('setting',[UserController::class,'pofileSetting']);
Route::get('orders',[UserController::class,'orders']);
Route::get('/admin','AdminController@index');
Auth::routes();

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/admin', function () {
      return view('admin.home');
    })->name('home');});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [ProductController::class, 'about']);

// Products
Route::get('products',[ProductController::class,'products']);
// Cart Routes
Route::get('/',[ProductController::class,'index']);
Route::get('cart',[ProductController::class,'cart'])->name('cart');
Route::post('add-to-cart',[ProductController::class,'addToCart'])->name('add.to.cart');
Route::patch('update-cart',[ProductController::class,'updateCart'])->name('update.cart');
Route::delete('remove-from-cart',[ProductController::class,'removeFromCart'])->name('remove.from.cart');
Route::get('checkout',[ProductController::class,'checkout']);

// Contact Query Routes
Route::get('contact', [ContactController::class, 'index']);
Route::post('contactQuery',[ContactController::class,'contactQuery']);

// Route::post('subscriber',[ContactController::class,'subscriber'])->name('subsriber.to.newsletter');
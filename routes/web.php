<?php

use App\Http\Controllers\BbController;
use App\Http\Controllers\GoodsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//view
Route::get('/', [GoodsController::class, 'homeview'])->name('home');
Route::get('/contacts',[BbController::class, 'contactsview'])->name('contacts');
Route::get('/shop', [GoodsController::class, 'shopview'])->name('shop');
Route::get('/about', [BbController::class, 'aboutview'])->name('about');
Route::get('/contacts', [BbController::class, 'contactsview'])->name('contacts');
Route::get('/register',[RegisterController::class, 'showregister'])->name('register');
Route::get('/login',[LoginController::class, 'showlogin'])->name('login');
Route::get('/profile', [UsersController::class,'profileview'])->name('profile');

//category
Route::get('/category/{category}', [GoodsController::class, 'categoryview'])->name('category');


//message
Route::get('/admin_message', [AdminController::class, 'adminmessageview'])->name('admin_message');
Route::post('/contacts', [BbController::class, 'contactssubmit'])->name('contact_submit');
Route::delete('/message/{id}', [AdminController::class, 'deletemessage'])->name('delete_message');

//register

Route::post('/register', [RegisterController::class, 'register']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

//ВЫВЕСТИ product

Route::get('/product_{id}', [GoodsController::class, 'productview'])->name('product');

// cart
Route::get('/cart', [UsersController::class,'cartview'])->name('cart');
Route::get('/cart', [CartController::class, 'index'])->name('cart')->middleware('auth');
Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
Route::delete('/cart/remove/{cart_id}', [CartController::class, 'remove'])->name('cart.remove');
Route::delete('/cart/clear', [CartController::class, 'clear'])->name('cart.clear');

//admin
Route::get('/admin', [AdminController::class,'adminview'])->name('admin');
Route::delete('/admin/delete/{product_id}',[AdminController::class, 'admin_delete_product'])->name('admin.delete');
Route::post('/admin/add_product', [AdminController::class,'admin_add_product'])->name('admin.add.product');
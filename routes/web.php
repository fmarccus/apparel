<?php

use App\Http\Controllers\ApparelController;
use App\Http\Controllers\CartController;
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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
//MANAGE USER ORDERS
Route::get('orders', [ApparelController::class, 'orders'])->name('apparel.orders');
Route::get('orders/show/{id}', [ApparelController::class, 'order_details'])->name('apparel.order_details');
Route::post('orders/change_order_status/{id}', [ApparelController::class, 'change_order_status'])->name('apparel.change_order_status');
//APPARELS SERVER SIDE
Route::get('apparels', [ApparelController::class, 'index'])->name('apparel.index');
Route::get('apparels/sort_type', [ApparelController::class, 'sort_type'])->name('apparel.sort_type');
Route::get('apparels/sort_price', [ApparelController::class, 'sort_price'])->name('apparel.sort_price');
Route::get('apparels/create', [ApparelController::class, 'create'])->name('apparel.create');
Route::post('apparels/store', [ApparelController::class, 'store'])->name('apparel.store');
Route::get('apparels/edit/{id}', [ApparelController::class, 'edit'])->name('apparel.edit');
Route::post('apparels/update/{id}', [ApparelController::class, 'update'])->name('apparel.update');
Route::get('apparels/destroy/{id}', [ApparelController::class, 'destroy'])->name('apparel.destroy');
//DASHBOARD ANALYTICS
Route::get('apparels/dashboard', [ApparelController::class, 'basic_data'])->name('apparel.basic_data');
//USER MANAGEMENT
Route::get('users', [ApparelController::class, 'users'])->name('apparel.users');
//CLIENT SIDE
Route::get('shop/apparels', [CartController::class, 'index'])->name('shop.index');
Route::get('shop/completed_orders', [CartController::class, 'completed_orders'])->name('shop.completed_orders');
Route::get('shop/sort_type', [CartController::class, 'sort_type'])->name('shop.sort_type');
Route::get('shop/sort_price', [CartController::class, 'sort_price'])->name('shop.sort_price');
Route::get('cart', [CartController::class, 'cart'])->name('shop.cart');
Route::post('shop/apparels/confirmitem', [CartController::class, 'confirmitem'])->name('shop.confirmitem');
Route::get('cart/destroy/{id}', [CartController::class, 'removefromcart'])->name('shop.removefromcart');
Route::get('shop/apparels/addtocart/{id}/{type}', [CartController::class, 'addtocart'])->name('shop.addtocart');

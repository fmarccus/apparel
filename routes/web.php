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

Route::get('apparels', [ApparelController::class, 'index'])->name('apparel.index');
Route::get('apparels/destroy/{id}', [ApparelController::class, 'destroy'])->name('apparel.destroy');
Route::get('apparels/edit/{id}', [ApparelController::class, 'edit'])->name('apparel.edit');
Route::post('apparels/update/{id}', [ApparelController::class, 'update'])->name('apparel.update');
Route::get('apparels/create', [ApparelController::class, 'create'])->name('apparel.create');
Route::post('apparels/store', [ApparelController::class, 'store'])->name('apparel.store');

Route::get('shop/apparels', [CartController::class, 'index'])->name('shop.index');
Route::get('shop/apparels/addtocart/{id}', [CartController::class, 'addtocart'])->name('shop.addtocart');

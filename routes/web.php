<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductsController;

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

Route::get('/', [ProductsController::class, 'index'])->name('products.home');
Route::get('/ver:{id}', [ProductsController::class, 'ver'])->name('products.ver');
Route::get('/edit:{id}', [ProductsController::class, 'edit'])->name('products.edit');
Route::get('/crear', [ProductsController::class, 'create'])->name('products.crear');
Route::get('/products', [ProductsController::class, 'list'])->middleware(['auth'])->name('products.list');

Route::post('/create', [ProductsController::class, 'store'])->name('products.store');
Route::put('/update', [ProductsController::class, 'update'])->name('products.update');
Route::delete('/delete:{id}', [ProductsController::class, 'destroy'])->name('products.delete');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');

Route::get('checkout', [CartController::class, 'checkout'])->middleware(['auth'])->name('checkout');



Route::get('/quienessomos/mision-vision', function (){
    return view('partials.whoweare');
})->name('weare.misionvision');
Route::get('/quienessomos/business-description', function (){
    return view('partials.description');
})->name('weare.description');


require __DIR__.'/auth.php';

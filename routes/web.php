<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
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
Route::get('cat', [ProductController::class, 'index']);
Route::get('category', [ProductController::class, 'category']);
Route::post('store', [ProductController::class, 'store']);
Route::put('edit/{id}', [ProductController::class, 'edit']);
Route::patch('update/{id}', [productController::class, 'update']);
Route::delete('destroy/{id}', [productController::class, 'destroy']);
Route::get('pro', [ProductController::class, 'index2']);
Route::get('product', [ProductController::class, 'product']);
Route::post('store2', [ProductController::class, 'store2']);
Route::put('edit2/{id}', [ProductController::class, 'edit2']);
Route::patch('update2/{id}', [productController::class, 'update2']);
Route::delete('destroy2/{id}', [productController::class, 'destroy2']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

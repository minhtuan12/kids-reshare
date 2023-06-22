<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::view('/products', 'products')->name('products');
Route::post('/products', [\App\Http\Controllers\ProductController::class, 'filter'])
    ->name('products.filter');

Route::get('/products', [\App\Http\Controllers\ProductController::class, 'create'])
    ->name('products');

Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'create'])
    ->name('admin');

Route::get('/products/filter', [\App\Http\Controllers\ProductController::class, 'filter_products'])
    ->name('filter_products');
Route::get('/products', [\App\Http\Controllers\ProductController::class, 'create'])
    ->name('products');

require __DIR__ . '/auth.php';

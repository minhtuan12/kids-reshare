<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('products/{id?}', [\App\Http\Controllers\Api\ApiProductController::class, 'index']);
Route::get('account/{id}', [\App\Http\Controllers\Api\ApiAccountController::class, 'index']);

Route::post('/products', [\App\Http\Controllers\Api\ApiProductController::class, 'filter'])
    ->name('products.filter');
Route::get('/products', [\App\Http\Controllers\Api\ApiProductController::class, 'create'])
    ->name('products');
//
//Route::get('/admin', [\App\Http\Controllers\Api\ApiAdminController::class, 'create'])
//    ->name('admin');

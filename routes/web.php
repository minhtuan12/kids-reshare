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

// // Route::get('/dashboard', function () {
// //     return view('dashboard');
// // })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('index');
// Route::view('/indexx1', 'indexx1')->name('indexx1');

Route::view('/products', 'products')->name('products');

// Route::get('/login', [\App\Http\Controllers\LoginController::class, 'create'])
//     ->name('login');

// Route::post('/login', [\App\Http\Controllers\LoginController::class, 'store'])
//     ->name('login');

// Route::get('/register', [\App\Http\Controllers\RegisterController::class, 'create'])
//     ->name('register');

// Route::post('/register', [\App\Http\Controllers\RegisterController::class, 'store'])
//     ->name('register');

// Route::middleware('guest')->group(function () {
//     Route::get('/login_register', [\App\Http\Controllers\Auth\LogRegController::class, 'create'])
//         ->name('login_register');

//     Route::post('/login_register/register', [\App\Http\Controllers\Auth\LogRegController::class, 'register'])
//         ->name('login_register.register');

//     Route::post('/login_register/login', [\App\Http\Controllers\Auth\LogController::class, 'login'])
//         ->name('login_register.login');

//     // Route::post('/login_register', [\App\Http\Controllers\LoginController::class, 'login'])
//     //     ->name('login_register');

//     // Route::post('/login_register', [\App\Http\Controllers\LogRegController::class, 'login'])
//     //     ->name('login_register.login');
// });

// Route::middleware('auth')->group(function () {
//     Route::get('/upload', [\App\Http\Controllers\UploadController::class, 'create'])
//         ->name('upload');

//     Route::post('/upload', [\App\Http\Controllers\UploadController::class, 'store'])
//         ->name('upload');
// });

Route ::get('/products/filter', [\App\Http\Controllers\ProductController::class , 'filter_products'])
    ->name('filter_products');
Route::get('/products', [\App\Http\Controllers\ProductController::class, 'create'])
    ->name('products');
Route::get('/products/{id}' ,[\App\Http\Controllers\ProductController::class, 'product_detail'] )
    ->name('/products.detail');

// Route::get('/img', [\App\Http\Controllers\ImageController::class, 'create'])
//     ->name('img');

// Route::post('/img', [\App\Http\Controllers\ImageController::class, 'store'])
//     ->name('img');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


require __DIR__ . '/auth.php';

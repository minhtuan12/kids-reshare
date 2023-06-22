<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::middleware('guest')->group(function () {
    Route::get('/login_register', [\App\Http\Controllers\Auth\LogRegController::class, 'create'])
        ->name('login_register');

    Route::post('/login_register/register', [\App\Http\Controllers\Auth\LogRegController::class, 'register'])
        ->name('login_register.register');

    Route::post('/login_register/login', [\App\Http\Controllers\Auth\LogController::class, 'login'])
        ->name('login_register.login');
});

Route::middleware('auth')->group(function () {
    Route::get('/upload', [\App\Http\Controllers\UploadController::class, 'create'])
        ->name('upload');

    Route::post('/upload', [\App\Http\Controllers\UploadController::class, 'store'])
        ->name('upload');

    Route::get('/logout', [\App\Http\Controllers\Auth\LogController::class, 'logout'])
        ->name('logout');


    Route::get('/account/{id}', [\App\Http\Controllers\Auth\AccountController::class, 'userInfo'])
        ->name('account.create');

    Route::post('/account/{id}', [\App\Http\Controllers\Auth\AccountController::class, 'kidInfo'])
        ->name('kidStore');

    Route::patch('/account/{id}/update', [\App\Http\Controllers\Auth\AccountController::class, 'update'])
        ->name('account.update');

    Route::patch('/account/{id}', [\App\Http\Controllers\Auth\AccountController::class, 'updateKidInfo'])
        ->name('updateKid');
});

Route::get('/p_manage', [\App\Http\Controllers\ProductController::class, 'manage_products_return'])
    ->name('p_manage');

Route::delete('/p_manage/delete/{id}', [\App\Http\Controllers\ProductController::class, 'delete_product'])
    ->name('delete_product');

Route::get('/products/{id}', [\App\Http\Controllers\ProductController::class, 'product_detail'])
    ->name('/products.detail');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'create'])
    ->name('admin');
Route::post('/admin', [App\Http\Controllers\AdminController::class, 'login'])
    ->name('admin');
Route::get('/admin/awaiting_approval', [App\Http\Controllers\AdminController::class, 'awaiting_approval_return'])
    ->name('admin.a_approval');
Route::get('/admin/approved', [App\Http\Controllers\AdminController::class, 'approved_return'])
    ->name('admin.approved');

Route::post('/admin/delete/{id}', [\App\Http\Controllers\AdminController::class, 'delete_product_aa'])
    ->name('admin.delete.aa');

Route::delete('/admin/delete/{id}', [\App\Http\Controllers\AdminController::class, 'delete_product'])
    ->name('admin.delete.a');
Route::post('/admin/approve/{id}', [\App\Http\Controllers\AdminController::class, 'approve_product'])
    ->name('admin.approve');



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
    //     Route::get('register', [RegisteredUserController::class, 'create'])
    //                 ->name('register');

    //     Route::post('register', [RegisteredUserController::class, 'store']);

    //     Route::get('login', [AuthenticatedSessionController::class, 'create'])
    //                 ->name('login');

    //     Route::post('login', [AuthenticatedSessionController::class, 'store']);

    //     Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
    //                 ->name('password.request');

    //     Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
    //                 ->name('password.email');

    //     Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
    //                 ->name('password.reset');

    //     Route::post('reset-password', [NewPasswordController::class, 'store'])
    //                 ->name('password.store');
    Route::get('/login_register', [\App\Http\Controllers\Auth\LogRegController::class, 'create'])
        ->name('login_register');

    Route::post('/login_register/register', [\App\Http\Controllers\Auth\LogRegController::class, 'register'])
        ->name('login_register.register');

    Route::post('/login_register/login', [\App\Http\Controllers\Auth\LogController::class, 'login'])
        ->name('login_register.login');
});

Route::middleware('auth')->group(function () {
    //     Route::get('verify-email', EmailVerificationPromptController::class)
    //                 ->name('verification.notice');

    //     Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
    //                 ->middleware(['signed', 'throttle:6,1'])
    //                 ->name('verification.verify');

    //     Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
    //                 ->middleware('throttle:6,1')
    //                 ->name('verification.send');

    //     Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
    //                 ->name('password.confirm');

    //     Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    //     Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    //     Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
    //                 ->name('logout');
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

    Route::patch('/account/{id}', [\App\Http\Controllers\Auth\AccountController::class, 'updateKidInfo'])
        ->name('updateKid');

//    Route::get('/account/{id}/update', [\App\Http\Controllers\Auth\AccountController::class, 'create'])
//        ->name('account.createUpdate');

    Route::patch('/account/{id}/update', [\App\Http\Controllers\Auth\AccountController::class, 'update'])
        ->name('account.update');
});

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'create'])
    ->name('admin');



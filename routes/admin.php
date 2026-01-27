<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ContactFormController;


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
    ])->prefix('admin')->group(function () {
    Route::get('/newsletters', [NewsletterController::class, 'newsletters'])
        ->name('newsletters');
    Route::get('/allContact', [ContactFormController::class, 'allContact'])
        ->name('allContact');
    Route::get('/allUser', [UserController::class, 'allUser'])
        ->name('allUser');
});

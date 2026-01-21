<?php

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
//     return view('welcome');
// });

Route::get('/', function (){
    return view('frontend.index');
});

//jetstream middleware
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    //if middleware is == authenticate(user is loged-in) and if session token is verified --
    // -- then do next else return to login
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
        //let the user retun view to dashboard
    })->name('dashboard');
});

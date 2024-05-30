<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;



Route::get('/signup', [AuthController::class, 'showSignupForm'])->name('signup');
Route::post('/signup', [AuthController::class, 'signup'])->name('signup.post');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::middleware('auth:akun_pengguna')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    
    Route::get('/', function () {
        return view('home');
    });

    Route::get('/arrival', function () {
        return view('arrival');
    });
    
    Route::get('/about', [UserController::class, 'about']);
    
    Route::get('/bestseller', function () {
        return view('bestseller');
    });


    Route::get('/cart', function () {
        return view('cart');
    });

    
    Route::get('/collection', function () {
        return view('collection');
    });

    
    Route::get('/products', function () {
        return view('products');
    });

});






Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

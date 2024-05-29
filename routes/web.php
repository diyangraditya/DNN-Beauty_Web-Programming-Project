<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;


Route::get('/about', [UserController::class, 'about']);

Route::get('/', function () {
    return view('home');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/signup', [AuthController::class, 'showSignupForm'])->name('signup');
Route::post('/signup', [AuthController::class, 'signup'])->name('signup.post');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

// Route::middleware(['auth'])->group(function () {
    //     Route::get('/profile', 'ProfileController@show')->name('profile');
    // });
Route::get('/profile', [ProfileController::class, 'index']);

Route::get('/arrival', function () {
    return view('arrival');
});

Route::get('/bestseller', function () {
    return view('bestseller');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/collection', function () {
    return view('collection');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/products', function () {
    return view('products');
});

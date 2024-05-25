<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/about', [UserController::class, 'about']);

Route::get('/', function () {
    return view('home');
});

Route::get('/sign-up', function () {
    return view('signup');
});

// Route::get('/about', function () {
//     return view('about');
// });

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

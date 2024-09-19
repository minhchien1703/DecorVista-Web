<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/login-register', function () {
    return view('login-register');
});

Route::get('/account', function () {
    return view('account');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/shop-cart', function () {
    return view('shop-cart');
});
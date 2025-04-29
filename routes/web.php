<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home_page', function() {
    return view('pages/home_page');
});

Route::get('/category', function() {
    return view('pages/category');
});

Route::get('/invoice', function() {
    return view('pages/invoice');
});

Route::get('/profile', function() {
    return view('pages/manage_account');
});

Route::get('/about', function() {
    return view('pages/about');
});

Route::get('/contact', function() {
    return view('pages/contact');
});

Route::get('/detail_product', function () {
    return view('pages/detail_product');
});

Route::get('/cart', function () {
    return view('pages/cart');
});

Route::get('/checkout', function () {
    return view('pages/checkout');
});

Route::get('/dashboard', function () {
    return view('pages/dashboard');
});

Route::get('/inbox', function () {
    return view('pages/inbox');
});
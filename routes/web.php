<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\viewAllController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function() {
    return view('pages/register');
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

Route::get('/manage_account', function() {
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

Route::get('/login', function() {
    return view('pages/login');
});

Route::get('/viewAll', function() {
    return view('pages/viewAll');
});

Route::get('/orderList', function() {
    return view('pages/orderList');
});

Route::get('/forgotPassword1', function() {
    return view('pages/forgotPassword1');
});

Route::get('/forgotPassword2', function() {
    return view('pages/forgotPassword2');
});

Route::get('/viewAll', [viewAllController::class, 'tampilProduk']);
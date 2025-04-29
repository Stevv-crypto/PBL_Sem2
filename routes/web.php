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
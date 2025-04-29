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

Route::get('/home_page', function() {
    return view('pages/invoice');
});
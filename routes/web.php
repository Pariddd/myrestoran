<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('customers.menu');
});

Route::get('/cart', function () {
    return view('customers.cart');
})->name('cart');

Route::get('/checkout', function () {
    return view('customers.checkout');
})->name('checkout');

<?php

use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('menu');
});

Route::get('/menu', [MenuController::class, 'index'])->name('menu');

Route::get('/cart', function () {
    return view('customers.cart');
})->name('cart');

Route::get('/checkout', function () {
    return view('customers.checkout');
})->name('checkout');

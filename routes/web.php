<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PartController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\HomeController;


Route::get('toyota/corolla', [PartController::class, 'showParts'])->name('main');
Route::get('add-to-cart/{id}', [PartController::class, 'addToCart'])->name('add_to_cart'); 
Route::get('cart', [PartController::class, 'cart'])->name('cart');
Route::delete('remove-from-cart', [PartController::class, 'remove'])->name('remove_from_cart');
Route::patch('update-cart', [PartController::class, 'update'])->name('update_cart');
Route::post('checkout', [PartController::class, 'checkout'])->name('checkout');




Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('welcome_page');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/search', [PartController::class, 'search'])->name('search');

<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('toyota')->group(function(){
    Route::get('/corolla', function () {
        return view('toyota.corolla');
    })->name('corolla');

    Route::get('/corolla_fws', function () {
        return view('toyota.corolla_fws');
    })->name('corolla_fws');

    Route::get('/corolla_rws', function () {
        return view('toyota.corolla_rws');
    })->name('corolla_rws');

    Route::get('/corolla_fb', function () {
        return view('toyota.corolla_fb');
    })->name('corolla_fb');

    Route::get('/corolla_rb', function () {
        return view('toyota.corolla_rb');
    })->name('corolla_rb');

    Route::get('/corolla_of', function () {
        return view('toyota.corolla_of');
    })->name('corolla_of');

    Route::get('/corolla_bp', function () {
        return view('toyota.corolla_bp');
    })->name('corolla_bp');
});


Route::prefix('honda')->group(function(){
    Route::get('/civic', function () {
        return view('honda.civic');
    })->name('civic');

    Route::get('/civic_fws', function () {
        return view('honda.civic_fws');
    })->name('civic_fws');

    Route::get('/civic_rws', function () {
        return view('honda.civic_rws');
    })->name('civic_rws');

    Route::get('/civic_fb', function () {
        return view('honda.civic_fb');
    })->name('civic_fb');

    Route::get('/civic_rb', function () {
        return view('honda.civic_rb');
    })->name('civic_rb');

    Route::get('/civic_of', function () {
        return view('honda.civic_of');
    })->name('civic_of');

    Route::get('/civic_bp', function () {
        return view('honda.civic_bp');
    })->name('civic_bp');
});


Route::prefix('suzuki')->group(function(){
    Route::get('/swift', function () {
        return view('suzuki.swift');
    })->name('swift');

    Route::get('/swift_fws', function () {
        return view('suzuki.swift_fws');
    })->name('swift_fws');

    Route::get('/swift_rws', function () {
        return view('suzuki.swift_rws');
    })->name('swift_rws');

    Route::get('/swift_fb', function () {
        return view('suzuki.swift_fb');
    })->name('swift_fb');

    Route::get('/swift_rb', function () {
        return view('suzuki.swift_rb');
    })->name('swift_rb');

    Route::get('/swift_of', function () {
        return view('suzuki.swift_of');
    })->name('swift_of');

    Route::get('/swift_bp', function () {
        return view('suzuki.swift_bp');
    })->name('swift_bp');
});

Route::view('/buy', 'buy')->name('buy_it');
// Route::view('/civic', 'civic')->name('civic.car');
// Route::view('/swift', 'swift')->name('swift.car');


<?php

use App\Http\Controllers\urls;
use App\Http\Controllers\users;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/url/{shortUrl}', [urls::class, 'redirect'])->name('redirect');

//USERS
Route::get('/login', [users::class, 'show'])->name('redirect');
Route::get('/register', [users::class, 'redirect'])->name('redirect');

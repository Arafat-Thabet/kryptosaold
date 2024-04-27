<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/comming-soon', function () {
    return view('soon');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::post('/signup', [RegisterController::class, 'store'])->name('signup');

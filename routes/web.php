<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('signup', [UserController::class, 'showSignup']);
Route::post('signup', [UserController::class, 'signup']);
Route::get('login', [UserController::class, 'showLogin']);
Route::post('login', [UserController::class, 'login']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

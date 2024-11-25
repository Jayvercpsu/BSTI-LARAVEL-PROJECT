<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;

// Welcome page route
Route::get('/', function () {
    return view('welcome');
});

// User signup and login routes
Route::get('signup', [UserController::class, 'showSignup']);
Route::post('signup', [UserController::class, 'signup']);
Route::get('login', [UserController::class, 'showLogin'])->name('login');
Route::post('login', [UserController::class, 'login']);

// Dashboard route
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard.index');


Route::middleware(['auth'])->group(function () {
    // Profile page route
    Route::get('/dashboard/profile', [ProfileController::class, 'index'])->name('profile');

    // Route to show the form to change profile picture (GET request)
    Route::get('/dashboard/profile/change-profile-picture', [ProfileController::class, 'changeProfilePicture'])->name('profile.change-picture');

    // Route to handle the profile picture update (POST request)

    Route::post('/dashboard/updateProfile', [ProfileController::class, 'updateProfile'])->name('profile.update');


    // Route to show the form to change password (GET request)
    Route::get('/dashboard/profile/change-password', [ProfileController::class, 'changePassword'])->name('profile.change-password');

    // Route to handle the password change (POST request)
    Route::post('/dashboard/profile/change-password', [ProfileController::class, 'handleChangePassword']);
});

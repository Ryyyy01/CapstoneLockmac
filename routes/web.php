<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Middleware to check role and redirect appropriately
Route::middleware(['auth', 'checkrole'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

// Route for admin dashboard (optional specific route)
Route::get('/admin/dashboard', [DashboardController::class, 'admin'])->middleware(['auth', 'checkrole'])->name('dashboard.admin');

// Route for instructor dashboard (optional specific route)
Route::get('/instructor-dashboard', [DashboardController::class, 'faculty'])->middleware('auth')->name('dashboard.faculty');
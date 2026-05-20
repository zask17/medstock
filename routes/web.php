<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AuthController::class, 'showAuthPage'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

// Lupa Password
Route::get('/forgot-password', [AuthController::class, 'showForgotPasswordPage'])->name('password.request');
Route::post('/forgot-password/process', [AuthController::class, 'processForgotPassword'])->name('password.process');


// ADMIN
Route::get('/admin/dashboard', function () {return view('admin.dashboard');})->name('admin.dashboard');

// PEGWAI GUDANG
Route::get('/gudang/dashboard', function () {return view('gudang.dashboard');})->name('gudang.dashboard');
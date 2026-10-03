<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';

// Public
Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

// Auth
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
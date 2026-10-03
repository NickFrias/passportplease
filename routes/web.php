<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

// Public
Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

// LOGGED-IN
Route::middleware(['auth'])->group(function () {

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // CRUD Products
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    // create
    // store
    Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
    // delete

    // CRUD Materials

    // CRUD Passport

});

require __DIR__.'/auth.php';

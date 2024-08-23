<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\Web\V1\UsersController;
use App\Http\Controllers\Web\V1\ProductsController;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    Route::get('admin/users/', [UsersController::class, 'index'])->name('users.index');

    Route::get('admin/products', [ProductsController::class, 'index'])->name('products.index');
    Route::get('admin/products/create', [ProductsController::class, 'create'])->name('products.create');
    Route::post('admin/products', [ProductsController::class, 'store'])->name('products.store');
    Route::get('admin/products/{id}/edit', [ProductsController::class, 'edit'])->name('products.edit');
});

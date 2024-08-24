<?php

use Inertia\Inertia;
use App\Services\ProductServices;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Request;
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
        $services = new ProductServices();
        return Inertia::render('Dashboard', [
            'products' => $services->Products(Request::input('search')),
            'filters' => Request::only(['search'])
        ]);
    })->name('dashboard');

    Route::group(['middleware' => ['role:administrador']], function(){
        Route::get('admin/users/', [UsersController::class, 'index'])->name('users.index');
        Route::get('admin/products', [ProductsController::class, 'index'])->name('products.index');
        Route::get('admin/products/create', [ProductsController::class, 'create'])->name('products.create');
        Route::post('admin/products', [ProductsController::class, 'store'])->name('products.store');
        Route::get('admin/products/{id}/edit', [ProductsController::class, 'edit'])->name('products.edit');
        Route::patch('admin/products/{id}', [ProductsController::class, 'update'])->name('products.update');
        Route::post('admin/products/destroy/{id}', [ProductsController::class, 'destroy'])->name('products.detroy');
    });

});

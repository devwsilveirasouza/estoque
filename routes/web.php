<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/',             HomeController::class);// ROTA INICIAL PADRÃO

Route::get('users',         [UserController::class, 'index']);
Route::get('users-create',  [UserController::class, 'create']);
Route::post('users-store',  [UserController::class, 'store']);

Route::get('products',      [ProductController::class, 'index'])->name('product-index');
Route::get('product-create',[ProductController::class, 'create'])->name('product-create');
Route::post('product-store', [ProductController::class, 'store'])->name('product-store');
Route::get('product-edit', [ProductController::class, 'edit'])->name('product-edit');

/* Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard'); */

require __DIR__.'/auth.php';

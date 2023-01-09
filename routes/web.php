<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/',             HomeController::class);// ROTA INICIAL PADRÃO

Route::get('users',         [UserController::class, 'index']);
Route::get('users-create',  [UserController::class, 'create']);
Route::post('users-store',  [UserController::class, 'store']);

/* Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard'); */

require __DIR__.'/auth.php';

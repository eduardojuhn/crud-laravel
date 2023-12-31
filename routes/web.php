<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/users', [UsersController::class, 'index'])->name('users.index');
Route::get('/users/create', [UsersController::class, 'create'])->name('users.create');
Route::post('/users', [UsersController::class, 'store'])->name('users.store');
Route::post('/users{user}', [UsersController::class, 'show'])->name('users.show');
Route::post('/users{user}/edit', [UsersController::class, 'edit'])->name('users.edit');
Route::put('/users{user}', [UsersController::class, 'update'])->name('users.update');
Route::delete('/users{user}', [UsersController::class, 'destroy'])->name('users.destroy');





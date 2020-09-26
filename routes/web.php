<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'index']);
Route::post('users', [UserController::class, 'store']);
Route::delete('users/{user}', [UserController::class, 'destroy']);

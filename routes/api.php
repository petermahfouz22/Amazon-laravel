<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use app\Http\Controllers\UserController;
use App\Http\Controllers\UserController;


// Route::middleware('auth:sanctum')->group(function () {
    Route::get('/users', [UserController::class, 'index']);
    // Route::get('/categories', [CategoryController::class, 'index']);
// });

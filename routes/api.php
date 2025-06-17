<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
// Route::post('/login', [AuthController::class, 'login']);


    Route::get('/users', [UserController::class, 'index']);
    Route::get('/products',[ProductController::class , 'index']);
    Route::get('/categories', [CategoryController::class, 'index']);

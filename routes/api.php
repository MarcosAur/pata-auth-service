<?php

use App\Http\Controllers\API\AuthController;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->group(function () {
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/user', [AuthController::class, 'user'])->middleware('auth:sanctum');
    Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
    Route::post('/has-permission', [AuthController::class, 'hasPermission'])->middleware('auth:sanctum');
});


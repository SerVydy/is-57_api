<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::get('logout', [UserController::class, 'logout']);
    Route::get('users', [UserController::class, 'index'])->middleware('is_admin');
});

Route::post('register', [UserController::class, 'register']);

Route::post('login', [UserController::class, 'login']);

Route::get('guest', function () {
    return 'no This auth';
});

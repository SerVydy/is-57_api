<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/', function () {
    return view('welcome');
});

Route::fallback(function(){
    return response()->json([
        "message" => "not found",
    ],404);
});

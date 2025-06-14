<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\BukuController;



Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::get('/buku', [BukuController::class, 'index']);
Route::get('/buku/recommended', [BukuController::class, 'recommended']);
Route::get('/buku/search', [BukuController::class, 'search']);
Route::get('/buku/{id}', [BukuController::class, 'show']);
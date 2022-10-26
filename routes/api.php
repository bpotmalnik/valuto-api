<?php

use App\Http\Controllers\Api\AccountController;
use App\Http\Controllers\Api\TransactionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/accounts', [AccountController::class, 'index']);
Route::get('/accounts/{account}', [AccountController::class, 'show']);

Route::get('/transactions', [TransactionController::class, 'index']);
Route::get('/transactions/{transaction}', [TransactionController::class, 'show']);

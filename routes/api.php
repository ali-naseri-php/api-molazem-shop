<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('product')->group(function () {
     Route::get('', [\App\Http\Controllers\Api\Product\ProductController::class, 'index']);
     Route::get('/{id}', [\App\Http\Controllers\Api\Product\ProductController::class, 'show']);
     Route::post('', [\App\Http\Controllers\Api\Product\ProductController::class, 'update']);
     Route::put('/{id}', [\App\Http\Controllers\Api\Product\ProductController::class, 'update']);
     Route::delete('/{id}', [\App\Http\Controllers\Api\Product\ProductController::class, 'update']);
});

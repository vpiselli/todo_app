<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::apiResource('/tasks', 'App\Http\Controllers\Api\v1\TasksController');
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/health', function () {
    return response()->json([
        'status' => 'ok',
        'service' => 'cloudops-platform-api',
        'timestamp' => now()->toISOString(),
    ]);
});

Route::get('/version', function () {
    return response()->json([
        'app' => config('app.name'),
        'environment' => app()->environment(),
        'version' => '0.1.0',
    ]);
});

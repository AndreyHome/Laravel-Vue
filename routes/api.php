<?php

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware('auth:sanctum')->group(function () {
    Route::get('/loadData', [App\Http\Controllers\HomeController::class, 'index']);
});


// This route only for Frontend Development
if (config('app.env') == 'local') {
    Route::get('/loadData', [App\Http\Controllers\HomeController::class, 'index']);
}


Route::fallback(function () {
    return response()->json([
        'errors' => ['failed' => 'HTTP_NOT_FOUND'],
    ], Response::HTTP_NOT_FOUND);
});
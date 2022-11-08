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

function allRoutes()
{
    Route::get('/loadData', [App\Http\Controllers\HomeController::class, 'index']);
}


Route::middleware('auth:sanctum')->group(function () {
    allRoutes();
});
// It is only for Frontend Development when he is in another domain
if (config('app.env') == 'local') {
    allRoutes();
}


Route::fallback(function () {
    return response()->json([
        'errors' => ['failed' => 'HTTP_NOT_FOUND'],
    ], Response::HTTP_NOT_FOUND);
});
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ArtistController;

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

Route::prefix('artist')->group(function () {
    Route::get('/', [ArtistController::class, 'list']);
    Route::post('/', [ArtistController::class, 'store']);
    Route::get('{id}', [ArtistController::class, 'show']);
    Route::put('{id}', [ArtistController::class, 'update']);
    Route::delete('{id}', [ArtistController::class, 'destroy']);
});

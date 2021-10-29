<?php

use App\Http\Controllers\v1\ConferenceController;
use App\Http\Controllers\v1\TeamController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Response;

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

Route::middleware(['api'])
    ->prefix('v1')
    ->group(function() {
        // Conference routes
        Route::get('/conference', [ConferenceController::class, 'index']);
        Route::get('/conference/divisions', [ConferenceController::class, 'divisions']);
        Route::get('/conference/teams', [ConferenceController::class, 'teams']);

        // Team routes
        Route::get('/team/{id}', [TeamController::class, 'index']);
    });

Route::fallback(function() {
    return response()->json(['message' => 'Not Found'], Response::HTTP_NOT_FOUND);
});

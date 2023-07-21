<?php

use App\Http\Controllers\CameraController;
use App\Http\Controllers\EventController;
use App\Http\Middleware\BearerTokenIsValid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(BearerTokenIsValid::class)->post('cameras', [CameraController::class, 'createCamera']);

Route::middleware(BearerTokenIsValid::class)->post('events', [EventController::class, 'createEvent']);

Route::middleware(BearerTokenIsValid::class)->get('events', [EventController::class, 'getEvents']);

Route::middleware(BearerTokenIsValid::class)->get('events/{id}', [EventController::class, 'getEvent']);

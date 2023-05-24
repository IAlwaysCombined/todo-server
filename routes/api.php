<?php

use App\Http\Controllers\Api\V1\Auth\AuthController;
use App\Http\Controllers\Api\V1\Auth\LogoutController;
use App\Http\Controllers\Api\V1\Auth\RefreshController;
use App\Http\Controllers\Api\V1\Auth\RegistrationController;
use App\Http\Controllers\Api\V1\CardController;
use App\Http\Controllers\Api\V1\TableController;
use App\Http\Controllers\Api\V1\UserController;
use App\Http\Controllers\Api\V1\WorkspaceController;
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

Route::prefix('auth')->group(function (){
    Route::post('/registration', [RegistrationController::class, 'registration']);
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [LogoutController::class, 'logout']);
    Route::post('/refresh', [RefreshController::class, 'refresh']);
});

Route::middleware('auth:api')->group(function() {
    Route::resource('/card', CardController::class);
    //Route::post('/card/add-member', CardController::class);
    Route::resource('/workspace', WorkspaceController::class);
    Route::resource('/table', TableController::class);
    Route::resource('/user', UserController::class);
});

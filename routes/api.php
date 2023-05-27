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

Route::prefix('auth')->group(function () {
    Route::post('/registration', [RegistrationController::class, 'registration']);
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [LogoutController::class, 'logout']);
    Route::post('/refresh', [RefreshController::class, 'refresh']);
});

Route::middleware('auth:api')->group(function () {
    /** Роуты для карточек с тасками */
    Route::prefix('/card')->group(function () {
        //Route::post('/add-member', CardController::class);
    });
    Route::apiResource('/card', CardController::class);


    /** Роуты для рабочих пространств */
    Route::prefix('/workspace')->group(function () {
        Route::get('/titles', [WorkspaceController::class, 'indexTitle']);
    });
    Route::apiResource('/workspace', WorkspaceController::class);


    /** Роуты для таблиц */
    Route::prefix('/table')->group(function () {
        // Сюда добавлять роуты которые не в круд
    });
    Route::apiResource('/table', TableController::class);


    /** Роуты для пользователя */
    Route::prefix('/user')->group(function () {
        // Сюда добавлять роуты которые не в круд
    });
    Route::apiResource('/user', UserController::class);
});

<?php

namespace App\Http\Controllers\Api\V1\Auth\base;

use App\Http\Controllers\Controller;
use App\Services\AuthService;

/**
 * Базовый абстрактный класс для всех контроллеров связанных с авторизацией/регистрацией
 */
abstract class BaseAuthController extends Controller
{
    protected AuthService $authService;

    /**
     * @param AuthService $authService
     */
    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }
}

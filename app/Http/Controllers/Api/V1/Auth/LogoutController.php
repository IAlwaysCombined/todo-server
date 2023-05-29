<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Api\V1\Auth\base\BaseAuthController;
use Illuminate\Http\JsonResponse;

class LogoutController extends BaseAuthController
{
    /**
     * Выход из приложения с очисткой токена
     *
     * @return JsonResponse
     */
    public function logout(): JsonResponse
    {
        return $this->authService->logout();
    }
}

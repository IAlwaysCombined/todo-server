<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Api\V1\Auth\base\BaseAuthController;
use App\Http\Requests\LoginRequest;
use App\Http\Resources\TokenResource;
use Illuminate\Http\JsonResponse;

class AuthController extends BaseAuthController
{
    /**
     * Получение JWT токена
     *
     * @param LoginRequest $request
     * @return TokenResource|JsonResponse
     */
    public function login(LoginRequest $request): JsonResponse|TokenResource
    {
        return $this->authService->auth($request);
    }
}

<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Resources\TokenResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\UnauthorizedException;

class AuthController extends Controller
{
    /**
     * Получение JWT токена
     *
     * @param LoginRequest $request
     * @return TokenResource|JsonResponse
     */
    public function login(LoginRequest $request): JsonResponse|TokenResource
    {
        if (! $token = auth()->attempt($request->all())) {
            throw new UnauthorizedException("Unauthorized", 401);
        }
        return new TokenResource($token);
    }
}

<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Api\V1\Auth\base\BaseAuthController;
use App\Http\Requests\RegistrationRequest;
use App\Http\Resources\TokenResource;

class RegistrationController extends BaseAuthController
{
    /**
     * Регистрация пользователя, валидация полей и выдача токена
     */
    public function registration(RegistrationRequest $request): TokenResource
    {
        return $this->authService->registration($request);
    }
}

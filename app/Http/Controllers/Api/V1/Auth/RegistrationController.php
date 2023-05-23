<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrationRequest;
use App\Http\Resources\TokenResource;
use App\Models\User;

class RegistrationController extends Controller
{
    private User $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Регистрация пользователя, валидация полей и выдача токена
     */
    public function registration(RegistrationRequest $request): TokenResource
    {
        $this->user->fill($request->all());
        $this->user->save();
        $token = auth()->attempt($request->all());
        return new TokenResource($token);
    }
}

<?php

namespace App\Services;

use App\Http\Enum\RoleEnum;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegistrationRequest;
use App\Http\Resources\TokenResource;
use App\Models\Role;
use App\Models\RoleUser;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class AuthService
{
    private User $user;
    private RoleUser $roleUser;
    private Role $role;

    public function __construct(User $user, RoleUser $roleUser, Role $role)
    {
        $this->user = $user;
        $this->roleUser = $roleUser;
        $this->role = $role;
    }

    /**
     * @param LoginRequest $request
     * @return TokenResource
     */
    public function auth(LoginRequest $request): TokenResource
    {
        $token = auth()->attempt($request->all());
        return new TokenResource($token);
    }

    /**
     * @param RegistrationRequest $request
     * @return TokenResource
     */
    public function registration(RegistrationRequest $request): TokenResource
    {
        $this->user->fill($request->all());
        $this->user->save();

        $this->roleUser->fill([
            'user_id' => $this->user->id,
            'role_id' => $this->role->roleByName(RoleEnum::USER->value)->id
        ]);
        $this->roleUser->save();

        $token = auth()->attempt($request->all());
        return new TokenResource($token);
    }

    /**
     * @return JsonResponse
     */
    public function logout(): JsonResponse
    {
        auth()->logout();
        return response()->json(['message' => 'Выход был осуществлен']);
    }

    /**
     * @return TokenResource
     */
    public function refresh(): TokenResource
    {
        $refreshToken = auth()->refresh('', "", "");
        return new TokenResource($refreshToken);
    }
}

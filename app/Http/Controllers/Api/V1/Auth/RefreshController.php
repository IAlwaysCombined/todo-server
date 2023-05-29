<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Api\V1\Auth\base\BaseAuthController;
use App\Http\Resources\TokenResource;

class RefreshController extends BaseAuthController
{
    /**
     * Перевыпуск токена после истечения срока действия авторизационного токена
     *
     * @return TokenResource
     */
    public function refresh(): TokenResource
    {
        return $this->authService->refresh();
    }
}

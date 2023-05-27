<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
use App\Http\Resources\TokenResource;

class RefreshController extends Controller
{
    /**
     * Перевыпуск токена после истечения срока действия авторизационного токена
     *
     * @return TokenResource
     */
    public function refresh(): TokenResource
    {
        return new TokenResource(auth()->refresh('',"", ""));
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;


class TokenResource extends JsonResource
{
    /**
     * Преобразование ресурса в массив
     */
    public function toArray(Request $request): array
    {
        return [
            'token' => $this->resource
        ];
    }
}

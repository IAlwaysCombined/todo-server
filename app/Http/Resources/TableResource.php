<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property int $id
 * @property string $title
 * @property array $cards
 */
class TableResource extends JsonResource
{
    /**
     * Преобразование ресурса в массив
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'cards' => CardResource::collection($this->cards)
        ];
    }
}

<?php

namespace App\Http\Resources;

use App\Http\Requests\CardRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property int $id
 * @property string $title
 * @property string $description
 */
class CardResource extends JsonResource
{
    /**
     * Преобразование ресурса в массив
     */
    public function toArray(CardRequest|Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description
        ];
    }
}

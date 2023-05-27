<?php

namespace App\Http\Resources;

use App\Http\Requests\CardUserRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property int $id
 * @property int $card_id
 * @property int $user_id
 */
class CardUserResource extends JsonResource
{
    /**
     * Преобразование ресурса в массив
     */
    public function toArray(CardUserRequest|Request $request): array
    {
        return [
            'id' => $this->id,
            'card_id' => $this->card_id,
            'user_id' => $this->user_id
        ];
    }
}

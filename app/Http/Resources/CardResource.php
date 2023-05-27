<?php

namespace App\Http\Resources;

use App\Http\Requests\CardRequest;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property int $id
 * @property string $title
 * @property string $description
 * @property Collection $users
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
            'description' => $this->description,
            'members' => MemberResource::collection($this->users)
        ];
    }
}

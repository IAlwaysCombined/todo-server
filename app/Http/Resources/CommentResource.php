<?php

namespace App\Http\Resources;

use App\Http\Requests\CommentRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property int $id
 * @property string $text
 * @property User $user
 */
class CommentResource extends JsonResource
{
    /**
     * Преобразование ресурса в массив
     *
     * @return array<string, mixed>
     */
    public function toArray(CommentRequest|Request $request): array
    {
        return [
            'id' => $this->id,
            'text' => $this->text,
            'user' => new SomeUserResource($this->user)
        ];
    }
}

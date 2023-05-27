<?php

namespace App\Http\Resources;

use App\Http\Requests\BoardRequest;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property string $title
 * @property int $id
 * @property Collection $tables
 */
class BoardResource extends JsonResource
{
    /**
     * Преобразование ресурса в массив
     */
    public function toArray(BoardRequest|Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'tables' => TableResource::collection($this->tables)
        ];
    }
}

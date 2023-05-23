<?php

namespace App\Http\Resources;

use App\Http\Requests\WorkspaceRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property int $id
 * @property string $title
 * @property int $table_id
 * @property array $tables
 */
class WorkspaceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(WorkspaceRequest|Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'tables' => TableResource::collection($this->tables)
        ];
    }
}

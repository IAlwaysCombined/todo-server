<?php

namespace App\Http\Resources;

use App\Http\Requests\WorkspaceRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property int $id
 * @property string $title
 */
class WorkspaceTitleResource extends JsonResource
{
    /**
     * Преобразование ресурса в массив
     */
    public function toArray(WorkspaceRequest|Request $request): array
    {
        return [
            'id'=> $this->id,
            'title'=>$this->title
        ];
    }
}

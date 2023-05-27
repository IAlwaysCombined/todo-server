<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\WorkspaceRequest;
use App\Http\Resources\WorkspaceExtendedResource;
use App\Http\Resources\WorkspaceResource;
use App\Services\WorkspaceService;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

/**
 * Контроллер с рабочими пространствами
 */
class WorkspaceController extends Controller
{
    private WorkspaceService $workspaceService;

    /**
     * Инициализация сервиса
     * @param WorkspaceService $workspaceService
     */
    public function __construct(WorkspaceService $workspaceService)
    {
        $this->workspaceService = $workspaceService;
    }

    /**
     * Список рабочих пространств
     */
    public function index(): AnonymousResourceCollection
    {
        return WorkspaceResource::collection($this->workspaceService->index());
    }

    /**
     * Создание нового столбца
     */
    public function store(WorkspaceRequest $request): WorkspaceResource
    {
        return new WorkspaceResource($this->workspaceService->create($request));
    }

    /**
     * Информация о столбце
     */
    public function show(int $id): WorkspaceResource
    {
        return new WorkspaceResource($this->workspaceService->view($id));
    }

    /**
     * Обновление столбца
     */
    public function update(WorkspaceRequest $request, int $id): WorkspaceResource
    {
        return new WorkspaceResource($this->workspaceService->update($request, $id));
    }

    /**
     * Удаление столбца
     */
    public function destroy(int $id): bool
    {
        return $this->workspaceService->delete($id);
    }

    /**
     * Расширенная информация по рабочим пространствам
     */
    public function extendedIndex(): AnonymousResourceCollection
    {
        return WorkspaceExtendedResource::collection($this->workspaceService->extendedWorkspace());
    }
}

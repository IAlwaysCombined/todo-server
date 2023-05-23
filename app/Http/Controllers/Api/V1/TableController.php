<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\TableRequest;
use App\Http\Resources\TableResource;
use App\Services\TableService;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

/**
 * Контроллер со столбцами
 */
class TableController extends Controller
{
    private TableService $tableService;

    /**
     * Инициализация сервиса
     * @param TableService $tableService
     */
    public function __construct(TableService $tableService)
    {
        $this->tableService = $tableService;
    }

    /**
     * Список столбцов
     */
    public function index(): AnonymousResourceCollection
    {
        return TableResource::collection($this->tableService->index());
    }

    /**
     * Создание нового столбца
     */
    public function store(TableRequest $request): TableResource
    {
        return new TableResource($this->tableService->create($request));
    }

    /**
     * Информация о столбце
     */
    public function show(int $id): TableResource
    {
        return new TableResource($this->tableService->view($id));
    }

    /**
     * Обновление столбца
     */
    public function update(TableRequest $request, int $id): TableResource
    {
        return new TableResource($this->tableService->update($request, $id));
    }

    /**
     * Удаление столбца
     */
    public function destroy(int $id): bool
    {
        return $this->tableService->delete($id);
    }
}

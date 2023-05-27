<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\BoardRequest;
use App\Http\Resources\BoardResource;
use App\Models\Board;
use App\Services\BoardService;
use App\Services\CardService;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

/**
 * Контроллер с досками
 */
class BoardController extends Controller
{
    private BoardService $boardService;

    /**
     * Инициализация сервиса
     * @param BoardService $boardService
     */
    public function __construct(BoardService $boardService)
    {
        $this->boardService = $boardService;
    }

    /**
     * Список досок
     */
    public function index(): AnonymousResourceCollection
    {
        return BoardResource::collection($this->boardService->index());
    }

    /**
     * Создание новой доски
     */
    public function store(BoardRequest $request): BoardResource
    {
        return new BoardResource($this->boardService->create($request));
    }

    /**
     * Информация о доске
     */
    public function show(int $id): BoardResource
    {
        return new BoardResource($this->boardService->view($id));
    }

    /**
     * Обновление задачи
     */
    public function update(BoardRequest $request, int $id): BoardResource
    {
        return new BoardResource($this->boardService->update($request, $id));
    }

    /**
     * Удаление доски
     */
    public function destroy(int $id): bool
    {
        return $this->boardService->delete($id);
    }
}

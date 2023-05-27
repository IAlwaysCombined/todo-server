<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Http\Resources\CommentResource;
use App\Models\Comment;
use App\Services\CommentService;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

/**
 *  Контроллер с комментариями к карточкам задач
 */
class CommentController extends Controller
{
    private CommentService $commentService;

    /**
     * Инициализация сервиса
     * @param CommentService $commentService
     */
    public function __construct(CommentService $commentService)
    {
        $this->commentService = $commentService;
    }

    /**
     * Список комментариев
     */
    public function index(): AnonymousResourceCollection
    {
        return CommentResource::collection($this->commentService->index());
    }

    /**
     * Создание нового комментария
     */
    public function store(CommentRequest $request): CommentResource
    {
        return new CommentResource($this->commentService->create($request));
    }

    /**
     * Подробнее о комментарии
     */
    public function show(int $id): CommentResource
    {
        return new CommentResource($this->commentService->view($id));
    }

    /**
     * Обновление комментария
     */
    public function update(CommentRequest $request, int $id): CommentResource
    {
        return new CommentResource($this->commentService->update($request, $id));
    }

    /**
     * Удаление комментария
     */
    public function destroy(int $id): bool
    {
        return $this->commentService->delete($id);
    }
}
